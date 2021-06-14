<!DOCTYPE html>
<html>
    <title>Contact</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/jquery-ui.css" rel="stylesheet" type="text/css"/>
    <link href="css/projcss.css" rel="stylesheet" type="text/css"/>
    <link href="css/w3.css" rel="stylesheet" type="text/css"/>
    <script src="js/jquery-ui.min.js" type="text/javascript"></script>
    <script src="js/jquery.min.js" type="text/javascript"></script>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <body>

        <form action="index.php?mdl=5" method="post">
            <div class="w3-display-topmiddle">
                <div     class="w3-container w3-card-4 w3-light-grey w3-text-pink w3-margin">
                    <h2 class="w3-center">Contact Us</h2>

                    <div class="w3-row w3-section">
                        <div class="w3-col" style="width:50px"><i class="w3-xxlarge fa fa-user"></i></div>
                        <div class="w3-rest">
                            <input class="w3-input w3-border" name="txtfirst" id="txtfirst" type="text" placeholder="First Name">
                        </div>
                    </div>

                    <div class="w3-row w3-section">
                        <div class="w3-col" style="width:50px"><i class="w3-xxlarge fa fa-user"></i></div>
                        <div class="w3-rest">
                            <input class="w3-input w3-border" name="txtlast" id="txtlast" type="text" placeholder="Last Name">
                        </div>
                    </div>

                    <div class="w3-row w3-section">
                        <div class="w3-col" style="width:50px"><i class="w3-xxlarge fa fa-envelope-o"></i></div>
                        <div class="w3-rest">
                            <input class="w3-input w3-border" name="txtemail" id="txtemail" type="text" placeholder="Email">
                        </div>
                    </div>

                    <div class="w3-row w3-section">
                        <div class="w3-col" style="width:50px"><i class="w3-xxlarge fa fa-phone"></i></div>
                        <div class="w3-rest">
                            <input class="w3-input w3-border" name="txtphone" id="txtphone" type="text" placeholder="Phone">
                        </div>
                    </div>

                    <div class="w3-row w3-section">
                        <div class="w3-col" style="width:50px"><i class="w3-xxlarge fa fa-pencil"></i></div>
                        <div class="w3-rest">
                            <input class="w3-input w3-border" name="txtmessage" id="txtmessage" type="text" placeholder="Message">
                        </div>
                    </div>

                    <p class="w3-center">
                        <a href="vewHome.php">  <button class="w3-button w3-section w3-white w3-border w3-border-pink w3-ripple" id="btnSend" name="btnSend"> Send </button></a>
                        <a href="index.php?mdl=6">      <button class="w3-button w3-white w3-border w3-border-pink" type='button' name='btnClose' id="btnClose" value=''>Close</button></a>

                    </p>

                </div>
            </div>
        </form>
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
        </script>
    </body>
</html> 
