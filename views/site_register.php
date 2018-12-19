<?php 

$formAttributes = array('class'=>'form-signin');
$formEmailAttr = array('class'=>'sr-only');
$formPasswordAttr = array('class'=>'sr-only');
echo form_open('site/signup_validation',$formAttributes);

echo validation_errors();

echo "<label>Email address:</label>";

echo form_input('email',$this->input->post('email'));
echo "<p>";

echo "<label>";
echo "Password: </label>";

echo form_password('password');

echo "<label>";
echo " Confirm Password: </label>";
echo form_password('cpassword');

echo "<p>";
echo form_submit('register_submit','Register');
echo "<p>";
 
echo form_close();
?>
