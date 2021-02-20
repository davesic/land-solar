<html lang="ru-RU" data-scrapbook-source="https://testfonar.agbuy.shop/index.php#order_form"
    data-scrapbook-create="20210220104332060">

<head>


    <title>Спасибо за ваш заказ</title>
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
<?php 
$add_tov = add_date($_POST['name'], $_POST['phone']);
$subject = "Новый заказ!";
$message = "
<html>
<head>
  <title>Новый заказ</title>
</head>
<body>
  <p>Поступил новый заказ!</p> <br>
  Имя: ".$_POST['name']." <br>
  Номер телефона: ".$_POST['phone']." <br>
</body>
</html>
";

mail('webdavee@protonmail.com', $subject, $message );
?>

<body class="area adaptive-xs-sm-md-lg">
    <div class="main_wrapper" style="width: 70%; background-color: #ddd">
        <center>
            <div class="wrapper1"
                style="color: rgb(255, 243, 243); border-radius: 0px; background-color: #120007; width: 70%; font-size: 14px;">
                <div class="alert alert-success">
                    <h2 class="xs-force-center font-header">
                        <p style="text-align: center;">Благодарим за Ваш заказ!</p>
                    </h2>
                    <h2 class="xs-force-center font-header">
                        <p style="text-align: center;">Оператор свяжется с вами как можно раньше, Работа колл центpа
                            10:00-21:00. Хорошего вам дня:)</p>
                    </h2>
                </div>
            </div>
        <div class="container"><img src="/img/like.png" alt=""> </div><br>

            <div class="wrapper1"
                style="color: rgb(255, 243, 243); border-radius: 0px; background-color: rgba(255, 20, 20, 0.498039); width: 70%;">
                <div class="wrapper2" style="padding: 15px 5px;">
                    <h2 class="xs-force-center font-header">
                        <p style="text-align: center;">

                            Имя:
                            <?php echo $_POST['name'];?> </p>
                        <p style="text-align: center;">Телефон:
                            <?php echo $_POST['phone'];?> </p>
                    </h2>
                </div>
            </div>


