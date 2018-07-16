
<div id="main-content-wp" class="category-news-page">
    <div class="section" id="breadcrumb-wp">
        <div class="wp-inner">
            <div class="section-detail clearfix">
                <!--<h3 class="title fl-left">Về Chúng Tôi</h3>-->
                <h1 class="title-detail" style="text-align: center;font-size: 30px;font-family: arial;margin: 50px auto">About Us</h1>
            </div>
        </div>
    </div>
</div>
</div>
<div id="wrapper" class="wp-inner clearfix">
    <div id="content" class="fl-left">
        <div class="section" id="list-news-wp">
            <div class="section-detail">
                <div class="col-md-1"></div>
                <div class="col-md-10">
                    <div class="list-item" style="line-height: 25px; font-family: arial;">
                        <?php foreach ($list_about_us as $value) {
                            ?>

                        <div class="detail">
                            <style>
                                .detail p{
                                    margin-bottom: 20px;
                                    line-height: 30px; 
                                    font-size: 15px;
                                }
                                .bold{
                               
                                    font-size:20px;
                                    margin-right: 20px;
                                }
                                .detail li{
                                    padding-left: 20px;
                                    list-style-type: none;
                                }
                            </style>
                                <p><?php echo $value['introduction'] ?></p>
                                <p ><span style="font-weight:bold;">1   : </span><li><?php echo $value['name'] ?></li></p>
                        <p ><span style="font-weight:bold;">2: </span><li><?php echo $value['contact'] ?></li></p>
                        <p ><span style="font-weight:bold">3: </span><li><?php echo $value['address'] ?></li></p>
                        <p ><span style="font-weight:bold">4  : </span><li><?php echo $value['more_infor'] ?></li></p>
                            </div>

                            <?php
                        }
                        ?>

                    </div>
                </div>
                <div class="col-md-1"></div>
            </div>
        </div>
        
    </div>

</div>
</div>
