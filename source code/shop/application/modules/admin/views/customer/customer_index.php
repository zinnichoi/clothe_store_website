<div class="content">
    <?php $currentURL = $_SERVER['REQUEST_URI']; ?>
    <?php $select = 'selected=/"selected/"'; ?>
                <div class="container-fluid">
                       <form>
                            <label> Sort by: </label>
                             <select class="btn btn-primary" name="sort" id="sort" onchange="location = this.value;">
                             <option value="<?= base_url() ?>admin/customer/filter/0" <?php if ($currentURL == "/shop/admin/customer/filter/0"){echo $select;} ?> > Id Increase</option>
                             <option value="<?= base_url() ?>admin/customer/filter/1" <?php if ($currentURL == "/shop/admin/customer/filter/1"){echo $select;} ?> > Id Decrease</option>
                             <option value="<?= base_url() ?>admin/customer/filter/2" <?php if ($currentURL == "/shop/admin/customer/filter/2"){echo $select;} ?> > Age Increase</option>
                             <option value="<?= base_url() ?>admin/customer/filter/3" <?php if ($currentURL == "/shop/admin/customer/filter/3"){echo $select;} ?> > Age Decrease</option>
                         </select>
                        </form>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header" data-background-color="purple">
                                    <h4 class="title">Customer</h4>
                                </div>
                                <div class="card-content table-responsive">
                                    <table class="table">
                                        <thead class="text-primary">
                                            <tr>
                                                <th>#</th>
                                                <th>Username</th>
                                                <th>Password</th>
                                                <th>Name</th>
                                                <th>Age</th>
                                                <th>PhoneNumber</th>
                                                <th>Email</th>
                                                <th>Address</th>
                                                <th>Thumb</th>
                                                <th>Delete</th>
                                            </tr>
                                     </thead>
                                        <tbody>
                                            <tr>
                                                <?php foreach ($customers as $key => $customer) : ?>
                                            <tr>
                                                <td><?php echo $customer['id'] ?></td>
                                                <td><?php echo $customer['username'] ?></td>
                                                <td><?php echo str_repeat ('*', strlen ($customer['password'])) ?></td>
                                                <td><?php echo $customer['name'] ?></td>
                                                <td><?php echo $customer['age'] ?></td>
                                                <td><?php echo $customer['phoneNumber'] ?></td>
                                                <td><?php echo $customer['email'] ?></td>
                                                <td><?php echo $customer['address'] ?></td>
                                                <td><img src="<?= base_url() ?>/public/images/<?php echo($customer['thumb']) ?>" alt="" class="img-thumbnail"> </td>
                                                <td> <a href="<?= base_url() ?>admin/customer/delete?rowid= <?php echo $customer['id'] ?>"> <span><i class="fa fa-times" aria-hidden="true"></i></span> </a>
                                                </td>
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

