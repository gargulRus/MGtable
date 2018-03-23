<?php

$action;
$id = $_POST['id'];
$idvak = $_POST['idvak'];
$object_id=$_POST['object-id'];
$pos_num=$_POST['position'];

$res = query3("SELECT vak_name FROM `vakyyms` WHERE id='$idvak'");
while($row = mysqli_fetch_assoc($res)){ 
   $vname=$row['vak_name'];
}
// Проверяем что пришло от чекбокса
if(isset($_POST['deletplan'])){
	$del=1;
  }else{
	 $del=2;
  }
// И если 2(false) то меняет задачу
// А если 1(true) то удаляем задачу из базы

if ($del==2){
		if (is_numeric( $id)){
            $result = query ("UPDATE tasks SET name = '$vname' WHERE id='$id'");
            $action="Меняю ";
		}else{
				$query = "INSERT INTO `tasks` (`object_id`, `name`, `pos_num`) VALUES ('".$object_id."', '".$vname."', '".$pos_num."' )";
				$result = query ($query);
            $action="Меняю ";
        }
 
	}else {
	  $result2 = query ("DELETE FROM tasks WHERE id='$id'");
	  $action="Убираю ";
  }

?>


<div class="fomrobject">
<h4><?php echo $action; ?> вакуумник <i class="fas fa-sync fa-spin"></i></h4>

  <script type="text/javascript">
  $( document ).ready(function() {
setTimeout(function(){ location.reload(); }, 1500);
  });
  </script>
 </div>