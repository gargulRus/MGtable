<?php

$action;
$id = $_POST['id'];
$idcomp = $_POST['idcomp'];
$object_id=$_POST['object-id'];
$pos_num=$_POST['position'];

$res = query3("SELECT comp_name FROM `compressors` WHERE id='$idcomp'");
while($row = mysqli_fetch_assoc($res)){ 
   $cname=$row['comp_name'];
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
            $result = query ("UPDATE tasks SET name = '$cname' WHERE id='$id'");
            $action="Меняю ";
		}else{
				$query = "INSERT INTO `tasks` (`object_id`, `name`, `pos_num`) VALUES ('".$object_id."', '".$cname."', '".$pos_num."' )";
				$result = query ($query);
                $action="Меняю ";
        }
 
	}else {
	  $result2 = query ("DELETE FROM tasks WHERE id='$id'");
	  $action="Убираю ";
  }

?>


<div class="fomrobject">
<h4><?php echo $action; ?> компрессор <i class="fas fa-sync fa-spin"></i></h4>

  <script type="text/javascript">
  $( document ).ready(function() {
setTimeout(function(){ location.reload(); }, 1500);
  });
  </script>
 </div>