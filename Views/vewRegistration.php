<!DOCTYPE html>
<html>
    <head>
        <title>Registration</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/jquery-ui.css" rel="stylesheet" type="text/css"/>
        <link href="css/projcss.css" rel="stylesheet" type="text/css"/>
        <link href="css/w3.css" rel="stylesheet" type="text/css"/>
        <script src="js/jquery-ui.min.js" type="text/javascript"></script>
        <script src="js/jquery.min.js" type="text/javascript"></script>
    </head>
    <body style="background:pink" >

        <form action="index.php?mdl=2" method="post">
            <div class="w3-row">
                <header class="w3-white w3-card w3-center">
                    <h1  class="w3-animate-fading ">Music For Life</h1>
                </header>
            </div>
            <div class="w3-row w3-right">
                <div class="w3-col">
                    <button type="submit" class="w3-button w3-white w3-border w3-border-pink" id="btnBack" name="btnBack" onclick="FrmClose()">Back</button>
                </div>
            </div>
            <br>
            <div class="w3-display-middle">
                <div class="container">
                     <div class="w3-card w3-white w3-center" style="width:500px;height:500px;box-shadow:5px 5px 5px 5px grey">
                       
                    <div class="w3-row">
                        <div class="w3-col">
                            <h1>Register</h1>
                            <p>Please fill in this form to create an account.</p>
                        </div>
                    </div>
                    <hr>
                    <br>
                    <div class="w3-row">
                        <div class="w3-col">
                            <label for="UserName"><b>UserName</b></label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <input type="text" placeholder="Enter UserName" name="txtUserName" id="txtUserName" required>
                        </div>
                    </div>
                    <br>
                    <div class="w3-row">
                        <div class="w3-col">
                            <label for="email"><b>Email</b></label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <input type="text" placeholder="Enter Email" name="txtEmail" id="txtEmail" required>
                        </div>
                    </div>
                    <br>
                    <div class="w3-row">
                        <div class="w3-col">
                            <label for="Phone Number"><b>Phone Number</b></label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <input type="text" placeholder="Enter Phone Number" name="txtPhoneNo" id="txtPhoneNo" required>
                        </div>
                    </div>
                    <br>
                    <div class="w3-row">
                        <div class="w3-col">
                            <label for="psw" ><b>Password</b></label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <input  type="password" placeholder="Enter Password" name="txtpsw" id="txtpsw" required>
                        </div>
                    </div>
                    <br>
                    <p id="ErrorMesage"></p>
                    <label class="w3-text-red" ><?php echo $this->model->cError; ?>  </label> 
                    <button type="submit" class="w3-button w3-white w3-border w3-border-pink" id="btnRegister" name="btnRegister" onclick="myFunction()">Register</button>
                    <button type="submit" class="w3-button w3-white w3-border w3-border-pink" id="btnclear" name="btnclear" >clear</button>
                </div>

                <div class="container signin" >
                    <p>Already have an account? <a href="index.php?mdl=2">Login</a>.</p>
                </div>
            </div>
        </form>
        <script>
            function myFunction() {
                var nPhoneNo, Msg, Email;
                nPhoneNo = document.getElementById("txtPhoneNo").value;
                //alert(nPhoneNo);
                if (isNaN(nPhoneNo) || nPhoneNo < 1 || nPhoneNo > 10) {
                    text = "Input not valid";
                } else {
                    text = "Input OK";
                }
                Email = document.getElementById("txtEmail").value;
                //alert(Email);
                if (/^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/ != Email) {
                    Msg = "Input not valid";
                } else {
                    Msg = "Input OK";
                }

                document.getElementById("ErrorMesage").innerHTML = Msg;
            }
            function FrmClose()
            {
                var x = "index.php?mdl=1";
                location.replace(x);
            }

        </script>
    </body>
</html>
