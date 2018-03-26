<?php
//комментарии к коду смотри в makecompress.php
$action;
  if(strlen($_POST['name'])>=1){
        $name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_SPECIAL_CHARS);
        $result = query3("INSERT INTO vakyyms (vak_name) VALUES ('$name')");
        $action="Добавляем вакуумник";
      }else if($_POST['deleteobject']==1){
        $id=$_POST['idvak'];
        $result = query3("DELETE FROM vakyyms WHERE id='$id'");
        $result = query4("DELETE FROM tasks WHERE vak_id='$id'");
        $result = query5("DELETE FROM tasks WHERE vak_id='$id'");
        $result = query6("DELETE FROM tasks WHERE vak_id='$id'");
        $action="Удаляем вакуумник ";
      }else if($_POST['renameobject']==1){
        $id=$_POST['idvak'];
          $rename=$_POST['rename'];
          $result = query3 ("UPDATE vakyyms SET vak_name = '$rename' WHERE id='$id'");
          $result2 = query4 ("UPDATE tasks SET name = '$rename' WHERE vak_id='$id'");
          $result3 = query5 ("UPDATE tasks SET name = '$rename' WHERE vak_id='$id'");
          $result4 = query6 ("UPDATE tasks SET name = '$rename' WHERE vak_id='$id'");
          $action="Переименовываем компрессор ";
      }else{
        $action="Ничего не делаем";
      }
?>

<div class="fomrobject">
<h4><?php echo $action; ?> <i class="fas fa-sync fa-spin"></i></h4>
<script type="text/javascript">
$( document ).ready(function() {
	setTimeout(function(){ location.reload(); }, 1500);
});
</script>
</div>