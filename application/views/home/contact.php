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
<div class="map">
<iframe width="425" height="350" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=ne&amp;geocode=&amp;q=Nepalgunj+Bus+Park,+Nepalgunj,+Mid-Western+Region,+Nepal&amp;aq=3&amp;oq=Nepalg&amp;sll=37.0625,-95.677068&amp;sspn=41.903538,86.572266&amp;t=h&amp;ie=UTF8&amp;hq=Nepalgunj+Bus+Park,&amp;hnear=&amp;ll=28.065965,81.637414&amp;spn=0.006295,0.039211&amp;output=embed"></iframe><br /><small><a href="https://maps.google.com/maps?f=q&amp;source=embed&amp;hl=ne&amp;geocode=&amp;q=Nepalgunj+Bus+Park,+Nepalgunj,+Mid-Western+Region,+Nepal&amp;aq=3&amp;oq=Nepalg&amp;sll=37.0625,-95.677068&amp;sspn=41.903538,86.572266&amp;t=h&amp;ie=UTF8&amp;hq=Nepalgunj+Bus+Park,&amp;hnear=%E0%A4%A8%E0%A5%87%E0%A4%AA%E0%A4%BE%E0%A4%B2%E0%A4%97%E0%A4%A8%E0%A5%8D%E0%A4%9C,+%E0%A4%AD%E0%A5%87%E0%A4%B0%E0%A5%80,+%E0%A4%AE%E0%A4%A7%E0%A5%8D%E0%A4%AF%E0%A4%AA%E0%A4%B6%E0%A5%8D%E0%A4%9A%E0%A4%BF%E0%A4%AE%E0%A4%BE%E0%A4%9E%E0%A5%8D%E0%A4%9A%E0%A4%B2,+%E0%A4%A8%E0%A5%87%E0%A4%AA%E0%A4%BE%E0%A4%B2&amp;ll=28.065965,81.637414&amp;spn=0.006295,0.039211" style="color:#0000FF;text-align:left">Go to Map</a></small>
</div>
<div class="clear   "></div>
<?php $this->load->view('inc/footer');?>