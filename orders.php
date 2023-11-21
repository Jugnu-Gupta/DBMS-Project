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

        <h1 class="title">your orders</h1>

        <div class="box-container">

            <!-- <?php
           if($user_id == ''){
               echo '<p class="empty">Please login to see your orders</p>';
            }else{
                $select_orders = $conn->prepare("SELECT * FROM `orders` WHERE user_id = ?");
                $select_orders->execute([$user_id]);

                if(count($select_orders->fetchAll(PDO::FETCH_ASSOC)) > 0){
                // if($select_orders->rowCount() > 0){
                 while($fetch_orders = $select_orders->fetch(PDO::FETCH_ASSOC)){
                     ?> -->
            <div class="box">
                <p>placed on : <span>
                    6-11-2023
                    </span></p>
                    <p>name : <span>
                        jugnu gupta
                    </span></p>
                <p>email : <span>
                        jugnugupta@gmail.com
                    </span></p>
                    <p>number : <span>
                        1234567890
                    </span></p>
                    <p>address : <span>
                        flat no. 1, building no. 2, narela, delhi 110040
                    </span></p>
                    <p>payment method : <span>
                        Cash on delivery
                    </span></p>
                <p>your orders : <span>
                        main dish 01 - delicious pizza 01 (1) - delicious dessert (02)
                    </span></p>
                <p>total price : <span>$9</span></p>
                <p> payment status : <span style="color: var(--red);">pending</span></p>
            </div>
            <div class="box">
                <p>placed on : <span>
                        6-11-2023
                    </span></p>
                    <p>name : <span>
                        jugnu gupta
                    </span></p>
                <p>email : <span>
                    jugnugupta@gmail.com
                    </span></p>
                    <p>number : <span>
                        1234567890
                    </span></p>
                    <p>address : <span>
                        flat no. 1, building no. 2, narela, delhi 110040
                    </span></p>
                    <p>payment method : <span>
                        Cash on delivery
                    </span></p>
                <p>your orders : <span>
                        main dish 01 - delicious pizza 01 (1) - delicious dessert (02)
                    </span></p>
                    <p>total price : <span>$9</span></p>
                    <p> payment status : <span style="color: var(--red);">pending</span></p>
                </div>
                <!-- <?php
           }
        }else{
              echo '<p class="empty">no orders placed yet!</p>';
           }
           }
           ?> -->

        </div>

    </section>
    
    

    
    <!-- footer section -->
    <?php include('components/footer.php'); ?>






    <!-- Script -->
    <script src="./JS/script.js"></script>
</body>

</html>