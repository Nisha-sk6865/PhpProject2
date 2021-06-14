<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>Home</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/jquery-ui.css" rel="stylesheet" type="text/css"/>
        <link href="css/projcss.css" rel="stylesheet" type="text/css"/>
        <link href="css/w3.css" rel="stylesheet" type="text/css"/>
        <script src="js/jquery-ui.min.js" type="text/javascript"></script>
        <script src="js/jquery.min.js" type="text/javascript"></script>
        <style>
           

        </style>
    </head>

    <body style="background:pink">

        <form action="index.php?mdl=4" method="post">
            <div class="w3-row">
                <header class="w3-white w3-card w3-center">
                    <h1  class="w3-animate-fading ">Music For Life</h1>
                </header>
            </div>
            <div class="w3-row w3-right">
                <div class="w3-col">
                    <a href="index.php?mdl=2">       <button type="button" class="w3-button w3-white w3-border w3-border-pink" id="btnBack" name="btnBack" >Back</button></a>
                    <a href="index.php?mdl=5">       <button type="button" class="w3-button w3-right w3-white w3-border w3-border-pink" id="btnContactUs" name="btnContactUs" >ContactUs</button></a>

                </div>
            </div>
            <br>
            <div class="w3-display-middle">
                <div class="container w3-padding" >
                    <div class="w3-card w3-white w3-center" style="width:500px;height:400px;box-shadow:5px 5px 5px 5px grey">
                        <br>

                        <div class="w3-row" >
                            <div class="w3-col">
                                <label>Upload  CSV file Here</label>

                                <input size='50' type='file' name='filename' value="">
                                <br>
                                <br>
                                <div class="w3-row w3-center">
                                    <button class="w3-button w3-white w3-border w3-border-pink" type='submit' name='btnRead' id="btnRead" value=''>Read</button>
                                    <a href="index.php?mdl=6">      <button class="w3-button w3-white w3-border w3-border-pink" type='button' name='btnClose' id="btnClose" value=''>Close</button></a>
                                </div>
                                <?php
                                if (isset($_POST['btnRead'])) {

                                    echo'<br>';
                                    $row = 1;
                                    if (($handle = fopen('C:\xampp\htdocs\PhpProject2\csv\JookeCSV.csv', "r")) !== FALSE) {
                                        echo '<div class="w3-container w3-center" style="width:500px;">';

                                        echo'<br>';
                                        echo' <label class="w3-text-black">Here Is Your CSV File</label>';
                                        echo'<br>';
                                        echo'<br>';
                                        echo '<table class="w3-center" style="border:1px solid black;width:475px;">';

                                        while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
                                            $num = count($data);
                                            if ($row == 1) {
                                                echo '<thead style="border:1px solid black;"><tr style="border:1px solid black;">';
                                            } else {
                                                echo '<tr style="border:1px solid black;">';
                                            }

                                            for ($c = 0; $c < $num; $c++) {
                                                //echo $data[$c] . "<br />\n";
                                                if (empty($data[$c])) {
                                                    $value = "&nbsp;";
                                                } else {
                                                    $value = $data[$c];
                                                }
                                                if ($row == 1) {
                                                    echo '<th style="border:1px solid black;">' . $value . '</th>';
                                                } else {
                                                    echo '<td style="border:1px solid black;">' . $value . '</td>';
                                                }
                                            }

                                            if ($row == 1) {
                                                echo '</tr></thead><tbody>';
                                            } else {
                                                echo '</tr>';
                                            }
                                            $row++;
                                        }

                                        echo '</tbody></table>';
                                        fclose($handle);
                                    }
                                }
                                ?>

                            </div>
                        </div>
                    </div>
                </div>
            </div>




        </form>


    </body>
</html>
