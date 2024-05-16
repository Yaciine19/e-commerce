<?php
    session_start();
    $db_server = "localhost";
    $db_user = "root";
    $db_pass  = "";
    $db_name = "daw";
    
    if(isset($_SESSION['id']) && isset($_SESSION['customer'])){

        $conn = mysqli_connect($db_server, $db_user, $db_pass, $db_name);

        $id = $_SESSION['id'];
        $vendor = "Ragueb Yacine";
        $price = $_POST['price'];
        $ref = $_POST['ref'];
        $quantity = $_POST['quantity'];
        $color = $_POST['color'];
        
        $color = implode(', ', $_POST['color']);

        // foreach($_POST['color'] as $value){
        //     $color = $color." ".$value;
        // }
        $req = "INSERT INTO orders (id_cust, vendor, price_prod,ref_prod,quantity,color_prod) VALUES ('$id', '$vendor', '$price','$ref','$quantity','$color')";
        $res = mysqli_query($conn, $req);

        if (!$res) {
            echo "error in server !!";
            //die("Error in query: ".mysqli_error($conn));
        } else{
            echo "<script>alert('your order added successfully.');</script>";
            echo "<a href='Produit.html' style='color:green;'><h2>Back to Home page.</h2></a>";
        }
        mysqli_close($conn);
    } else {
        echo "<script>alert('you must be log in to the website !');</script>";
        echo "<a href='login.html' style='color:red;'><h2>Go to login page.</h2></a>";
    }

    session_destroy();
?>