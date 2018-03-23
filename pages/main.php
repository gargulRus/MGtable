<?php

include $_SERVER['DOCUMENT_ROOT']."/includes/selects.php";
?>

<div class="buttnons">
<a href="#" data-toggle="modal" data-target="#write" class="openformcreate btn btn-gipro">Новый Объект</a>  
<a href="#" data-toggle="modal" data-target="#makecompress" class="openformcreate btn btn-gipro">Компрессоры</a>  
<a href="#" data-toggle="modal" data-target="#makevakk" class="openformcreate btn btn-gipro">Вакуум</a>  
<a href="#" data-toggle="modal" data-target="#makekgs" class="openformcreate btn btn-gipro">КГС</a>  
  </div>
<?php
// формируем первоначальный массив с месяцами
$month=array(
           1=>'1',
           '2',
           '3',
           '4',
           '5',
           '6',
           '7',
           );
//задаем переменную для проставки порядковых номеров
           $pp= 1;

$list = array();
$result = query("SELECT id, name FROM objects");
/*Тут после первого запроса, перебираем полученный массив с
объектами, и на кажду итерацию цикла делаем еще один запрос в таблицу с задачами,
где по id объекта ищем задачи относящиеся к данному объекту.
*/
while($data = mysqli_fetch_assoc($result)){ 

    $result2 = query("SELECT id, name, pos_num FROM tasks WHERE object_id=".$data['id']);
    $planarr=array();
    while($plan = mysqli_fetch_assoc($result2)){ 
            //тут какая-то магия с датами
        $planarr[$plan['pos_num']]=array(
              'id'=>$plan['id'],
              'name'=>$plan['name'],
              'position_num'=>$plan['pos_num']
          );
    }
    $list[]=array(
        'id'=>$data['id'],
        'name'=>$data['name'],
        'plan'=>$planarr
    );
}
//формируем таблицу с полученным вложенным массивом
echo "   <div class='div-table'>";
   echo "
   <table class='table table-bordered table-hover table-condensed list-object'>
        <tr>
            <th rowspan='2'>П.П.</th>
            <th rowspan='2'>Объект</th>
            <th colspan='2'>Стадия П</th>
            <th colspan='2'>Стадия Р</th>
            <th rowspan='2'>Компрессорные</th>
            <th rowspan='2'>Вакуум</th>
            <th rowspan='2'>КГС</th>
        </tr>
        <tr>
        <th>МГ</th>
        <th>КГС</th>
        <th>МГ</th>
        <th>КГС</th>
       </tr>";

    foreach ($list as $key => $row) {
        echo '<tr>';
        echo '<td>' . $pp . '</td>';
        echo '<td><a 
            href="#" 
            data-toggle="modal" data-target="#renameobject" 
            class="openform" 
            data-id="'.$row['id'].'"
            data-name="'.$row['name'].'"
            >'. $row['name'] .'</a></td>';
   
        foreach ($month as $key_m => $col) {
            if(isset($row['plan'][$key_m])){
                    if($key_m < 5){
                  echo '<td alt="' . $row['plan'][$key_m]['id'] . '"><a 
                    href="#" 
                    data-toggle="modal" data-target="#renameplan" 
                    class="openformplan" 
                    data-id="'.$row['plan'][$key_m]['id'].'"
                    data-name="'.$row['plan'][$key_m]['name'].'"
                    data-pos="'.$key_m.'"
                    data-object-id="'.$row['id'].'"
                    >'. $row['plan'][$key_m]['name'] .'</a></td>';
                    }
                    else if($key_m==5){
                        echo '<td alt="' . $row['plan'][$key_m]['id'] . '"><a 
                        href="#" 
                        data-toggle="modal" data-target="#changecomprr" 
                        class="openformplancompr" 
                        data-id="'.$row['plan'][$key_m]['id'].'"
                        data-name="'.$row['plan'][$key_m]['name'].'"
                        data-pos="'.$key_m.'"
                        data-object-id="'.$row['id'].'"
                        >'. $row['plan'][$key_m]['name'] .'</a></td>';
                    }else if($key_m==6){
                        echo '<td alt="' . $row['plan'][$key_m]['id'] . '"><a 
                        href="#" 
                        data-toggle="modal" data-target="#changevakk" 
                        class="openformplanvak" 
                        data-id="'.$row['plan'][$key_m]['id'].'"
                        data-name="'.$row['plan'][$key_m]['name'].'"
                        data-pos="'.$key_m.'"
                        data-object-id="'.$row['id'].'"
                        >'. $row['plan'][$key_m]['name'] .'</a></td>';
                    }else if($key_m==7){
                        echo '<td alt="' . $row['plan'][$key_m]['id'] . '"><a 
                        href="#" 
                        data-toggle="modal" data-target="#changekgss" 
                        class="openformpkgs" 
                        data-id="'.$row['plan'][$key_m]['id'].'"
                        data-name="'.$row['plan'][$key_m]['name'].'"
                        data-pos="'.$key_m.'"
                        data-object-id="'.$row['id'].'"
                        >'. $row['plan'][$key_m]['name'] .'</a></td>';
                    }
            }else if($key_m==5){
                echo '<td><a 
                    href="#" 
                    data-toggle="modal" data-target="#changecomprr" 
                    data-pos="'.$key_m.'"
                    data-object-id="'.$row['id'].'"
                    class="openformplancompr hideFuck" >+
                    </a> </td>';
            }else if($key_m==6){
                echo '<td><a 
                    href="#" 
                    data-toggle="modal" data-target="#changevakk" 
                    data-pos="'.$key_m.'"
                    data-object-id="'.$row['id'].'"
                    class="openformplanvak hideFuck" >+
                    </a> </td>';
            }else if($key_m==7){
                echo '<td><a 
                    href="#" 
                    data-toggle="modal" data-target="#changekgss" 
                    data-pos="'.$key_m.'"
                    data-object-id="'.$row['id'].'"
                    class="openformpkgs hideFuck" >+
                    </a> </td>';
            } else{
                echo '<td><a 
                    href="#" 
                    data-toggle="modal" data-target="#renameplan" 
                    data-pos="'.$key_m.'"
                    data-object-id="'.$row['id'].'"
                    class="openformplan hideFuck" >+
                    </a> </td>';
            }

        }
        echo '</tr>';
    $pp++;
  }
       echo "</table>";

?>

<?php
include $_SERVER['DOCUMENT_ROOT']."/includes/modals.php";
?>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<?php
include $_SERVER['DOCUMENT_ROOT']."/includes/modalscr.php";
?>