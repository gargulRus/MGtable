
<?php
//функция подключения базы с объектами
function query($query){ global $link; //Название твоего соединения    
    if($response=mysqli_query($link, $query)){
        return $response;
    }
    return false; 
}
$link = mysqli_connect("192.168.62.231", "root", "1") or
    die("Ошибка соединения: " . mysql_error());
mysqli_select_db($link, $_SESSION['yeardb'] );
query("SET NAMES 'UTF8'");

//Функция подключения базы выбора годов
function query2($query2){ global $link2;  
    if($response2=mysqli_query($link2, $query2)){
        return $response2;
    }
    return false; 
}
$link2 = mysqli_connect("192.168.62.231", "root", "1") or
    die("Ошибка соединения: " . mysql_error());
mysqli_select_db($link2, 'mgyears');
query2("SET NAMES 'UTF8'");

//Функция подключения базы выбора оборудования
function query3($query3){ global $link3;    
    if($response3=mysqli_query($link3, $query3)){
        return $response3;
    }
    return false; 
}
$link3 = mysqli_connect("192.168.62.231", "root", "1") or
    die("Ошибка соединения: " . mysql_error());
mysqli_select_db($link3, 'equipments');
query3("SET NAMES 'UTF8'");

//ФУНКЦИИ ДЛЯ ОБНОВЛЕНИЯ ОБОРУДОВАНИЯ
//это сделано для актуализации измененых данных базы equipments в базе tasks различных годов
//бАЗА 2016
function query4($query4){ global $link4; 
    if($response4=mysqli_query($link4, $query4)){
        return $response4;
    }
    return false; 
}
$link4 = mysqli_connect("192.168.62.231", "root", "1") or
    die("Ошибка соединения: " . mysql_error());
mysqli_select_db($link4, 'mgtable2016' );
query4("SET NAMES 'UTF8'");
//БАЗА 2017
function query5($query5){ global $link5;    
    if($response5=mysqli_query($link5, $query5)){
        return $response5;
    }
    return false; 
}
$link5 = mysqli_connect("192.168.62.231", "root", "1") or
    die("Ошибка соединения: " . mysql_error());
mysqli_select_db($link5, 'mgtable2017' );
query5("SET NAMES 'UTF8'");
//БАЗА 2018
function query6($query6){ global $link6;    
    if($response6=mysqli_query($link6, $query6)){
        return $response6;
    }
    return false; 
}
$link6 = mysqli_connect("192.168.62.231", "root", "1") or
    die("Ошибка соединения: " . mysql_error());
mysqli_select_db($link6, 'mgtable2018' );
query6("SET NAMES 'UTF8'");
?>