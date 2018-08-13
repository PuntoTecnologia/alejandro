<!DOCTYPE html>
<html>
<head>
<meta charset=”utf-8″>
<title></title>
</head>
<body>
<h2>Upload de Archivos en Laravel</h2>
<form method='post' id='frm' url='upload' files=”true” enctype=”multipart/form-data”>
<?php echo e(csrf_field()); ?>

<label for='Archivo'><b>Archivo: </b></label>
<input type='file' name='archivo' required>
<input type='submit' value='enviar' >
</form>
</body>
</html>