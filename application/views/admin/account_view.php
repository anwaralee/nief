<?php
    $this->load->view('admin/inc/header');
    $this->load->view('admin/inc/menu');
    if($content)
    {
    ?>
    <form action="<?php echo site_url('edit_account'); ?>" method="post" class="edit">
    Username : <input type="text" name="name" value="<?php echo $content['name']; ?>" class="required"/>
    Password : <input type="text" name="pass" value="<?php echo $content['password']?>" class="required" />
    Email : <input type="text" name="email" value="<?php echo $content['email'] ?>" class="required email" />
    <input type="submit" value="Update" name="submit" class="btn" />
    </form>
    <?php
    }
    $this->load->view('admin/inc/footer'); 
?>