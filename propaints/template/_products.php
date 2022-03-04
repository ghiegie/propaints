<?php
    $item_id = $_GET['item_id'] ?? 1;
    foreach($product->getData() as $item):
        if($item['item_id'] == $item_id):
?>

        <section id="product" class="py-3">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6">
                        <img src="<?php echo $item['item_image'] ?? "assets/products/1.png";?>" alt="product" class="img-fluid">
                        <div class="form-row pt-4 font-size-16 font-baloo">
                            <div class="col">
                                <button type="submit" class="btn btn-danger form-control">Proceed to Buy</button>
                            </div>
                            <div class="col">
                                <button type="submit" class="btn btn-warning form-control">Add to Cart</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 py-5">
                        <h5 class="font-baloo font-size-20"><?php echo $item['item_name'] ?? "Unknown"; ?></h5>
                        <small>by <?php echo $item['item_brand'] ?? "Brand"; ?></small>
                        <div class="d-flex">
                            <div class="rating text-warning font-size-12">
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="far fa-star"></i></span>
                            </div>
                            <a href="#" class="px-2 font-rale font-size-14">Ratings sabi nila 4</a>
                        </div>
                        <hr class="m-0">
                        <!--product price-->
                        <table class="my-3">
                            <tr class="font-rale font-size-14">
                                <td>M.P.R</td>
                                <td><strike>192.00</strike></td>
                            </tr>
                            <tr class="font-rale font-size-14">
                                <td>Deal Price</td>
                                <td class="font-size-20 text-danger"><span><?php echo $item['item_price'] ?? "0"; ?></span><small class="text-dark font-size-12">&nbsp;&nbsp;Tax Removed</small></td>
                            </tr>
                            <tr class="font-rale font-size-14">
                                <td>YOu Save</td>
                                <td><span class="font-size-16 text-danger">192.00</span></td>
                            </tr>
                        </table>

                        <!--policy-->
                        <div id="policy">
                            <div class="d-flex">
                                <div class="return text-center mr-5">
                                    <div class="font-size-20 my-2 color-second">
                                        <span class="fas fa-retweet border p-3 rounded-pill"></span>
                                    </div>
                                    <a href="#" class="font-rale font-size-12">10 days <br> replacement</a>
                                </div>
                                <div class="return text-center mr-5">
                                    <div class="font-size-20 my-2 color-second">
                                        <span class="fas fa-truck border p-3 rounded-pill"></span>
                                    </div>
                                    <a href="#" class="font-rale font-size-12">Daily Tuition <br> Delivered</a>
                                </div>
                                <div class="return text-center mr-5">
                                    <div class="font-size-20 my-2 color-second">
                                        <span class="fas fa-check-double border p-3 rounded-pill"></span>
                                    </div>
                                    <a href="#" class="font-rale font-size-12">1 year <br> penalty</a>
                                </div>
                            </div>
                        </div>
                        <hr>

                        <!--order details-->
                        <div id="order-details" class="font-rale d-flex flex-column text-dark">
                            <small>Delivery By: 06-06-06</small>
                            <small>Sold by <a href="#">Me, Dio</a> (Ratings: Bagsak!)</small>
                            <small><i class="fas fa-map-marker-alt color-primary"></i>&nbsp;&nbsp;Deliver to Customer - 42069</small>
                        </div>

                        <div class="row">
                            <!--color-->
                            <div class="col-6">
                                <div class="color my-3">
                                    <div class="d-flex justify-content-between">
                                        <h6 class="font-baloo">Color</h6>
                                        <div class="p-2 color-yellow-bg rounded-circle">
                                            <button class="btn font-size-14"></button>
                                        </div>
                                        <div class="p-2 color-primary-bg rounded-circle">
                                            <button class="btn font-size-14"></button>
                                        </div>
                                        <div class="p-2 color-second-bg rounded-circle">
                                            <button class="btn font-size-14"></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--quantity-->
                            <div class="col-6">
                                <div class="qty d-flex">
                                    <h6 class="font-baloo">Qty:</h6>
                                    <div class="px-4 d-flex font-rale">
                                        <button data-id="pro1" class="qty-up border bg-light"><i class="fas fa-angle-up"></i></button>
                                        <input data-id="pro1" type="text" class="qty_input border px-2 w-50 bg-light" disabled value="1" placeholder="1">
                                        <button data-id="pro1" class="qty-down border bg-light"><i class="fas fa-angle-down"></i></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

<?php
    endif;
    endforeach;
?>