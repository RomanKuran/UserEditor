$(document).ready(function () {
    getUsers();
    
});

// function get users
function getUsers() {
    if(localStorage.token != undefined){
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
function formingTableUsers(users){
    let object_user_item = dom_user_item;
    users.forEach(element => {
        object_user_item = dom_user_item;
        object_user_item = $(object_user_item).attr('data-id', element.id);
        object_user_item.find('.js-field-first-name').text(element.first_name);
        object_user_item.find('.js-field-last-name').text(element.last_name);
        object_user_item.find('.js-field-email').text(element.email);
        $('.js-table-users tbody').append(object_user_item);
    });

    if(localStorage.user_status == 'user'){
        $('.js-table-users .btn-warning').remove();
    }
}
// ----
