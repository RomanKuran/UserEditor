$(document).ready(function () {
    if(localStorage.token != undefined){
        checkStatusUser();
    }

    // event registration user
    $(document).on('click', '.js-register', function () {
        let registration_data = {};
        let field_name = null;
        let value = null;

        $('.js-form-register-user.js-form-fields input').each(function (index) {
            field_name = $(this).attr('name');
            value = $(this).val();
            registration_data[field_name] = value;
        });

        registrationUser(registration_data);
    })
    // ----

    // event login user
    $(document).on('click', '.js-login', function () {
        let login_data = {};
        let field_name = null;
        let value = null;

        $('.js-form-login-user.js-form-fields input').each(function (index) {
            field_name = $(this).attr('name');
            value = $(this).val();
            login_data[field_name] = value;
        });

        loginUser(login_data);
    })
    // ----

    // event logout
    $(document).on('click', '.js-logout', function () {
        logoutUser();
    })
    // ----
})

// function registration user
function registrationUser(registration_data) {
    $.ajax({
        type: "POST",
        url: route_registration,
        dataType: 'json',
        data: registration_data,
        success: function (result) {
            $('#modalRegister').modal('toggle');
            alert('Please log in!');
        }
    });
}
// ----

// function login user
function loginUser(registration_data) {
    $.ajax({
        type: "POST",
        url: route_login,
        dataType: 'json',
        data: registration_data,
        success: function (result) {
            localStorage.token = result.token;
            localStorage.user_status = result.user_status;
            getUsers();
            checkStatusUser();
            // $('.js-buttons-auth-guest').addClass('d-none');
            // $('.js-buttons-auth-login-user').removeClass('d-none');
            $('#modalLogin').modal('toggle');
        }
    });
}
// ----

// function check statys user
function checkStatusUser() {
    $.ajax({
        type: "GET",
        url: route_get_user,
        dataType: 'json',
        data: {
            token: localStorage.token
        },
        success: function (result) {
            // console.log(localStorage.token != undefined, (result.status == "Authorization Token not found" || result.status == "Token is Expired"));
            if (result.status == "Authorization Token not found" || result.status == "Token is Expired") {
                localStorage.clear();
                document.location.reload();
            } else {
                $('.js-buttons-auth-guest').addClass('d-none');
                $('.js-buttons-auth-login-user').removeClass('d-none');
                if(localStorage.user_status == 'admin'){
                    $('.js-container-create-user').removeClass('d-none');
                }
            }
        }
    });
}
// ----

// function logout user
function logoutUser() {
    $.ajax({
        type: "GET",
        url: route_logout,
        dataType: 'json',
        data: {
            token: localStorage.token
        },
        success: function (result) {
            localStorage.clear();
            document.location.reload();
            checkStatusUser()
        }
    });
}
// ----
