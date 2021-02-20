<?php

$link = mysqli_connect('localhost','root','','productbd');

if (mysqli_connect_errno())
{
    echo 'Ошибка подключения к бд ('.mysqli_connect_errno().'): '.mysqli_connect_error();
    exit();
}

?>