<?php
    session_start();
    

?>
<html>
    <body>
        <h1>Gioco del numero più alto</h1>
        <form action="pages/pagina2.php" method="POST">
            <label>Nome</label>
            <input type="text" name="nome"></input>
            <button type="submit">GIOCA</button>
        </form>
    </body>    
</html>