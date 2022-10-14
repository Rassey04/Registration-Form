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
        <h3 class="mb-4">Registration Form</h3>
        <form id="registrationForm" action="register-post.php" method="POST">
            <div class="form-group row">
                <label for="" class="col-sm-4 col-form-label">First Name</label>
                <div class="col-sm-8">
                    <input type="" class="form-control" id="" name="first_name">
                </div>
            </div>
            <div class="form-group row">
                <label for="" class="col-sm-4 col-form-label">Middle Name</label>
                <div class="col-sm-8">
                    <input type="" class="form-control" id="" name="middle_name">
                </div>
            </div>
            <div class="form-group row">
                <label for="" class="col-sm-4 col-form-label">Last Name</label>
                <div class="col-sm-8">
                    <input type="" class="form-control" id="" name="last_name">
                </div>
            </div>
            <div class="form-group row">
                <label for="" class="col-sm-4 col-form-label">Gender</label>
                <div class="col-sm-8">
                    <select class="custom-select my-1 mr-sm-2" id="" name="gender">
                        <option value="Male" selected>Male</option>
                        <option value="Female">Female</option>
                    </select>
                </div>
            </div>
            <div class="form-group row">
                <label for="" class="col-sm-4 col-form-label">UserName</label>
                <div class="col-sm-8">
                    <input type="" class="form-control" id="" name="username">
                </div>
            </div>
            <div class="form-group row">
                <label for="" class="col-sm-4 col-form-label">Password</label>
                <div class="col-sm-8">
                    <input type="password" class="form-control" id="" name="password">
                </div>
            </div>
            <div class="form-group row">
                <label for="" class="col-sm-4 col-form-label">Confirm Password</label>
                <div class="col-sm-8">
                    <input type="password" class="form-control" id="" name="confirm_password">
                </div>
            </div>

            <div class="form-group row">
                <label for="" class="col-sm-4"></label>
                <div class="col-sm-8">
                    <div class="form-group row">
                        <div class="col-sm-8">
                            <button type="submit" class="btn btn-primary">Sign in</button>
                            <button type="button" class="btn btn-secondary" onclick="newFunction()">Reset</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</body>

<script>
    function newFunction() {
        document.getElementById("registrationForm").reset();
    }
</script>

</html>