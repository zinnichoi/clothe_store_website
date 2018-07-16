        <!-- Modal -->
<div  id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div style="margin-top: 7em;" class="modal-header">
                        <h3 style="text-align: center; font-weight: 700;" class="modal-title" id="exampleModalLabel">Update product</h3>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form action="" method="post" enctype="multipart/form-data">
                            <h5> Product Title</h5>
                            <td><input type="text" name="product_title" value="<?php echo $product[0]['product_title']?>" required="product_title"></td>
                            <h5> Product price </h5>
                            <td><input type="number" name="product_price" value="<?php echo $product[0]['product_price']?>" required="product_price"></td>
                            <h5> Product Description </h5>
                            <td><input type="text" name="product_desc" value="<?php echo $product[0]['product_desc']?>" required="product_desc"></td>
                            <h5> Product Detail </h5>
                            <td><input type="text" name="product_detail" value="<?php echo $product[0]['product_detail']?>" required="product_detail"></td>
                            <h5> Product Thumbnail </h5>
                            <h6><i>Current Thumbnail : </i></h6> 
                            <img src="<?= base_url() ?>/public/images/<?php echo($product[0]['product_thumb']) ?>" alt="" class="img-thumbnail"> 
                            <input id="input-b1" name="picture" type="file" class="file">
                            <h5> Card ID</h5>
                            <?php $select = 'selected=/"selected/"'; ?>
							<select class="form-control" id="exampleSelect1" name="cat_id">
                                <option value="1" <?php if($product[0]['cat_id'] == 1){echo $select;} ?> >Men</option>
                                <option value="2" <?php if($product[0]['cat_id'] == 2){echo $select;}?> >Women</option>
                                <option value="11" <?php if($product[0]['cat_id'] == 11){echo $select;} ?> >Children</option>
                            </select>
				        	<div class="modal-footer">
					            <input type="submit" class="btn btn-primary" data-dismiss="modal" name="btnUpdate" value="Update">
					            <input type="button" class="btn btn-secondary" onclick="location.href='<?= base_url() ?>admin/product';" value="Cancel">
	                    	</div>
                        </form>
                    </div>
                </div>
            </div>
        </div>