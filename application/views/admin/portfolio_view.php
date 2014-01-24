<?php
    $this->load->view('admin/inc/header');
    ?>
    <h1>Porfolio Manager</h1>
    <a href="<?php echo site_url('admin/dashboard/add_port');?>" class="btn">Add New</a>
    <?php
    if($port)
    {
        ?>
        <table class="listingtab">
        <tr><th class="listlabel" width="70%">Title </th><th>Thumbnail</th><th colspan="2"> Action</th></tr> 
        <?php
        foreach($port as $p)
        {
            echo '<tr><td>'.$p['title'].'<td>'.$p['image'].'</td><td colspan="2"><a href="'.site_url('admin/dashboard/edit_port/'.$p['id']).'" class="btn">Edit</a><a href="'.site_url('admin/dashboard/delete_port/'.$p['id']).'" class="btn">Delete</a></td></tr>';
        }
        ?>
        </table>
        <?php
    }
    else echo "No items to display"; 
?>
<?php $this->load->view('admin/inc/footer');?>