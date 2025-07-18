<?php
require("connection.php");

function create_account($nom, $date_naissance, $genre, $email, $ville, $mdp){
    $sql = "INSERT INTO final_membre (nom, date_naissance, genre, email, ville, mdp) VALUES ('%s', '%s', '%s', '%s', '%s', '%s')";
    $sql = sprintf($sql, $nom, $date_naissance, $genre, $email, $ville, $mdp);
    echo $sql;
    $request = mysqli_query(db_connect(), $sql);
}

function login($email,$pwd){
    $result=null;
    $sql="select nom,id_membre from final_membre where email= '%s' and mdp='%s'";
    $sql=sprintf($sql,$email,$pwd);
    $request=mysqli_query(db_connect(),$sql);
    if ($user=mysqli_fetch_assoc($request)) {
        $result=$user;
    }
    return $result;
}

function getAllObject(){
    $sql="Select * from final_v_object_details ";
    $result = mysqli_query(db_connect(), $sql);
    $posts = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $posts[] = $row;
    }
    return $posts;
}

function isEmprunted($id_obj){
    $sql="Select date_retour from final_emprunt where id_objet='%d'";
    $sql=sprintf($sql,$id_obj);
    $result = mysqli_query(db_connect(), $sql);
    $posts = null;
    while ($row = mysqli_fetch_assoc($result)) {
        $posts = $row;
    }
    return $posts;
}

function getAllCateg(){
    $sql="Select * from final_categorie_objet";
    $result = mysqli_query(db_connect(), $sql);
    $posts = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $posts[] = $row;
    }
    return $posts;
}

function getObjectByCateg($id_categ){
    $sql="Select * from final_v_object_details where id_categorie='%d'";
    $sql=sprintf($sql,$id_categ);
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
function insertObject($nom,$image ,$categorie,$id){
       $sql="insert into final_objet (nom_objet,id_membre,id_categorie) values ('%s','%s','%s')";
       $sql = sprintf($sql, $nom, $categorie,$id);
    
    $request = mysqli_query(db_connect(), $sql);
    $last=db_connect()->insert_id;
        $sql="insert into final_images_objet (nom_image,id_objet) values ('%s','%s')";
       $sql = sprintf($sql, $image,$last);
    $request = mysqli_query(db_connect(), $sql);
       
}
function getObjectById($id) {
    global $db;
    $sql = "SELECT o.*, c.nom_categorie FROM final_objets o
            JOIN final_categorie c ON o.id_categorie = c.id_categorie
            WHERE o.id_objet = ?";
    $stmt = $db->prepare($sql);
    $stmt->execute([$id]);
    return $stmt->fetch(PDO::FETCH_ASSOC);
}


?>