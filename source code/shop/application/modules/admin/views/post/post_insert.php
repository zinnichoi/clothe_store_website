        <!-- Modal -->
<div  id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div style="margin-top: 7em;" class="modal-header">
                        <h3 style="text-align: center; font-weight: 700;" class="modal-title" id="exampleModalLabel">Add new post</h3>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form action="" method="post" enctype="multipart/form-data">
                            <h5> Post Title</h5>
                            <td><input type="text" name="post_title" required="post_title"></td>
                            <h5> Post Description </h5>
                            <textarea name="post_desc" id="" cols="75" rows="2" required="post_desc"></textarea>
                            <h5> Post Thumbnail </h5>
                            <input id="input-b1" name="picture" type="file" class="file">
                            <h5> Post Detail </h5>
                            <textarea name="post_detail" id="" cols="75" rows="2" required="post_detail"></textarea>
				        	<div class="modal-footer">
					            <input type="submit" class="btn btn-primary" data-dismiss="modal" name="btnadd" value="Add">
					            <input type="button" class="btn btn-secondary" onclick="location.href='<?= base_url() ?>admin/post';" value="Cancel">
	                    	</div>
                        </form>
                    </div>
                </div>
            </div>
        </div>