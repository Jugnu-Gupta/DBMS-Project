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
        $name = $_POST['name'];
        $name = filter_var($name, FILTER_SANITIZE_STRING);
        $email = $_POST['email'];
        $email = filter_var($email, FILTER_SANITIZE_STRING);
        $number = $_POST['number'];
        $number = filter_var($number, FILTER_SANITIZE_STRING);
        $pass = $_POST['pass'];
        $pass = filter_var($pass, FILTER_SANITIZE_STRING);
        $cpass = $_POST['cpass'];
        $cpass = filter_var($cpass, FILTER_SANITIZE_STRING);


        $sql = "select * from users where email = '$email' OR number = '$number';";
        $select_user = mysqli_query($conn, $sql);
        $select_user = mysqli_fetch_all($select_user, MYSQLI_ASSOC);

        if(count($select_user) > 0){
            $message[] = 'Email or Number is already taken!';
        }
        elseif($pass != $cpass){
                $message[] = 'Confirm password not matched';
        }
        else{
            $sql = "Insert into users(name, email, number, password) values('$name', '$email', '$number', '$pass');";
            $select_user = mysqli_query($conn, $sql);
            
            $sql = "select * from `users` where email = '$email' and password = '$pass';";
            $confirm_user = mysqli_query($conn, $sql);
            $row = mysqli_fetch_all($confirm_user, MYSQLI_ASSOC);

            if(count($row) > 0){
                $_SESSION['user_id'] = $row[0]['id'];
                // header('location:home.php');
                $message[] = 'Registered Successfully!!';
            }
            else{
                $message[] = 'Some error';
            }
        }
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>

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
    
    
    
    
    
    
    
    <!-- register section -->
    <section class="form-container">

        <form action="" method="post">
            <h3>Register Now</h3>
            <input type="text" name="name" required placeholder="Enter your name" class="box" maxlength="50">
            <input type="email" name="email" required placeholder="Enter your email" class="box" maxlength="50">
            <input type="number" name="number" required placeholder="Enter your number" class="box" min="0"
            max="9999999999" maxlength="10">
            <input type="password" name="pass" required placeholder="Enter your password" class="box" maxlength="50"
                oninput="this.value = this.value.replace(/\s/g, '')">
                <input type="password" name="cpass" required placeholder="Confirm your password" class="box" maxlength="50"
                oninput="this.value = this.value.replace(/\s/g, '')">
            <input type="submit" value="Register Now" name="submit" class="btn">
            <p>already have an account? <a href="login.php">login now</a></p>
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