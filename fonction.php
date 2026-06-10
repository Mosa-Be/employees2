<?php


function dbconnect()
{
    static $connect = null;
    if( $connect === null){

        $connect = mysqli_connect('localhost','root','','employees');
        
        if(!$connect){
         
            die('il y a erreur sur la base de donne : ' .mysqli_connect_error() );
        
        }
        mysqli_set_charset($connect,'utf8mb4');
    }

    return $connect;

}


function deplist(){
    $sql = "SELECT dept_name FROM departments";
    echo $sql;
    $nes = mysqli_query(dbconnect(),$sql);
    $result =array();
    while ($news = mysqli_fetch_assoc($nes)){
        $result[] = $news;
    }
    mysqli_free_result($nes);
    return $result;

    }















?>








































