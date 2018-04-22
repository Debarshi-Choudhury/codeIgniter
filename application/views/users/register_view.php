

<h2>Register form</h2>

<?php $attributes=array('id'=>'register_form','class'=>"form-horizontal") ?>
<?php if($this->session->flashdata('errors')): ?>
<?php  echo $this->session->flashdata('errors');?>
<?php endif; ?>
<?php echo form_open('users/register',$attributes);?>

<div class="form-group">
<?php echo form_label('First Name'); ?>
<?php 
	$data=array(
		'class'=>'form-control',
		'name'=>'first_name',
		'placeholder'=>'Enter First name'
	);
 ?>
<?php echo form_input($data); ?>
</div>

<div class="form-group">
<?php echo form_label('Last Name'); ?>
<?php 
	$data=array(
		'class'=>'form-control',
		'name'=>'last_name',
		'placeholder'=>'Enter Last name'
	);
 ?>
<?php echo form_input($data); ?>
</div>

<div class="form-group">
<?php echo form_label('Email'); ?>
<?php 
	$data=array(
		'class'=>'form-control',
		'name'=>'email',
		'placeholder'=>'Enter Email'
	);
 ?>
<?php echo form_input($data); ?>
</div>

<div class="form-group">
<?php echo form_label('Username'); ?>
<?php 
	$data=array(
		'class'=>'form-control',
		'name'=>'username',
		'placeholder'=>'Enter username'
	);
 ?>
<?php echo form_input($data); ?>
</div>

<div class="form-group">
<?php echo form_label('Password'); ?>
<?php 
	$data=array(
		'class'=>'form-control',
		'name'=>'password',
		'placeholder'=>'Enter password'
	);
 ?>
<?php echo form_password($data); ?>

</div>

<div class="form-group">
<?php echo form_label('Confirm Password'); ?>
<?php 
	$data=array(
		'class'=>'form-control',
		'name'=>'confirm_password',
		'placeholder'=>'Confirm password'
	);
 ?>
<?php echo form_password($data); ?>

</div>

<div class="form-group">
<?php 
	$data=array(
		'class'=>'btn btn-primary',
		'name'=>'submit',
		'value'=>'Register'
	);
 ?>
<?php echo form_submit($data); ?>

</div>


<?php echo form_close();?>
