<div class="workplace">                
                <div class="row-fluid">

                    <div class="span12">
                    	<?php $this->load->view('admin/includes/message'); ?>
                        <div class="head clearfix">
                            <div class="isw-documents"></div>
                            <h1>Group Update</h1>
                        </div>
                        <div class="block-fluid">                        
						<?php echo form_open_multipart("admin/group/update",array('id'=>"menu-validate")); ?>
						<input type="hidden" name="ID" value="<?php echo $data[0]['ID'] ?>" />                            
                            <div class="row-form clearfix">
                                <div class="span3">Title:</div>
                                <div class="span9"><?php echo form_input(array('name'=>"Title",'id'=>"Title", 'value'=>set_value('Title', $data[0]['Title']))); ?></div>
                            </div>
                            <div class="row-form clearfix">
                                <div class="span3">Discount (%):</div>
                                <div class="span3"><?php echo form_input(array('name'=>"Discount",'id'=>"Discount", 'value'=>set_value('Discount', $data[0]['Discount']))); ?></div>
                            </div>
                            <div class="footer tar">
                                <button class="btn">Submit</button>
                            </div>
                        <?php echo form_close(); ?>                            
                        </div>

                    </div>

                </div>

                <div class="dr"><span></span></div>
            </div>