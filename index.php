<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Practica 4 :: PHP :: Listado de Datos desde BBDD</</title>
        
        <link type="text/css" rel="stylesheet" href="estilos.css">
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
        <script language="javascript" type="text/javascript" src="jquery.js"></script>
    </head>
    <body background="fondos/bokeh.jpg">
        <div class="header">
            <span id="logo"><img src="logo.png" /></span>
        </div>
        <div class="caja" id="selector">
            <p>Listados MySQL desde PHP con jQuery/Ajax</p>
            <!-- No aparece el action ni el method en el form para conectar con main.php -->
            <form id="form1">
                <select id="querys" onchange="muestraVal()">
                    <option value="" selected>Selecciona una consulta</option>
                    <option value="SELECT * FROM alumnos">Consulta 1</option>
                    <option value="SELECT * FROM alumnos LIMIT 0,5">Consulta 2</option>
                    <option value="SELECT * FROM alumnos LIMIT 3,2">Consulta 3</option>
                    <option value="SELECT * FROM alumnos ORDER BY id DESC LIMIT 10">Consulta 4</option> 
                    <option value="SELECT * FROM alumnos ORDER BY id DESC LIMIT 3,2">Consulta 5</option>  
                    <option value="SELECT * FROM alumnos WHERE nombre = 'Armando'">Consulta 6</option> 
                    <option value="SELECT * FROM alumnos WHERE edad = 40 and nombre = 'Dolores'">Consulta 7</option> 
                    <option value="SELECT * FROM alumnos WHERE edad >= 40">Consulta 8</option>
                </select>
                <br/><br/>
                <input class="textbox" id="texto" name="text" maxlength="70" size="65" disabled/>
                <br/><br/>
                <button type="submit" class="boton" id="boton">Consultar</button>
            </form>
        </div>
        <br/>
        <div class="caja" id="contenido"></div>
        
        
    </body>
</html>
