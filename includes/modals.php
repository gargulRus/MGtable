<!-- Модальное окно создания объекта -->
<div id="write" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
            <button class="close" data-dismiss="modal">x</button>
            <h4 class="modal-title">Создать объект</h4>
            </div>
            <div class="modal-body">
                 <form method="POST" action="/?save=write" id="createobj">
                    <div class="form-group">
                    <input name='name' type='text' value="" placeholder="Имя" id="obname1" class="form-control">
                </div>
                 <div class="form-group text-right">
                     <input type="submit" class="btn btn-success" value="Сохранить"/>
                   </div>
            </form>
        </div>
        </div>
    </div>
</div>

<!-- Модальное окно создания компрессора -->
<div id="makecompress" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
            <button class="close" data-dismiss="modal">x</button>
            <h4 class="modal-title">Добавить или изменить компрессор</h4>
            </div>
            <div class="modal-body">
                 <form method="POST" action="/?save=makecompress" id="createcompr">
                    <div class="form-group">
                    <label for="compsel">Новый компрессор</label>
                    <input name='name' type='text' value="" placeholder="Новый компрессор" id="" class="form-control">
                    </div>
                    <div class="form-group">
                    <label for="compsel">Изменить существующий</label>
                    <?=$select;?>
                    </div>
                    <div class="form-group">
                    <label for="obdelete">Удалить компрессор</label>
                    <input type="checkbox"  name="deleteobject" id="obdelete" class="objectdelete" value=1>
                    <label for="obrename">Переименовать компрессор</label>
                    <input type="checkbox"  name="renameobject" id="obrename" class="objectrename" value=1>
                    <input name='rename' type='text' value="" placeholder="Новое название" id="" class="form-control">
                </div>
                 <div class="form-group text-right">
                     <input type="submit" class="btn btn-success" value="Сохранить"/>
                   </div>
            </form>
        </div>
        </div>
    </div>
</div>

<!-- Модальное окно создания вакуумника -->
<div id="makevakk" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
            <button class="close" data-dismiss="modal">x</button>
            <h4 class="modal-title">Добавить или изменить вакуумник</h4>
            </div>
            <div class="modal-body">
                 <form method="POST" action="/?save=makevakyym" id="creatvak">
                    <div class="form-group">
                    <label for="vaksel">Новый вакуумник</label>
                    <input name='name' type='text' value="" placeholder="Имя" id="" class="form-control">
                    </div>
                    <div class="form-group">
                    <label for="vaksel">Изменить существующий</label>
                    <?=$selectvak;?>
                </div>
                
                <div class="form-group">
                    <label for="obdelete">Удалить вакуумник</label>
                    <input type="checkbox"  name="deleteobject" id="obdelete" class="objectdelete" value=1>
                    <label for="obrename">Переименовать вакуумник</label>
                    <input type="checkbox"  name="renameobject" id="obrename" class="objectrename" value=1>
                    <input name='rename' type='text' value="" placeholder="Новое название" id="" class="form-control">
                </div>
                 <div class="form-group text-right">
                     <input type="submit" class="btn btn-success" value="Сохранить"/>
                   </div>
            </form>
        </div>
        </div>
    </div>
</div>

<!-- Модальное окно создания КГС -->
<div id="makekgs" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
            <button class="close" data-dismiss="modal">x</button>
            <h4 class="modal-title">Добавить или изменить КГС</h4>
            </div>
            <div class="modal-body">
                 <form method="POST" action="/?save=makekgs" id="createkgs">
                    <div class="form-group">
                    <label for="kgssel">Новая КГС</label>
                    <input name='name' type='text' value="" placeholder="Имя" id="" class="form-control">
                    </div>
                    <div class="form-group">
                    <label for="compsel">Изменить существующую</label>
                    <?=$selectkgs;?>
                </div>
                <div class="form-group">
                    <label for="obdelete">Удалить КГС</label>
                    <input type="checkbox"  name="deleteobject" id="obdelete" class="objectdelete" value=1>
                    <label for="obrename">Переименовать КГС</label>
                    <input type="checkbox"  name="renameobject" id="obrename" class="objectrename" value=1>
                    <input name='rename' type='text' value="" placeholder="Новое название" id="" class="form-control">
                </div>
                 <div class="form-group text-right">
                     <input type="submit" class="btn btn-success" value="Сохранить"/>
                   </div>
            </form>
        </div>
        </div>
    </div>
</div>


