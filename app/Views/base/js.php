
<!-- General JS Scripts -->
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.nicescroll/3.7.6/jquery.nicescroll.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>
<script src="<?php echo base_url(AJ.'stisla.js');?>"></script>

<!-- JS Libraies -->
<!-- <script src="<?php echo base_url(MODULE.'simpleweather/jquery.simpleWeather.min.js');?>"></script> -->
<script src="<?php echo base_url(MODULE.'chart.js/dist/Chart.min.js');?>"></script>
<script src="<?php echo base_url(MODULE.'jqvmap/dist/jquery.vmap.min.js');?>"></script>
<script src="<?php echo base_url(MODULE.'jqvmap/dist/maps/jquery.vmap.world.js');?>"></script>
<script src="<?php echo base_url(MODULE.'summernote/dist/summernote-bs4.js');?>"></script>
<script src="<?php echo base_url(MODULE.'chocolat/dist/js/jquery.chocolat.min.js');?>"></script>

<!-- Template JS File -->
<script src="<?php echo base_url(AJ.'scripts.js');?>"></script>
<script src="<?php echo base_url(AJ.'custom.js');?>"></script>

<!-- Page Specific JS File -->
<!-- <script src="<?php echo base_url(AJ.'page/index-0.js');?>"></script> -->
<?= $this->renderSection('js')?>