<?php
if(isset($_POST['Log in'])){
    $Username = $_POST['Username'];
    $Password = $_POST['Password'];
    
 
 
    $info_array = [
        'Username' => $Username,
        'Password' => $lastname,
    
 
    ];
 
    echo "welcome" . $_POST['Username']. "<br><br>";
    echo "You have successfully logged in";
 
    file_put_contents(filename: 'files/' . $info_array['firstname'] . ".json", data: json_encode(value: $info_array));
 }
?>