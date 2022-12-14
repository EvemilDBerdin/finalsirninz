const dis = this
dis.base_url = document.getElementById('input_base_url').value
var count = 0

$(document).ready(() => {
    var count = 0
    var temp_url = dis.base_url + 'login/logout'

    //logout 
    $('#student_logout').click((e) => {
        e.preventDefault()
        Swal.fire({
            title: 'Do you want to logout?',
            showCancelButton: true,
            confirmButtonText: 'Confirm',
        }).then((result) => {
            if (result.isConfirmed) {
                this.sendAjax(temp_url).then(function (res) {
                    Swal.fire(
                        'Authenticated!',
                        res.message + '.',
                        'success'
                    ).then(function () {
                        window.location = base_url + 'login'
                    })
                })
            }
        })
    })

})
