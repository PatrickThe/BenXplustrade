<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Mosaddek">
    <meta name="keyword" content="FlatLab, Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
    <link rel="shortcut icon" href="img/favicon.png">

    <title>Alphaactions -Registration</title>

    <!-- Bootstrap core CSS -->
    <link href="dashboard/functions/css/bootstrap.min.css" rel="stylesheet">
    <link href="dashboard/functions/css/bootstrap-reset.css" rel="stylesheet">
    <!--external css-->
    <link href="dashboard/functions/assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <!-- Custom styles for this template -->
    <link href="dashboard/functions/css/style.css" rel="stylesheet">
    <link href="dashboard/functions/css/style-responsive.css" rel="stylesheet" />

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 tooltipss and media queries -->
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->
</head>

 
   <body class="login-body">

    <div class="container">

      <div class="form-signin" >
        <h2 class="form-signin-heading">registration now</h2>
        <div class="login-wrap">
            <p>Enter your personal details below</p>
            <form  method="POST"  action="dashboard/pages/login.php">
            <input type="text" class="form-control" placeholder="Full Name"  id="name" name="name" required>
            <input type="text" class="form-control" placeholder="Email"  id="email"  name="email_address" require>
             <span id="lblError" style="color:red"></span>
            <input type="password" class="form-control" placeholder="Password" id="password" name="password" require>
            <input type="password" class="form-control" placeholder="Re-type Password" id="confirmPassword" name="password1" required>
            <input type="text" class="form-control" id="user_id" name="user_id" value="0" />
            <label class="checkbox">
                <input type="checkbox" id="terms_and_conditions" value="1" onclick="terms_changed(this)"> I agree to the Terms of Service and Privacy Policy
            </label>
            <button class="btn btn-lg btn-login btn-block" type="submit" id="submit_button" onclick="ValidateEmail()" name="reg_user" disabled>Submit</button>

  </form>
   

<script type="text/javascript">
    
    var password = document.getElementById("password")
  , confirmPassword = document.getElementById("confirmPassword");

function validatePassword(){
  if(password.value != confirmPassword.value) {
    confirmPassword.setCustomValidity("Passwords Don't Match");
  } else {
    confirmPassword.setCustomValidity('');
  }
}

password.onchange = validatePassword;
confirmPassword.onkeyup = validatePassword;
</script>
  <script>
    function terms_changed(termsCheckBox){
    //If the checkbox has been checked
    if(termsCheckBox.checked){
        //Set the disabled property to FALSE and enable the button.
        document.getElementById("submit_button").disabled = false;
    } else{
        //Otherwise, disable the submit button.
        document.getElementById("submit_button").disabled = true;
    }
}
</script>
  <script type="text/javascript">
    function IsValidEmail(email) {
        //Check minimum valid length of an Email.
        if (email.length <= 2) {
            return false;
        }
        //If whether email has @ character.
        if (email.indexOf("@") == -1) {
            return false;
        }
 
        var parts = email.split("@");
        var dot = parts[1].indexOf(".");
        var len = parts[1].length;
        var dotSplits = parts[1].split(".");
        var dotCount = dotSplits.length - 1;
 
 
        //Check whether Dot is present, and that too minimum 1 character after @.
        if (dot == -1 || dot < 2 || dotCount > 2) {
            return false;
        }
 
        //Check whether Dot is not the last character and dots are not repeated.
        for (var i = 0; i < dotSplits.length; i++) {
            if (dotSplits[i].length == 0) {
                return false;
            }
        }
 
        return true;
    };
    function ValidateEmail() {
        var email = document.getElementById("email").value;
        var lblError = document.getElementById("lblError");
        lblError.innerHTML = "";
        if (!IsValidEmail(email)) {
            lblError.innerHTML = "Invalid email address.";
        }
    }
</script>
            <div class="registration">
                Already Registered.
                <a class="" href="login.php">
                    Login
                </a>
            </div>
            <div class="registration">
               Back to Homepage
                <a class="" href="index.php">
                    Homepage
                </a>
            </div>
        </div>

      </div>

    </div>


  </body>
</html>
