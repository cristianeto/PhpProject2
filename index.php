<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>PAgina de prueba</title>
    </head>
    <body>
        <h1>Bienvenido Cristian Geovanny</h1>
        <?php
        
        //for($i=0; $i<5; $i++)
        //echo "Ola ke ase";
        
        
        echo	"<h1>Tabla de multiplicar del 7</h1>";
	echo "<h2>Tabla del 7</h2>";

// Bucle de 1 a 10
for($i=1; $i<11; $i++)
echo "7 x $i = ".(7*$i)."<br>\n";
        
        ?>
        
        <label>Nombre: </label><input type="text" name="nombre" placeholder="Ingrese su nombre"/><br>
        <label>Apellido: </label><input type="text" name="apellido" placeholder="Ingrese su apellido"/>
        <input type="submit" value="Guardar" name="guardar"/>
    </body>
</html>
