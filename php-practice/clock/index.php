<!DOCTYPE html>
<html>
<head>
    
    <title>Clock</title>
    <meta charset= 'utf-8'>
    
    <link rel='stylesheet' href='styles.css' type='text/css'.
    <?php
    require('logic.php');
    ?>
    
</head>
<body class='<?php echo $timeOfDay?>'>   
    The time is <?php echo $now; ?>
    <img src='http://making-the-internet.s3.amazonaws.com/php-<?php echo $timeOfDay; ?>.png'>
    
        
</body>
</html>