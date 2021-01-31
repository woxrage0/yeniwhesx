<?php
    session_start();

    if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: ../../");
    exit;
    }
    $link = mysqli_connect("localhost", "root", "", "whitelist");
 
    // Check connection
    if($link === false){
        die("ERROR: Could not connect. " . mysqli_connect_error());
    }

    $linkk = mysqli_connect("localhost", "root", "", "essentialmode");
 
    // Check connection
    if($linkk === false){
        die("ERROR: Could not connect. " . mysqli_connect_error());
    }
    
    
    // Escape user inputs for security
    $hex = mysqli_real_escape_string($link, $_REQUEST['hex']);
    $hex2 = mysqli_real_escape_string($linkk, $_REQUEST['hex']);
    $discord = mysqli_real_escape_string($link, $_REQUEST['discord']);
    $steamprofil = mysqli_real_escape_string($link, $_REQUEST['steamprofil']);

$sql = "INSERT INTO whitelist (hex, discord, steamlink) VALUES ('$hex', '$discord', '$steamprofil')";
if(mysqli_query($link, $sql)){
}

$sqll = "INSERT INTO whitelist (identifier) VALUES ('$hex2')";    
if ($linkk->query($sqll) === TRUE) {
  header('Location: ../'); //If book.php is your main page where you list your all records
  exit; 
}          

mysqli_close($linkk);
mysqli_close($link);

?>
