<?php
 $this->load->view('inc/header');
if($missions)
{
    $heading=$missions['title'];
    $content=$missions['content'];
}
else
{
    $heading='Missions and Goals';
    $content='Missions and Goals page.';
}
?>
<h1 class="heading"><?php echo $heading;?></h1>
<p><?php echo $content;?></p>
<?php $this->load->view('inc/footer');?>