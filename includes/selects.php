<?php
$res = query3("SELECT id, comp_name FROM `compressors`");
//if(!$res) exit("Ошибка запроса: ".mysqli_error());
if(mysqli_num_rows($res)>0){ 
    $select = '<select name="idcomp"  class="form-control input-sm" id="compsel">'; 
    // В цикле выводим опции селекта 
    while($row = mysqli_fetch_assoc($res)){ 
        $select.= "<option value=".$row['id'].">".$row['comp_name']."</option>";
    } 
    $select.="</select>";
}

$resvak = query3("SELECT id, vak_name FROM `vakyyms`");
//if(!$resvak) exit("Ошибка запроса: ".mysqli_error());
if(mysqli_num_rows($resvak)>0){ 
    $selectvak = '<select name="idvak"  class="form-control input-sm" id="vaksel">'; 
    // В цикле выводим опции селекта 
    while($rowvak = mysqli_fetch_assoc($resvak)){ 
        $selectvak.= "<option value=".$rowvak['id'].">".$rowvak['vak_name']."</option>";
    } 
    $selectvak.="</select>";
}

$reskgs = query3("SELECT id, kgs_name FROM `kgs`");
//if(!$reskgs) exit("Ошибка запроса: ".mysqli_error());
if(mysqli_num_rows($reskgs)>0){ 
    $selectkgs = '<select name="idkgs"  class="form-control input-sm" id="kgssel">'; 
    // В цикле выводим опции селекта 
    while($rowkgs = mysqli_fetch_assoc($reskgs)){ 
        $selectkgs.= "<option value=".$rowkgs['id'].">".$rowkgs['kgs_name']."</option>";
    } 
    $selectkgs.="</select>";
}
?>