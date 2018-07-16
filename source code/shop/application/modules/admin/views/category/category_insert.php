        <!-- Modal -->
<div  id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div style="margin-top: 7em;" class="modal-header">
                        <h3 style="text-align: center; font-weight: 700;" class="modal-title" id="exampleModalLabel">Add new category</h3>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form action="" method="post" enctype="multipart/form-data">
                            <h5> Type</h5>
                            <td><input type="text" name="cat_title" required="cat_title"></td>
				        	<div class="modal-footer">
					            <input type="submit" class="btn btn-primary" data-dismiss="modal" name="btnadd" value="Add">
					            <input type="button" class="btn btn-secondary" onclick="location.href='<?= base_url() ?>admin/category';" value="Cancel">
	                    	</div>
                        </form>
                    </div>
                </div>
            </div>
        </div>