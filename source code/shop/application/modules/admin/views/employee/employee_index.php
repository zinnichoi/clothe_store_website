<div class="content">
    <?php $currentURL = $_SERVER['REQUEST_URI']; ?>
    <?php $select = 'selected=/"selected/"'; ?>
                <div class="container-fluid">
                       <form>
                            <label> Sort by: </label>
                             <select class="btn btn-primary" name="sort" id="sort" onchange="location = this.value;">
                             <option value="<?= base_url() ?>admin/employee/filter/0" <?php if ($currentURL == "/shop/admin/employee/filter/0"){echo $select;} ?> > Id Increase</option>
                             <option value="<?= base_url() ?>admin/employee/filter/1" <?php if ($currentURL == "/shop/admin/employee/filter/1"){echo $select;} ?> > Id Decrease</option>
                             <option value="<?= base_url() ?>admin/employee/filter/2" <?php if ($currentURL == "/shop/admin/employee/filter/2"){echo $select;} ?> > Age Increase</option>
                             <option value="<?= base_url() ?>admin/employee/filter/3" <?php if ($currentURL == "/shop/admin/employee/filter/3"){echo $select;} ?> > Age Decrease</option>
                             <option value="<?= base_url() ?>admin/employee/filter/4" <?php if ($currentURL == "/shop/admin/employee/filter/4"){echo $select;} ?> > Salary Increase</option>
                             <option value="<?= base_url() ?>admin/employee/filter/5" <?php if ($currentURL == "/shop/admin/employee/filter/5"){echo $select;} ?> > Salary Decrease</option>
                             <option value="<?= base_url() ?>admin/employee/filter/6" <?php if ($currentURL == "/shop/admin/employee/filter/6"){echo $select;} ?> > Time Increase</option>
                             <option value="<?= base_url() ?>admin/employee/filter/7" <?php if ($currentURL == "/shop/admin/employee/filter/7"){echo $select;} ?> > Time Decrease</option>
                         </select>
                        </form>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header" data-background-color="purple">
                                    <h4 class="title">Employee</h4>
                                </div>
                                <div class="card-content table-responsive">
                                    <table class="table">
                                        <thead class="text-primary">
                                            <tr>
                                                <th>#</th>
                                                <th>Name</th>
                                                <th>Age</th>
                                                <th>Phone Number</th>
                                                <th>Address</th>
                                                <th>Salary</th>
                                                <th>Date join</th>
                                                <th>Delete</th>
                                                <th>Update</th>
                                            </tr>
                                     </thead>
                                        <tbody>
                                            <tr>
                                                <?php foreach ($employees as $key => $employee) : ?>
                                            <tr>
                                                <td><?php echo $employee['id'] ?></td>
                                                <td><?php echo $employee['name'] ?></td>
                                                <td><?php echo $employee['age'] ?></td>
                                                <td><?php echo $employee['phoneNumber'] ?></td>
                                                <td><?php echo $employee['address'] ?></td>
                                                <td><?php echo number_format($employee['salary']) ?></td>
                                                <td><?php echo $employee['time'] ?></td>
                                                <td> <a href="<?= base_url() ?>admin/employee/delete?rowid= <?php echo $employee['id'] ?>"> <span><i class="fa fa-times" aria-hidden="true"></i></span> </a>
                                                </td>
                                                <td> <a href="<?= base_url() ?>admin/employee/update/<?php echo $employee['id'] ?>"> <span><i class="fa fa-refresh fa-spin fa-fw"></i></span> </a> </td>
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

