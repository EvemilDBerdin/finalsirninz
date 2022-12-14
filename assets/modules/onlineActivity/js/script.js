$(document).ready(function() {
    $('#sampleA').click(function(e) {
        e.preventDefault()
        console.log('test')
        Swal.fire({
            title: 'Do you want to take the sample exam a? ',
            confirmButtonText: 'Confirm',
            showCancelButton: true, 
        })
        .then((result) => {
            if (result.isConfirmed) {
                $.ajax({
                    url: base_url + 'sampleA/insertDateStarted',
                    type: "GET",
                    success: function(res){
                        console.log(res)
                    }
                }).then(function() {
                        window.location = base_url + 'sampleA'
                })
            }
        })
    })

    $('#sampleB').click(function(e) {
        e.preventDefault()
        console.log('test')
        Swal.fire({
            title: 'Do you want to take the sample exam b? ',
            confirmButtonText: 'Confirm',
            showCancelButton: true, 
        })
        .then((result) => {
            if (result.isConfirmed) {
                $.ajax({
                    url: base_url + 'sampleB/insertDateStarted',
                    type: "GET",
                    success: function(res){
                        console.log(res)
                    }
                }).then(function() {
                        window.location = base_url + 'sampleB'
                })
            }
        })
    })

})