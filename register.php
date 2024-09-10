<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Purple Admin</title>
    <!-- plugins:css -->
    
    <link rel="stylesheet" href="admin/assets/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="admin/assets/vendors/css/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="admin/assets/css/style.css">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="admin/assets/images/favicon.ico"/>
</head>
<body>
<div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper">
        <div class="content-wrapper d-flex align-items-center auth">
            <div class="row flex-grow">
                <div class="col-lg-4 mx-auto">
                    <div class="auth-form-light text-left p-5">
                        <div class="brand-logo">
                            <a class="navbar-brand" href="index.php">
                            <img src="admin/assets/images/logo.svg">
			                </a>
                        </div>
                        <h4>New here?</h4>

                      <script>
    function validateForm() {
        var username = document.getElementById("exampleInputUsername1").value;
        var email = document.getElementById("exampleInputEmail1").value;
        var phoneNo = document.getElementById("contact").value;
        var password = document.getElementById("exampleInputPassword1").value;
        var confirmPassword = document.getElementById("confirmPassword").value;

        // Email format validation
        var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        if (!emailRegex.test(email)) {
            alert("Invalid email format");
            document.getElementById("submitBtn").disabled = false;
            return false;
        }

        // Phone number length and numeric validation
        var phoneRegex = /^\d{10}$/;
        if (!phoneRegex.test(phoneNo)) {
            alert("Phone number must be 10 digits long and contain only numbers");
            document.getElementById("submitBtn").disabled = false;
            return false;
        }

        // Password length validation (between 8 and 15 characters)
        if (password.length < 8 || password.length > 15) {
            alert("Password must be between 8 and 15 characters long");
            document.getElementById("submitBtn").disabled = false;
            return false;
        }

        // Password special character validation
        var specialCharRegex = /[!@#$%^&*(),.?":{}|<>]/;
        if (!specialCharRegex.test(password)) {
            alert("Password must contain at least one special character");
            document.getElementById("submitBtn").disabled = false;
            return false;
        }

        if (username == "" || password == "" || confirmPassword == "") {
            alert("Username, password, and confirm password fields must be filled out");
            document.getElementById("submitBtn").disabled = false;
            return false;
        }

        if (password != confirmPassword) {
            alert("Passwords do not match");
            document.getElementById("submitBtn").disabled = false;
            return false;
        }

        // Form is valid, submit the form using AJAX
        var xhr = new XMLHttpRequest();
        xhr.open("POST", "admin/insert.php", true);
        xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
        xhr.onreadystatechange = function () {
            if (xhr.readyState == 4 && xhr.status == 200) {
                var response = JSON.parse(xhr.responseText);
                alert(response.message); // Display only the message received from the server
                if (response.status == "success") {
                    document.getElementById("signupForm").reset(); // Reset the form if insertion is successful
                }
            }
        };
        xhr.send("username=" + username + "&email=" + email + "&phone_no=" + phoneNo + "&password=" + password);

        // Disable the submit button to prevent multiple submissions
      //  document.getElementById("submitBtn").disabled = true;
        return false; // Prevent default form submission
    }
</script>


                             <form class="pt-3" id="signupForm" onsubmit="return validateForm();">
                            <div class="form-group">
                                <input type="text" class="form-control form-control-lg" id="exampleInputUsername1"
                                       name="username" placeholder="Username">
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control form-control-lg" id="exampleInputEmail1"
                                       name="email" placeholder="Email">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control form-control-lg" id="contact" name="phone_no"
                                       placeholder="Phone No">
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control form-control-lg" id="exampleInputPassword1"
                                       name="password" placeholder="Password">
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control form-control-lg" id="confirmPassword"
                                       name="confirmPassword" placeholder="Confirm Password">
                            </div>
                            <div class="mb-4">
                                <div class="form-check">
                                    <label class="form-check-label text-muted">
                                   <input type="checkbox" class="form-check-input"> I agree to all Terms & Conditions </label>
                                </div>
                             </div>

                            <div class="mt-3">
                                <button type="submit" id="submitBtn"
                                        class="btn btn-block btn-gradient-primary btn-lg font-weight-medium auth-form-btn">SIGN UP
                                </button>
                            </div>
                            <div class="text-center mt-4 font-weight-light"> Already have an account? <a href="login.php" class="text-primary">Login</a>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
        <!-- content-wrapper ends -->
    </div>
    <!-- page-body-wrapper ends -->
</div>
<!-- container-scroller -->
<!-- plugins:js -->
<script src="admin/assets/vendors/js/vendor.bundle.base.js"></script>
<script  src="/new/admin/assets/js/jquery.cookie.js"></script>
<!-- endinject -->
<!-- Plugin js for this page -->
<!-- End plugin js for this page -->
<!-- inject:js -->
<script src="admin/assets/js/off-canvas.js"></script>
<script src="admin/assets/js/hoverable-collapse.js"></script>
<script src="admin/assets/js/misc.js"></script>
<!-- endinject -->
</body>
</html>
