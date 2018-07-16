<?php $userData = $this->session->userdata('user'); ?>
<div class="content-profile">
	<div class="sub-banner">
</div>
                <div class="container">
                    <div class="row">
                        <div class="col-md-8">
                            <div class="card">
                                <div class="card-header" data-background-color="green">
                                    <h4 class="title">Edit Profile</h4>
                                    <p class="category">Complete your profile</p>
                                </div>
                                <div class="card-content">
                                    <form action="" method="post" enctype="multipart/form-data">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group label-floating">
                                                    <label class="control-label">Username </label>
                                                    <input type="text" class="form-control" value="<?php echo $userData['username']?>" name="username" required="username">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group label-floating">
                                                    <label class="control-label">Email</label>
                                                    <input type="text" class="form-control" value="<?php echo $userData['email']?>" name="email" required="email">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-9">
                                                <div class="form-group label-floating">
                                                    <label class="control-label">Name</label>
                                                    <input type="text" class="form-control" value="<?php echo $userData['name']?>" name="name" required="name" >
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group label-floating">
                                                    <label class="control-label">Age</label>
                                                    <input type="number" class="form-control" value="<?php echo $userData['age']?>" name="age" required="age">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group label-floating">
                                                    <label class="control-label" >Phone number</label>
                                                    <input type="number" class="form-control"  value="<?php echo $userData['phoneNumber']?>" name="phoneNumber" required="phoneNumber" >
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group label-floating">
                                                    <label class="control-label" >Address</label>
                                                    <input type="text" class="form-control"  value="<?php echo $userData['address']?>" name="address" required="address" >
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-8">
                                                <div class="form-group label-floating">
                                                    <label>About Me</label>
                                                    <div class="form-group label-floating">
                                                        <label class="control-label"> </label>
                                                        <textarea class="form-control" rows="5">Over the past 10 years, I’ve been fortunate enough to help all sorts of people get their websites into shape. I’ve taught workshops on honest marketing and developing portfolios, and I co-wrote a book about writing useful, friendly content.</textarea>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group label-floating">
                                                    <label>Profile picturer</label>
                                                    <div class="form-group label-floating">
                                                        <label class="control-label"> </label>
                            							<img src="<?= base_url() ?>/public/images/users/<?php echo $userData['thumb'] ?>" alt="" style="height: 130px;"> 
                          							    <input id="input-b1" name="picture" type="file" class="file">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <input type="submit" class="btn btn-primary pull-right" data-dismiss="modal" name="btnUpdate" value="Update Profile">
                                        <div class="clearfix"></div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card card-profile">
                                <div class="card-avatar">
                                    <a href="#pablo">
                                        <img class="img" src="<?= base_url() ?>public/images/users/<?php echo $userData['thumb']; ?>" />
                                    </a>
                                    <?php echo $userData['thumb']; ?>
                                </div>
                                <div class="content">
                                    <h6 class="category text-gray">Active Customer</h6>
                                    <h4 class="card-title"><?php echo $userData['name']?></h4>
                                    <p class="card-content" ><style>p{text-align: center;}</style>
                                       <i class="fa fa-envelope-o" aria-hidden="true"></i> <?php echo $userData['email']?>
                                       <br>
                                       <i class="fa fa-phone" aria-hidden="true"></i>
                                       <?php echo $userData['phoneNumber']?>
                                       <br>
                                       <i class="fa fa-map-marker" aria-hidden="true"></i>
                                       <?php echo $userData['address']?>
                                    </p>
                                    <a href="http://facebook.com" class="btn btn-primary btn-round" style="margin-left: 10em;">Follow</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
<!-- //newsletter -->