<script type="text/javascript">
$( document ).ready(function() {

    // скрипт для модального окна переименования объекта
    $('.openform').click(function(){
        $('#obname').val( $(this).attr('data-name'));
        $('#obid').val( $(this).attr('data-id') );
        
    });

    $('#renameobj').submit(function(){
            $.post( $(this).attr('action'), $(this).serialize(), function( data ) {
              $('#renameobj').html( data );
            });
        return false;
    });

       // скрипт для модального окна переименования задачи
    $('.openformplan').click(function(){
        $('#plname').val( $(this).attr('data-name'));
        $('#plid').val( $(this).attr('data-id') );
        $('#pldate').val( $(this).attr('data-pos') );
        $('#plobjectid').val( $(this).attr('data-object-id') );
    });

        $('#renameplanform').submit(function(){
                $.post( $(this).attr('action'), $(this).serialize(), function( data ) {
              $('#renameplanform').html( data );
            });
        return false;
    });
     // скрипт для модального окна создания объекта
        $('.openformcreate').click(function(){
    });
    
    $('#createobj').submit(function(){
            $.post( $(this).attr('action'), $(this).serialize(), function( data ) {
              $('#createobj').html( data );
            });
        return false;
    });

 // скрипт для модального окна создания компрессора
        $('#createcompr').submit(function(){
            $.post( $(this).attr('action'), $(this).serialize(), function( data ) {
              $('#createcompr').html( data );
            });
        return false;
    });

           // скрипт для модального окна смены компрессора
           $('.openformplancompr').click(function(){
        $('#plidcompr').val( $(this).attr('data-id') );
        $('#pldatecompr').val( $(this).attr('data-pos') );
        $('#plobjectidcompr').val( $(this).attr('data-object-id') );
    });

            $('#changecompress').submit(function(){
            $.post( $(this).attr('action'), $(this).serialize(), function( data ) {
              $('#changecompress').html( data );
            });
        return false;
    });

     // скрипт для модального окна создания вакуума
     $('#creatvak').submit(function(){
            $.post( $(this).attr('action'), $(this).serialize(), function( data ) {
              $('#creatvak').html( data );
            });
        return false;
    });

     // скрипт для модального окна смены вакуумника
    $('.openformplanvak').click(function(){
        $('#plidvak').val( $(this).attr('data-id') );
        $('#pldatevak').val( $(this).attr('data-pos') );
        $('#plobjectidvak').val( $(this).attr('data-object-id') );
    });

            $('#changevak').submit(function(){
            $.post( $(this).attr('action'), $(this).serialize(), function( data ) {
              $('#changevak').html( data );
            });
        return false;
    });

         // скрипт для модального окна создания КГС
         $('#createkgs').submit(function(){
            $.post( $(this).attr('action'), $(this).serialize(), function( data ) {
              $('#createkgs').html( data );
            });
        return false;
    });

     // скрипт для модального окна смены КГС
    $('.openformpkgs').click(function(){
        $('#plidkgs').val( $(this).attr('data-id') );
        $('#pldatekgs').val( $(this).attr('data-pos') );
        $('#plobjectidkgs').val( $(this).attr('data-object-id') );
    });

            $('#changekgs').submit(function(){
            $.post( $(this).attr('action'), $(this).serialize(), function( data ) {
              $('#changekgs').html( data );
            });
        return false;
    });
     
});
</script>