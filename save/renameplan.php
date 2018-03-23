<?php
//$rename = filter_string($_POST['name']);
$rename = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_SPECIAL_CHARS);
$action;
$id = $_POST['id'];

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

			$result = query ("UPDATE tasks SET name = '$rename' WHERE id='$id'");
            $action=" переименовывается";
			
		}else {
			$object_id = $_POST['object-id'];
			$pos_num = $_POST['position'];
			if (is_numeric( $object_id)){
				$query = "INSERT INTO `tasks` (`object_id`, `name`, `pos_num`) VALUES ('".$object_id."', '".$rename."', '".$pos_num."' )";
				$result = query ($query);
			}
			$action=" создается";
		}
 
	}else {
	  $result2 = query ("DELETE FROM tasks WHERE id='$id'");
	  $action=" удаляется";
  }


?>

<div class="fomrobject">
<h4>Задача<?php echo $action; ?>  <i class="fas fa-sync fa-spin"></i></h4>

<script type="text/javascript">
$( document ).ready(function() {
	setTimeout(function(){ location.reload(); }, 1500);
 

});
</script>
</div>