<?php
    $this->load->view('admin/inc/header');
    $this->load->view('admin/inc/menu');
    if($pages)
    {
        ?>
        <table>
        <tr><td>Page Title </td><td> | </td><td> Action</td></tr> 
        <?php
        foreach($pages as $p)
        {
            echo '<tr><td>'.$p['title'].'<td> | </td><td><a href="'.site_url('admin/dashboard/edit_page/'.$p['id']).'">Edit</a></td></tr>';
        }
        ?>
        </table>
        <?php
    }
    else echo "No pages to display"; 
?>
<?php $this->load->view('admin/inc/footer');?>