<!-- Jquery Core Js -->
<script src="<?= base_url();?>assets/plugins/jquery/jquery.min.js"></script>

<!-- Bootstrap Core Js -->
<script src="<?= base_url();?>assets/plugins/bootstrap/js/bootstrap.js"></script>

<!-- Select Plugin Js -->
<script src="<?= base_url();?>assets/plugins/bootstrap-select/js/bootstrap-select.js"></script>

<!-- Slimscroll Plugin Js -->
<script src="<?= base_url();?>assets/plugins/jquery-slimscroll/jquery.slimscroll.js"></script>

<!-- Waves Effect Plugin Js -->
<script src="<?= base_url();?>assets/plugins/node-waves/waves.js"></script>

<!-- Jquery CountTo Plugin Js -->
<script src="<?= base_url();?>assets/plugins/jquery-countto/jquery.countTo.js"></script>

<!-- Morris Plugin Js -->
<script src="<?= base_url();?>assets/plugins/raphael/raphael.min.js"></script>
<script src="<?= base_url();?>assets/plugins/morrisjs/morris.js"></script>

 <!-- Autosize Plugin Js -->
 <script src="<?= base_url();?>assets/plugins/autosize/autosize.js"></script>

<!-- Moment Plugin Js -->
<script src="<?= base_url();?>assets/plugins/momentjs/moment.js"></script>

<!-- Bootstrap Datepicker Plugin Js -->
<script src="<?= base_url();?>assets/plugins/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>

<!-- Jquery DataTable Plugin Js -->
<script src="<?= base_url();?>assets/plugins/jquery-datatable/jquery.dataTables.js"></script>
<script src="<?= base_url();?>assets/plugins/jquery-datatable/skin/bootstrap/js/dataTables.bootstrap.js"></script>

<!-- ChartJs -->
<script src="<?= base_url();?>assets/plugins/chartjs/Chart.bundle.js"></script>


<script type="text/javascript">
    $(document).ready(function() {
        $('<?= $sidebar; ?>').addClass("active");
        $('<?= $sidebar1; ?>').addClass("active");
    });
</script>


<!-- Sparkline Chart Plugin Js -->
<script src="<?= base_url();?>assets/plugins/jquery-sparkline/jquery.sparkline.js"></script>

<!-- Custom Js -->
<script src="<?= base_url();?>assets/js/admin.js"></script>
<script src="<?= base_url()?>assets/js/pages/tables/jquery-datatable.js"></script>
<script src="<?= base_url();?>assets/js/pages/index.js"></script>
<script src="<?= base_url();?>assets/js/pages/forms/basic-form-elements.js"></script>
<script src="<?= base_url();?>assets/js/pages/forms/form-validation.js"></script>

<!-- Demo Js -->
<script src="<?= base_url();?>assets/js/demo.js"></script>
<script type="text/javascript">
    $(document).ready(function(){
        $('#kecamatan').change(function(){
            var nama_kecamatan=$(this).val();
            $.ajax({
                url : "<?= base_url();?>absen/getSekolahKecamatan",
                // method : "POST",
                type : "POST",
                data : {kecamatan: nama_kecamatan},
                async : false,
                dataType : 'json',
                success: function(response){
                    var html = '';
                    var i;
                    for(i=0; i<data.length; i++){
                        html += '<option value="'+data[i].nama_sekolah+'">'+data[i].nama_sekolah+'</option>';
                    }
                    $('.sekolah').html(html);
                        
                }
            });
        });
    });
</script>
</body>

</html>