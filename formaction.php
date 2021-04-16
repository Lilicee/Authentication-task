<?php

if(isset($_POST['submit'])){
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $email = $_POST['email'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $confirmPass = $_POST['confirmPass'];
 
 
 
    $info_array = [
        'firstname' => $firstname,
        'lasstname' => $lastname,
        'email' => $email,
        'username' => $username,
        'password' => $password,
        'confirmPass' => $confirmPass
 
    ];
 
    echo "welcome" . $_POST['firstname']. "<br><br>";
    echo "Your email address is " . $_POST['email'];
 
    file_put_contents(filename: 'files/' . $info_array['firstname'] . ".json", data: json_encode(value: $info_array));
 }
    
?>