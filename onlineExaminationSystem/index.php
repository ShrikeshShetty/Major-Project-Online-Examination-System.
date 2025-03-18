<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Project Worlds || TEST YOUR SKILL</title>
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/font.css">
    <style>
         body {
            font-family: 'Roboto', sans-serif;
            margin: 0;
            padding: 0;
            background-image: url('bg.jpg');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
        }

        .header {
            background-color: black;
            color: #fff;
            text-align: center;
            padding: 10px 20px;
            border-bottom: 1px solid #fff;
        }

        .Navigation {
            color: #fff;
            text-align: center;
            margin: 17px 200px;
        }

        .Navigation .box {
            display: inline-block;
            margin: 0 10px;
        }

        .Navigation .box a {
            color: white;
            text-decoration: none;
            font-size: 20px;
            cursor: pointer;
        }

        .Navigation .box a:hover {
            text-decoration: underline;
        }

        .developer-details {
            margin: 20px auto;
            padding: 15px;
            border: 1px solid #ccc;
            background-color: #f9f9f9;
            border-radius: 5px;
            max-width: 600px;
            display: none;
        }

        .panel,
        .login-container {
            max-width: 400px;
            margin: 50px auto;
            padding: 20px;
            background-color: rgba(0, 0, 0, 0.8);
            border-radius: 10px;
        }

        .login-container h4, .panel h4 {
            color: white;
            text-align: center;
        }

        .form-group {
            display: grid;
            place-items: center;
            margin-bottom: 15px;
        }

        .form-control {
            padding: 9px;
            border-radius: 5px;
            border: 1px solid #ccc;
            width: 300px;
        }

        .sub {
            background-color: #337ab7;
            color: white;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
        }
        .SUP{
            color:blue;
            cursor:pointer;
            text-align:center   
        }
        .Logging{
            color:blue;
            cursor:pointer;
            text-align:center
        }

        .reference-link p {
            color: white;
            cursor: pointer;
            text-align: center;
            margin-top: 15px;
        }

        .reference-link p:hover {
            text-decoration: underline;
        }
        .close-btn:hover{
            background-color:red;
            color:white
        }
    </style>
    <script src="js/jquery.js" type="text/javascript"></script>
    <script>
        $(document).ready(function () {
            // Initially show the login section and hide the others
            $('#loginContainer').show();
            $('.panel').hide();
            $('#adminLoginContainer').hide();

            // Toggle between login, signup, and admin login sections
            $('#SUP').click(function () {
                $('#loginContainer').hide();
                $('.panel').show();
                $('#adminLoginContainer').hide();
            });

            $('#Logging').click(function () {
                $('#loginContainer').show();
                $('.panel').hide();
                $('#adminLoginContainer').hide();
            });

            $('#adminLoginLink').click(function () {
                $('#adminLoginContainer').toggle();
                $('#loginContainer').show();
                $('.panel').hide();
            });

            $('#developerLink').click(function () {
                $('.developer-details').slideToggle(); // Show/hide developer details
            });

            $('#closeDeveloperDetails').click(function () {
                $('.developer-details').slideToggle(); // Hide developer details
            });
        });
function validateForm() {
    var email = document.getElementById("email").value;
    var password = document.getElementById("password").value;

    if (email === "" || password === "") {
        alert("Enter Credentials");
        return false;
    }
}
</script>
</head>

<body>
    <div class="header">
        <div class="logo">Test Your Skill</div>
    </div>
    <div class="Navigation">
        <div class="box">
            <a href="About.html" target="_blank">About us</a>
        </div>
        <div class="box">
            <a href="#" id="adminLoginLink">Admin Login</a>
        </div>
        <div class="box">
            <a href="#" id="developerLink">Developers</a>
        </div>
        <div class="box">
            <a href="feedback.php" target="_blank">Feedback</a>
        </div>
    </div>
    <div class="developer-details">
        <div class="row">
            <div class="col-md-6">
                <img src="shrikesh1.jpg" width="150" height="150" alt="Shrikesh Shetty" class="img-rounded">
            </div>
            <div class="col-md-6">
                <h4>Shrikesh Shetty</h4>
                <h4>+91 7045332855</h4>
                <h4>shrikeshshetty@gmail.com</h4>
                <h4>Pillai College of Arts, Commerce and Science</h4>
            </div>
        </div>
        <button id="closeDeveloperDetails" class="close-btn">Close</button>
    </div>

    <!-- Admin Login Section -->
    <div id="adminLoginContainer" class="login-container">
        <h4 class="modal-title">Admin Log In</h4>
        <form class="form-horizontal" action="admin.php" method="POST">
            <div class="form-group">
                <label class="control-label" for="uname"></label>
                <div>
                    <input id="uname" name="uname" placeholder="Enter your username" class="form-control" type="text"><br><br>
                </div>
                <label class="control-label" for="password"></label>
                <div>
                    <input id="password" name="password" placeholder="Enter your Password" class="form-control" type="password"><br><br>
                </div>
                <button type="submit" class="btn">Admin Log in</button>
            </div>
        </form>
    </div>

    <!-- User Login Section -->
    <div id="loginContainer" class="login-container">
        <h4 class="modal-title">Log In</h4>
        <form class="form-horizontal" action="login.php?q=index.php"  method="POST">
            <div class="form-group">
                <label class="control-label" for="email"></label>
                <div>
                    <input id="email" name="email" placeholder="Enter your email-id" class="form-control" type="email"><br><br>
                </div>
                <label class="control-label" for="password"></label>
                <div>
                    <input id="password" name="password" placeholder="Enter your Password" class="form-control" type="password"><br><br>
                </div>
                <button type="submit" class="btn">Log in</button>
            </div>
            <div class="reference-link">
                <p id="signUpLink">Don't have an account? <div id="SUP" class="SUP">Sign Up</div></p>
            </div>
        </form>
    </div>

    <!-- User Signup Section -->
    <div class="panel">
        <h4 class="modal-title">Sign Up</></h4>
        <form class="form-horizontal" name="form" action="sign.php?q=account.php" method="POST">
            <fieldset>
                <div class="form-group">
                    <label class="control-label" for="name"></label>
                    <div>
                        <br><br>
                        <input id="name" name="name" placeholder="Enter your name" class="form-control" type="text">
                    </div>
                </div>
                <div class="form-group">
                        <select id="gender" name="gender" class="form-control">
                            <option value="Male">Select Gender</option>
                            <option value="M">Male</option>
                            <option value="F">Female</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <input id="college" name="college" placeholder="Enter your college name" class="form-control" type="text">
                    </div>
                    <div class="form-group">
                        <input id="email" name="email" placeholder="Enter your email-id" class="form-control" type="email">
                    </div>
                    <div class="form-group">
                        <input id="mob" name="mob" placeholder="Enter your mobile number" class="form-control" type="number">
                    </div>
                    <div class="form-group">
                        <input id="password" name="password" placeholder="Enter your password" class="form-control" type="password">
                    </div>
                    <div class="form-group">
                        <input id="cpassword" name="cpassword" placeholder="Confirm Password" class="form-control" type="password">
                    </div>
                <div class="form-group">
                    <div>
                        <input type="submit" class="sub" value="Sign up" />
                    </div>
                </div>
            </fieldset>
            <div class="reference-link">
                <p id="signInLink">Already have an account?<div id="Logging" class="Logging"> Log In </div></p>
            </div>
        </form>
    </div>
    
</body>
</html>
