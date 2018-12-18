<!DOCTYPE >
<html xmlns="http://www.w3.org/">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Adicionar um novo membro</title>
<link rel="stylesheet" href="style/style.css" type="text/css"  />
</head>
<body>

	<?php
  require_once 'conexao/dbconfig.php';

	//**********************************************
		echo "Pedido não será enviado";
	//**********************************************

	?>


<div id="main2">
	<form method='post'  action="admin/order-alert.php">
		<table class='table table-bordered'>
		<tr>
			<td colspan="2">	<h1>Place Your Order</h1></td>
		</tr>
		<tr>
		<td>Price</td>
		<td>
			<input type='text' name='pr' value="<?php // echo $pr ?>" />
	    <input type='hidden' name='img' value="<?php //echo $img ?>"  />
			<input type='hidden' name='uid' value="<?php //echo $uid ?>"  />
		</td>
		</tr>
    <tr>
    	<td>Order</td>
      <td><input type='text' name='ordr' value="<?php // echo $name ?>"  placeholder='' required /></td>
    </tr>
		<tr>
			<td>Name</td>
			<td><input type='text' name='name' value="<?php //echo $userRow['user_name']; ?>"  placeholder='' required /></td>
		</tr>

	  <input type='hidden' name='cdate'  value="<?php //echo date('Y-m-d'); ?>" class='form-control' placeholder='' >
		<input type='hidden' name='img'  value="<?php //echo $img ?>" class='form-control' placeholder='' >

		<tr>
			<td>Mobile</td>
			<td><input type='text' name='mobile' placeholder='Add Mobile' ></td>
		</tr>
		<tr>
			<td>Email</td>
			<td><input type='text' name='email'   value="<?php //echo $userRow['user_email']; ?>" class='form-control' placeholder='Add Email'>
		</tr>
		<tr>
			<td>Address</td>
			<td><textarea type='text' name='addr' placeholder='Add Address' ></textarea></td>
		</tr>
		<tr>
			<td>Question:
				    <?php

							$a = rand(0, 9);
							$b = rand(0, 9);

				    	?>
			&nbsp;<span class="red"><?php echo "$a + $b"; ?> =</span><br>
      <input value="<?php echo $a ?>"  name="a" type="hidden">
     	<input value=" <?php echo $b ?>" name="b"  type="hidden">
			</td>
			<td> <input type="text"  placeholder='answer here' name="ans" /></td>
		</tr>
		<tr>
    	<td></td>
			<td><button type="submit" class="button" >PEÇA AGORA</button></td>
    </tr>
    </table>
</form>

</div>
</div>

</body>
</html>
