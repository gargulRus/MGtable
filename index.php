<?php

ini_set('display_errors', on); //Включаем ошибка в конфигурации PHP
session_start(); 
//error_reporting(0); //Протокол ошибок выключен
error_reporting(-1); //Вывод всех ошибок

//смотрим что пришло из выбора формы годов id="changeyear", и подключаем базу с нужным именем
if(isset($_POST['idyear'])){
    if($_POST['idyear']==2){
        $_SESSION['yeardb']='mgtable2017';
        $year=" за 2017 год";
    } else if($_POST['idyear']==3){
        $_SESSION['yeardb']='mgtable2018';
        $year=" за 2018 год";
    }
    else if($_POST['idyear']==1){
        $_SESSION['yeardb']='mgtable2016';
        $year=" за 2016 год";
    }
}
//получив перменную с именем базы подключаем ее и другие
include_once(__DIR__."/scripts/connect.php");

//запрос в базу выбора годов
$res2 = query2("SELECT id, year_name FROM `years`");
if(!$res2) exit("Ошибка запроса: ".mysqli_error());
if(mysqli_num_rows($res2)>0){ 
    $selectyear = '<select name="idyear"  class="yyeear form-control input-sm" id="yearsel">'; 
    while($row = mysqli_fetch_assoc($res2)){ 
        $selectyear.= "<option value=".$row['id'].">".$row['year_name']."</option>";
    } 
    $selectyear.="</select>";
}

// Установим админские права:
//в ссылке браузера добавить ?mode=admin
//тогда будет работать блок php дающий возможность управлять таблицей
if(isset($_GET['mode']) && $_GET['mode'] == 'admin'){
  $_SESSION['admin'] = true;
}

//данная конструкция вызывается при обращении ?save="#"
//выполняет код скрипта и останаливает дальнейший вывод.
if(isset($_GET['save'])){
  include(__DIR__.'/save/'.$_GET['save'].'.php');
  exit;
}
//Грузим страницу по умолчанию. Без админских прав.
$page = (isset($_GET['page']))
    ? $_GET['page']
    : 'main2.php';


?>
<!doctype html>
<html>
 <head>
        <meta charset="utf-8">
        <title>МедГазы АО "Гипроздорав"</title>
        <link rel="stylesheet" href="css/main.css">
        <link rel="stylesheet" href="css/bootstrap.css">
         <link rel="shortcut icon" href="/image/logo.ico" type="image/x-icon">
         <link rel="stylesheet" href="/plugins/fontawesome/css/fontawesome-all.min.css">
         <script src="/scripts/clock.js"></script>
    </head>
    <body>
        <div class="one">
            <div class="two1">
                <img src="/image/logo.png" class="logoimg">
            </div>
            <div class="two2">
                <h1>Учет объектов отдела МедГазы <?php echo $year;?></h1>
            </div>
                        <div class="clock">
             <span id="doc_time"></span>
             <script type="text/javascript">
                 clock();
             </script>
           </div>
        </div>
        
<div class="content">
<div class="selectyear">
<h3>Выберите год: </h3>
 <div class="horizont1">
                 <form id="changeyear">
                    <div class="form-group">
                    <?=$selectyear;?>
                </div>       
            </form>
            </div>
            <div class="horizont2">
            <input type="submit" form="changeyear" formaction="#" formmethod="POST" class="btn btn-gipro" value="ОК"/>
            </div>
</div>
  <!-- Если открыта сессия админа - выдаем главную страницу -->
  <!-- с редактируемой таблицей -->
              <?php
                if(isset($_SESSION['admin'])){
                    $page = (isset($_GET['page']))
                    ? $_GET['page']
                    : 'main.php';
                    include(__DIR__.'/pages/'.$page);
               } else{
                include(__DIR__.'/pages/'.$page);
               }
      ?>

  </div>
      <!-- Site footer -->
      <div class="footer">
        <p>© АО &quot;Гипроздрав&quot; <?=date('Y');?></p>
      </div> <!-- /Site footer -->

    </div> <!-- /container -->
    </body>
</html>