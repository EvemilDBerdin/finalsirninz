
</div>
<input type="hidden" id="input_base_url" value="<?= base_url(); ?>">

<!-- All Jquery -->
<!-- ============================================================== -->
<script src="<?= base_url('assets/'); ?>node_modules/jquery/jquery.min.js"></script>
<!-- Bootstrap popper Core JavaScript -->
<script src="<?= base_url('assets/'); ?>node_modules/bootstrap/js/popper.min.js"></script>
<script src="<?= base_url('assets/'); ?>node_modules/bootstrap/js/bootstrap.min.js"></script>
<!-- slimscrollbar scrollbar JavaScript -->
<script src="<?= base_url('assets/'); ?>node_modules/ps/perfect-scrollbar.jquery.min.js"></script>
<!--Wave Effects -->
<script src="<?= base_url('assets/'); ?>js/waves.js"></script>
<!--Menu sidebar -->
<script src="<?= base_url('assets/'); ?>js/sidebarmenu.js"></script>
<!--Custom JavaScript -->
<script src="<?= base_url('assets/'); ?>js/custom.min.js"></script>
<!-- ============================================================== -->
<!-- This page plugins -->
<!-- ============================================================== -->

<!--c3 JavaScript -->
<script src="<?= base_url('assets/'); ?>node_modules/d3/d3.min.js"></script>
<script src="<?= base_url('assets/'); ?>node_modules/c3-master/c3.min.js"></script>
<!-- Popup message jquery -->
<script src="<?= base_url('assets/'); ?>node_modules/toast-master/js/jquery.toast.js"></script>

<!-- ============================================================== -->
<!-- Style switcher -->
<!-- ============================================================== -->
<script src="<?= base_url('assets/'); ?>node_modules/styleswitcher/jQuery.style.switcher.js"></script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/parsley.js/2.9.2/parsley.min.js" integrity="sha512-eyHL1atYNycXNXZMDndxrDhNAegH2BDWt1TmkXJPoGf1WLlNYt08CSjkqF5lnCRmdm3IrkHid8s2jOUY4NIZVQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script>
    var dis = this
    var base_url = document.getElementById('input_base_url').value 
</script>
<?php
__load_assets__($__assets__, 'js');
?>

</body>

</html>