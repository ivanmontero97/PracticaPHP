<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    
        <?php
        
        
        $minComensal = 0;
        $maxComensal = 5;
        $comensales=array();
     

     

        //Primer bucle para crear valor de el número de comensales
        for ($i = 0; $i < 10; $i++) 
        {
            
            $randomNumber = rand( 0 , 5 );
            array_push($comensales,$randomNumber);
           
            
        }
        
        ?>
        <ul>
            <?php
        //Bucle para mostrar la información
        for ($i = 0; $i < 10; $i++) {

            if ($comensales[$i] == 5) //Primera condicion para comensales max
            {
                ?>
                    <li>
                    <?php echo "La taula " . $i."està plena"; ?>
                    </li>
                <?php
            } 
                else if ($comensales[$i] == 0) //Condicion para comensales con taula buida
            {
                ?>
                    <li>
                   <?php echo "La taula " . $i . "està buida";?>
                    </li>
                <?php
            }
                else  // Si no es ninguna de las anteriores imprimer el número de comensales restantes.
            {
                ?>
                    <li>
                   <?php echo "La taula " . $i . " te " . $comensales[$i] . " comensals";?>
                    </li>
                <?php
            }
        }
    ?>                   
    </ul>
</body>

</html>