<?php
    if (!empty($_POST))
    {
    echo "<h1>Welcome ". htmlspecialchars($_POST['fname']). "!</h1><br>";
    echo "Below are your information:<br>";
    echo "Name: ". htmlspecialchars($_POST['fname']). " " . htmlspecialchars($_POST['lname']). "<br>";
    echo "Date of Birth: ". htmlspecialchars($_POST['dob']). "<br>";
    echo "Blood Group: ". htmlspecialchars($_POST['blood']). "<br>";
    echo "Phone: ". htmlspecialchars($_POST['tel']). "<br>";
    echo "Email: ". htmlspecialchars($_POST['mail']). "<br>";
    }
    else {
    echo "No GET data passed!";
    }
?>