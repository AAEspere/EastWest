<?php 

    //register stuff
    session_start();

    //fields
    $email = "";
    $fName = "";
    $lName = "";


    $errors = array();

    $db = mysqli_connect('localhost', 'root', '', 'registration');

    if(isset($_POST['reg_user'])) {
        $email = mysqli_real_escape_string($db, $_POST['email']);
        $fName = mysqli_real_escape_string($db, $_POST['fName']);
        $lName = mysqli_real_escape_string($db, $_POST['lName']);
        $pass = mysqli_real_escape_string($db, $_POST['pass']);
        $passreenter = mysqli_real_escape_string($db, $_POST['pass-reenter']);
        $secretCode = mysqli_real_escape_string($db, $_POST['secret']);

        if(empty($email)) { array_push($errors, "Email is required");}
        if(empty($fName)) { array_push($errors, "First Name is required");}
        if(empty($lName)) { array_push($errors, "Last Name is required");}
        if($pass != $passreenter) {
            array_push($errors, "Passwords do not match");
        }

        $codeQuery = "SELECT * FROM codes WHERE secretCode = '$secretCode'";
        $result = mysqli_query($db, $codeQuery);

        if(mysqli_num_rows($results) == 0) {
            array_push($errors, "Secret Code does not match");
        }

        //check for existing user

    }

    //log in stuff
    if(isset($_POST['login_user'])) {
        $email = mysqli_real_escape_string($db, $_POST['email']);
        $password = mysqli_real_escape_string($db, $_POST['password']);

        if(empty($email)) {
            array_push($errors, "Email is required");
        }
        if(empty($password)) {
            array_push($errors, "Password is required");
        }
        
        if(count($errors) == 0) {
            $password = md5($password);
            $query = "SELECT * FROM users WHERE email='$email' AND password = '$password'";
            $results = mysqli_query($db, $query);

            if(mysqli_num_rows($results) == 1) {
                $_SESSION['email'] = $email;
                $_SESSION['sucesss'] = "You are now logged in";
                header('location: index.php');
            } else {
                array_push($errors, "Username and password combination does not exist");
            }
        }
    }

?>