</div>
<footer class="footer">
    <span class="text-dark font-bold">©</span> Copyright 2022 Student Exam System <a class="font-bold font-italic" href="https://www.proweaver.com/">Proweaver</a> Demo Purposes only. All Rights Reserved
</footer>
</div>
</div>

<input type="hidden" id="input_base_url" value="<?= base_url(); ?>">
<script src="<?= base_url('assets/'); ?>node_modules/jquery/jquery.min.js"></script>
<script src="<?= base_url('assets/'); ?>node_modules/bootstrap/js/popper.min.js"></script>
<script src="<?= base_url('assets/'); ?>node_modules/bootstrap/js/bootstrap.min.js"></script>
<script src="<?= base_url('assets/'); ?>node_modules/ps/perfect-scrollbar.jquery.min.js"></script>
<script src="<?= base_url('assets/'); ?>js/waves.js"></script>
<script src="<?= base_url('assets/'); ?>js/sidebarmenu.js"></script>
<script src="<?= base_url('assets/'); ?>js/custom.min.js"></script>
<script src="<?= base_url('assets/'); ?>node_modules/d3/d3.min.js"></script>
<script src="<?= base_url('assets/'); ?>node_modules/c3-master/c3.min.js"></script>
<script src="<?= base_url('assets/'); ?>node_modules/toast-master/js/jquery.toast.js"></script>
<script src="<?= base_url('assets/'); ?>node_modules/styleswitcher/jQuery.style.switcher.js"></script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/parsley.js/2.9.2/parsley.min.js" integrity="sha512-eyHL1atYNycXNXZMDndxrDhNAegH2BDWt1TmkXJPoGf1WLlNYt08CSjkqF5lnCRmdm3IrkHid8s2jOUY4NIZVQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>


<!-- This is data table -->
<script src="<?= base_url('assets/'); ?>node_modules/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="<?= base_url('assets/'); ?>node_modules/datatables.net-bs4/js/dataTables.responsive.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

<script>
    var dis = this
    var base_url = $('#input_base_url').val()

    $('#admin_logout').click((e) => {
        e.preventDefault()
        Swal.fire({
            title: 'Do you want to logout?',
            showCancelButton: true,
            confirmButtonText: 'Confirm',
        }).then((result) => {
            if (result.isConfirmed) {
                $.ajax({
                    type: 'POST',
                    url: base_url + 'login/logout',
                    dataType: 'json',
                    async: false,
                    processData: false,
                    contentType: false,
                    beforeSend: function() {},
                    success: function(res) {
                        Swal.fire({
                            position: 'top-center',
                            icon: 'success',
                            title: res.message,
                            showConfirmButton: false,
                            timer: 1500
                        }).then(function() {
                            window.location = base_url + 'login'
                        })
                    },
                    error: function(err) {
                        console.log(err)
                    },
                });
            }
        })
    })

    $(document).ready(() => {

        var url = `${window.location}`;
        var arr_url = url.split("/");

        if (arr_url[6] == undefined) {} else {
            $.ajax({
                type: 'POST',
                url: dis.base_url + 'admin/adminNotify/' + arr_url[6],
                dataType: 'json',
                async: false,
                beforeSend: function() {},
                success: function(res) {
                    console.log(res)
                },
                error: function(err) {
                    console.log(err)
                },
            });
        }
    })
    //.addClass('tcenter')
    if ($(window).innerWidth() > 355 && $(window).innerWidth() <= 767) $('#contactAdmin').find('.row').children().css('background-color', 'black')
</script>

<?php
__load_assets__($__assets__, 'js');
?>
</body>

</html>