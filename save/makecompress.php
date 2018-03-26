<?php
//переменная для вывода действия
$action;

  if(strlen($_POST['name'])>=1){
    /*проверяем если в поле "новое имя" какие-то данные,
    и если есть делам новую запись в базу
    */
        $name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_SPECIAL_CHARS);
        $result = query3("INSERT INTO compressors (comp_name) VALUES ('$name')");
        $action="Добавляем компрессор ";
  }else if($_POST['deleteobject']==1){
    /*если нет, то проверяем чек-бокс на удаление объекта.
    если true то удаляем объект из всех баз по id и id записанного в tasks
    */
    $id=$_POST['idcomp'];
    $result = query3("DELETE FROM compressors WHERE id='$id'");
    $result = query4("DELETE FROM tasks WHERE com_id='$id'");
    $result = query5("DELETE FROM tasks WHERE com_id='$id'");
    $result = query6("DELETE FROM tasks WHERE com_id='$id'");
    $action="Удаляем компрессор ";
  }else if($_POST['renameobject']==1){
    /*то же самое только для переименования объекта
    если true то меняем объект из всех баз по id и id записанного в tasks
    */
    $id=$_POST['idcomp'];
      $rename=$_POST['rename'];
      $result = query3 ("UPDATE compressors SET comp_name = '$rename' WHERE id='$id'");
      $result2 = query4 ("UPDATE tasks SET name = '$rename' WHERE com_id='$id'");
      $result3 = query5 ("UPDATE tasks SET name = '$rename' WHERE com_id='$id'");
      $result4 = query6 ("UPDATE tasks SET name = '$rename' WHERE com_id='$id'");
      $action="Переименовываем компрессор ";
  }else{
    $action="Ничего не делаем";
  }

?>

<div class="fomrobject">
<h4><?php echo $action ?> <i class="fas fa-sync fa-spin"></i></h4>
<!-- скрипт перезагрузки страницы -->
<script type="text/javascript">
$( document ).ready(function() {
	setTimeout(function(){ location.reload(); }, 1500);
 

});
</script>
</div>