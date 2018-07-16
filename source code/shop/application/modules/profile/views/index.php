<div class="container">
                        <div class="row">
                            <div class="col-md-8">
                                <div class="card">
                                    <div class="card-header" data-background-color="green">
                                        <h4 class="title">Edit Profile</h4>



                                    <p class="category">Complete your profile</p>
                                </div>
                                <div class="card-content">
                                    <form action="<?php echo base_url()."profile/profile/profile" ?>" method="post" id="form">
                                        <div class="row">

                                            <div class="form-group label-floating">
                                                    <label class="control-label">Email</label>
                                                    <input type="text"  class="form-control">
                                                    <div class="clear"></div>
                                                   <span class="error"><?php echo form_error('email'); ?></span>
                                            </div>



                                                <div class="form-group label-floating">
                                                    <label class="control-label">Username </label>
                                                    <input type="text"  class="form-control">
                                                    <div class="clear"></div>
                                                    <span class="error"><?php echo form_error('username'); ?></span>
                                                </div>
                                                
                                                <div class="form-group label-floating">
                                                    <label class="control-label">Password </label>
                                                    <input type="password"  class="form-control">
                                                    <div class="clear"></div>
                                                    <span class="error"><?php echo form_error('password'); ?></span>
                                                </div>    
                                                 <div class="form-group label-floating">
                                                    <label class="control-label">Repassword </label>
                                                    <input type="password"  class="form-control">
                                                    <div class="clear"></div>
                                                    <span class="error"><?php echo form_error('repassword'); ?></span>
                                                </div>    
                                            
                                            
                                                <div class="form-group label-floating">
                                                    <label class="control-label"> Address</label>
                                                    <input type="text" class="form-control">
                                                    <span class="error"><?php echo form_error('address'); ?></span>
                                                </div>
                                           
                                     
                                        
                                            
                                                <div class="form-group label-floating">
                                                    <label class="control-label">Phone number</label>
                                                    <input type="text" class="form-control">
                                                  <span class="error"><?php echo form_error('phone'); ?></span>
                                            </div>
                                           
                                        </div>



                                       
                                          
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label>About Me</label>
                                                    <div class="form-group label-floating">
                                                        <label class="control-label"> Lamborghini Mercy, Your chick she so thirsty, I'm in that two seat Lambo.</label>
                                                        <textarea class="form-control" rows="5"></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <button type="submit" value="" class="btn btn-primary pull-right">Update Profile</button>
                                        <div class="clearfix"></div>
                                        </form>
                                        </div>
                                    
                                </div>
                            </div>
                        </div>
                        </div>
                        </div>

