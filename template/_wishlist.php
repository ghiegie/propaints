<?php
    if($_SERVER['REQUEST_METHOD'] == 'POST') {
        if(isset($_POST['delete-cart-submit'])) {
            $deletedrecord = $Cart->deleteCart($_POST['item_id']);
        }

        if(isset($_POST['cart-submit'])) {
            $Cart->saveForLater($_POST['item_id'], 'cart', 'wishlist');
        }
    }
?>


<section id="cart" class="py-3">
            <div class="container-fluid w-75">
                <h5 class="font-baloo font-size-20">Wishlist</h5>

                <!--shopping cart items-->
                <div class="row">
                    <div class="col-sm-9">
                        <?php
                            foreach($product->getData("wishlist") as $item):
                                $cart = $product->getProduct($item['item_id']);
                                $subTotal[] = array_map(function($item) {
                        ?>
                        <!--cart item-->
                        <div class="row border-top py-3 mt-3">
                            <div class="col-sm-2">
                                <img src="<?php echo $item['item_image'] ?? "assets/products/1.png" ?>" class="img-fluid" style="height: 120px">
                            </div>
                            <div class="col-sm-8">
                                <h5 class="font-baloo font-size-20"><?php echo $item['item_name'] ?? "Unknown" ?></h5>
                                <small><?php echo $item['item_brand'] ?? "Brand" ?></small>
                                <div class="d-flex">
                                    <div class="rating text-warning font-size-12">
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="far fa-star"></i></span>
                                    </div>
                                    <a href="#" class="px-2 font-rale font-size-14">10 ratings</a>
                                </div>
                                <!--qty-->
                                <div class="qty d-flex pt-2">
                                   
                                    <form method="post">
                                        <input type="hidden" value="<?php echo $item['item_id'] ?? 0 ?>" name="item_id">
                                        <button type="submit" class="btn font-baloo text-danger pl-0 pr-3 border-right" name="delete-cart-submit">Delete</button>
                                    </form>
                                    <form method="post">
                                        <input type="hidden" value="<?php echo $item['item_id'] ?? 0 ?>" name="item_id">
                                        <button type="submit" class="btn font-baloo text-danger" name="cart-submit">Add to Cart</button>
                                    </form>
                                    
                                </div>
                            </div>

                            <div class="col-sm-2 text-right">
                                <div class="font-size-20 text-danger font-baloo">
                                    $<spam data-id="<?php echo $item['item_id'] ?? '0' ?>" class="product_price"><?php echo $item['item_price'] ?? 0 ?></spam>
                                </div>
                            </div>
                        </div>
                        <?php
                            return $item['item_price'];
                            }, $cart); //closing array map function
                            endforeach;
                        ?>
                    </div>
                </div>
            </div>
        </section>