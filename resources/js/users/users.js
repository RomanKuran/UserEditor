$(document).ready(function () {
    getUsers();

    // event get user by id (edit)
    $(document).on('click', '.js-check-edit-user', function () {
        let user_id = $(this).attr('data-id');
        getUserById(user_id);
    })
    // ----

    // event edit user
    $(document).on('click', '.js-edit-user', function () {
        let user_id = $(this).attr('data-id');

        let first_name = $('.js-form-edit-user input[name=first_name]').val();
        let last_name = $('.js-form-edit-user input[name=last_name]').val();
        let email = $('.js-form-edit-user input[name=email]').val();
        let password = $('.js-form-edit-user input[name=password]').val();

        editUser(user_id, first_name, last_name, email, password);
    })
    // ----
});

// function get users
function getUsers() {
    if (localStorage.token != undefined) {
        $.ajax({
            type: "GET",
            url: route_get_users,
            dataType: 'json',
            data: {
                token: localStorage.token
            },
            success: function (result) {
                formingTableUsers(result.users)
            }
        });
    }
}
// ----

// function of forming the table of users
function formingTableUsers(users) {
    $('.js-table-users tbody .js-user-item').remove();
    let object_user_item = dom_user_item;
    users.forEach(element => {
        object_user_item = dom_user_item;
        object_user_item = $(object_user_item).attr('data-id', element.id);
        object_user_item.find('.js-field-first-name').text(element.first_name);
        object_user_item.find('.js-field-last-name').text(element.last_name);
        object_user_item.find('.js-field-email').text(element.email);
        object_user_item.find('.js-check-edit-user').attr('data-id', element.id);
        $('.js-table-users tbody').append(object_user_item);
    });

    if (localStorage.user_status == 'user') {
        $('.js-table-users .btn-warning').remove();
    }
}
// ----


// function get user by id
function getUserById(user_id) {
    $.ajax({
        type: "GET",
        url: route_get_user_by_id,
        dataType: 'json',
        data: {
            token: localStorage.token,
            userId: user_id
        },
        success: function (result) {
            let user = result.user;
            $('.js-form-edit-user input[name=first_name]').val(user.first_name);
            $('.js-form-edit-user input[name=last_name]').val(user.last_name);
            $('.js-form-edit-user input[name=email]').val(user.email);
            $('#modalEditUser .js-edit-user').attr('data-id', user.id);
        }
    });
}
// ----

// function edit user
function editUser(user_id, first_name, last_name, email, password) {
    $.ajax({
        type: "POST",
        url: route_edit_user,
        dataType: 'json',
        data: {
            token: localStorage.token,
            userId: user_id,
            firstName: first_name,
            lastName: last_name,
            email: email,
            password: password,
        },
        success: function (result) {
            getUsers();
            $('#modalEditUser').modal('toggle');
        }
    });
}
// ----
