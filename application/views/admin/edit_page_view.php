<?php
$this->load->view('admin/inc/header');
$this->load->view('admin/inc/menu');
if($content)
{
?>
<form action="<?php echo site_url('admin/dashboard/edit_page_content/'.$content['id']);?>" method="post" class="edit">
Title : <input type="text" name="title" value="<?php if($content['title']) echo $content['title']?>" class="required"/>
Content : <textarea name="content" class="required"><?php if($content['content']) echo $content['content'];?></textarea>
Meta Keywords : <input type="text" name="key" value="<?php if($content['meta_key']) echo $content['meta_key']?>" class="required"/>
Meta Description : <textarea name="desc" class="required"><?php if($content['meta_desc']) echo $content['meta_desc'];?></textarea>
<input type="submit" value="Edit" name="submit" class="btn"/>
</form>
<?php
}
$this->load->view('admin/inc/footer');
?>