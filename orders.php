<?php
    include('components/connection.php');

    session_start();

    if(isset($_SESSION['user_id'])){
        $user_id = $_SESSION['user_id'];
    }
    else{
        $user_id = '';
        header('location:home.php');
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Orders</title>

    <!-- cdn -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

    <!-- custom css file link -->
    <link rel="stylesheet" href="./CSS/style.css">

    <!-- font awesome cdn link -->
    <script src="https://kit.fontawesome.com/848e0df24d.js" crossorigin="anonymous"></script>
</head>

<body>
    <!-- header section -->
    <?php include('components/user_header.php'); ?>
    
    
    
    
    
    
    <!-- heading -->
    <div class="heading">
        <h3>orders</h3>
        <p><a href="home.php">home</a> <span> / orders</span></p>
    </div>

    <!-- order section -->
    <section class="orders">

        <h1 class="title">Your orders</h1>

        <div class="box-container">

            <?php
                if($user_id == ''){
                    echo '<p class="empty">Please login to see your orders</p>';
                }
                else{
                    $sql = "SELECT * FROM orders WHERE user_id = '$user_id';";
                    $select_orders = mysqli_query($conn, $sql);
                    $fetch_orders = mysqli_fetch_all($select_orders, MYSQLI_ASSOC);

                    if(count($fetch_orders) > 0){
                        for($i = 0; $i < count($fetch_orders); $i++){
            ?>
            <div class="box">
                <p>Placed on : <span><?= $fetch_orders[$i]['placed_on']; ?></span></p>
                <p>Name : <span><?= $fetch_orders[$i]['name']; ?></span></p>
                <p>Email : <span><?= $fetch_orders[$i]['email']; ?></span></p>
                <p>Number : <span><?= $fetch_orders[$i]['number']; ?></span></p>
                <p>Address : <span><?= $fetch_orders[$i]['address']; ?></span></p>
                <p>Payment method : <span><?= $fetch_orders[$i]['method']; ?></span></p>
                <p>Your orders : <span><?= $fetch_orders[$i]['total_products']; ?></span></p>
                <p>Total price : <span>$<?= $fetch_orders[$i]['total_price']; ?>/-</span></p>
                <p>Payment status : <span style="color:<?php if($fetch_orders[$i]['payment_status'] == 'pending'){ echo 'red'; }else{ echo 'green'; }; ?>"><?= $fetch_orders[$i]['payment_status']; ?></span> </p>
            </div>
            <?php
                    }
                }
                else{
                    echo '<p class="empty">no orders placed yet!</p>';
                }
            }
            ?>

        </div>

    </section>
    
    
    
    <!-- footer section -->
    <?php include('components/footer.php'); ?>



    <div class="loader">
        <img src="images/loader.gif" alt="">
    </div>


    <!-- Script -->
    <script src="./JS/script.js"></script>
</body>

</html>