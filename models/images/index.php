<?php 
	include '../load.php';
 ?>
 <!DOCTYPE html>
 <html lang="en">
 <head>
 	<meta charset="UTF-8">
 	<title>Añadir imagen</title>
 	<link rel="stylesheet" href="../../public/css/bootstrap.min.css">
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
<div style="display: flex; flex-wrap: wrap;">
			<?php foreach ($fotos as $key => $foto): ?>
				<img src="../../public/imgs/bienestar/<?php echo $foto['imagen']; ?>" alt="Foto<?php echo $foto['id']; ?>"> 				
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
        });
</script>
 </body>
 </html>