<!-- Модальное окно переименования объекта -->
<div id="renameobject" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
            <button class="close" data-dismiss="modal">x</button>
            <h4 class="modal-title">Переименовать объект</h4>
            </div>
            <div class="modal-body">
                 <form method="POST" action="/?save=renameobject" id="renameobj">
                    <div class="form-group">
                    <input name='name' type='text' value="" placeholder="Имя" id="obname" class="form-control">
                </div>
                <div class="form-group">
                     <input type="checkbox"  name="deleteobject" id="obdelete" class="objectdelete" value=1>
                     <label for="obdelete">Удалить объект</label>
                </div>
                     <input name='id' type='hidden' value="" id="obid">
            
                 <div class="form-group text-right">
                     <input type="submit" class="btn btn-success" value="Сохранить"/>
                   </div>
            </form>
        </div>
        </div>
    </div>
</div>
<!-- Модальное окно переименования задачи -->
<div id="renameplan" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
            <button class="close" data-dismiss="modal">x</button>
            <h4 class="modal-title">Изменить задачу</h4>
            </div>
            <div class="modal-body">
                 <form method="POST" action="/?save=renameplan" id="renameplanform">
                    <div class="form-group">
                    <input name='name' type='text' value="" placeholder="Имя" id="plname" class="form-control">
                </div>
                <div class="form-group">
                     <input type="checkbox"  name="deletplan" id="pldelete" class="plandelete" value=1>
                     <label for="pldelete">Удалить задачу</label>
                </div>
           
                     <input name='id' type='hidden' value="" id="plid">
                     <input name='object-id' type='hidden' value="" id="plobjectid">
                     <input name='position' type='hidden' value="" id="pldate">            
                 <div class="form-group text-right">
                     <input type="submit" class="btn btn-success" value="Сохранить"/>
                   </div>
            </form>
        </div>
        </div>
    </div>
</div>

<!-- Модальное окно изменения компрессора -->
<div id="changecomprr" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
            <button class="close" data-dismiss="modal">x</button>
            <h4 class="modal-title">Сменить компрессор</h4>
            </div>
            <div class="modal-body">
                 <form method="POST" action="/?save=compressintasks" id="changecompress">
                    <div class="form-group">
                    <?=$select;?>
                </div>
                <div class="form-group">
                     <input type="checkbox"  name="deletplan" id="pldelete" class="plandelete" value=1>
                     <label for="pldelete">Убрать компрессор</label>
                </div>
           
                     <input name='id' type='hidden' value="" id="plidcompr">
                     <input name='object-id' type='hidden' value="" id="plobjectidcompr">
                     <input name='position' type='hidden' value="" id="pldatecompr">            
                 <div class="form-group text-right">
                     <input type="submit" class="btn btn-success" value="Сохранить"/>
                   </div>
            </form>
        </div>
        </div>
    </div>
</div>

<!-- Модальное окно изменения ваккумника -->
<div id="changevakk" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
            <button class="close" data-dismiss="modal">x</button>
            <h4 class="modal-title">Сменить ваккумник</h4>
            </div>
            <div class="modal-body">
                 <form method="POST" action="/?save=vakintasks" id="changevak">
                    <div class="form-group">
                    <?=$selectvak;?>
                </div>
                <div class="form-group">
                     <input type="checkbox"  name="deletplan" id="pldelete" class="plandelete" value=1>
                     <label for="pldelete">Убрать ваккумник</label>
                </div>
           
                     <input name='id' type='hidden' value="" id="plidvak">
                     <input name='object-id' type='hidden' value="" id="plobjectidvak">
                     <input name='position' type='hidden' value="" id="pldatevak">            
                 <div class="form-group text-right">
                     <input type="submit" class="btn btn-success" value="Сохранить"/>
                   </div>
            </form>
        </div>
        </div>
    </div>
</div>

<!-- Модальное окно изменения кгски -->
<div id="changekgss" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
            <button class="close" data-dismiss="modal">x</button>
            <h4 class="modal-title">Сменить КГС</h4>
            </div>
            <div class="modal-body">
                 <form method="POST" action="/?save=kgsintasks" id="changekgs">
                    <div class="form-group">
                    <?=$selectkgs;?>
                </div>
                <div class="form-group">
                     <input type="checkbox"  name="deletplan" id="pldelete" class="plandelete" value=1>
                     <label for="pldelete">Убрать КГС</label>
                </div>
           
                     <input name='id' type='hidden' value="" id="plidkgs">
                     <input name='object-id' type='hidden' value="" id="plobjectidkgs">
                     <input name='position' type='hidden' value="" id="pldatekgs">            
                 <div class="form-group text-right">
                     <input type="submit" class="btn btn-success" value="Сохранить"/>
                   </div>
            </form>
        </div>
        </div>
    </div>
</div>