<?php include('header.php');?>
<div class="container" style="margin-top:50px;">
<h2>Admin Form</h2><br><br>
<?php echo form_open('admin/Admin_login');?>
<div class="row">
  <div class="col-lg-6">  
  <div class="form-group" >
    <label class="control-label col-sm-2" for="email">Username:</label>
       <?php echo form_input(['class'=>'form-control','placeholder'=>'Enter Username','name'=>'uname']);?> 
    </div>
</div>
<div class="col-lg-6">
<?php echo form_error('uname');?>
</div>
</div>
<div class="row">
<div class="col-lg-6">  
  <div class="form-group" >
    <label class="control-label col-sm-2" for="pwd">Password:</label>
    <?php echo form_password(['class'=>'form-control','placeholder'=>'Enter Password','name'=>'pass']);?> 
    </div>
  </div>
  <div class="col-lg-6">
<?php echo form_error('pass');?>
</div>
</div>
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
     <?php echo form_submit(['type'=>'submit','class'=>'btn btn-default','value'=>'Login']); ?>
     <?php echo form_reset(['type'=>'reset','class'=>'btn btn-primary','value'=>'Reset']); ?>
    </div>
  </div>
</form> 
</div>
<?php include('footer.php');?>