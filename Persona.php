<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div>
        <?php
        $nom = 'Kurt';
        $cognom = "Cagle";
        $edat = 40;
        $fecha = new DateTime();
        $fecha->setDate(1987, 05, 12);
        $telefono = array(654332211, 933332211);

        $direccion = 'Carrer de turin, 15';
        $correoElectronico = 'kurt.cagle@example.com';
        $trabaja = true;
        $altura = 1.67;
        ?>
        <h1><b>Descrivint a <?php echo $nom . $cognom ?></b></h1>
        <h2><b> Les dades de <?php echo $nom ?></b></h2>

        <ul>
            <li>Es diu <?php echo $nom ?></li>
            <li> Te <?php echo $edat ?></li>
            <li>Va neixer l'any: <b><?php echo date_format($fecha, 'Y-m-d'); ?></b></li>
            <li>El seus teléfons son :
                <?php echo $telefono[0] . "," . $telefono[1];
                /*  foreach($telefono as $valor){
              echo $valor;
            }*/
                ?>
            </li>
            <li>El seu mail és : <?php echo $correoElectronico ?></li>
            <li> Treballa : <?php echo $trabaja ? 'si' : 'no'; ?></li>
            <li> I medeix : <?php echo $altura ?> </li>
        </ul>
    </div>
    <div>
            <?php 
            
            ?>
        <?php


        define("IVA", 0.21); //Declaracion de la constante IVA

        $llistaCursos = array(                          //Definimos un array de dos dimensiones 
            array(1, "PHP", "Introducció a PHP", 15.5),
            array(2, "Laravel", "Laravel per experts", 30),
            array(3, "Django", "Dominant Django", 10)
        );

        /*   foreach($llistaCursos as $curso){
        echo $curso[0];
        echo "<br />";
        echo $curso[1];
        echo "<br />";
        echo $curso[2];
        echo "<br />";
        };*/
        for ($i = 0; $i < 3; $i++) {

            echo  $llistaCursos[$i][1] . "<br />";
            echo $llistaCursos[$i][2] . "<br >";
            echo $llistaCursos[$i][3] + $llistaCursos[$i][3] * 0.21 . "<br />";
            echo "<br />";
        }
        ?>


        <h1>Llista de Cursos</h1>

        <h2> Numero de cursos apuntats : <?php echo count($llistaCursos) ?></h2>

        
        <?php   
       
        for ($i = 0; $i < 3; $i++) {
            ?>
            <div style="border: 1px solid black ; width :400px; ">
                <?php
                echo  $llistaCursos[$i][1] . "<br /><br />";
                echo $llistaCursos[$i][2] . "<br ><br />";
                echo $llistaCursos[$i][3] + $llistaCursos[$i][3] * 0.21 . "<br /><br />";
                ?>
            </div>
        <?php
        }
        ?>

    </div>

    </div>
</body>

</html>

<!--
    Atajos 
    Ctrl ck -> Subraya o Ctrl ç 
    Shift + flechas -> Subraya 
    Shift+alt + flechas -> te copia y arrastra 
    alt + flechas-> mueve la linea.
 -->