<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Creative Studio by RocketGraphs.net and GraphicsFuel.com</title>
	<link rel="stylesheet" type="text/css" href="<?php echo site_url('css/all.css');?>" />
	<!--[if lt IE 7]><link rel="stylesheet" type="text/css" href="css/lt7.css" media="screen"/><![endif]-->
     <script src="http://code.jquery.com/jquery-1.10.1.min.js" type="text/javascript"></script>
    <script type="text/javascript" src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.9/jquery.validate.js"></script>
    <script type="text/javascript" src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.9/jquery.validate.min.js"></script>
    <script language='javascript'>
  $(document).ready(function(){
    $("#contact").validate();
	});
</script>
</head>
<body>
	<div id="wrapper">
		<div id="header">
			<!--<div class="mail"><a href="mailto:name@yourwebsite.com">name@yourwebsite.com</a></div>-->
			<div class="row">
				<ul id="nav">
					<li class="active"><a href="<?php echo site_url('');?>">home</a></li>
					<li><a href="<?php echo site_url('about');?>">about us</a></li>
					<li><a href="<?php echo site_url('portfolio');?>">portfolio</a></li>
					<li><a href="<?php echo site_url('missions');?>">Missions &amp; Goals</a></li>
					<li><a href="<?php echo site_url('contact');?>">contact us</a></li>
				</ul>
				<h1 class="logo"><a href="<?php echo site_url('');?>">Creative Freelancer</a></h1>
			</div>
		</div><!--header-->
        <?php if($this->session->flashdata('flash'))
{
    ?>
<div class="flash">
<?php echo $this->session->flashdata('flash');?>
</div>
<?php 
}?>