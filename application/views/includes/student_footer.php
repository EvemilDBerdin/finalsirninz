
    <input type="hidden" id="input_base_url" value="<?= base_url(); ?>">   
    <script src="<?= base_url('assets/student_plugin/');?>jquery/jquery.min.js"></script>
    <script src="<?= base_url('assets/student_plugin/');?>bootstrap/js/popper.min.js"></script>
    <script src="<?= base_url('assets/student_plugin/');?>bootstrap/js/bootstrap.min.js"></script>
    <script src="<?= base_url('assets/student_plugin/');?>ps/perfect-scrollbar.jquery.min.js"></script>
    <script src="<?= base_url('assets/student_plugin/');?>js/waves.js"></script>
    <script src="<?= base_url('assets/student_plugin/');?>js/sidebarmenu.js"></script>
    <script src="<?= base_url('assets/student_plugin/');?>js/custom.min.js"></script>
    <script src="<?= base_url('assets/student_plugin/');?>raphael/raphael.min.js"></script>
    <script src="<?= base_url('assets/student_plugin/');?>morrisjs/morris.min.js"></script>
    <script src="<?= base_url('assets/student_plugin/');?>d3/d3.min.js"></script>
    <script src="<?= base_url('assets/student_plugin/');?>c3-master/c3.min.js"></script>
    <script src="<?= base_url('assets/student_plugin/');?>toast-master/js/jquery.toast.js"></script>
    <script src="<?= base_url('assets/student_plugin/');?>js/dashboard1.js"></script>
    <script src="<?= base_url('assets/student_plugin/');?>styleswitcher/jQuery.style.switcher.js"></script>
        
    <script src="//cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css"></script>
    <script src="//cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script>
    var base_url = ""
    base_url = $('#input_base_url').val()
    var dis = this
    function sendAjax(url, data = {}) {
        var promise = new Promise(function(resolve, reject) {
            $.ajax({
                type: 'POST',
                url: url,
                data: data,
                dataType: 'json',
                async: false,
                processData: false,
                contentType: false,
                beforeSend: function() {},
                success: function(data) {
                    resolve(data)
                },
                error: function(xhr) {

                },
            });
        });

        return promise;
    }
    $(document).ready(function() {
        let divtest = document.getElementById('divtestcount')
        let count = 0
        let data = new FormData();
        data.append('start', 1)

        $('#sample1').click(function(e) {
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

        // ============================================================================================

        $('#online_activity').click(function() {
            window.location = base_url + 'onlineActivity'
        })

        $('#dashboard').click(function() {
            window.location = base_url + 'student'
        })
        // ============================================================================================

        $('#sample2').click(function(e) {
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

        $('#student_logout').click((e) => {
            console.log('test')
            base_url = $('#input_base_url').val()
            e.preventDefault()
            Swal.fire({
                title: 'Do you want to logout?',
                showCancelButton: true,
                confirmButtonText: 'Confirm',
            }).then((result) => {
                if (result.isConfirmed) {
                    sendAjax(base_url + 'login/logout').then((res) => {
                        Swal.fire({
                            position: 'top-center',
                            icon: 'success',
                            title: res.message,
                            showConfirmButton: false,
                            timer: 1500
                        }).then(function() {
                            window.location = base_url + 'login'
                        })
                    })
                }
            })
        })
    })
</script>

<?php
__load_assets__($__assets__, 'js');
?>
</body>

</html>