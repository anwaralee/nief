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
<div class="contact">

<form action="<?php echo site_url('home/contact_verify');?>" method="post" id="contact">
<div class="listing"><div class="label">Full Name</div><div class="fields"><input type="text" name="fullname" class="required" /></div><div class="clear"></div></div>
<div class="listing"><div class="label">Email</div><div class="fields"><input type="text" name="email" class="required" /></div><div class="clear"></div></div>
<div class="listing"><div class="label">Message</div><div class="fields"><textarea name="message" class="required"></textarea></div><div class="clear"></div></div>
<input type="submit" value="Send" name="submit" class="btn"/> 
</form> 
</div>
<?php $this->load->view('inc/footer');?>