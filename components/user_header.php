<?php

    if(isset($message)){
        foreach($message as $message){
            echo '<div class="message">
                    <span>'.$message.'</span>
                    <i class="fas fa-times" onclick="this.parentElement.remove();"></i>
                </div>';
        }
    }
    else{
        $user_id = '';
    }
    // echo $_SESSION['user_id'];
?>

<!-- header section -->
<header class="header">
    <section class="flex">
        <a href="home.php" class="logo">Food Dash 😋</a>

        <nav class="navbar">
            <a href="home.php">home</a>
            <a href="about.php">about</a>
            <a href="menu.php">menu</a>
            <a href="orders.php">order</a>
            <a href="contact.php">contact</a>
        </nav>

        <div class="icons">
            <?php
                    $count_user_cart_items = $conn->prepare("Select * from `cart`
                    where id = ?");
                    $count_user_cart_items->execute([$user_id]);
                    $total_user_cart_items = $count_user_cart_items->rowCount();
                ?>
            <a href="search.php"><i class="fa-solid fa-magnifying-glass"></i></a>
            <a href="cart.php"><i class="fa-solid fa-cart-shopping"></i><span>(<?php echo $total_user_cart_items; ?>)</span></a>
            <div id="user-btn" onclick="userBtnClickHandler()" class="fa-solid fa-user"></div>
            <div id="menu-btn" onclick="menuBtnClickHandler()" class="fa-solid fa-bars"></div>
        </div>

        <div class="profile">
            <?php
                $select_profile = $conn->prepare("select * from `users` where id = ?");
                $select_profile->execute([$user_id]);
                if(count($select_profile->fetchAll(PDO::FETCH_ASSOC)) > 0){
                    // if($select_profile->rowCount() > 0){
                    // $fetch_profile = $select_profile->fetch(PDO::FETCH_ASSOC);
                    //     echo $fetch_profile['id']."<br>".$fetch_profile['name']."<br>".$fetch_profile['password'];
                    $fetch_profile = $select_profile->fetch(PDO::FETCH_ASSOC);

// Check if $fetch_profile is an array before accessing its elements
if (is_array($fetch_profile)) {
    echo $fetch_profile['id'] . "<br>" . $fetch_profile['name'] . "<br>" . $fetch_profile['password'];
} else {
    // Handle the case where the query didn't return an array
    echo "Query failed or no result";
}
            ?>
            <p class="name"><?= $fetch_profile['name']; ?></p>
            <div class="flex">
                <a href="profile.php" class="btn">Profile</a>
                <a href="components/user_logout.php" onclick="return confirm('logout from this website?');"
                    class="delete-btn">Logout</a>
            </div>
            <!-- <p class="account"><a href="register.php">Register</a> or <a href="login.php">Login</a></p> -->
            <?php
                }
                else{
                ?>
            <p class='name'>Please login first</p>
            <a href="login.php" class="btn">Login</a>
            <?php
                }
                ?>
        </div>
    </section>
</header>