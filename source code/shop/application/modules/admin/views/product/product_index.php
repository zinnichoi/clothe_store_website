<div class="content">
    <?php $currentURL = $_SERVER['REQUEST_URI']; ?>
    <?php $select = 'selected=/"selected/"'; ?>
                <div class="container-fluid">
                       <form>
                            <label> Sort by: </label>
                             <select class="btn btn-primary" name="sort" id="sort" onchange="location = this.value;">
                             <option value="<?= base_url() ?>admin/product/filter/0" <?php if ($currentURL == "/shop/admin/product/filter/0"){echo $select;} ?> > Id Increase</option>
                             <option value="<?= base_url() ?>admin/product/filter/1" <?php if ($currentURL == "/shop/admin/product/filter/1"){echo $select;} ?> > Id Decrease</option>
                             <option value="<?= base_url() ?>admin/product/filter/2" <?php if ($currentURL == "/shop/admin/product/filter/2"){echo $select;} ?> > Price Increase</option>
                             <option value="<?= base_url() ?>admin/product/filter/3" <?php if ($currentURL == "/shop/admin/product/filter/3"){echo $select;} ?> > Price Decrease</option>
                             <option value="<?= base_url() ?>admin/product/filter/4" <?php if ($currentURL == "/shop/admin/product/filter/4"){echo $select;} ?> > Time Increase</option>
                             <option value="<?= base_url() ?>admin/product/filter/5" <?php if ($currentURL == "/shop/admin/product/filter/5"){echo $select;} ?> > Time Decrease</option>
                             <option value="<?= base_url() ?>admin/product/filter/6" <?php if ($currentURL == "/shop/admin/product/filter/6"){echo $select;} ?> > Category Increase</option>
                             <option value="<?= base_url() ?>admin/product/filter/7" <?php if ($currentURL == "/shop/admin/product/filter/7"){echo $select;} ?> > Category Decrease</option>
                         </select>
                        </form>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header" data-background-color="purple">
                                    <h4 class="title">Product</h4>
                                </div>
                                <div class="card-content table-responsive">
                                    <table class="table">
                                        <thead class="text-primary">
                                            <tr>
                                                <th>#</th>
                                                <th>Product title</th>
                                                <th>Product price</th>
                                                <th>Product description</th>
                                                <th>Product detail</th>
                                                <th>Product thumb</th>
                                                <th>Cat id</th>
                                                <th>Time</th>
                                                <th>Delete</th>
                                                <th>Update</th>
                                            </tr>
                                     </thead>
                                        <tbody>
                                            <tr>
                                                <?php foreach ($products as $key => $product) : ?>
                                            <tr>
                                                <td><?php echo $product['product_id'] ?></td>
                                                <td><?php echo $product['product_title'] ?></td>
                                                <td><?php echo number_format($product['product_price']) ?></td>
                                                <td><?php echo $product['product_desc'] ?></td>
                                                <td><?php echo $product['product_detail'] ?></td>
                                                <td><img src="<?= base_url() ?>/public/images/<?php echo($product['product_thumb']) ?>" alt="" class="img-thumbnail"> </td>
                                                <td><?php echo $product['cat_id'] ?></td>
                                                <td><?php echo $product['time'] ?></td>
                                                <td> <a href="<?= base_url() ?>admin/product/delete?rowid= <?php echo $product['product_id'] ?>"> <span><i class="fa fa-times" aria-hidden="true"></i></span> </a>
                                                </td>
                                                <td> <a href="<?= base_url() ?>admin/product/update/<?php echo $product['product_id'] ?>"> <span><i class="fa fa-refresh fa-spin fa-fw"></i></span> </a> </td>
                                            </tr>
                                            <?php endforeach ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Modal -->

