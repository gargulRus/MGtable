<?php
$action;
  if(strlen($_POST['name'])>=1){

        $name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_SPECIAL_CHARS);
        $result = query3("INSERT INTO compressors (comp_name) VALUES ('$name')");
        $action="Добавляем";
  }else {
    $id=$_POST['idcomp'];
    $result = query3("DELETE FROM compressors WHERE id='$id'");
    $action="Удаляем";
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