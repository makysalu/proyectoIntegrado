<header id="main-header" class style="position:fixed">
    <img id="imagen" src="images/logo.jpeg"/>
    <link rel="shortcut icon" type="image/png" href="./images/favicon.png">
  <nav>
      <ul>

        <?php if(!isset($_SESSION["user"]) && !isset($_SESSION["admin"])):?>
          <li><a href="index.php">Inicio</a></li>
          <li><a href="informacion.php">Información</a></li>
          <li><a href="financiacion.php">Transparencia</a></li>
          <li><a href="foro.php">Foro</a></li>
          <li><a href="noticias.php">Actualidad</a></li>
          <li><a href="contacto.php">Contactar</a></li>
          <li><a href="login.php">Afiliado</a></li>
          <li><a href="candidatos.php">Candidatos</a></li>
          <li><a href="login_admin.php">Administrador</a></li>
                <?php endif;?>
      <?php if(isset($_SESSION["user"]) && !isset($_SESSION["admin"])):?>
        <li><a href="index.php">Inicio</a></li>
        <li><a href="informacion.php">Información</a></li>
        <li><a href="financiacion.php">Transparencia</a></li>
        <li><a href="foro.php">Foro</a></li>
        <li><a href="noticias.php">Actualidad</a></li>
        <li><a href="contacto.php">Contactar</a></li>
        <li><a href="perfil_usuario.php">Perfil Afiliado</a></li>
        <li><a href="carnetUsuario.php">Carnet Afiliado</a></li>
        <li><a href="candidatos.php">Candidatos</a></li>
        <li><a href="logout.php">Desconectar</a></li>
      <?php endif;?>
      <?php if(!isset($_SESSION["user"]) && isset($_SESSION["admin"])):?>
        <li><a href="index.php">Inicio</a></li>
        <li><a href="informacion.php">Información</a></li>
        <li><a href="financiacion.php">Transparencia</a></li>
        <li><a href="foro.php">Foro</a></li>
        <li><a href="noticias.php">Actualidad</a></li>
        <li><a href="contacto.php">Contactar</a></li>
        <li><a href="candidatos.php">Candidatos</a></li>
        <li><a href="login_admin.php">Panel administrador</a></li>
          <?php endif;?>
      </ul>
  </nav>
  <script type="text/javascript" src="./js/scroll.js">

  </script>
</header>
