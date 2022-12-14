
$(document).ready(() => {
    // select drop down
    $('select.admin-student').change(function() {  
        ($(this).find(":selected").val() == 'admin') ? fillforAdminInput() : ($(this).find(":selected").val() == 'student') ? fillforStudentInput() : returnEmpty();
    });

    // Password Show/Hide Toggle
    $('#passwordShowToggle').click(() => {
        if ($('#createAccountForm').find('input[name="password"]').attr('type') === "password") {
            $('form#createAccountForm').find('input[name="password"]').attr('type', 'text')
            $('form#createAccountForm').find('button#passwordShowToggle').css('color', 'green')
        }
        else if ($('#createAccountForm').find('input[name="password"]').attr('type') === "text") {
            $('form#createAccountForm').find('input[name="password"]').attr('type', 'password')
            $('form#createAccountForm').find('button#passwordShowToggle').css('color', 'black')
        }
    })

    // view password  
    $('i.fas.fa-eye').click(() => {
        if ($('#userAuth').find('input[name="login_password"]').attr('type') === "password") {
            $('form#userAuth').find('input[name="login_password"]').attr('type', 'text')
            $('form#userAuth').find('i.fas.fa-eye').css('color', '#4a0691')
        }
        else if ($('#userAuth').find('input[name="login_password"]').attr('type') === "text") {
            $('form#userAuth').find('input[name="login_password"]').attr('type', 'password')
            $('form#userAuth').find('i.fas.fa-eye').css('color', 'black')
        }
    })

    //login auth 
    $('#userAuth').submit((e) => {
        e.preventDefault()
        let data = new FormData(e.currentTarget)
        sendAjax(dis.base_url + 'login/userAuth', data)
            .then(function (res) {
                if (res.response == 200) {
                    Swal.fire({
                        position: 'top-center',
                        icon: 'success',
                        title: res.message,
                        showConfirmButton: false,
                        timer: 1500
                    }).then(function () {
                        window.location = base_url + 'login'
                    })
                }
                else {
                    Swal.fire({
                        position: 'top-center',
                        icon: 'error',
                        title: res.message,
                        showConfirmButton: false,
                        timer: 1500
                    })
                }
            })
    })

    //register
    $('#createAccountForm').submit((e) => {
        e.preventDefault()
        let data = new FormData(e.currentTarget)
        console.log(data)
        sendAjax(dis.base_url + 'login/createAccount', data).then(function (res) {
            if (res.response == 200) {
                Swal.fire({
                    position: 'top-center',
                    icon: 'success',
                    title: res.message,
                    showConfirmButton: false,
                    timer: 1500
                }).then(function () {
                    window.location.reload()
                })
            }
            else {
                Swal.fire({
                    icon: 'error',
                    title: 'Oops credentials',
                    text: res.message,
                })
            }
        })
    })
})

function sendAjax(url, data = {}) {
    let promise = new Promise(function (resolve, reject) {
        $.ajax({
            type: 'POST',
            url: url,
            data: data,
            dataType: 'json',
            async: false,
            processData: false,
            contentType: false,
            beforeSend: function () { },
            success: function (data) {
                resolve(data)
            },
            error: function (xhr) {

            },
        });
    });

    return promise;
}

const fillforAdminInput = ()=>{
    $('#userAuth').find('input[name="login_username"]').val('admin')
    $('#userAuth').find('input[name="login_password"]').val('@dminP@ssword') //ab4b5d68d9cdc1b3904606693b8ffc94
}
const fillforStudentInput = ()=>{
    $('#userAuth').find('input[name="login_username"]').val('student')
    $('#userAuth').find('input[name="login_password"]').val('studentP@ssword') //36fc3908a5feadc28a2f22d3117f6076
}
const returnEmpty = ()=>{  
    $('#userAuth').find('input[name="login_username"]').val('')
    $('#userAuth').find('input[name="login_password"]').val('')
}