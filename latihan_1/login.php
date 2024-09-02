<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Perpus Online</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="row justify-content-center" style="margin-top:50px;">
            <div class="col-md-6 rounded bg-light" style="box-shadow: 4px 4px 5px -4px; padding: 20px;">
                <h3 class="text-center">Perusahaan</h3>
                <form action="proses_login.php" method="post">
                    <!-- Username input -->
                    <div class="form-outline mb-4">
                        <input type="text" name="username" id="form2Example1" class="form-control" required />
                        <label class="form-label" for="form2Example1">Username</label>
                    </div>
                    <!-- Password input -->
                    <div class="form-outline mb-4">
                        <input type="password" name="password" id="form2Example2" class="form-control" required />
                        <label class="form-label" for="form2Example2">Password</label>
                    </div>
                    <!-- Checkbox -->
                    <div class="form-check d-flex justify-content-center mb-4">
                        <input class="form-check-input" type="checkbox" value="" id="form2Example31" />
                        <label class="form-check-label" for="form2Example31"> Remember me </label>
                    </div>
                    <!-- Submit button -->
                    <div class="text-center">
                        <button type="submit" name="login" class="btn btn-success btn-block mb-4">LOGIN</button>
                    </div>
                    <!-- Register buttons -->
                    <div class="text-center">
                        <p>Not a member? <a href="#!">Register</a></p>
                        <p>or sign up with:</p>
                        <button type="button" class="btn btn-link btn-floating mx-1">
                            <i class="fab fa-facebook-f"></i>
                        </button>
                        <button type="button" class="btn btn-link btn-floating mx-1">
                            <i class="fab fa-google"></i>
                        </button>
                        <button type="button" class="btn btn-link btn-floating mx-1">
                            <i class="fab fa-twitter"></i>
                        </button>
                        <button type="button" class="btn btn-link btn-floating mx-1">
                            <i class="fab fa-github"></i>
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>
