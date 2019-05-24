<header id="main-header">
      <link rel="shortcut icon" type="image/png" href="./images/favicon.png">
  <div id="logo">
    <img id="imagen" src="images/logo.jpeg" width="70" height="70"/>
    <a id="logo-header">
        <span class="site-name">Administrador</span>
        <span class="site-desc">UpeP</span>
        <p class="dashboard">Dashboard</p>
    </a>
  </div>
</header>
<nav>
  <ul>
<<<<<<< HEAD
    <?php if(!isset($_SESSION["admin"])):?>
      <li><img src="images/usuario.png" id="imagenes"><a href="listado_usuario.php">Usuarios</a></li>
      <li><img src="images/foro.png" id="imagenes"><a href="insertarTema.php">Foro</a></li>
      <li><img src="images/noticias.png" id="imagenes"><a href="noticiasAdmin.php">Actualidad</a></li>
      <li><img src="images/grupo.png" id="imagenes"><a href="addcandidato.php">Candidatos</a></li>
      <li><img src="images/cuenta.png" id="imagenes"><a href="cuentasAdmin.php">Cuentas</a></li>
      <li><img src="images/actualidad.png" id="imagenes"><a href="index.php">Web</a></li>
    <?php else:?>
      <li><img src="images/usuario.png" id="imagenes"><a href="listado_usuario.php">Usuarios</a></li>
      <li><img src="images/foro.png" id="imagenes"><a href="insertarTema.php">Foro</a></li>
      <li><img src="images/noticias.png" id="imagenes"><a href="noticiasAdmin.php">Actualidad</a></li>
      <li><img src="images/grupo.png" id="imagenes"><a href="listado_candidatos.php">Candidatos</a></li>
      <li><img src="images/cuenta.png" id="imagenes"><a href="cuentasAdmin.php">Cuentas</a></li>
      <li><img src="images/actualidad.png" id="imagenes"><a href="index.php">Web</a></li>
      <li><img src="images/desconectar.png" id="imagenes"><a href="logoutadmin.php">Desconectar</a></li>
    <?php endif;?>
=======
    <li><a href="">Usuarios</a>
      <ul>
        <li><a href="listado_usuario.php">Listado Usuario</a></li>
        <li><a href="deletuser.php">Eliminar Usuario</a></li>
      </ul>
    </li>
    <li><a href="informacion.php">Actualidad</a></li>
    <li><a href="">Candidatos</a>
      <ul>
        <li><a href="listado_candidatos.php">Listado Candidatos</a></li>
        <li><a href="addcandidato.php">Añadir Candidato</a></li>
        <li><a href="deletcandidato.php">Eliminar Candidato</a></li>
      </ul>
    </li>
    <li><a href="foro.php">Cuentas</a></li>
    <li><a href="index.php">Web</a></li>
    <li><a href="logoutadmin.php">Desconectar</a></li>
>>>>>>> 4c4e11198fedeb6d0aab894f17d4d9a54608d894
  </ul>
</nav>
