<?php
    
    error_reporting(0);
    $avvio=$_POST["avvio"];
    session_start();

    if ($_SESSION['nome']=="")
    {
        $_SESSION['nome']=$_POST['nome'];
    }
    else
    {
        $nome2=$_SESSION['nome'];
    }
    if ($avvio==null)
    {
       
        $vincita=0;
        $perdita=0;
    }
    else 
    {
        $random=rand(1,9);
    }
    

    $turno=$_POST["turno"];
    $turno++;

    $numeroscelto=$_POST["scelta"];

    $vincita=$_POST["vincita"];
    $perdita=$_POST["perdita"];

 
    if ($vincita>=2)
    {
        echo "<b>Hai vinto la partita</b>";
        session_destroy();
        $vincita=3;
    }
    
    if ($perdita>=2)
    {
        echo "<b>Hai perso la partita</b>";
        session_destroy();

        $perdita=3;
    }
    






?>
<html>
    <body>
        <p>Nome:
            <?php 
                if ($_POST['nome']!="")
                {
                    echo $_POST['nome'];
                }
                else
                {
                    echo $nome2;
                }
            ?>
        </p>

        <?php
            if($numeroscelto==$random || $numeroscelto==$random+1)
            {
                if ($avvio!=null)
                {
                    echo "<br><b>hai vinto questo turno</b>";
                    $vincita++;
                }
        
            }
            else if ($avvio != null)
            {
                echo "<br><b>hai perso questo turno</b>";
                $perdita++;
            }
        
        ?>
        <p>Turno: <?php echo $turno; ?></p>
        <?php
            if ($avvio!=null)
            {
                echo "Valore giocato:";
                echo $numeroscelto;
                
                
                echo "<br>Valore giocato dal computer:";
                echo $random;
        
                echo "<br>Vincite:";
                echo $vincita;
        
            }
        
        ?>
        <form action="pagina2.php" method="POST">
            <label><b>Scegli quanto vuoi giocare:</b></label>
            <select name="scelta">
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
                <option value="6">6</option>
                <option value="7">7</option>
                <option value="8">8</option>
                <option value="9">9</option>
            </select>
            <br>

            <?php
                if ($perdita<3 || $vincita==3)
                {
                    echo '<button type="submit">GIOCA</button>';
                }


            ?>
            <input type="hidden" id="tenta" name=turno value='<?php echo $turno?>'>
            <input type="hidden" name="random" value='<?php echo $random?>'>
            <input type="hidden" name="vincita" value='<?php echo $vincita?>'>
            <input type="hidden" name="perdita" value='<?php echo $perdita?>'>
            <input type= hidden name = "avvio" value = 0>

     

            
            
        </form>
    </body>
    
</html>
