
<?php
$var=100;
?>
<!DOCTYPE html>
<html lang="en" >
<head>
    <title>piyush_iot</title>
    <link href="css/main.css" rel="stylesheet" type="text/css" />
    <script src="js/script.js"></script>
</head>
<body>
    <header>
        <h2>WELCOME TO THE IOT BASED WEB APPLICATION </h2>
        <br><br><br>
        <div class="container">
        <!-- Example form -->
        <form action="read_switch.php" method="post" id="form" onsubmit="return validate_all('results');">
            <table cellspacing="10">
                <tr><td><input type="text" size="50" value="the switch value is"></td></tr>

            </table>
       </form>
    </div>       
        

    </header>
</body>
</html>