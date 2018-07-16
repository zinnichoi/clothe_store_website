<div class="content">
    <?php $currentURL = $_SERVER['REQUEST_URI']; ?>
    <?php $select = 'selected=/"selected/"'; ?>
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header" data-background-color="purple">
                                    <h4 class="title">Category</h4>
                                </div>
                                <div class="card-content table-responsive">
                                    <table class="table">
                                        <thead class="text-primary">
                                            <tr>
                                                <th>#</th>
                                                <th>Title</th>
                                                <th>Delete</th>
                                                <th>Update</th>
                                            </tr>
                                     </thead>
                                        <tbody>
                                            <tr>
                                                <?php foreach ($categorys as $key => $category) : ?>
                                            <tr>
                                                <td><?php echo $category['cat_id'] ?></td>
                                                <td><?php echo $category['cat_title'] ?></td>
                                                <td> <a href="<?= base_url() ?>admin/category/delete?rowid= <?php echo $category['cat_id'] ?>"> <span><i class="fa fa-times" aria-hidden="true"></i></span> </a>
                                                </td>
                                                <td> <a href="<?= base_url() ?>admin/category/update/<?php echo $category['cat_id'] ?>"> <span><i class="fa fa-refresh fa-spin fa-fw"></i></span> </a> </td>
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

