<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Admin</title>
	<link rel="stylesheet" type="text/css" href="<?php echo site_url('css/admin.css');?>" />
	<!--[if lt IE 7]><link rel="stylesheet" type="text/css" href="css/lt7.css" media="screen"/><![endif]-->
</head>
<body>
<div class="login">
<h1>Admin Login</h1>
<?php if($this->session->flashdata('flash'))
{
    ?>
<div class="flash">
<?php echo $this->session->flashdata('flash');?>
</div>
<?php 
}?>
<form action="<?php echo site_url('admin/login/login_verify'); ?>" method="post">
<div class="listings">Username<br /><input type="text" name="name" /></div>
<div class="listings">Password <br /><input type="password" name="pass" /></div>
<input type="submit" value="Login" class="btn"/>
</form>
</div>

</body>
</html>