        <!-- Modal -->
<div  id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div style="margin-top: 7em;" class="modal-header">
                        <h3 style="text-align: center; font-weight: 700;" class="modal-title" id="exampleModalLabel">Add new account</h3>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form action="" method="post" enctype="multipart/form-data">
                            <h5> Username</h5>
                            <td><input type="text" name="username" required="username"></td>
                            <h5> Password </h5>
                            <td><input type="text" name="password" required="password"></td>
                            <h5> Name </h5>
                            <td><input type="text" name="name" required="name"></td>
                            <h5> Mail </h5>
                            <td><input type="text" name="mail" required="mail"></td>
                            <h5> Address </h5>
                            <td><input type="text" name="address" required="address"></td>
                            <h5> Thumbnail </h5>
                            <input id="input-b1" name="picture" type="file" class="file">
                            <h5> About </h5>
                            <textarea name="about" id="" cols="75" rows="2" required="about"></textarea>
				        	<div class="modal-footer">
					            <input type="submit" class="btn btn-primary" data-dismiss="modal" name="btnadd" value="Add">
					            <input type="button" class="btn btn-secondary" onclick="location.href='<?= base_url() ?>admin/adminAccount';" value="Cancel">
	                    	</div>
                        </form>
                    </div>
                </div>
            </div>
        </div>