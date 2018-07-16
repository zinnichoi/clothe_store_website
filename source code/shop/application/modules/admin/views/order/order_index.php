<div class="content">
    <?php $currentURL = $_SERVER['REQUEST_URI']; ?>
    <?php $select = 'selected=/"selected/"'; ?>
                <div class="container-fluid">
                        <form>
                            <label> Sort by: </label>
                             <select class="btn btn-primary" name="sort" id="sort" onchange="location = this.value;">
                             <option value="<?= base_url() ?>admin/order/filter/0" <?php if ($currentURL == "/shop/admin/order/filter/0"){echo $select;} ?> > Time Increase</option>
                             <option value="<?= base_url() ?>admin/order/filter/1" <?php if ($currentURL == "/shop/admin/order/filter/1"){echo $select;} ?> > Time Decrease</option>
                             <option value="<?= base_url() ?>admin/order/filter/2" <?php if ($currentURL == "/shop/admin/order/filter/2"){echo $select;} ?> > Status Increase</option>
                             <option value="<?= base_url() ?>admin/order/filter/3" <?php if ($currentURL == "/shop/admin/order/filter/3"){echo $select;} ?> > Status Decrease</option>
                         </select>
                        </form>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header" data-background-color="purple">
                                    <h4 class="title">Orders </h4>
                                </div>
                                <div class="card-content table-responsive">
                                    <table class="table">
                                        <thead class="text-primary">
                                            <tr>
                                                <th>#</th>
                                                <th>User</th>
                                                <th>User Name</th>
                                                <th>User Email</th>
                                                <th>User Phone</th>
                                                <th>User Address</th>
                                                <th>Status</th>
                                                <th>Total</th>
                                                <th>Date</th>
                                                <th>Delete</th>
                                                <th>Update</th>
                                            </tr>
                                     </thead>
                                        <tbody>
                                            <tr>
                                                <?php foreach ($orders as $key => $order) : ?>
                                            <tr>
                                                <td><?php echo $order['id'] ?></td>
                                                <td><?php echo $order['user_id'] ?></td>
                                                <td><?php echo $order['user_name'] ?></td>
                                                <td><?php echo $order['user_email'] ?></td>
                                                <td><?php echo $order['user_phone'] ?></td>
                                                <td><?php echo $order['user_address'] ?></td>
                                                <?php if($order['status'] == 0){
                                                    echo  '<td style="color: yellow">PENDIND</td>';
                                                }else if($order['status'] == 1){
                                                    echo  '<td style="color: green" >APPROVE</td>';
                                                }else{
                                                    echo  '<td style="color: red" >REJECT</td>';
                                                } ?>
                                                <td><?php echo $order['total'] ?></td>
                                                <td><?php echo $order['date'] ?></td>
                                                <td> <a href="<?= base_url() ?>admin/order/delete?rowid= <?php echo $order['id'] ?>"> <span><i class="fa fa-times" aria-hidden="true"></i></span> </a>
                                                </td>
                                                <td> <a href="<?= base_url() ?>admin/order/update/<?php echo $order['id'] ?>"> <span><i class="fa fa-refresh fa-spin fa-fw"></i></span> </a> </td>
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

