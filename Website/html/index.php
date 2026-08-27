<?php 
    include 'pages/connect.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Architect</title>
    <link rel="stylesheet" href="css/main.css">
</head>
<body>
    <div class="website-row-container">
        <div class="sidebar-container">
            <img class="website-logo" src="assets/images/logo-livingshapes.png" alt="Logo">

            <div class="extra-info-container">
                <h2>Interested?</h2>
                <div>
                    <b>Drop us an email at:</b>
                    <a class="mail-link" href= "mailto:newbusiness@livingshapes.eu">newbusiness@livingshapes.eu</a>
                </div>
            </div>
        </div>

        <!-- Website content container -->
        <div class="content-container">
            <?php 
                include 'pages/projects.php';
            ?>
        </div>
    </div>
</body>
</html>