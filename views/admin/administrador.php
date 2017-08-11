<?php 
  include '../../models/db.php';
  include '../../models/user.php';
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>holia</title>
	<link rel="stylesheet" href="../../public/css/bootstrap.min.css">
  <style>
/*     .admin{
  width: 263px;
} */
    .navbar-default{
      margin: 0px;
      border-color: #efefef;
    }
    img{

      width: 200px;
      height: 200px;
      position: relative;
      left: 500px;
      top: 10px;
    }
/*     .row{
  width: 500px;
} */
  </style>
</head>
<body>
<nav class="navbar navbar-default"> 
  <a href="#" class="navbar-brand"></a>
  <h3 class="text-center">Administrador</h3>
              <div class="navbar-default sidebar" role="navigation">
                      <div class="sidebar-nav navbar-collapse">
                      <img src="../../public/imgs/2.jpg" alt="">
                      <br>
                      <br>
                      <ul class="nav in text-center" id="side-menu">
                          <li>
                              <a href="../../index.php">Inicio</a>
                          </li>
                          <li>
                              <a href="#">Usuarios</a>
                          </li>
                          <li class="">
                           <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                            Dropdown
                            <span class="caret"></span>
                          </button>
                          <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                            <li><a href="#">Action</a></li>
                            <li><a href="#">Another action</a></li>
                            <li><a href="#">Something else here</a></li>
                          </ul>
                          </li>
                      </ul>
                  </div>

</nav>
<div class="container-fluid">
<!--   <div id="wrapper" class="col-md-3">

        Navigation
        <nav class="navbar navbar-default navbar-static-top admin" role="navigation" style="margin-bottom: 0">

            </div>
        </nav>
</div> -->
  <div class="col-md-10 col-md-offset-1">
      <?php 

    $objeto = new user();
    $objetos = $objeto->Listar();

    ?>
        <div class="row">
      <div class="col-md-10 col-md-offset-1">
      <a href="registrar.php" class=" btn btn-default"><i class="glyphicon glyphicon-plus"></i>  Adicionar</a>



        <br>
        <br>
        <table class="table table-bordered text-center">
          <tr>
            <td><strong>Nombre</strong></td>
            <td><strong>Dependencia</strong></td>
            <td><strong>Acciones</strong></td>
          </tr>
          <?php foreach ($objetos as $key => $value): ?>
            <tr>
              <td><?php echo $value['nombres'];?></td>
              <td><?php echo $value['dependencia'];?></td>
              <td>
                <a class="btn btn-default" href="consultar.php?id=<?php echo $value['id_usuario']?>"><i class="glyphicon glyphicon-search"></i></a>
                <a class="btn btn-success" href="modificar.php?id=<?php echo $value['id_usuario']?>"><i class="glyphicon glyphicon-pencil"></i></a>
                <a class="btn btn-danger" href="eliminar.php?id=<?php echo $value['id_usuario']?>"><i class="glyphicon glyphicon-trash"></i> </a>
              </td>
            </tr>
          <?php endforeach ?>
        </table>
      </div>
    </div>
  </div>
  
      
  
</div>

<script src="../../public/js/jquery-3.1.1.js"></script> 
<script src="../../public/js/bootstrap.min.js"></script> 
</body>
</html>