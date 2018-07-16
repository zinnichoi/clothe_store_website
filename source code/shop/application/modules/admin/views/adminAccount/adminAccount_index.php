<div class="content">
    <?php $currentURL = $_SERVER['REQUEST_URI']; ?>
    <?php $select = 'selected=/"selected/"'; ?>
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header" data-background-color="purple">
                                    <h4 class="title">Admin account</h4>
                                </div>
                                <div class="card-content table-responsive">
                                    <table class="table">
                                        <thead class="text-primary">
                                            <tr>
                                                <th>#</th>
                                                <th>User name</th>
                                                <th>Password</th>
                                                <th>Name</th>
                                                <th>Mail</th>
                                                <th>Address</th>
                                                <th>Thumb</th>
                                                <th>About</th>
                                                <th>Time</th>
                                                <th>Delete</th>
                                            </tr>
                                     </thead>
                                        <tbody>
                                            <tr>
                                                <?php foreach ($accounts as $key => $adminAccount) : ?>
                                            <tr>
                                                <td><?php echo $adminAccount['id'] ?></td>
                                                <td><?php echo $adminAccount['username'] ?></td>
                                                <td><?php echo str_repeat ('*', strlen ($adminAccount['password'])) ?></td>
                                                <td><?php echo $adminAccount['name'] ?></td>
                                                <td><?php echo $adminAccount['mail'] ?></td>
                                                <td><?php echo $adminAccount['address'] ?></td>
                                                <td><img src="<?= base_url() ?>/public/images/<?php echo($adminAccount['thumb']) ?>" alt="" class="img-thumbnail"> </td>
                                                <td><?php echo $adminAccount['about'] ?></td>
                                                <td><?php echo $adminAccount['time'] ?></td>
                                                <td> <a href="<?= base_url() ?>admin/adminAccount/delete?rowid= <?php echo $adminAccount['id'] ?>"> <span><i class="fa fa-times" aria-hidden="true"></i></span> </a>
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

