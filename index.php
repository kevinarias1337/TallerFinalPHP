<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="content-type" content="text/html; charset=utf-8">
        <link rel="stylesheet" href="diseño/bootstrap-3.3.6-dist/css/bootstrap.css">
        <link rel="stylesheet" href="diseño/bootstrap-3.3.6-dist/css/bootstrap-theme.css">
        <link rel="stylesheet" href="diseño/bootstrap-3.3.6-dist/design/design.css">
        <title>
            Taller Final: Cálculo de notas.
        </title>
        <script>
        function proceso(txttaller1, txttaller2, txtcuestionario1, txtcuestionario2, txtproyectofinal, boton){
            switch(boton){
                case "Calcular":
                var parametros={
                    "txttaller1":txttaller1,
                    "txttaller2":txttaller2,
                    "txtcuestionario1":txtcuestionario1,
                    "txtcuestionario2":txtcuestionario2,
                    "txtproyectofinal":txtproyectofinal,
                    "btncalcular":boton
                }
                break;
            }
            $.ajax({
                data: parametros,
                url: 'calcular.php',
                type: 'post',
                beforeSend:
                        function(){
                            $('#resultado').html('Cargando...');
                        },
                success:
                        function(response){
                            $('#resultado').html(response);
                        }
            });
        }
        </script>
    </head>

    <body>
        <h1>
            Cálculo de notas.
        </h1>
        <form name="form1">
            Ingrese la nota del Taller #1:
            <input type="text" name="txttaller1" id="txttaller1">
            <br>
            Ingrese la nota del Taller #2:
            <input type="text" name="txttaller2" id="txttaller2">
            <br>
            Ingrese la nota del Cuestionario #1:
            <input type="text" name="txtcuestionario1" id="txtcuestionario1">
            <br>
            Ingrese la nota del Cuestionario #2:
            <input type="text" name="txtcuestionario2" id="txtcuestionario2">
            <br>
            Ingrese la nota del <b>Proyecto Final:</b>
            <input type="text" name="txtproyectofinal" id="txtproyectofinal">
            <br>
            <input type="button" name="btncalcular" id="btncalcular" value="Calcular" 
            onclick="proceso($('#txttaller1').val(), $('#txttaller2').val(), $('#txtcuestionario1').val(), $('#txtcuestionario2').val(), $('#txtproyectofinal').val(), $('#btncalcular').val());">
        </form>
        <br>
        <span id="resultado"></span>
        <script src="js/jquery-3.4.1.js"></script>
        <script src="diseño/bootstrap-3.3.6-dist/js/bootstrap.js"></script>
    </body>
</html>