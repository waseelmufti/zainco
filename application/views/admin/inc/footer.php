<footer class="main-footer">
  <strong>Copyright &copy; <?= date('Y') ?> <a href="#"></a>.</strong> All rights
  reserved.
</footer>

</div>
<!-- ./wrapper -->

<!-- jQuery 2.2.3 -->
<script src="<?php echo base_url(); ?>assets/js/jquery.min.js"></script>
<!-- Bootstrap 3.3.6 -->
<script src="<?php echo base_url(); ?>assets/admin/js/bootstrap.min.js"></script>
<!-- SlimScroll -->
<script src="<?php echo base_url(); ?>assets/admin/js/plugins/slimScroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="<?php echo base_url(); ?>assets/admin/js/plugins/fastclick/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url(); ?>assets/admin/js/app.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php echo base_url(); ?>assets/admin/js/demo.js"></script>
<script
src="<?php echo base_url(); ?>assets/admin/js/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
<script type="text/javascript">
// this function add/remove dynamic fields
    (function($){
      $.fn.addfield = function(field_container, field_name){
      this.on('click', function(e){
        e.preventDefault();
        var field_holder = $(field_container);
        var field = '<div class="input-group" style="margin-top:10px;">\
        <input class="form-control" type="text" name="'+field_name+'[]">\
        <span class="input-group-btn">\
        <button type="button" class="btn btn-danger btn-flat remove">X</button>\
        </span>\
        </div>';
        $(field).appendTo(field_holder);
        $('.remove').removefield();
      });
      return this;
    };
  $.fn.removefield = function(){
    this.on('click', function(e){
      e.preventDefault();
      $(this).parents('.input-group').remove();

    });
  };

})(jQuery);
</script>
<script type="text/javascript">
$(document).ready(function(){
  $('#interior').addfield('div.interior', 'interior');
  $('#comfort').addfield('div.comfort', 'comfort');
  $('#exterior').addfield('div.exterior', 'exterior');
  $('#safety').addfield('div.safety', 'safety');
  $('#other').addfield('div.other', 'other');
  //bootstrap WYSIHTML5 - text editor
  $(".textarea").wysihtml5();
    
    $(".img_rmv").on('click', function(e){
        e.preventDefault();
 
        var parent = $(this).parent(); 
        var super_parent = parent.parent();
        $.ajax({
            url: "<?php echo site_url('admin/dashboard/car/img-delete'); ?>",
            data:{
              "car_id": $(this).parent().find('input.car_id').val(),
              "img_id": $(this).parent().find('input.img_id').val(),
              "img_name": $(this).parent().find('input.img_name').val(),
            },
               
            success: function(result){
                $('#msg').html('<div class="alert alert-danger">Photo is deleted Successfuly</div>');
            super_parent.remove();
                console.log(result);
                
        },
            error: function(result){
                $('#msg').html('<div class="alert alert-danger">Photo is not deleted, there is some error</div>');
                console.log(result);
            }
        });
    });
});

</script>
</body>
</html>
