<?PHP
    // INICIO DE SESION PHP                        
    session_start();
    if (!isset($_SESSION['count'])) 
    {
        $_SESSION['count'] = 0; 
        echo "<div>
                <p> Seleccione color para cambiar el fondo:</p>
                <select id=MENU onchange=changecolor(container,value)>
                    <option value=white> </option>
                    <option value=red>ROJO</option>
                    <option value=blue>AZUL</option>
                    <option value=green>VERDE</option>
                </select>
            </div>
            ";
    } 
    else 
    {
        // $_SESSION['count']++;
           $_SESSION['count'] = 0;
        echo "
            <body>
            <script>
                function changecolor(id,color)
                {
                    document.body.style.backgroundColor = color;
                }
            </script>
            <div>
                <p> Seleccione color para cambiar el fondo:</p>
                <select id=MENU onchange=>
                    <option value=white> </option>
                    <option value=red>ROJO</option>
                    <option value=blue>AZUL</option>
                    <option value=green>VERDE</option>
                </select>
            </div>
            </body>
            ";
    }
    var_dump($_SESSION['count']);
    // DESREGISTRO VARIABLE
    unset($_SESSION['count']);
    
    // CON ESTO CIERRO LA SESION, NO ES OBLIGATORIO
    session_write_close();
 ?>
