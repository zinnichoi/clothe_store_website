        <!-- Modal -->
<div  id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div style="margin-top: 7em;" class="modal-header">
                        <h3 style="text-align: center; font-weight: 700;" class="modal-title" id="exampleModalLabel">Add new employee</h3>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form action="" method="post" enctype="multipart/form-data">
                            <h5> Name</h5>
                            <td><input type="text" name="name" required="name"></td>
                            <h5> Age </h5>
                            <td><input type="number" name="age" required="age"></td>
                            <h5> Phone Number </h5>
                            <textarea name="phoneNumber" id="" cols="75" rows="2" required="phoneNumber"></textarea>
                            <h5> Address </h5>
                            <textarea name="address" id="" cols="75" rows="2" required="address"></textarea>
                            <h5> Salary </h5>
                            <td><input type="number" name="salary" required="salary"></td>
				        	<div class="modal-footer">
					            <input type="submit" class="btn btn-primary" data-dismiss="modal" name="btnadd" value="Add">
					            <input type="button" class="btn btn-secondary" onclick="location.href='<?= base_url() ?>admin/employee';" value="Cancel">
	                    	</div>
                        </form>
                    </div>
                </div>
            </div>
        </div>