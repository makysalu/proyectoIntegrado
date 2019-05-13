<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="./../css/stiles.css">
  </head>
  <body>
    <header id="main-header">
      <div id="logo">
        <img id="imagen" src="../images/logo.jpg" width="70" height="70"/>
      </div>

      <nav>
        <ul>
          <li><a href="index.php">Inicio</a></li>
          <li><a href="informacion.php">Información</a></li>
          <li><a href="financiacion.php">Transparencia</a></li>
          <li><a href="foro.php">Actualidad</a></li>
          <li><a href="contacto.php">Contactar</a></li>
          <li><a href="login.php">Iniciar sesion</a></li>
        </ul>
      </nav>
    </header>
    <section id="fichausuario">
      <header>
        <h1>FICHA DE SOCIO ULyC</h1>
        <div id="cabecerausuario">
          <div class="cabecerausuario" >
            <img id="imagen" src="images/logo.jpg" width="120" height="120"/>
          </div>
          <div class="cabecerausuario" id="cabeceraNsocio">
              <span><strong>Fecha: </strong><?php echo $u->fecha ?></span><br><br>
              <span><strong>Nº Socio: </strong><?php echo $u->id_usuario ?></span>
          </div>
          <div class="cabecerausuario">
            <p>
                <span>C/MAESTRO CEBRIAN Nº 4 1º</span><br>
                <span>23008 CATARROJA</span><br>
                <span>TLF: 969 528 436</span><br>
                <span>FAX: 969 634 782</span><br>
                <span>ulyc@hotmail.com</span>
            </p>
          </div>
        </div>
      </header>
      <br>
      <article>
      <article id="datosficha">
        <header>
          <span>@ULyC</span>
        </header>
        <div id="carnetderecha">
          <div id="fotocarnet">
            <img src="images/fotocard.jpg" width="240" height="300"/>
          </div>
        </div>
        <div id="carnetizquierda">
          <div id="logocarnet">
            <img  src="images/logo.jpg" width="70" height="70"/>
            <span>ULyC</span>
          </div>
          <div id="datoscarnet">
            <span><strong>Carnet de Afiliado</strong></span><br>
            <span><?php echo "$u->nombre $u->apellidos"?></span><br>
            <span><?php echo $u->dni ?></span><br>
            <span><?php echo $u->ciudad ?></span>
          </div>
        </div>
      </article>
    </section>
    <footer id="main-footer">
      <p>&copy; 2019 <a href="https://www.gmail.com/mail/help/intl/es/about.html?iframe">ulyc.com</a></p>
    </footer>
  </body>
</html>
