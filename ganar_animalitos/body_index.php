<body>
<div style="text-align: center;">

<h1 style="font-size: 20px;color:blue;font-weight: 900"><img src="img/ruleta.png" width="32px">GANAR ANIMALITOS<img src="img/dinero.png" width="32px"></h1>
<hr>
    <form method="post" action="procesar.php">
    <h1 style="font-size: 30px">GANADOR 6 PM</h1>

    <select name="ganador1" id="ganador1" style="font-size: 18px" >
    <?php require("consulta.php"); ?>
    </select>

    <br><br>
<h1 style="font-size: 30px">GANADOR 7 PM</h1>
 
<select name="ganador2" id="ganador2" style="font-size: 18px" >
<?php require("consulta.php"); ?>
</select>
<br><br>
<button type="submit" style="font-size: 18px">Aceptar</button>
<hr>
    </form>
    <?php include("footer.php"); ?>
    </body>