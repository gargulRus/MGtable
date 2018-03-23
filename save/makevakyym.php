<?php
$action;
  if(strlen($_POST['name'])>=1){

        $name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_SPECIAL_CHARS);
        $result = query3("INSERT INTO vakyyms (vak_name) VALUES ('$name')");
        $action="Добавляю";
  }else {
    $id=$_POST['idvak'];
    $result = query3("DELETE FROM vakyyms WHERE id='$id'");
    $action="Удаляю";
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