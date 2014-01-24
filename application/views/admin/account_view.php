<?php
    $this->load->view('admin/inc/header');
    if($content)
    {
    ?>
    <form action="<?php echo site_url('edit_account'); ?>" method="post" class="edit">
    <div class="listing"><div class="label">Username</div><div class="fields"><input type="text" name="name" value="<?php echo $content['name']; ?>" class="required"/></div><div class="clear"></div></div>
    <div class="listing"><div class="label">Password</div><div class="fields"><input type="text" name="pass" value="<?php echo $content['password']?>" class="required" /></div><div class="clear"></div></div>
    <div class="listing"><div class="label">Email</div><div class="fields"><input type="text" name="email" value="<?php echo $content['email'] ?>" class="required email" /></div><div class="clear"></div></div>
    <input type="submit" value="Update" name="submit" class="btn" />
    </form>
    <?php
    }
    $this->load->view('admin/inc/footer'); 
?>