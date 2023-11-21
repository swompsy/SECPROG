<?php
    session_start();
    if($_SESSION['login'] !== true){
        header("Location: login.php");
    }
    require "../Controllers/Connection.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/CSS/cart.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lexend&display=swap" rel="stylesheet">
    <title>Cart Page</title>
</head>
<body>
    <header class="header">
        <div class="header-inner">
            <div class="logo-container">
                <img src="/assets/veji-logo.png" alt="Your Logo">
            </div>
            
            <div class="search-bar-container">
                <div class="search-bar">
                    <input type="text" placeholder="Search">
                    <button class="search-close">&times;</button>
                </div>
            </div>

            <div class="additional-logos">
                <a href="#"><img src="/assets/search.png" alt="Logo 1"  class="search-icon" class="logo"></a>
                <a href="/HTML/wishlist.html"><img src="/assets/wishlist.png" alt="Logo 2" class="logo"></a>
                <a href="/HTML/payment.php"><img src="/assets/history.png" alt="Logo 3" class="logo"></a>
                <a href="/HTML/cart.php"><img src="/assets/keranjang.png" alt="Logo 4" class="logo"></a>
                <a href="/HTML/profile.php"><img src="/assets/v-logo.png" alt="Logo 5" class="logo"></a>
            </div>
        </div>
    </header>

    <nav class="navbar">
        <ul class="nav-list">
            <li><a href="/HTML/home.php">Home</a></li>
            <li><a href="/HTML/about.html">About Us</a></li>
        </ul>
    </nav>
    
    <?php 
$query = "SELECT * FROM cart WHERE userid=?;";
$stmt = $db->prepare($query);
$stmt->bind_param("i", $_SESSION['userid']);
$stmt->execute();
$resultlist = $stmt->get_result();
$_SESSION['Total']=0;
?>
    <div class="checklist-box">
        <ul>
        <?php
            while ($rowlist = $resultlist->fetch_assoc()){
                $query = "SELECT * FROM Product WHERE productid=?;";
                $stmt = $db->prepare($query);
                $stmt->bind_param("i", $rowlist['ProductID']);
                $stmt->execute();
                $resultproduct = $stmt->get_result();
                $rowproduct = $resultproduct->fetch_assoc();
            ?>
            <li>
                <!-- <input type="checkbox" id="item1"> -->
                <div class="image-list">
                    <img src="<?php echo $rowproduct['Image'];?>" alt="">
                </div>
                <div class="name-price">
                    <h1><?php echo $rowproduct['Name'];?></h1>
                    <h1><?php echo 'Rp.' . $rowproduct['Price'] . '.000';?></h1>
                </div>

                <?php
                    $value = isset($_POST['item']) ? $_POST['item'] : 1; //to be displayed
                    if(isset($_POST['increase'])){
                    $value += 1;
                    }

                    if(isset($_POST['decrease'])){
                    $value -= 1;                                            
                    }
                ?>
                <<form method='post' action='<?= $_SERVER['PHP_SELF']; ?>' onsubmit="return validateQuantity()">
                    <div class="quantity-control">
                        <h4 class="decrease">Quantity: </h4>
                        <h4 class="decrease"></h4>
                        <input type='text' size='1' name='item' id='quantityInput' value='<?= $value; ?>' />
                        <button type="submit">Submit</button>
                    </div>
                </form>

                <script>
                    function validateQuantity() {
                        var quantityInput = document.getElementById('quantityInput');
                        var quantityValue = parseInt(quantityInput.value, 10);

                        if (isNaN(quantityValue) || quantityValue < 0) {
                            alert('Please enter a valid non-negative quantity.');
                            return false; // Prevent the form from submitting
                        }

                        return true; // Allow the form to submit
                    }
                </script>

                <?php $_SESSION['Total']+=$rowproduct['Price']*$value;?>

            </li>
            <?php
};
$db->close();
?>
        </ul>
    </div>
   

    <footer class="footer">
        <div class="total-price">
            <h1 class="price-total">Total</h1>
            <h1 class="price-amount"><?php echo 'Rp. '.$_SESSION['Total'].'.000';?></h1>
        </div>
        <div class="Payment-Proceed">
            <h1>Proceed To Payment</h1>
            <a href="./payment.php"><img src="/assets/NextArrow.png" alt=""></a>
            
        </div>   
    </footer>

    <script src="/JS/cart.js"></script>
</body>
</html>