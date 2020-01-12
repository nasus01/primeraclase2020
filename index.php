<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="content-type" content="tex/html; charset=utf-8" />
        <title>Mi primera página con php</title>


    </head>
    <body>
        <h1>hola mundo!</h1>
        <form mane="form1" method="POST" action="index.php">
            Numero 1: <input type="text" name="txtnumero1">
            <br>

            Numero 2: <input type="text" name="txtnumero2">
            <br>
            <input type="submit" name="calcular" value="calcular">


        </form>
        <?php
        if(isset($_POST["calcular"])){

            $valor1=$_POST["txtnumero1"];
            $valor2=$_POST["txtnumero2"];


            if ($valor1==""||$valor2==""){
                echo "debes digelenciar los datos";
                exit;

            }
            echo $valor1."<br>";
            echo $valor2."<br>";
            
            echo "<br><br><br>";


            echo "hola mundo esto es php";



           
        $numero1=$valor1;
        $numero2=$valor2;
        
        $suma = $numero1+$numero2;
        $resta = $numero1-$numero2;
        $multiplicacion = $numero1*$numero2;
        $division = $numero1/$numero2;
        $residuo = $numero1%$numero2;

        echo "<br><br> la suma de " .$numero1."+".$numero2."=".$suma;
        echo "<br><br> la resta de " .$numero1."-".$numero2."=".$resta;
        echo "<br><br> la multiplicacion de " .$numero1."*".$numero2."=".$multiplicacion;
        echo "<br><br> la division de " .$numero1."/".$numero2."=".$division;
        echo "<br><br> el residuo de " .$numero1."%".$numero2."=".$residuo;

        //comentario
        /**
         * comentarios
         * con 
         * varias 
         * lineas
         * 
         */

         /**
          * operadores logicos
          *y&& o=||
          *cuando se usa el y (&&) se debe tener en cuenta que  es verdadero cuando todos los criterios evaluados son verdaderos.
          *cuando se usa el o(||) se debe tener en cuenta que es falsa cuando todos los criterios evaluados son falsos.
          */

         if($numero1>$numero2&&$numero1>0){
             echo "<br> la condicion es verdadera";
         }else{
            echo "<br> la condicion es falsa";
         }
         
         if ($suma>$resta|| $suma>$multiplicacion){
             echo "<br> todavia sigo siendo verdadera";
         }else{
            echo "<br> todavia sigo siendo falsa";
         }

         /**
          * operadores relacionales
          *>mayor que
          *< menor que
          *>=mayor igual que
          *<=menor igual que
          *=asignacion
          *==comparacion(if)
          *!negacion
          *!=diferente
          */
          $numero3 =7;

          if($numero1>$numero2 && $numero1> $numero3){
              echo "<br>el mayor es ".$numero1;
          }elseif($numero2>$numero1 && $numero2>$numero3){
            echo "<br>el mayor es ".$numero2;

          }else{
            echo "<br>el mayor es ".$numero3;
          }
          

         if(!( ($numero3 % 2) ==0)){
            echo "<br>el numero es ".$numero3."es par";
         } else{
            echo "<br>el numero es ".$numero3."es impar";
          }


          echo "<br>";



         $colorsemaforo="rojo";
         switch($colorsemaforo){

            case "verde":
                echo "avanzar";
            break;
            case "amarillo":
                echo "por favor detenerse";
            break;

            case "rojo":

            echo "no avance";

            break;
            default:

            echo "valor incorrecto";

             break; 

         }
         /**
          * ciclos
          *
          *for -whi - do while
          */

          //while
          /**
           * realiazar un ejercicio que muestre los primeros 5 numeros consecutivos
           */
          echo "<br>";

          $tabla=5;
          $limite=10;

          $i=1;

          while($i<=5){
              echo $i. "<br>";
              $i++; //$i =$i+1;

          }
          echo "<br>";
          //do-while
          /**
           * realizar un ejercicio que muestre los primeros 5 numeros ejecutivos
           */
          $tabla=5;
          $limite=10;

          $i=1;
         
          do{
              echo $tabla."x". $i."=".($tabla*$i)."<br>";
              $i++;
              
          }while($i<=$limite);
          echo "<br>";


          /**
           * creacion de un vector
           */
          $array = array(1,2,3,4,5,6,7,);


         $longitud=count($array);
         for($i=0;$i<$longitud; $i++){
             echo $array[$i]."<br>";

         }
         echo "<br>";

         foreach($array as $valor){
             echo $valor."<br>";

         }
         echo "<br>";

         $array = array(1,2,3,4,5,6,7,8,9,10);
         $tabla=5;


         $longitud=count($array);
         for($i=1;$i<=$longitud; $i++){
            echo $tabla."x". $i."=".($tabla*$i)."<br>";

        }

        }
        
        


        







        
        ?>
    </body>
</html>