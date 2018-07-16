<div class="content">
    <?php $currentURL = $_SERVER['REQUEST_URI']; ?>
    <?php $select = 'selected=/"selected/"'; ?>
                <div class="container-fluid">
                       <form>
                            <label> Sort by: </label>
                             <select class="btn btn-primary" name="sort" id="sort" onchange="location = this.value;">
                             <option value="<?= base_url() ?>admin/post/filter/0" <?php if ($currentURL == "/shop/admin/post/filter/0"){echo $select;} ?> > Id Increase</option>
                             <option value="<?= base_url() ?>admin/post/filter/1" <?php if ($currentURL == "/shop/admin/post/filter/1"){echo $select;} ?> > Id Decrease</option>
                             <option value="<?= base_url() ?>admin/post/filter/2" <?php if ($currentURL == "/shop/admin/post/filter/2"){echo $select;} ?> > Time Increase</option>
                             <option value="<?= base_url() ?>admin/post/filter/3" <?php if ($currentURL == "/shop/admin/post/filter/3"){echo $select;} ?> > Time Decrease</option>
                         </select>
                        </form>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header" data-background-color="purple">
                                    <h4 class="title">Post</h4>
                                </div>
                                <div class="card-content table-responsive">
                                    <table class="table">
                                        <thead class="text-primary">
                                            <tr>
                                                <th>#</th>
                                                <th>Post title</th>
                                                <th>Post description</th>
                                                <th>Product thumb</th>
                                                <th>Product detail</th>
                                                <th>Time</th>
                                                <th>Delete</th>
                                                <th>Update</th>
                                            </tr>
                                     </thead>
                                        <tbody>
                                            <tr>
                                                <?php foreach ($posts as $key => $post) : ?>
                                            <tr>
                                                <td><?php echo $post['post_id'] ?></td>
                                                <td><?php echo $post['post_title'] ?></td>
                                                <td><?php echo $post['post_desc'] ?></td>
                                                <td><img src="<?= base_url() ?>/public/images/<?php echo($post['post_thumb']) ?>" alt="" class="img-thumbnail"> </td>
                                                <td><?php echo $post['post_detail'] ?></td>
                                                <td><?php echo $post['time'] ?></td>
                                                <td> <a href="<?= base_url() ?>admin/post/delete?rowid= <?php echo $post['post_id'] ?>"> <span><i class="fa fa-times" aria-hidden="true"></i></span> </a>
                                                </td>
                                                <td> <a href="<?= base_url() ?>admin/post/update/<?php echo $post['post_id'] ?>"> <span><i class="fa fa-refresh fa-spin fa-fw"></i></span> </a> </td>
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

