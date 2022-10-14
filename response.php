<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous"> -->
</head>

<body>
    <div class="container mt-3 p-5 border" style="max-width: 800px;">
        <h3 class="mb-4">Registration Successfull</h3>
        <form id="registrationForm" action="register-post.php" method="POST">
            <div class="form-group row">
                <label for="" class="col-sm-4 col-form-label">First Name: <?php echo $first_name ?></label>
            </div>
            <div class="form-group row">
                <label for="" class="col-sm-4 col-form-label">Middle Name: <?php echo $middle_name ?></label>
            </div>
            <div class="form-group row">
                <label for="" class="col-sm-4 col-form-label">Last Name: <?php echo $last_name ?></label>
            </div>
            <div class="form-group row">
                <label for="" class="col-sm-4 col-form-label">Gender: <?php echo $gender ?></label>
            </div>
            <div class="form-group row">
                <label for="" class="col-sm-4 col-form-label">UserName: <?php echo $username ?></label>
            </div>
            <div class="form-group row">
                <label for="" class="col-sm-4 col-form-label">Password: <?php echo $password ?></label>
            </div>
            <div class="form-group row">
                <label for="" class="col-sm-4 col-form-label">Confirm Password: <?php echo $confirm_password ?></label>
            </div>
        </form>
    </div>
</body>