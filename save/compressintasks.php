<?php
//ловим все переменные из формы ( на всякий случай)
$action;
$id = $_POST['id'];
$idcomp = $_POST['idcomp'];
$object_id=$_POST['object-id'];
$pos_num=$_POST['position'];
//деламем запрос в базу с компрессорами для получаения id
// которое потом запишется в базу tasks в соотвествующее поле com_id
$res = query3("SELECT comp_name FROM `compressors` WHERE id='$idcomp'");
while($row = mysqli_fetch_assoc($res)){ 
   $cname=$row['comp_name'];
}
//делаем проверка на чекбокс
if(isset($_POST['deletplan'])){
	$del=1;
  }else{
	 $del=2;
  }
if ($del==2){
  //если чекбокс false, а ячейка занята - то обновляем ее
		if (is_numeric( $id)){
            $result = query ("UPDATE tasks SET name = '$cname' WHERE id='$id'");
            $result2 = query ("UPDATE tasks SET com_id = '$idcomp' WHERE id='$id'");
            $action="Меняю";
		}else{
      //если ячейка - пуста - делаем новую запись
        $query = "INSERT INTO `tasks` (`object_id`, `name`, `pos_num` , `com_id`) VALUES ('".$object_id."', '".$cname."', '".$pos_num."' , '".$idcomp."')";
				$result = query ($query);
                $action="Меняю";
        }
	}else {
      //если чекбокс true - то удаляем объект ТОЛЬКО из tasks
	  $result2 = query ("DELETE FROM tasks WHERE id='$id'");
	  $action="Убираю ";
  }
?>

<div class="fomrobject">
<h4><?php echo $action; ?> компрессор <i class="fas fa-sync fa-spin"></i></h4>
  <script type="text/javascript">
  $( document ).ready(function() {
setTimeout(function(){ location.reload(); }, 500);
  });
  </script>
 </div>