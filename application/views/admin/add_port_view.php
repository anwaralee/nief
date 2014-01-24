<?php
$this->load->view('admin/inc/header');
?>
<script>
$(function(){
   initiate_ajax_upload('mybtn'); 
});
function initiate_ajax_upload(button_id){
                
                var button = $('#'+button_id), interval;
                new AjaxUpload(button,{
                    action: '<?php echo site_url('admin/dashboard/upload_port'); ?>', 
                     
                    name: 'image',
                    onSubmit : function(file, ext){
                        // change button text, when user selects file
                        			
                        button.text('Uploading');
			
                        // If you want to allow uploading only 1 file at time,
                        // you can disable upload button
                        this.disable();
			
                        // Uploding -> Uploading. -> Uploading...
                        interval = window.setInterval(function(){
                            var text = button.text();
                            if (text.length < 13){
                                button.text(text + '.');					
                            } else {
                                button.text('Uploading');				
                            }
                        }, 200);
                    },
                    onComplete: function(file, response){
                           
                            button.text('Upload');
                            window.clearInterval(interval);
                            this.enable();
                            $('.crop').show();
                            $('.crop').html('<img src="<?php echo site_url('images/portfolio/original')?>/'+response+'"/>');
                            
                        }
                        		
                    });
                
            }
</script>
<h1>Portfolio Manager > Add Portfolio</h1>

<form action="<?php echo site_url('admin/dashboard/add_port_verify');?>" method="post" class="edit" enctype="multipart/form-data">
<div class="listing"><div class="label">Title</div><div class="fields"><input type="text" name="title" class="required"/></div><div class="clear"></div></div>
<div class="listing"><div class="label">Description</div><div class="fields"><textarea id="content2" name="description" class="required"></textarea><?php echo display_ckeditor($ckeditor2); ?></div><div class="clear"></div></div>
<div class="listing"><div class="label">Image</div><div class="fields"><a href="javascript:void(0);" id="mybtn" class="btn">Upload</a></div><div class="clear"></div></div>
<div class="listing crop" style="display: none;"></div>
<input type="submit" value="Add" name="submit" class="btn"/>

</form>
<?php
$this->load->view('admin/inc/footer');
?>