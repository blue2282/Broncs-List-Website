
<div class="container">
<?php 

$formAttributes = array('class'=>'form-signin');
$formEmailAttr = array('class'=>'sr-only');
$formPasswordAttr = array('class'=>'sr-only');
$email = array('class'=>'form-control','name'=>'email', 'placeholder'=>'Email', 'input'=>'text');
$password = array('class'=>'form-control','name'=>'password', 'placeholder'=>'Password', 'input'=>'text');
$loginButton = array('class'=>'btn btn-lg btn-primary btn-block','name'=>'login_submit','value'=>'Login');


echo form_open('site/login_validation',$formAttributes);

echo'<h2 class="form-signin-heading">Please sign in</h2>';
echo validation_errors();

echo '<label for="email" class="sr-only">Email address</label>';

echo form_input($email);
echo "<p>";

echo '<label for="password" class="sr-only">Password</label>';

echo form_password($password);
echo "<p>";
echo "<p>";
echo form_submit($loginButton);
echo "<p>";
echo form_close();
?>

