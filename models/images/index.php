<?php 
	include '../load.php';
 ?>
 <!DOCTYPE html>
 <html lang="en">
 <head>
 	<meta charset="UTF-8">
 	<title>Añadir imagen</title>
 	<link rel="stylesheet" href="../../public/css/bootstrap.min.css">
 	<style>
 		img{
 			width: 200px;
 			height: 200px;
 			margin-bottom: 10px;
 		}
 		button.elim{
			color: red;
			position: absolute;
			background-color: rgba(255, 255, 255, 0.4);
			right: 3px;
 		}
 	</style>
 </head>
 <body>
	<form method="post" enctype="multipart/form-data" id="frm" class=" text-center">
		<div class="form-group">
			<input type="file" id="upload" class="hide" name="imagen" accept="image/*"  data-validation="required">
			<button class="btn btn-primary btn-upload" type="button">
				<i class="glyphicon glyphicon-picture"></i> Subir imagen
			</button>
			<button class="btn btn-success" type="submit">
				<i class="glyphicon glyphicon-ok"></i> Adicionar
			</button>
		</div>	
	</form>


	<?php 
				if($_FILES){
					$imagen = $_FILES['imagen']['name'];
					if(!empty($_FILES['imagen']['name'])) {
                        move_uploaded_file($_FILES['imagen']['tmp_name'] , '../../public/imgs/bienestar/'.$imagen);
                        
                        $objeto = new image();
                        $objeto->insertarI($imagen);

                       
                    }



				}
				$objeto = new image();
                $fotos = $objeto->listarI();

			 ?>
		<div class="col-md-8 col-md-offset-2">
			<?php foreach ($fotos as $key => $foto): ?>
			<div id="imgs" class="col-md-3">
				<button class="btn btn-default elim btn-delete-img" data-id="<?php echo $foto['id_image']; ?>"><i class="glyphicon glyphicon-remove"></i> </button>

				<img src="../../public/imgs/bienestar/<?php echo $foto['imagen']; ?>"> 				
			</div>
			<?php endforeach ?>			
		</div>	


 <script src="../../public/js/jquery-3.1.1.js"></script>
 <script src="../../public/js/bootstrap.min.js"></script>	
<script>
		$(document).ready(function() {
        /* - - - - - - - - - - - - - - - - - */
	        $('#upload').hide();
	        $('.btn-upload').click(function() {
	            $('#upload').click();
	        });

	        $('.btn-delete-img').click(function(event) {
	          if (confirm('Realmente desea eliminar esta imágen?')) {
	            $id = $(this).attr('data-id');
	            window.location.replace('eliminar.php?id='+$id);
	          }
	        });


        });
</script>
 </body>
 </html>