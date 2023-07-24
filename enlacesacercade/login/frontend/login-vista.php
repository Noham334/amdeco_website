<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login - Administración</title>
    
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link rel="icon" href="\amdeco_website\enlacesacercade\login\frontend\images\deco.ico" type="image/x-icon">
    
    <link rel="stylesheet" href="icon/style.css">
    <link rel="stylesheet" href="css/style.css">
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    
</head>
<body>
    
<div class="container-form">
        <div class="header">
            <div class="">
                <img src="image/amdecologo.png" alt=""  width="200px" height="50px">
            </div>
            <div class="menu">
            <!--<a href="login.php"><li class="module-login active">Iniciar sesión</li></a>
                <a href="register.php"><li class="module-register">Registrarse</li></a>
                <a href="../../index.php"><li class="module-register">Home</li></a>-->
            </div>
        </div>
        
        <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post" class="form">
            <div class="welcome-form"><h1>Bienvenido a administración </h1><h2>AMDECO</h2></div>
            
            <div class="user line-input">
                <label class="lnr lnr-user"></label>
                <input class="bg-light" type="text"  placeholder="Ingrese su usuario" name="usuario">
            </div>
            <div class="password line-input">
                <label class="lnr lnr-lock"></label>
                <input class="bg-light" type="password" placeholder="Ingrese su contraseña" name="clave">
            </div>
            
             <?php if(!empty($error)): ?>
            <div class="mensaje">
                <?php echo $error; ?>
            </div>
            <?php endif; ?>
            
            <div class='btn-container'>
                <button type="submit">Ingresar<label class="lnr lnr-chevron-right"></a></label></button>
                <button type="button" onclick="window.location.href='/amdeco/';">Cancelar<label class="lnr lnr-cross-circle "></label></button>
            </div>
 
            
        </form>
       

    <!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="js/jquery.js"></script>
    <script src="js/script.js"></script>
</body>
</html>