        <!-- Modal -->
<div  id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div style="margin-top: 7em;" class="modal-header">
                        <h3 style="text-align: center; font-weight: 700;" class="modal-title" id="exampleModalLabel">Update post</h3>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form action="" method="post" enctype="multipart/form-data">
                            <h5> Post Title</h5>
                            <td><input type="text" name="post_title" value="<?php echo $post[0]['post_title']?>" required="post_title"></td>
                            <h5> Post Description </h5>
                            <td><input type="text" name="post_desc" value="<?php echo $post[0]['post_desc']?>" required="post_desc"></td>
                            <h5> Post Thumbnail </h5>
                            <h6><i>Current Thumbnail : </i></h6> 
                            <img src="<?= base_url() ?>/public/images/<?php echo($post[0]['post_thumb']) ?>" alt="" class="img-thumbnail"> 
                            <input id="input-b1" name="picture" type="file" class="file">
                            <h5> Product Detail </h5>
                            <td><input type="text" name="post_detail" value="<?php echo $post[0]['post_detail']?>" required="post_detail"></td>
				        	<div class="modal-footer">
					            <input type="submit" class="btn btn-primary" data-dismiss="modal" name="btnUpdate" value="Update">
					            <input type="button" class="btn btn-secondary" onclick="location.href='<?= base_url() ?>admin/post';" value="Cancel">
	                    	</div>
                        </form>
                    </div>
                </div>
            </div>
        </div>