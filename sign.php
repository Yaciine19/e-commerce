<?php
    $lastname = $_REQUEST["lastname"];
    $firstname = $_REQUEST["firstname"];
    $costumer = "{$lastname} {$firstname}";   
    
    $age = $_REQUEST["age"];
    $wilaya = $_REQUEST["wilaya"];
    $tel = $_REQUEST["telephone"];
    $adress = $_REQUEST["adr"];
    $email = $_REQUEST["email"];
    $password = $_REQUEST["password"];
    $sex = $_REQUEST["sex"];

    // DATABASE INFO
    $db_server = "localhost";
    $db_user = "root";
    $db_pass  = "";
    $db_name = "daw";
    // Create connection
    $conn = mysqli_connect($db_server, $db_user, $db_pass, $db_name);

    $req = "INSERT INTO costumers (costumer, age, wilaya, numTel, email, adress, password, sex) VALUES ('$costumer', '$age', '$wilaya', '$tel', '$email', '$adress', '$password', '$sex')";

    if (!mysqli_query($conn,$req)) {
        die("Error in query: ".mysqli_error($conn));
    } else{
        echo "<script>alert('The customer {$costumer} added successfully.');</script>";
        echo "<a href='Produit.html' style='color:green;'><h2>Back to Home page.</h2></a>";
    }
    mysqli_close($conn);
?>