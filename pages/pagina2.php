<?php
    session_start();
    if ($_SESSION['nome']=="")
    {
        $_SESSION['nome']=$_POST['nome'];
    }
    else
    {
        $prova=$_SESSION['nome'];
    }

 
//session_destroy();
$turno++;
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
                    echo $prova;
                }
            ?>
        </p>
        
        <p>Turno: <?php echo $turno; ?></p>
        <form action="pagina2.php" method="POST">
            <label><b>Scegli quanto vuoi giocare:</b></label>
            <select>
                <option>1</option>
                <option>2</option>
                <option>3</option>
                <option>4</option>
                <option>5</option>
                <option>6</option>
                <option>7</option>
                <option>8</option>
                <option>9</option>
            </select>
            <br>
            <button type="submit">GIOCA</button>
        </form>
    </body>
    
</html>
