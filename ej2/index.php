
<html>
<body>
<?php
if (isset($_POST["numero1"])){
    if ($_POST["numero1"] == $_POST["numero2"]){
        echo "Los numeros son iguales";
    }
}
else if($_POST["numero1"] > $_POST["numero2"]){
    echo "El numero" . $_POST["numero1"] . "es mayor que" . $_POST["numero2"];
}
else{
    echo "El numero" . $_POST["numero1"] . "es nemor que" . $_POST["numero2"];
}

?>    
    <form action="formulario.php" method="POST">
    <label for="numero1">Introduce el numero 1</label><br>
    <input type="text" id="nuero1" name="numero1"/><br>
    <label for="numero2">Introduce el numero 2</label><br>
    <input type="text" id="nuero2" name="numero2"/><br>
    <input type="submit" value="enviar"/>
</form>


</body>
</html>