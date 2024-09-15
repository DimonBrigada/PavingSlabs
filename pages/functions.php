<?php

function get_tovar()
{
    $db = mysqli_connect('localhost', 'root', 'root', 'plitka');
    $query = "SELECT * FROM plitka";
    $result = mysqli_query($db, $query); 
    $tovar = mysqli_fetch_all($result, MYSQLI_ASSOC);   
    return $tovar;
}
function get_tovar2()
{
    $db = mysqli_connect('localhost', 'root', 'root', 'plitka');
    $query = "SELECT * FROM borrrdddd";
    $result = mysqli_query($db, $query); 
    $tovar = mysqli_fetch_all($result, MYSQLI_ASSOC);   
    return $tovar;
}
function get_tovar3()
{
    $db = mysqli_connect('localhost', 'root', 'root', 'plitka');
    $query = "SELECT * FROM fas";
    $result = mysqli_query($db, $query); 
    $tovar = mysqli_fetch_all($result, MYSQLI_ASSOC);   
    return $tovar;
}

?>
