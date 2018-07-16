<div class="content">
    <?php $currentURL = $_SERVER['REQUEST_URI']; ?>
    <?php $select = 'selected=/"selected/"'; ?>
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header" data-background-color="purple">
                                    <h4 class="title">About Us</h4>
                                </div>
                                <div class="card-content table-responsive">
                                    <table class="table">
                                        <thead class="text-primary">
                                            <tr>
                                                <th>Introduction</th>
                                                <th>Name</th>
                                                <th>Contact</th>
                                                <th>Address</th>
                                                <th>More information</th>
                                                <th>Update</th>
                                            </tr>
                                     </thead>
                                        <tbody>
                                            <tr>
                                                <?php foreach ($aboutUss as $key => $aboutUs) : ?>
                                            <tr>
                                                <td><?php echo $aboutUs['introduction'] ?></td>
                                                <td><?php echo $aboutUs['name'] ?></td>
                                                <td><?php echo $aboutUs['contact'] ?></td>
                                                <td><?php echo $aboutUs['address'] ?></td>
                                                <td><?php echo $aboutUs['more_infor'] ?></td>
                                                <td> <a href="<?= base_url() ?>admin/aboutUs/update/<?php echo $aboutUs['id'] ?>"> <span><i class="fa fa-refresh fa-spin fa-fw"></i></span> </a> </td>
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

