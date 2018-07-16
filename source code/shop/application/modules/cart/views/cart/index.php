<div id="main-content-wp" class="cart-page">
    <div class="section" id="breadcrumb-wp">
        <div class="wp-inner">
            <div class="section-detail clearfix">
                <h3 class="title fl-left">Cart</h3>
            </div>
        </div>
    </div>
    <div id="wrapper" class="wp-inner clearfix">
        <div class="section" id="info-cart-wp">
            <div class="section-detail table-responsive">
                <form method="POST" action="?mod=cart&controller=index&action=update">
                    <table class="table">
                        <thead>
                            <tr>
                                <td>Product ID</td>
                                <td>Image</td>
                                <td>Product name</td>
                                <td>Price</td>
                                <td>Quantity</td>
                                <td colspan="2">Total</td>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $total = 0;
                            if (empty($products)) {
                                ?>
                            <p style="text-align: center">No product is chosen!"</p>

                            <?php
                        } else {
                            foreach ($products as $key => $product) :
                                $dbProduct = $this->CartModel->get_detail_productId($product['id']);
                                ?>
                                <tr>
                                    <td><?php echo $product['id'] ?></td>
                                    <td>
                                        <a href="" title="" class="thumb">
                                            <img src="public/images/<?= $dbProduct['product_thumb'] ?>" style="width:85px;height:75px">
                                        </a>
                                    </td>
                                    <td>
                                        <a href="" title="" class="name-product"><?php echo ($dbProduct['product_title']) ?></a>
                                    </td>
                                    <td><?php echo number_format($product['price']) ?></td>
                                    <td>
                                        <input data-rowid="<?= $product['rowid'] ?>" type="number" value="<?= $product['qty'] ?>" class="num-order" min="0">
                                    </td>
                                    <td><?php echo $this->cart->format_number($product['subtotal']); ?></td>
                                    <td>
                                        <a href="cart/cart/delete?rowid=<?= $product['rowid'] ?>" title="" class="del-product"><i class="fa fa-trash-o"></i></a>
                                    </td>
                                </tr>
                                <?php
                            endforeach
                            ?>
                            </tbody>
                             <tfoot>
                                <tr>
                                    <td colspan="7">
                                        <div class="clearfix">
                                            <p id="total-price" class="fl-right">Tổng giá: <span><?php $total = $this->cart->total(); echo number_format($total); 
                                            $this->session->set_userdata('order',$total);
                                            $this->session->set_userdata('cart',$products);
                                            ?>đ</span></p>
                                        </div>
                                    </td>
                                </tr>
                            </tfoot>
                            <?php }
                        ?>
                    </table>
                </form>
            </div>
        </div>
        <div class="section" id="action-cart-wp">
            <div class="boo-wrapper">
                <a style="background: #00e58b;padding: 8px 15px;outline: none;margin-top: 10px;color: #fff;border: none;" href="<?php echo site_url("/cart")?>"> UPDATE</a>
                <a style="background: #00e58b;padding: 8px 15px;outline: none;margin-top: 10px;color: #fff;border: none;" href="<?php echo site_url("order/insert/")?>">ORDER</a>
                
            </div>
        </div>
    </div>
</div>
<script type="text/javascript" charset="utf-8">
    $(document).ready(function(){
        $(".num-order").change(function(){
            var rowid = $(this).attr('data-rowid'),
                qty = $(this).val(),
                alertElement = $("#alert");
            $.ajax({
                type: "GET",
                url: "<?= site_url('cart/cart/update') ?>?rowid=" + rowid + "&qty=" + qty,
                success: function(){
                    alertElement.find("#alert-content").text("Update your cart successfully");
                    alertElement.fadeIn();
                    setTimeout(function(){
                        alertElement.fadeOut();
                        alertElement.find("#alert-content").text("");
                    }, 1000);
                },
                error: function(){
                    alertElement.find("#alert-content").text("Update your cart fail");
                    alertElement.fadeIn();
                    setTimeout(function(){
                        alertElement.fadeOut();
                        alertElement.find("#alert-content").text("");
                    }, 1000);
                }
            });
        })
    })
</script>