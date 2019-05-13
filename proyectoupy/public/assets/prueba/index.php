<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <!--<script type="text/javascript" src="script.js"></script>-->
    <section>
      <form action="prueba.php" method="post" name="formulario">
        <input type="radio" name="type" value="9" id="cuota9"> Cuota Ordinaria: <strong>9€/mes</strong><br></label>
        <input type="radio" name="type" value="15" id="cuota15"> Cuota Ordinaria plus: <strong>15€/mes</strong><br></label>
        <input type="radio" name="type" value="25" id="cuota25"> Cuota Contributiva: <strong>25€/mes</strong><br>
        <input type="radio" name="type" value="30" id="cuota30"> Cuota Generosa: <strong>30€/mes</strong><br>
        <h3>Cuotas especiales</h3>
        <input type="radio" name="type" value="5" id="cuota5"> Cuota Reducida: 5€/mes si eres estudiante, en situacion de paro o jubilado.<br>
        <input type="radio" name="type" value="3" id="cuota3"> Cuota Joven: 3€/mes para menores de 23 años.<br>
        <input type="radio" name="type" value="1" id="cuota1"> Cuota Simbolica: 1€/mes para situaciones economicas especiales.<br>
        <button type="submit" id="btn-radio" onclick="comprobar()">Envio</button>
      </form>
    </section>
  </body>
</html>
