<?php
require("connection.php");

function getAllDepartements(){
    $sql="Select * from departments ";
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
function Check_current($date){
    $retour;
    $tableau=explode("-",$date);
    $date=(int)$tableau[0];
    if ($date==9999) {
         $retour="Current";
    }else{
        $retour=$date;
    }
    return $retour;
}
function getEmployee($id_dep){
    $sql="Select * from v_current_dep_emp where dept_no='%s' limit 20 ";
    $sql=sprintf($sql,$id_dep);
    $result = mysqli_query(db_connect(), $sql);
    
    $posts = [];
   
    while ($row = mysqli_fetch_assoc($result)) {
        $posts[] = $row;
    }

    return $posts;
}
function getOneEmployee($id_emp){
    $sql="Select * from v_current_dep_emp where emp_no='%s' ";
    $sql=sprintf($sql,$id_emp);
   
    
    $result = mysqli_query(db_connect(), $sql);
    
    $posts;
   
    if($row = mysqli_fetch_assoc($result)) {
        $posts = $row;
    }

    return $posts;
} 
function getName($id_emp){
    $sql="Select first_name,last_name from employees where emp_no='%s' ";
    $sql=sprintf($sql,$id_emp);
   
    
    $result = mysqli_query(db_connect(), $sql);
    
    $posts;
   
    if($row = mysqli_fetch_assoc($result)) {
        $posts = $row;
    }

    return $posts;
} 
function getDepName($id_dep){
    $sql="Select dept_name from departments where dept_no='%s' ";
    $sql=sprintf($sql,$id_dep);
   
    
    $result = mysqli_query(db_connect(), $sql);
    
    $posts;
   
    if($row = mysqli_fetch_assoc($result)) {
        $posts = $row;
    }

    return $posts;
}

function getSalaire($id_emp){
    $sql="Select * from salaries where emp_no='%s' order by to_date DESC ";
    $sql=sprintf($sql,$id_emp);
   
    $result = mysqli_query(db_connect(), $sql);
    
    $posts = [];
   
    while ($row = mysqli_fetch_assoc($result)) {
        $posts[] = $row;
    }

    return $posts;
} 
function getTitle($id_emp){
    $sql="Select * from titles where emp_no='%s'  order by to_date DESC";
    $sql=sprintf($sql,$id_emp);
    
    $result = mysqli_query(db_connect(), $sql);
    
    $posts = [];
   
    while ($row = mysqli_fetch_assoc($result)) {
        $posts[] = $row;
    }

    return $posts;
} 








?>