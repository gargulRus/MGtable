<?php
//комментарии к коду смотри в compressintasks.php
$action;
$id = $_POST['id'];
$idkgs = $_POST['idkgs'];
$object_id=$_POST['object-id'];
$pos_num=$_POST['position'];

$res = query3("SELECT kgs_name FROM `kgs` WHERE id='$idkgs'");
while($row = mysqli_fetch_assoc($res)){ 
   $kname=$row['kgs_name'];
}
if(isset($_POST['deletplan'])){
	$del=1;
  }else{
	 $del=2;
  }

if ($del==2){
		if (is_numeric( $id)){
            $result = query ("UPDATE tasks SET name = '$kname' WHERE id='$id'");
            $result2 = query ("UPDATE tasks SET kgs_id = '$idkgs' WHERE id='$id'");
            $action="Меняю ";
		}else{
        $query = "INSERT INTO `tasks` (`object_id`, `name`, `pos_num` , `kgs_id`) VALUES ('".$object_id."', '".$kname."', '".$pos_num."' , '".$idkgs."')";
				$result = query ($query);
            $action="Меняю ";
        }
	}else {
	  $result2 = query ("DELETE FROM tasks WHERE id='$id'");
	  $action="Убираю ";
  }
?>

<div class="fomrobject">
<h4><?php echo $action; ?> КГС <i class="fas fa-sync fa-spin"></i></h4>
  <script type="text/javascript">
  $( document ).ready(function() {
setTimeout(function(){ location.reload(); }, 1500);
  });
  </script>
 </div>