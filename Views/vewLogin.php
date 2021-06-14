<!DOCTYPE html>
<html>
    <head>
        <title>Login</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/jquery-ui.css" rel="stylesheet" type="text/css"/>
        <link href="css/projcss.css" rel="stylesheet" type="text/css"/>
        <link href="css/w3.css" rel="stylesheet" type="text/css"/>
        <script src="js/jquery-ui.min.js" type="text/javascript"></script>
        <script src="js/jquery.min.js" type="text/javascript"></script>
    </head>
    <body style="background:pink" >

        <form action="index.php?mdl=3" method="post">
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
                <div class="container w3-padding" >
                    <div class="w3-card w3-white w3-center" style="width:500px;height:200px;box-shadow:5px 5px 5px 5px grey">
                        <br>
                       
                        <div class="w3-row" >
                            <div class="w3-col">
                                <label for="Email"><b>Email Id</b></label>
                                <input type="text" placeholder="Enter Email Id" name="txtEmailId" name="txtEmailId" required>
                            </div>
                        </div> 
                        <br>
                        <div class="w3-row">
                            <div class="w3-col">
                                <label for="psw"><b>Password</b></label>
                                <input type="password" placeholder="Enter Password" name="txtpsw" id="txtpsw" required>
                            </div>
                        </div> 
                        <br>
                        <p id="demo"></p>
                        <label class="w3-text-red" ><?php echo $this->model->cError; ?>  </label> 
                        <button type="submit" class="w3-button w3-white w3-border w3-border-pink" id="btnLogin" name="btnLogin">Login</button>
                        <a href="index.php?mdl=1"> <button class="w3-button w3-white w3-border w3-border-pink" type="submit" id="btnclose" name="btnclose">close</button></a>
                        <label>
                            <input type="checkbox" checked="checked" name="remember"> Remember me
                        </label>
                    </div>
                     </div>
                </div>
        </form>
    </div>

    <script>
        function myFunction() {
            var x, text, y;

            // Get the value of the input field with id="numb"
            x = document.getElementById("txtPhoneNo").value;

            // If x is Not a Number or less than one or greater than 10
            if (isNaN(x) || x < 1 || x > 10) {
                text = "Input not valid";
            } else {
                text = "Input OK";
            }
            y = document.getElementById("txtEmail").value;

            // If x is Not a Number or less than one or greater than 10
            if (/^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/ != y) {
                text = "Input not valid";
            } else {
                text = "Input OK";
            }

            document.getElementById("demo").innerHTML = text;
        }
        function FrmClose()
            {
                var x = "index.php?mdl=2";
                location.replace(x);
            }
    </script>

</body>
</html>
