<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Admin</title>
	<link rel="stylesheet" type="text/css" href="<?php echo site_url('css/admin.css');?>" />
	<!--[if lt IE 7]><link rel="stylesheet" type="text/css" href="css/lt7.css" media="screen"/><![endif]-->
     <script src="http://code.jquery.com/jquery-1.10.1.min.js" type="text/javascript"></script>
    <script type="text/javascript" src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.9/jquery.validate.js"></script>
    <script type="text/javascript" src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.9/jquery.validate.min.js"></script>
    <script language='javascript'>
  $(document).ready(function(){
    $(".edit").validate();
	});
</script>
</head>
<body>
<div class="header">
<div class="headerin">
<ul class="left nav">
    <li class="active"><a href="<?php echo site_url('pages');?>">Pages</a></li>
    <li><a href="<?php echo site_url('account');?>">Setting</a></li>
    <li><a href="">Portfolio</a></li>
    <li><a href="<?php echo site_url('logout')?>">Logout</a></li>
    <li><a href=""></a></li>
</ul>
<div class="right admintop"><strong>NIEF ADMIN PANEL</strong></div>
<div class="clear"></div>
</div>
</div>
<div class="content">
<?php if($this->session->flashdata('flash'))
{
    ?>
<div class="flash">
<?php echo $this->session->flashdata('flash');?>
</div>
<?php 
}?>