<!--
            <div class="wrapper1"
                style="color: #000000; border-radius: 0px; background-color: #ddd; width: 70%; font-size: 12px; height: auto;">
                <div class="wrapper2" style="padding: 15px 5px;">
                    <h2 class="xs-force-center font-header">
                        <p style="text-align: center;">
                            Закажите другие товары с<br><br>
                            <mark>МАКСИМАЛЬНОЙ СКИДКОЙ!</mark></p>
                    </h2>
                </div>
            </div>
            

            
            <div class="container">
            <div class="wrapper1"
                style="color: #000000; border-radius: 0px; background-color: #ddd; width: 70%; font-size: 24px; height: auto;">

                <div class="row">
                <div class="col-sm">
                <div class="wrapper2" style="padding: 15px 5px; float: left; "> <img
                        src="/img/silic1.jpg">
                    <h2 class="xs-force-center font-header">
                        <p style="text-align: center;">
                            <br>
                            Цена по акции: 139грн/6шт<br>
                            Старая цена: <s>350 гривен</s></p>
                    </h2>
                </div> </div>
                <div class="col-sm"><div class="wrapper2" style="padding: 15px 5px; float: right; margin-right: .1%;">
                    <h2 class="xs-force-center font-header">
                        <p>

                            <mark>Набор силиконовых крышек</mark><br></p>
                    </h2>
                    <p>
                        <br>Комплект из 6 разных крышек
                        <br>Экологически чистые
                        <br>Растягиваются до любой формы
                        <br>Легко мыть и использовать снова
                        <br>Герметичны
                        <br>Действует акция 1+1=3</p> <br>

                    <form action="" method="post">
                        <button class="button">Добавить к заказу</button>
                    </form>


                </div></div>
                </div>
            </div>

            <div class="wrapper1"
                style="color: #000000; border-radius: 0px; background-color: #ddd; width: 70%; font-size: 24px; height: auto;">

                <div class="row">
                <div class="col-sm">
                <div class="wrapper2" style="padding: 15px 5px; float: left; "> <img
                        src="/img/grip.jpg">
                    
                </div> </div>
                <div class="col-sm"><div class="wrapper2" style="padding: 15px 5px; float: right; margin-right: .1%;">
                    <h2 class="xs-force-center font-header">
                        <p>

                            <mark>Клейкая Лента GRIP TAPE</mark><br></p>
                    </h2>
                    <h2 class="xs-force-center font-header">
                        <p style="text-align: center;">
                            <br>
                            Цена по акции:  149грн.
                            <br>
                            Старая цена: <s>250 грн.</s></p>
                    </h2>

                    <form action="" method="post">
                        <button class="button">Добавить к заказу</button>
                    </form>


                </div></div>
                </div>
            </div>

            <div class="wrapper1"
                style="color: #000000; border-radius: 0px; background-color: #ddd; width: 70%; font-size: 24px; height: auto;">

                <div class="row">
                <div class="col-sm">
                <div class="wrapper2" style="padding: 15px 5px; float: left; "> <img
                        src="/img/1.jpg">
                    <h2 class="xs-force-center font-header">
                        <p style="text-align: center;">
                            <br>
                            Цена по акции:  99грн.<br>
                            Старая цена: <s>300 грн.</s></p>
                    </h2>
                </div> </div>
                <div class="col-sm"><div class="wrapper2" style="padding: 15px 5px; float: right; margin-right: .1%;">
                    <h2 class="xs-force-center font-header">
                        <p>

                            <mark>Насадка для крана Water Saver 360</mark><br></p>
                    </h2>
                    <p>
                        <br>Это новый способ сэкономить на воде. Экономия до 60%. Также насадка имеет 3 режима и крутится на 360градусов, что очень удобно.


                    <form action="" method="post">
                        <button class="button">Добавить к заказу</button>
                    </form>


                </div></div>
                </div>
            </div>

            <div class="wrapper1"
                style="color: #000000; border-radius: 0px; background-color: #ddd; width: 70%; font-size: 24px; height: auto;">

                <div class="row">
                <div class="col-sm">
                <div class="wrapper2" style="padding: 15px 5px; float: left; "> <img
                        src="/img/fla1.jpg">
                    <h2 class="xs-force-center font-header">
                        <p style="text-align: center;">
                            <br>
                            Цена по акции:  159грн/8штт<br>
                            Старая цена: <s>300 гривен</s></p>
                    </h2>
                </div> </div>
                <div class="col-sm"><div class="wrapper2" style="padding: 15px 5px; float: right; margin-right: .1%;">
                    <h2 class="xs-force-center font-header">
                        <p>

                            <mark>Набор силиконовых крышек</mark><br></p>
                    </h2>
                    <p>
                        <br>Складная вешалка экономит твое пространство в шкаву в целых 3 раза, не мнет вещи и выдерживает до 8кг. В 1наборе 8 вешалок.
                        <br>

                    <form action="" method="post">
                        <button class="button">Добавить к заказу</button>
                    </form>


                </div></div>
                </div>
            </div>

            <div class="wrapper1"
                style="color: #000000; border-radius: 0px; background-color: #ddd; width: 70%; font-size: 24px; height: auto;">

                <div class="row">
                <div class="col-sm">
                <div class="wrapper2" style="padding: 15px 5px; float: left; "> <img
                        src="/img/sani1.jpg">
                    <h2 class="xs-force-center font-header">
                        <p style="text-align: center;">
                            <br>
                            Цена по акции:  95 грн.<br>
                            Старая цена: <s>240 гривен</s></p>
                    </h2>
                </div> </div>
                <div class="col-sm"><div class="wrapper2" style="padding: 15px 5px; float: right; margin-right: .1%;">
                    <h2 class="xs-force-center font-header">
                        <p>

                            <mark>Палочки от засора Sani Sticks</mark><br></p>
                    </h2>
                    <p>
                        <br>Набор палочек из 12шт на весь год.
                        <br>Просто бросить палочку в слив и она сама разьест засор.
                        </p> <br>

                    <form action="" method="post">
                        <button class="button">Добавить к заказу</button>
                    </form>


                </div></div>
                </div>
            </div>

            <div class="wrapper1"
                style="color: #000000; border-radius: 0px; background-color: #ddd; width: 70%; font-size: 24px; height: auto;">

                <div class="row">
                <div class="col-sm">
                <div class="wrapper2" style="padding: 15px 5px; float: left; "> <img
                        src="/img/232.jpg">
                    <h2 class="xs-force-center font-header">
                        <p style="text-align: center;">
                            <br>
                            Цена по акции:  89грн<br>
                            Старая цена: <s>200 гривен</s></p>
                    </h2>
                </div> </div>
                <div class="col-sm"><div class="wrapper2" style="padding: 15px 5px; float: right; margin-right: .1%;">
                    <h2 class="xs-force-center font-header">
                        <p>

                            <mark>Карандаш для затирки швов</mark><br></p>
                    </h2>
                    <p>
                        <br>Антибактериальный маркер с водостойкими чернилами. Маркер не обладает запахом, а сами чернила светопроницаемы и имеют лаковый эффект.
                        </p> <br>

                    <form action="" method="post">
                        <button class="button">Добавить к заказу</button>
                    </form>


                </div></div>
                </div>
            </div>
            </div>
-->
    </div>





    </center>


</body>

</html>