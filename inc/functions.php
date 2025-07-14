<?php
require("connection.php");
function create_account($nom, $date_naissance, $genre, $email, $ville, $mdp){
    $sql = "INSERT INTO membre (nom, date_naissance, genre, email, ville, mdp) VALUES ('%s', '%s', '%s', '%s', '%s', '%s')";
    $sql = sprintf($sql, $nom, $date_naissance, $genre, $email, $ville, $mdp);
    echo $sql;
    $request = mysqli_query(db_connect(), $sql);
}
 function login($email,$pwd){
    $result=null;
    $sql="select nom,id_membre from membre where email= '%s' and mdp='%s'";
    $sql=sprintf($sql,$email,$pwd);
    $request=mysqli_query(db_connect(),$sql);
    if ($user=mysqli_fetch_assoc($request)) {
       $result=$user;
       
     }
     
     
     return $result;
    
 }

function getAllObject(){
    $sql="Select * from v_object_details ";
    $result = mysqli_query(db_connect(), $sql);
    
    $posts = [];
   
    while ($row = mysqli_fetch_assoc($result)) {
        $posts[] = $row;
    }

    return $posts;
}

function format_montant($text){
    $result="$".number_format($text,2,".",",");
    return $result;
}
function getInformation($id){
    $sql="Select * from agent_propriete where id_propriete='%d' ";
    $sql=sprintf($sql,$id);
    $result = mysqli_query(db_connect(), $sql);
    
   
    if ($row = mysqli_fetch_assoc($result)) {
        $posts = $row;
    }

    return $posts;
}

 








?>