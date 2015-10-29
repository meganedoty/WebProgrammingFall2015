<?php
ini_set('display_errors', 1);
date_default_timezone_get("America/New_York");

function GetConnection(){
    $sql_password = 'hello';
    return new mysqli('localhost', 'megan', $sql_password, 'hello');
}

function my_print($x){
    echo '<pre>';
	print_r($x);
	echo '</pre>';
}

function FetchAll($sql){
    $ret = array();
    $conn = GetConnection();
    $results = $conn->query($sql);
    
    $error = $conn->error;
    if($error){
        echo $error;
    }else{
        while ($rs = $results->fetch_asoc()) {
            $ret[] = $rs;
        }
    }
    $conn->close();
    
    return $ret;
}