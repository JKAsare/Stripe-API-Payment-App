<?php

    if(!empty($_GET['tid'] && !empty($_GET['product']))) {
        $GET = filter_var_array($_GET, FILTER_SANITIZE_STRING);

        $tid = $GET['tid'];
        $product = $GET['product'];
    } else {
        header('Location: index.php');
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>Thank You!</title>
</head>
<body>
    <div class="container mt-4">
    <div class="alert alert-success" role="alert">
        <p>Payment made successfully!</p>
    </div>
        <h2>Thank you for purchasing <?php echo $product; ?>!</h2>
        <hr>
        <p>Your transaction ID is <b><?php echo $tid; ?></b></p>
        <p>Check your email for more info</p>
        <p><a href="index.php" class="btn btn-success mt-2">Close</a></p>
    </div>
    
</body>
</html>