<?php
include('connection.php');

$search = $_POST['search']; 
$min_length = 2; //longueur mini qu'on souhaite
$searchbar = preg_replace('#[a-z 0-9?!]#i', '', $_POST['search']);


if(strlen($query)>0){ // si longueur +ou= à $min_length 
    $rien = "";    
    $suggestion = $db->query("SELECT * FROM wines WHERE `wine_name` LIKE '%".$query."%'");
    
}


//if(isset($_POST['search'])) && $_POST['search'] != ""){
//    $searchbar = preg_replace('#[a-z 0-9?!]#i', '', $_POST['search']);
//    if($_POST['filter']) == ""){
//        $
//    } else if($_POST['search']) == ""){
//        $db=>execute(SELECT * FROM wines WHERE food_name LIKE '%$search%');
//    } 


?>