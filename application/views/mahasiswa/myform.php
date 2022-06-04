<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Welcome to CodeIgniter</title>

	<style type="text/css">

	::selection { background-color: #E13300; color: white; }
	::-moz-selection { background-color: #E13300; color: white; }

	body {
		background-color: #fff;
		margin: 40px;
		font: 13px/20px normal Helvetica, Arial, sans-serif;
		color: #4F5155;
	}

	a {
		color: #003399;
		background-color: transparent;
		font-weight: normal;
	}

	h1 {
		color: #444;
		background-color: transparent;
		border-bottom: 1px solid #D0D0D0;
		font-weight: normal;
		margin: 0 0 14px 0;
		padding: 14px 15px 10px 15px;
	}

	code {
		font-family: Consolas, Monaco, Courier New, Courier, monospace;
		font-size: 12px;
		background-color: #f9f9f9;
		border: 1px solid #D0D0D0;
		color: #002166;
		display: block;
		margin: 14px 0 14px 0;
		padding: 12px 10px 12px 10px;
	}

	#body {
		margin: 0 15px 0 15px;
	}

	p.footer {
		text-align: right;
		font-size: 11px;
		border-top: 1px solid #D0D0D0;
		line-height: 32px;
		padding: 0 10px 0 10px;
		margin: 20px 0 0 0;
	}

	.form-control{
		padding:4px;
		width:100%;
	}

	#container {
		width : 50%;
		padding : 10px;
		margin: 10px;
		margin-left: 350px;
		border: 1px solid #D0D0D0;
		box-shadow: 0 0 8px #D0D0D0;
	}
	</style>
</head>
<body>
	<h1 align='center'>Input Form</h1>
	<div id="container">
		<div id="body">
			<?php 
			echo validation_errors(); 
			echo form_open('mahasiswa/index'); 
			
			echo form_label('Username') .'</br>'; 
			$input1 = array(
				'name' => 'name',
				'id' => 'name_id',
				'placeholder' => 'Enter Your Name',
				'class'=>'form-control'
			); 
			echo form_input($input1).'</br>'.'</br>';

			echo form_label('Email Address').'</br>';
			$input2 = array(
				'name' => 'email',
				'id' => 'email_id',
				'placeholder' => 'Enter Your Email',
				'class'=>'form-control'
			); 
			echo form_input($input2).'</br>' .'</br>';

			echo form_label('Password').'</br>';
			$input0 = array(
				'name' => 'password',
				'id' => 'pass_id',
				'placeholder' => 'Enter Your Password',
				'class'=>'form-control'
			); 
    		echo form_password($input0).'</br>' .'</br>';

			echo form_label('Password Confirmation') .'</br>';
			$inputs = array(
				'name' => 'passconf',
				'id' => 'passs_id',
				'placeholder' => 'Confirm your Password',
				'class'=>'form-control'
				); 
			echo form_password($inputs).'</br>' .'</br>';

			echo form_label('Alamat').'</br>';
			$input3 = array(
				'name' => 'alamat',
				'rows' => '5',
				'cols' => '30',
				'value' => set_value('alamat'),
				'id' => 'area_id',
				'placeholder' => 'Enter Your Address',
				'class'=>'form-control'
				); 
			echo form_textarea($input3).'</br>' .'</br>';

			echo form_label('Program Studi').'</br>';
			$input4 = array(
				'Choose' => 'Choose',
				'Teknik Informatika' => 'Teknik Informatika',
				'Kedokteran' => 'Kedokteran',
				'Teknik Industri' => 'Teknik Industri',
				'Matematika' => 'Matematika'
			);
			echo form_dropdown('prodi',$input4,'Choose',"class='form-control'").'</br>' .'</br>';


			$input5 = array(
				'name' => 'gender',
				'value' => 'pria',
				'checked' => TRUE,
			); 

			$input6 = array(
				'name' => 'gender',
				'value' => 'wanita',
			);
			echo form_label('Jenis Kelamin').'</br>';
			echo form_label(form_radio($input5)."Pria").'</br>';
			echo form_label(form_radio($input6)."Wanita").'</br>' .'</br>';

			echo form_label('User License Agreement').'</br>';
			$input7 = array(
				'name' => 'eula',
				'value' => 'acc1',
			); 
			$input8 = array(
				'name' => 'eula',
				'value' => 'acc2',
			);
			echo form_label(form_checkbox($input7)."I accept the privacy policy").'</br>';
			echo form_label(form_checkbox($input8)."I accept your love").'</br>'.'</br>';

			echo form_submit('submit','Submit',"class='btn btn-primary'");

			echo form_close();
			
			
			
			?>
		</div>
	</div>
	
</form>

</body>
</html>