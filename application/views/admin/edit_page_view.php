<?php
$this->load->view('admin/inc/header');
?>
<h1>Page Manager > Edit Page</h1>

<?php
if($content)
{
?>

<form action="<?php echo site_url('admin/dashboard/edit_page_content/'.$content['id']);?>" method="post" class="edit">
<div class="listing"><div class="label">Title</div><div class="fields"><input type="text" name="title" value="<?php if($content['title']) echo $content['title']?>" class="required"/></div><div class="clear"></div></div>
<div class="listing"><div class="label">Content</div><div class="fields"><textarea id="content2" name="content" class="required"><?php if($content['content']) echo $content['content'];?></textarea><?php echo display_ckeditor($ckeditor2); ?></div><div class="clear"></div></div>
<div class="listing"><div class="label">Meta Keywords</div><div class="fields"><input type="text" name="key" value="<?php if($content['meta_key']) echo $content['meta_key']?>" class="required"/></div><div class="clear"></div></div>
<div class="listing"><div class="label">Meta Description</div><div class="fields"><textarea name="desc" id="content" class="required"><?php if($content['meta_desc']) echo $content['meta_desc'];?></textarea><?php echo display_ckeditor($ckeditor); ?></div><div class="clear"></div></div>
<input type="submit" value="Edit" name="submit" class="btn"/>

</form>
<?php
}
$this->load->view('admin/inc/footer');
?>