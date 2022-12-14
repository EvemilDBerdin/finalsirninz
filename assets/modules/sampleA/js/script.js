$(document).ready(function () {
    $('#sampleAform').submit(function (e) {
        e.preventDefault()
        let data = new FormData(e.currentTarget)
        console.log(data)
        Swal.fire({
            title: 'Submit Answer?',
            showCancelButton: true,
            confirmButtonText: 'Confirm',
        }).then((result) => {
            if (result.isConfirmed) {
                console.log(dis.base_url+ 'sampleA/sampleAform')
                $.ajax({
                    url: dis.base_url+ 'sampleA/sampleAform',
                    type: 'POST',
                    data: data,
                    dataType: 'json',
                    async: false,
                    processData: false,
                    contentType: false,
                    beforeSend: function () { },
                    success: function (res) {
                        Swal.fire({
                            position: 'top-center',
                            icon: 'success',
                            title: res.message,
                            showConfirmButton: false,
                            timer: 1500
                          }).then(()=>{
                            window.location.href = dis.base_url + 'exam_results'
                          })
                    },
                    error: function (xhr) {

                    },
                })
            }
        })

    })



})

