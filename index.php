<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio PHP y HTML</title>
    
</head>
<body>
    <h1>Ejercicios Solo HTML y PHP</h1>
    <p>1. ¿Qué es una API? <br>
    R) Una api es un codigo que permite que varios sistemas se comuniquen entre si.


    </p>
    <p>2. ¿Qué es DOCTYPE HTML?<br>
    R) Inidica al navegador que tipo de HTML estamos usando

    </p>
    <p>3. A partir del siguiente listado necesitamos crear una tabla que contenga <br>
        la información de los empleados de los cuales su índice sea un numero impar. <br> 
        (opcional): Nombre y Apellido deben ir en la misma celda.</p>
    <?php
    $empleados = [
    [
        "Nombre" => "Marcelo",
        "Apellido" => "Velez",
        "Edad" => 25,
        "Area" => "Administración",
         "Correo" => "marceloVelez@hotmail.com",],
    [
        "Nombre" => "Alberto",
        "Apellido"=> "Unbertini",
        "Edad" => 36,
        "Area" => "RRHH",
        "Correo" => "albert.unbert@hotmail.com",],
    [
        "Nombre"=>"Isidora",
        "Apellido" => "Gutierrez",
        "Edad" => 33,
        "Area" => "Desarrollador",
        "Correo" => "isi_gutie@gmail.cl",],
    [
        "Nombre" =>"Sebastian",
        "Apellido" => "Jimenez",
        "Edad" => 21,
        "Area" => "No Asignada",
        "Correo" =>"s.jimenez@gmail.cl",],
    [
        "Nombre" => "Manuel",
        "Apellido" => "Osorio",
        "Edad" => 19,
        "Area" =>"Desarrollador",
        "Correo" => "manu007@outlook.com",],
    [
        "Nombre" =>"Alonso"
        ,"Apellido" => "Villa",
        "Edad" => 47,
        "Area" => "Product Manager",
        "Correo" =>"alvilla@hotmail.com",]];


     echo "<table border=1>";
     echo "<tr>";
     echo "   <th>Nombre y Apellido</th>";
     echo "   <th>Edad</th>";
     echo "   <th>Administracion</th>";
     echo "   <th>Correo</th>";
     echo "</tr>";
     
     
       foreach($empleados as $i){
        echo "<tr>";
        echo "<td>".$i['Nombre']." ".$i['Apellido']."</dt>";
        echo "<td>".$i['Edad']."</dt>";
        echo "<td>".$i['Area']."</dt>";
        echo "<td>".$i['Correo']."</td>";
        echo "</tr>";
       }
     
     echo "</table>";
    
    ?>
    <p>4. Dado el siguiente array de objetos obtener los datos de la persona con la mayor edad encontrada.</p>
    <?php
    $personas = array ("Juan" => 8, "Pérez" => 15, "Sebastian" => 5, "Hans" => 9, "Gabriel" => 7, "Rocío" => 5);
    $names= array_keys($personas); #Extraemos nombre de las keys
    $edades=[];
    $n=0;
    foreach($personas as $name){
        $edades[$n]=$name; #Guardamos las edades
        $n++;
        
    }
    #Sacamos la edad mayor
    for($i=0;$i<count($edades);$i++){
        if($i==0){
            $edadMayor=$edades[$i];
        }else{
            if($edadMayor<$edades[$i]){
                $edadMayor=$edades[$i];
            }
        }
    }

    echo "<table border=1>";#mostaromos en una tabla
    echo "<tr>";
    echo    "<th>Nambre </th>";
    echo    "<th>Edad </th>";
    echo "</tr>";
    $tamañoNames=sizeof($names);
    $tamañoEdades=sizeof($edades);
    for($p=0;$p<$tamañoEdades;$p++){ #Sirve para cuando hay varias perosnas con la edad maxima
        if($edades[$p]==$edadMayor){
            
            echo "<tr>";
            echo "<td>".$names[$p]."</td>";
            echo "<td>".$edades[$p]."</td>";
            echo "</tr>";
           
        }
    }
    echo "</table>";
     ?>
     <p>5. Crea una función llamada “cantidad_caracteres” que retorne el número de caracteres de un texto.</p>
     <?php
     function cantidad_caracteres($texto){
        return strlen($texto);
     }
     $texto="mañana no hay clase";
     echo "El numero de caracteres del texto 'mañana no hay clase' :".cantidad_caracteres($texto);

     ?>
    <h1>Ejercicio Solo HTML y JS</h1>
    <p>2.Crea una función que permita sumar, restar, multiplicar y dividir. <br>
         Los valores para calcular deben ser enviados mediante inputs que <br>
          solo permitan números enteros, el evento se iniciará a la pulsación <br>
           de un botón llamado "calcular", Imprimir resultados por pantalla.</p>
    <form action="">
        <table border=1>
            <tr>
                <th>Primer digito</th>
                <th>Segundo digito</th>
                <th>Suma</th>
                <th>Resta</th>
                <th>Multiplicacion</th>
                <th>Division</th>
            </tr>
            <tr>
                <td><input type="number" id="d1"></td>
                <td><input type="number"id="d2"></td>
                <td><div id="suma"></div></td>
                <td><div id="resta"></div></td>
                <td><div id="multiplicacion"></div></td>
                <td><div id="division"></div></td>
            </tr>
        </table>
        <input type="button" onclick="Calcular()" value="Calcular"><br>
    
    </form>
    <br>

   
   <script>
        function numeroImpares(){
    for(let i=101;i<150;i=i+2){
        console.log(i);
    }
    }
    //1. Imprimir números impares mayores a 100 y menores a 150
    //EJM. 101,103,105,107, n...
    console.log("1. Imprimir números impares mayores a 100 y menores a 150 EJM. 101,103,105,107, n...");
     numeroImpares();
     //Segundo punto
     //Funcion para validar que sea entero
     function esEntero(numero){
    if (numero - Math.floor(numero) == 0) {
        return true;
    } else {
        return false;
    }
}

    function Calcular(){
        //Obtenemos los digitos ingresados
        var digito1 =document.getElementById("d1").value;
        var digito2 =document.getElementById("d2").value;
        //Validamos que sean enteros
        var aux=0;
        if(!esEntero(digito1)){
            alert("El digito uno es un digito decimal")
            document.getElementById("d1").focus;
            aux++;

        }
        if(!esEntero(digito2)){
            alert("El digito dos es un digito decimal")
            document.getElementById("d2").focus;
            aux++;
        }
        if(aux==0){//Controlamso qeu no haga la operacion si alguno de los digitos es real
            //Hacemos las operaciones
        var Suma = parseInt(digito1)+parseInt(digito2);
        var Resta = parseInt(digito1)-parseInt(digito2);
        var Multiplicacion = parseInt(digito1)*parseInt(digito2);
        var Division = parseInt(digito1)/parseInt(digito2);
        //Agregamos resultados
        document.getElementById('suma').innerHTML=Suma;
        document.getElementById('resta').innerHTML=Resta;
        document.getElementById('multiplicacion').innerHTML=Multiplicacion;
        document.getElementById('division').innerHTML=Division;
        }
    }


    //4. A partir del siguiente listado filtre los vehículos que tengan una capacidad mayor a 10 y sean de color azul.

    function MostrarTabla(){
        let vehiculo = [
        {"color": "rojo","marca": "bmw","capacidad": 11},
        {"color": "azul","marca": "fiat","capacidad": 2},
        {"color": "negro","marca": "hyundai","capacidad": 6},
        {"color": "amarillo","marca": "jeep","capacidad": 15},
        {"color": "azul","marca": "citroen","capacidad": 20},
        {"color": "azul","marca": "renault","capacidad": 12},
        {"color": "rojo","marca": "ford","capacidad": 4},
        {"color": "gris","marca": "toyota","capacidad": 8}];
       
        for(var i=0;i<vehiculo.length;i++){
            if(vehiculo[i]['capacidad']>10 && vehiculo[i]['color']=='azul'){
                console.log("Color :"+vehiculo[i]['color']+" Marca :" +vehiculo[i]['marca']+" Capacidad :"+vehiculo[i]['capacidad']);
            }
        }
       

    }
    console.log(" 4. Lista filtrada por vhiculos con capacidad mayor que 10 y color azul")
    MostrarTabla();

        
    </script>
     <p>¿Qué significa HTML, y cuál es su estructura básica? <br>
    R) HyperText Markup Language</p>
    <img src="data:image/jpeg;base64,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" alt="">
</body>
</html>