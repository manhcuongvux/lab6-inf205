<!doctype html>
<html>
    <?php
    include '../view/head.php';

    if (!isset($_SESSION['cartview']) || count($_SESSION['cartview']) == 0) {
        echo '<div class="register_account">
              <div class="wrap">
    	      <h4 class="title">Shopping cart is empty</h4>
    	      <p class="cart">You have no items in your shopping cart.
              <br>Click<a href="?action=home" style="color:blue"> here</a> to continue shopping</p>
    	      </div>
    	      </div>';
        unset($_SESSION['tongtien']);
    } else {
        ?>
        <form action="?action=update_cart" class="list" method="post">

            <h2>Your's Cart</h2>
            <table>
                <tr class="manage1">

                    <td>Name</td>
                    <td>Price</td>
                    <td>Quantity</td>
                    <td>Image</td>
                    <td>Total</td>


                </tr>
                <?php
                foreach ($_SESSION['cartview'] as $key => $item):
                    $cost = number_format($item['cost'], 2);
                    $total = number_format($item['total'], 2);
                    ?>
                    <tr>
                        <td> <?php echo $item['name']; ?> </td>
                        <td> <?php echo "$ " . $cost; ?> </td>
                        <td> <input type="text" name="newqty[<?php echo $key; ?>]" value="<?php echo $item['qty']; ?>" size="4"/> </td>
                        <td> <img width="100" height="70" src="images/<?php echo $item['img']; ?>" alt="" /> </td> 
                        <td> <?php echo "$ " . $total; ?> </td> 
                    </tr>

                <?php endforeach; ?>
                <tr>
                    <td colspan="3">
                        <b>Total amount</b>
                    </td>
                    <td colspan="2"> 
                        <h3>$ <?php echo get_subtotal(); ?></h3>
                        <?php
                        $tongtien = get_subtotal();
                        $tongsanpham = get_subtotalitem();

                        $_SESSION['tongtien'] = $tongtien;
                        $_SESSION['tongsanpham'] = $tongsanpham;
                        ?>
                    </td>
                </tr>

                <tr>
                    <td colspan="5">
                        <input type="submit" value="Update Cart" class="btn"/>
                    </td>
                </tr>

            </table>
            <article class="link">
                <a href="?action=home">Add New</a>
                <a href="?action=update_pro_form">Payments</a>
                <a href="?action=delete_cart">Deleted</a>
                <br clear="both">
            </article>
            <br/>

        </form>
        <?php
    }
    ?>

    <?php
    include '../view/footer.php';
    ?>

</body>
</html>
