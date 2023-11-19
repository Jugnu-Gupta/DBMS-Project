<?php
    include('components/connection.php');

    session_start();

    if(isset($_SESSION['user_id'])){
        $user_id = $_SESSION['user_id'];
    }
    else{
        $user_id = '';
    }


    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $email = $_POST['email'];
        $email = filter_var($email, FILTER_SANITIZE_STRING);
        $pass = $_POST['pass'];
        $pass = filter_var($pass, FILTER_SANITIZE_STRING);
        echo $email."<br>".$pass."<br> inputs";

        $sql = "select * from `users` where email = .$email and password = `$pass`";
        $select_user = mysqli_query($conn, $sql);
        $rows = mysqli_fetch_all($select_user, MYSQLI_ASSOC);
        // $select_user = $conn->query($sql);
        
        // $select_user = $conn->prepare("select * from `users` where email = ? and password = ?");
        // $select_user->execute([$email, $pass]);
        // $row = $select_user->fetch(PDO::FETCH_ASSOC);
        
        // $temp = $conn->prepare("select * from `users` where password = ?;");
        // $temp->execute([$pass]);
        // $temp = $temp->fetchAll(PDO::FETCH_ASSOC);
        // foreach($temp as $t){
        //     echo "pass <br>".$t['id']."<br>".$t['name']."<br>".$t['email']."<br>".$t['password']."<br>".strlen($t['password'])."<br>";
        // }


        // $temp2 = $conn->prepare("select * from `users` where email = ?;");
        // $temp2->execute([$email]);
        // $temp2 = $temp2->fetchAll(PDO::FETCH_ASSOC);
        // foreach($temp2 as $t){
        //     echo "email <br>".$t['id']."<br>".$t['name']."<br>".$t['email']."<br>".$t['password']."<br>".strlen($t['password'])."<br>";
        // }



        if(count($rows) > 0){
            $_SESSION['user_id'] = $row['id'];
            // header('location:home.php');
            $message[] = 'Login Successful';
        }
        else{
            $message[] = 'Incorrect email or password!';
        }
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

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
    
    
    
    
    
    

    <!-- login section -->
    <section class="form-container">

        <form action="" method="post">
            <h3>Login Now</h3>
            <input type="email" name="email" required placeholder="Enter your email" class="box" maxlength="50"
            oninput="this.value = this.value.replace(/\s/g, '')">
            <input type="text" name="pass" required placeholder="Enter your password" class="box" maxlength="50"
                oninput="this.value = this.value.replace(/\s/g, '')">
            <input type="submit" value="login now" name="submit" class="btn">
            <p>don't have an account? <a href="register.php">register now</a></p>
        </form>

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