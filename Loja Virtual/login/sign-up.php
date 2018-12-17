

<?php
//session_start();
//require_once('../function/class.user.php');
//**********************************************
  echo "No Sign Up";
//**********************************************



?>
<!DOCTYPE>
<html xmlns="http://www.w3.org/">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>PDO : Sign up</title>
<link rel="stylesheet" href="../style/style.css" type="text/css"  />
</head>
<body>

<div id="main2">


        <form method="post" >
            <h1>Sign up.</h1>

                     <div class="alert alert-danger">
                        <i class="glyphicon glyphicon-warning-sign"></i> &nbsp; <?php //echo $error; ?>
                     </div>

                 <div class="alert alert-info">
                      <i class="glyphicon glyphicon-log-in"></i> &nbsp; Registrado com Sucesso <a href='login.php'>login</a> here
                 </div>


            <input type="text" class="form-control" name="txt_uname" placeholder="Insira um Nome" value="<?php // if(isset($error)){echo $uname;}?>" />

            <input type="text" class="form-control" name="txt_umail" placeholder="Insira um Email" value="<?php if(isset($error)){echo $umail;}?>" />

          	<input type="password" class="form-control" name="txt_upass" placeholder="Insira uma Senha" />

          	<input value="CADASTRAR" type="submit" class="button" name="btn-signup">


            <p>Tenho uma conta! <a href="login.php">ENTRAR</a> ou ir <a href="../index.php">HOME</a></p>
        </form>


</div>

</body>
</html>
