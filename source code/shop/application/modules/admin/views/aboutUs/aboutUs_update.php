        <!-- Modal -->
<div  id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div style="margin-top: 7em;" class="modal-header">
                        <h3 style="text-align: center; font-weight: 700;" class="modal-title" id="exampleModalLabel">Change Store Information</h3>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form action="" method="post" enctype="multipart/form-data">
                            <h5> Introduction</h5>
                            <textarea name="introduction" id="" cols="75" rows="2" required="introduction"> <?php echo $aboutUs[0]['introduction'] ?></textarea>
                            <h5> Name </h5>
                            <td><input type="text" name="name" value="<?php echo $aboutUs[0]['name']?>" required="name"></td>
                            <h5> Contact</h5>
                            <td><input type="text" name="contact" value="<?php echo $aboutUs[0]['contact']?>" required="contact"></td>
                            <h5> Address</h5>
                            <td><input type="text" name="address" value="<?php echo $aboutUs[0]['address']?>" required="address"></td>
                            <h5> More Information</h5>
                            <td><input type="text" name="more_infor" value="<?php echo $aboutUs[0]['more_infor']?>" required="more_infor"></td>
				        	<div class="modal-footer">
					            <input type="submit" class="btn btn-primary" data-dismiss="modal" name="btnUpdate" value="Update">
					            <input type="button" class="btn btn-secondary" onclick="location.href='<?= base_url() ?>admin/aboutUs';" value="Cancel">
	                    	</div>
                        </form>
                    </div>
                </div>
            </div>
        </div>