<!doctype html>
<?php
$prod = null;
$prod = new product();
$pro = $prod->getProductById($_GET['id']);
?>
<html>
    <?php
    include '../view/head.php';
    ?>
    <div class="main">
        <div class="wrap">
            <ul class="breadcrumb breadcrumb__t"><a class="home" href="#">Home</a> / <a href="#">Dolor sit amet</a> / <?php echo $pro['name']; ?></ul>
            <div class="cont span_2_of_3">
                <div class="grid images_3_of_2">
                    <div id="container">
                        <div id="products_example">
                            <div id="products">
                                <img src="images/<?php echo $pro['img']; ?>" alt=""/>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="desc1 span_3_of_2">
                    <h3 class="m_3"><?php echo $pro['name']; ?></h3>
                    <p class="m_5">$<?php echo $pro['price']; ?></p>

                    <div class="btn_form">

                        <form action="?action=order" method="post">
                            
                            <input type="hidden" name="productkey" value="<?php echo $pro['Id'];?>"/>
                            Quantity :
                            <select name="itemqty">  
                                <?php for ($i = 1; $i <= 10; $i++): ?>
                                    <option value="<?php echo $i; ?>">
                                        <?php echo $i ?>
                                    </option>
                                <?php endfor; ?>
                            </select>
                            <input type="submit" value="buy" style="padding: 2px 15px 2px 15px">
                        </form>
                    </div>
                    <span class="m_link"><a href="?action=acc_login_form">login to save in wishlist</a> </span>
                    <p class="m_text2"><?php echo $pro['detail']; ?></p>
                </div>
                <div class="clear"></div>	
                <div class="clients">
                    <h3 class="m_3">10 Other Products in the same category</h3>
                    <ul id="flexiselDemo3">
                        <li><img src="images/s5.jpg" /><a href="#">Category</a><p>$ 600</p></li>
                        <li><img src="images/s6.jpg" /><a href="#">Category</a><p>$ 850</p></li>
                        <li><img src="images/s7.jpg" /><a href="#">Category</a><p>$ 900</p></li>
                        <li><img src="images/s8.jpg" /><a href="#">Category</a><p>$ 550</p></li>
                        <li><img src="images/s9.jpg" /><a href="#">Category</a><p>$ 750</p></li>
                    </ul>
                    <script type="text/javascript">
                        $(window).load(function() {
                            $("#flexiselDemo1").flexisel();
                            $("#flexiselDemo2").flexisel({
                                enableResponsiveBreakpoints: true,
                                responsiveBreakpoints: { 
                                    portrait: { 
                                        changePoint:480,
                                        visibleItems: 1
                                    }, 
                                    landscape: { 
                                        changePoint:640,
                                        visibleItems: 2
                                    },
                                    tablet: { 
                                        changePoint:768,
                                        visibleItems: 3
                                    }
                                }
                            });
		
                            $("#flexiselDemo3").flexisel({
                                visibleItems: 5,
                                animationSpeed: 1000,
                                autoPlay: true,
                                autoPlaySpeed: 3000,    		
                                pauseOnHover: true,
                                enableResponsiveBreakpoints: true,
                                responsiveBreakpoints: { 
                                    portrait: { 
                                        changePoint:480,
                                        visibleItems: 1
                                    }, 
                                    landscape: { 
                                        changePoint:640,
                                        visibleItems: 2
                                    },
                                    tablet: { 
                                        changePoint:768,
                                        visibleItems: 3
                                    }
                                }
                            });
		    
                        });
                    </script>
                    <script type="text/javascript" src="js/jquery.flexisel.js"></script>
                </div>

            </div>
            <div class="rsingle span_1_of_single">
                <h5 class="m_1">Categories</h5>
                <select class="dropdown" tabindex="8" data-settings='{"wrapperClass":"metro"}'>
                    <option value="1">Mens</option>
                    <option value="2">Sub Category1</option>
                    <option value="3">Sub Category2</option>
                    <option value="4">Sub Category3</option>
                </select>
                <select class="dropdown" tabindex="8" data-settings='{"wrapperClass":"metro"}'>
                    <option value="1">Womens</option>
                    <option value="2">Sub Category1</option>
                    <option value="3">Sub Category2</option>
                    <option value="4">Sub Category3</option>
                </select>
                <ul class="kids">
                    <li><a href="#">Kids</a></li>
                    <li class="last"><a href="#">Glasses Shop</a></li>
                </ul>
                <section  class="sky-form">
                    <h4>Price</h4>
                    <div class="row row1 scroll-pane">
                        <div class="col col-4">
                            <label class="checkbox"><input type="checkbox" name="checkbox" checked=""><i></i>$ 500 - $ 700</label>
                        </div>
                        <div class="col col-4">
                            <label class="checkbox"><input type="checkbox" name="checkbox"><i></i>$ 700 - $ 1000</label>
                            <label class="checkbox"><input type="checkbox" name="checkbox"><i></i>$ 1000 - $ 1500</label>
                            <label class="checkbox"><input type="checkbox" name="checkbox"><i></i>$ 1500 - $ 2000</label>
                            <label class="checkbox"><input type="checkbox" name="checkbox"><i></i>$ 2000 - $ 2500</label>
                            <label class="checkbox"><input type="checkbox" name="checkbox" ><i></i>$ 2500 - $ 3000</label>
                            <label class="checkbox"><input type="checkbox" name="checkbox"><i></i>$ 3500 - $ 4000</label>
                            <label class="checkbox"><input type="checkbox" name="checkbox"><i></i>$ 4000 - $ 4500</label>
                            <label class="checkbox"><input type="checkbox" name="checkbox"><i></i>$ 4500 - $ 5000</label>
                            <label class="checkbox"><input type="checkbox" name="checkbox"><i></i>$ 5000 - $ 5500</label>
                            <label class="checkbox"><input type="checkbox" name="checkbox"><i></i>$ 5500 - $ 6000</label>
                            <label class="checkbox"><input type="checkbox" name="checkbox"><i></i>$ 6000 - $ 6500</label>
                            <label class="checkbox"><input type="checkbox" name="checkbox"><i></i>$ 6500 - $ 7000</label>
                            <label class="checkbox"><input type="checkbox" name="checkbox"><i></i>$ 7000 - $ 7500</label>
                            <label class="checkbox"><input type="checkbox" name="checkbox"><i></i>$ 7500 - $ 8000</label>
                            <label class="checkbox"><input type="checkbox" name="checkbox"><i></i>$ 8000 - $ 8500</label>	
                        </div>
                    </div>
                </section>

                <section  class="sky-form">
                    <h4>Colors</h4>
                    <ul class="color-list">
                        <li><a href="#"> <span class="color1"> </span><p class="red">Red</p></a></li>
                        <li><a href="#"> <span class="color2"> </span><p class="red">Green</p></a></li>
                        <li><a href="#"> <span class="color3"> </span><p class="red">Blue</p></a></li>
                        <li><a href="#"> <span class="color4"> </span><p class="red">Yellow</p></a></li>
                        <li><a href="#"> <span class="color5"> </span><p class="red">Violet</p></a></li>
                        <li><a href="#"> <span class="color6"> </span><p class="red">Orange</p></a></li>
                        <li><a href="#"> <span class="color7"> </span><p class="red">Gray</p></a></li>
                    </ul>
                </section>
                <script src="js/jquery.easydropdown.js"></script>
            </div
            <div class="clear"></div>
        </div>
        <div class="clear"></div>
    </div>
</div>


<?php
include '../view/footer.php';
?>


</body>
</html>
