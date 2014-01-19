<?php $this->load->view('admin/inc/header');?>
<h1>Login Form</h1>
<form action="<?php echo site_url('admin/login_verify'); ?>" method="post">
Username : <input type="text" name="name" />
Password : <input type="password" name="pass" />
<input type="submit" value="Login"/>
</form>
<?php $this->load->view('admin/inc/footer');?>