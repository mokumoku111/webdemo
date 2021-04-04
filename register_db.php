<?php 
    session_start();
    include('connect.php');
    
    $errors = array();

    if (isset($_POST['reg_user'])) {
        $username = mysqli_real_escape_string($connect, $_POST['username']);
        $email = mysqli_real_escape_string($connect, $_POST['email']);
        $password_1 = mysqli_real_escape_string($connect, $_POST['password_1']);
        $password_2 = mysqli_real_escape_string($connect, $_POST['password_2']);

        if (empty($username)) {
            array_push($errors, "Username is required");
            $_SESSION['error'] = "Username is required";
        }
        if (empty($email)) {
            array_push($errors, "Email is required");
            $_SESSION['error'] = "Email is required";
        }
        if (empty($password)) {
            array_push($errors, "Password is required");
            $_SESSION['error'] = "Password is required";
        }

        $user_check_query = "SELECT * FROM member WHERE member_username = '$username' OR member_email = '$email' LIMIT 1";
        $query = mysqli_query($connect, $user_check_query);
        $result = mysqli_fetch_assoc($query);

        if ($result) { // if user exists
            if ($result['member_username'] === $username) {
                array_push($errors, "Username already exists");
            }
            if ($result['member_email'] === $email) {
                array_push($errors, "Email already exists");
            }
        }

        if (count($errors) == 0) {
            $password = md5($password_1);

            $sql = "INSERT INTO member (member_username, member_email, password) VALUES ('$username', '$email', '$password')";
            mysqli_query($conn, $sql);

            $_SESSION['member_username'] = $username;
            $_SESSION['success'] = "You are now logged in";
            header('location: index.php');
        } else {
            header("location: register.php");
        }
    }

?>
