<!doctype html>
<html>
    <?php
    if (!isset($_SESSION["\/m&coppy;admin"])) {
        header("Location:admincontroller.php?action=admin");
    }
    include '../view/head.php';
    ?>
    <div class="register_account">
        <div class="wrap">
            <h4 class="title">Delete Product</h4>
            <form method="post" action="admincontroller.php">
                <input type='hidden' name='action' value='del_pro'/>
                <div class="col_1_of_2 span_1_of_2">	
                    <div><input type="text" name="id" placeholder="Enter product id"/></div>
                    <button type="submit" class="grey">Submit</button>
                </div>

                <div class="clear"></div>
            </form>
        </div>
    </div>
    <?php
    include '../view/footer.php';
    ?>


</body>
</html>
