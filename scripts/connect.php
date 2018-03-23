
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
query2("SET NAMES 'UTF8'");
?>