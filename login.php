<?php
    session_start();
    $email = $_REQUEST["email"];
    $password = $_REQUEST["password"];

    $db_server = "localhost";
    $db_user = "root";
    $db_pass  = "";
    $db_name = "daw";
    
    $conn = mysqli_connect($db_server, $db_user, $db_pass, $db_name);

    $req = "SELECT * FROM costumers where email = '$email' and password = '$password' ";

    $res = mysqli_query($conn, $req);

    if(mysqli_num_rows($res) > 0){
        $n = mysqli_fetch_array($res);
        $id = $n[0];
        $customer = $n[1];

        $_SESSION['id'] = $id;
        $_SESSION['customer'] = $customer;

        echo "<script>alert('You can now order your products.');</script>";
        echo "<a href='Produit.html' style='color:green;'><h2>Back to Home page.</h2></a>";
    }else{
        echo "<h2>Email or password can not found !</h2><br>";
        echo "<a href='login.html' style=' color: red;'><h2>Back to login page.</h2></a>";
        // die("Error in query: ".mysqli_error($conn));
    }


?>