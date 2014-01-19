<?php
$this->load->view('inc/header');
if($contact)
{
    $heading=$contact['title'];
    $content=$contact['content'];
}
else
{
    $heading='Contact Us';
    $content='Contact Us page';
}
?>
<h1 class="heading"><?php echo $heading; ?></h1>
<p><?php echo $content; ?></p>
<h2>Contact Us</h2>
<form action="<?php echo site_url('home/contact_verify');?>" method="post" id="contact">
<label>Full Name : <input type="text" name="fullname" class="required" /></label><br />
<label>Email : <input type="text" name="email" class="required" /> </label><br />
<label>Message : <textarea name="message" class="required"></textarea></label><br />
<input type="submit" value="Send" name="submit"/> 
</form> 
<?php $this->load->view('inc/footer');?>