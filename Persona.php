<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $nom= 'Kurt';
    $cognom= "Cagle";
    $edat= 40;
    $fecha = new DateTime();
    $fecha->setDate(1987,05,12);
    $telefono = array(654332211,933332211);
    
    $direccion = 'Carrer de turin, 15' ;
    $correoElectronico = 'kurt.cagle@example.com';
    $trabaja = true;
    $altura = 1.67 ;
    ?>
    <h1><b>Descrivint a <?php echo $nom.$cognom ?></b></h1>
    <h2><b> Les dades de <?php echo $nom ?></b></h2>

    <ul>
        <li>Es diu <?php echo $nom ?></li>
        <li> Te <?php echo $edat ?></li>
        <li>Va neixer l'any: <b><?php echo date_format($fecha, 'Y-m-d'); ?></b></li>
        <li>El seus teléfons son :
             <?php  echo $telefono[0].",".$telefono[1];
          /*  foreach($telefono as $valor){
                echo $valor;
             }*/
            ?>
        </li>
        <li>El seu mail és : <?php echo $correoElectronico ?></li>
        <li> Treballa : <?php echo $trabaja ? 'si' : 'no' ;?></li>
        <li> I medeix : <?php echo $altura ?>   </li>
    </ul>
</body>
</html>