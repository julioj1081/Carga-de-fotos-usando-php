<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Subida de imágenes con jQuery y Ajax Demo</title>
<meta name="description" content="Subida de imágenes con jQuery y Ajax.."/>
<link rel="stylesheet" href="css/font-awesome.min.css">
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
<link rel="stylesheet" href="css/styles.css">
<script src="https://code.jquery.com/jquery-3.2.1.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script>
$(document).ready(function() {
    $(".upload").on('click', function() {
        var formData = new FormData();
        var files = $('#image')[0].files[0];
        formData.append('file',files);
        $.ajax({
            url: 'upload.php',
            type: 'post',
            data: formData,
            contentType: false,
            processData: false,
            success: function(response) {
                if (response != 0) {
                    $(".card-img-top").attr("src", response);
                } else {
					alert('Formato de imagen incorrecto.');
				}
            }
        });
		return false;
    });
});
</script>

<div class="container">
    <h1>Subida de imágenes con jQuery y Ajax Demo</h1>
    <h2 class="lead"></h2>


    <div class="row">
        <div id="content" class="col-lg-12">
			<form method="post" action="#" enctype="multipart/form-data">
				<div class="card" style="width: 18rem;">
					<img class="card-img-top" src="images/default-avatar.png">
					<div class="card-body">
						<h5 class="card-title">Sube una foto</h5>
						<p class="card-text">Sube una imagen para probar esta demostración. La imagen puede ser en formato .jpg, o .png.</p>
						<div class="form-group">
							<label>Nueva imagen</label>
							<input type="file" class="form-control-file" name="image" id="image">
						</div>
						<input type="button" class="btn btn-primary upload" value="Subir imagen" id="sube">
					</div>
				</div>
            </form>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-12">
            <!-- Bloque de anuncios adaptable -->
            <ins class="adsbygoogle"
                 style="display:block"
                 data-ad-client="ca-pub-6676636635558550"
                 data-ad-slot="8523024962"
                 data-ad-format="auto"
                 data-full-width-responsive="true"></ins>
            <script>
            (adsbygoogle = window.adsbygoogle || []).push({});
            </script>
        </div>
    </div>

    <div class="card">
        <h5 class="card-header">Compartelo en las redes sociales</h5>
        <div class="card-body">
            <h5 class="card-title">Compartelo con tus amigos</h5>
            <!-- Go to www.addthis.com/dashboard to customize your tools -->
            <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-4ecc1a47193e29e4" async="async"></script>
            <!-- Go to www.addthis.com/dashboard to customize your tools -->
            <div class="addthis_sharing_toolbox"></div>
        </div>
    </div>

</div>
<footer class="footer bg-dark">
    <div class="container">
        <span class="text-muted"><a>&copy; Fernandez Gonzalez Julio Alberto</a></span>
    </div>
</footer>
</body>
</html>
<script type="text/javascript">
  $(document).ready(function(){
    $("#sube").click(function(){
      alert("aqui se subira la imagen con formato json a php");
    })
    /*
    $imagen = addslashes(file_get_contents($_FILES["image"]["tmp_name"]));
    $conexion = new mysqli("localhost","root","","ajax_prueba3");
    $query = "UPDATE usuario SET foto='$imagen'";
    $resultado = $conexion->query($query);
    */
  })
</script>
