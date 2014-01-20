<?php
    $this->load->view('admin/inc/header');
    $this->load->view('admin/inc/menu');
    ?>
    <h1>Page Manager</h1>
    <?php
    if($pages)
    {
        ?>
        <table class="listingtab">
        <tr><th class="listlabel" width="70%">Page Title </th><th> Action</th></tr> 
        <?php
        foreach($pages as $p)
        {
            echo '<tr><td>'.$p['title'].'<td><a href="'.site_url('admin/dashboard/edit_page/'.$p['id']).'" class="btn">Edit</a></td></tr>';
        }
        ?>
        </table>
        <?php
    }
    else echo "No pages to display"; 
?>
<?php $this->load->view('admin/inc/footer');?>