<html lang="ru-RU" data-scrapbook-source="https://testfonar.agbuy.shop/index.php#order_form"
    data-scrapbook-create="20210220104332060">

<head>


    <title>Admin panel</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=480">
    <meta name="description"
        content="Светильник позволяет беспрерывно освещать территорию до 12 часов без подзарядки и не нуждается в подключении к сети питания, так как заряжается при помощи солнечных панелей.">
    <link rel="shortcut icon" href="favicon.png" type="image/x-icon">
    <link rel="stylesheet" href="reset.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="styles.css">

</head>
<?php require_once 'bd.php';?>
<?php require_once 'function.php';?>


<body class="area adaptive-xs-sm-md-lg">
    

    <div class="container">
    <center>
    <h1>Admin panel</h1> 
    <br>

    <br>
     <a href="/admin_all.php">
    <button type="button" class="btn btn-info">Все заявки <?php echo $get_tov = get_sums();?></button>
    </a><br><br>
   
    </center>
    </div>


</body>

</html>