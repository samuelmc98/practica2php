<!DOCTYPE html>
<html lang="en">
<head>
<title>Practica 2</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" type="text/css" href="styles.css">
<link href="fontawesome-free-5.15.0-web/css/all.css" rel="stylesheet"> <!--load all styles -->
<script src='code.js'></script>
</head>
<body>

<div class="row">
  <div class="column left">
    <h2 style="text-align: center; margin: 20% 0 0 0;">Practica 2</h2>
    <div class="form" style="margin:10%;">
        <form method="post" action="loginController.php" 
        method="POST" onsubmit="return  validacionForm()">

          <label for="email" >Email del usuario</label>
          <input type="email" id="email" name="email" placeholder="Usuario...">
          
          <label for="psswd">Contraseña</label>
          <input type="password" id="psswd" name="psswd" placeholder="Contraseña...">
          <input type="submit" name="submitBtnLogin" id="submitBtnLogin" value="Login" /><span class="loginMsg"><?php echo @$msg;?></span>
          <div id="message"></div>

        </form>
    </div>
  </div>
</div>
  
</body>
</html>