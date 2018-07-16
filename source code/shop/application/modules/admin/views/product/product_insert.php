        <!-- Modal -->
<div  id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div style="margin-top: 7em;" class="modal-header">
                        <h3 style="text-align: center; font-weight: 700;" class="modal-title" id="exampleModalLabel">Add new product</h3>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form action="" method="post" enctype="multipart/form-data">
                            <h5> Product Title</h5>
                            <td><input type="text" name="product_title" required="product_title"></td>
                            <h5> Product price </h5>
                            <td><input type="number" name="product_price" required="product_price"></td>
                            <h5> Product Description </h5>
                            <textarea name="product_desc" id="" cols="75" rows="2" required="product_desc"></textarea>
                            <h5> Product Detail </h5>
                            <textarea name="product_detail" id="" cols="75" rows="2" required="product_detail"></textarea>
                            <h5> Product Thumbnail </h5>
                            <input id="input-b1" name="picture" type="file" class="file">
                            <h5> Card ID</h5>
							<select class="form-control" id="exampleSelect1" name="cat_id">
                                <option value="1">Men</option>
                                <option value="2">Women</option>
                                <option value="11">Children</option>
                            </select>
				        	<div class="modal-footer">
					            <input type="submit" class="btn btn-primary" data-dismiss="modal" name="btnadd" value="Add">
					            <input type="button" class="btn btn-secondary" onclick="location.href='<?= base_url() ?>admin/product';" value="Cancel">
	                    	</div>
                        </form>
                    </div>
                </div>
            </div>
        </div>