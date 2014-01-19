<?php
 $this->load->view('inc/header');
if($about)
{
    $heading=$about['title'];
    $content=$about['content'];
}
else
{
    $heading='About Us';
    $content='This is about us page.';
}
?>
<h1 class="heading"><?php echo $heading ;?></h1>
<p> <?php echo $content ;?> </p>
<?php $this->load->view('inc/footer');?>