<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $firstname = htmlspecialchars($_POST['firstname']);
    $lastname = htmlspecialchars($_POST['lastname']);
    $email = htmlspecialchars($_POST['email']);
    $password = htmlspecialchars($_POST['password']); 
    $confirmpassword = htmlspecialchars($_POST['confirmpassword']);
    $malecheck = htmlspecialchars($_POST['malecheck']);

    echo "<h1>Registration Details</h1>";
    echo "<p><strong>First Name:</strong> $firstname</p>";
    echo "<p><strong>Last Name:</strong> $lastname</p>";
    echo "<p><strong>Email:</strong> $email</p>";
    echo "<p><strong>Password:</strong> $password</p>";
    echo "<p><strong>Confirm Password:</strong> $confirmpassword</p>";
    if ($malecheck) {
        echo "<p><strong>Gender:</strong> Male</p>";
    } else {
        echo "<p><strong>Gender:</strong>Female</p>";
    }
} else {
    echo "<p>Invalid.</p>";
}
?>
