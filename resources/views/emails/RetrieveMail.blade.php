<!DOCTYPE html>
<html>
<head>
    <title>Espumados</title>
    
    <link rel="stylesheet" href="assets/css/login.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:ital,wght@1,300&display=swap" rel="stylesheet">

</head>
<body>
    <h1 class="titleEmail">Señor(a): <br>{{ $mailData[0]->nombre }}</h1>
  
    <p class="paragraph-email">
        Su nueva contraseña es <span class="marquer">{{ rand(5, 100000) }}</span>, por favor ingrese con esta clave que es temporal pero 
        debe actualizarla a una contraseña nueva.
    </p>

    <div class="col-md-10">
        <img src="images/Espumados.png" alt="Espumados">
    </div>
</body>
</html>