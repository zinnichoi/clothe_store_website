        <!-- Modal -->
<div  id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div style="margin-top: 7em;" class="modal-header">
                        <h3 style="text-align: center; font-weight: 700;" class="modal-title" id="exampleModalLabel">Change Employee Information</h3>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form action="" method="post" enctype="multipart/form-data">
                            <h5> STATUS</h5>
                            <?php $select = 'selected=/"selected/"'; ?>
                            <select class="form-control" id="exampleSelect1" name="status">
                                <option style="color: yellow" value="0" <?php if($order[0]['status'] == 1){echo $select;} ?> >PENDING</option>
                                <option style="color: green" value="1" <?php if($order[0]['status'] == 2){echo $select;}?> >APPROVE</option>
                                <option style="color: red" value="2" <?php if($order[0]['status'] == 11){echo $select;} ?> >REJECT</option>
                            </select>
                            <div class="modal-footer">
                                <input type="submit" class="btn btn-primary" data-dismiss="modal" name="btnUpdate" value="Update">
                                <input type="button" class="btn btn-secondary" onclick="location.href='<?= base_url() ?>admin/order;" value="Cancel">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>