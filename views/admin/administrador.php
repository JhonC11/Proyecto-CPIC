<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>holia</title>
	<link rel="stylesheet" href="../../public/css/bootstrap.min.css">
  <style>
    .admin{
      width: 263px;
    }
    .navbar-default{
      margin: 0px;
      border-color: #efefef;
    }
    img{

      width: 200px;
      height: 200px;
      position: relative;
      left: 35px;
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
  <h3>Administrador</h3>

</nav>

<div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top admin" role="navigation" style="margin-bottom: 0">

            <div class="navbar-default sidebar" role="navigation">
                    <div class="sidebar-nav navbar-collapse">
                    <img src="../imagenes/luna.jpg" alt="">
                    <br>
                    <br>
                    <ul class="nav in text-center" id="side-menu">
                        <li>
                            <a href="forms.html">Inicio</a>
                        </li>
                        <li>
                            <a href="tables.html">Usuarios</a>
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
            </div>
        </nav>


    </div>

<script src="../../public/js/jquery-3.1.1.js"></script> 
<script src="../../public/js/bootstrap.min.js"></script> 
</body>
</html>