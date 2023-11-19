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


        $select_user = $conn->prepare("select * from `users` where email = ? OR number = ?");
        $select_user->execute([$email, $number]);

        if(count($select_user->fetchAll(PDO::FETCH_ASSOC)) > 0){
        // if($select_user->rowCount() > 0){
            $message[] = 'Email or Number is already taken!';
        }
        else{
            if($pass != $cpass){
                $message[] = 'Confirm Password Not Matched';
            }
            else{
                $insert_user = $conn->prepare("Insert into `users` (name, email, number, password) 
                values (?, ?, ?, ?);");
                $insert_user->execute([$name, $email, $number, $cpass]);
                $confirm_user = $conn->prepare("select * from `users` where email = ? and password = ?");
                $confirm_user->execute([$email, $pass]);
                $row = $confirm_user->fetch(PDO::FETCH_ASSOC);
                
                if(count($confirm_user->fetchAll(PDO::FETCH_ASSOC)) > 0){
                // if($confirm_user->rowCount() > 0){
                    $_SESSION['user_id'] = $row['id'];
                    header('location:home.php');
                }
                else{
                    $message[] = 'Some error';
                }
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
            <input type="submit" value="register now" name="submit" class="btn">
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