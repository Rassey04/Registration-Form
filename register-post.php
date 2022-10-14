<?php

$first_name = $_POST['first_name'];
$middle_name = $_POST['middle_name'];
$last_name = $_POST['last_name'];
$gender = $_POST['gender'];
$username = $_POST['username'];
$password = $_POST['password'];
$confirm_password = $_POST['confirm_password'];

//validation

$checkIssetArray = [$first_name, $last_name, $middle_name, $gender, $username, $password, $confirm_password];
$responseArray = ["first name",  "last name",  "middle name",  "gender",  "username",  "password",  "confirm password"];

$errCounter = 0;
$str = "";

foreach ($checkIssetArray as $key => $checkIsset) {
    if (isset($checkIsset)) {
        if ($checkIsset !== "") {
            $errCounter += 1;
        } else {
            echo "Please Enter " . $responseArray[$key];
        }
    }
}

if ($confirm_password !== $password) {
    echo "Your password does not match with the confirm password";
    echo '</br><a href="index.php"> Return to Registration Page </a>';
    $errCounter += 1;
}

?>

<?php
if ($errCounter === 7) {
    include 'response.php';
}
?>


<script>
    function newFunction() {
        document.getElementById("registrationForm").reset();
    }
</script>


</html>