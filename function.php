<?php

function add_date($var1, $var2) {
   
    $sql = "INSERT INTO `tovar`( `name`,`phone`) values ('".$var1."', '".$var2."')"; 
    $link = mysqli_connect('localhost','root','','productbd');
    $result = mysqli_query($link, $sql);
}


function get_sums() {
    global $link;
    $sql = "SELECT * FROM `tovar`";
    $result = mysqli_query($link, $sql);

    $rows = mysqli_num_rows($result);
    return $rows;
}
function get_sums_unans() {
    global $link;
    $sql = "SELECT * FROM `tovar` where `view` = 0";
    $result = mysqli_query($link, $sql);

    $rows = mysqli_num_rows($result);
    return $rows;
}


function get_table() {
    global $link;
    $sql = "SELECT * FROM `tovar`  ORDER BY `id` DESC";
    $result = mysqli_query($link, $sql);

    $rows = mysqli_num_rows($result); ?>
   <table class="table">
        <thead> <tr>
        <th scope="col">id</th>
        <th scope="col">Time</th>
        <th scope="col">Name</th>
        <th scope="col">Phone</th>
        <th scope="col">Status</th>
        </tr><?php
    for($i=0; $i<$rows; $i++) { 
        $row = mysqli_fetch_row($result);
        ?>

        <tr>
        <th scope="col"><?php echo $row[0]; ?></th>
        <th scope="col"><?php echo $row[1]; ?></th>
        <th scope="col"><?php echo $row[3]; ?></th>
        <th scope="col"><?php echo $row[4]; ?></th>
        <th scope="col"><?php echo $row[2]; ?></th>
        </tr>
        
        

        <?php
    }
    ?></thead>
         </table> <?php
}

function get_table_unans() {
    global $link;
    $sql = "SELECT * FROM `tovar` where `view` = 0  ORDER BY `id` DESC";
    $result = mysqli_query($link, $sql);

    $rows = mysqli_num_rows($result); ?>
   <table class="table">
        <thead> <tr>
        <th scope="col">id</th>
        <th scope="col">Time</th>
        <th scope="col">Name</th>
        <th scope="col">Phone</th>
        <th scope="col">Status</th>
        </tr><?php
    for($i=0; $i<$rows; $i++) { 
        $row = mysqli_fetch_row($result);
        ?>

        <tr>
        <th scope="col"><?php echo $row[0]; ?></th>
        <th scope="col"><?php echo $row[1]; ?></th>
        <th scope="col"><?php echo $row[3]; ?></th>
        <th scope="col"><?php echo $row[4]; ?></th>
        <th scope="col"><?php echo $row[2]; ?></th>
        </tr>
        
        

        <?php
    }
    ?></thead>
         </table> <?php
}

?>