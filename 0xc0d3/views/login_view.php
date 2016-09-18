<!DOCTYPE html>
<html >
  <head>
    <meta charset="UTF-8">
    <title>Login Form</title>
    
    
    <link rel="stylesheet" href="css/normalize.css">

    
        <style>
      /* NOTE: The styles were added inline because Prefixfree needs access to your styles and they must be inlined if they are on local disk! */
html { width: 100%; height:100%; overflow:hidden; }

body { 
	width: 100%;
	height:100%;
	font-family: 'Open Sans', sans-serif;
	background: black;
	
	
	
}
.login { 
	position: absolute;
	top: 50%;
	left: 50%;
	margin: -150px 0 0 -150px;
	width:300px;
	height:300px;
}
.login h1 { color: #fff; text-shadow: 0 0 10px rgba(0,0,0,0.3); letter-spacing:1px; text-align:center; }

input { 
	width: 100%; 
	margin-bottom: 10px; 
	background: rgba(0,0,0,0.3);
	border: none;
	outline: none;
	padding: 10px;
	font-size: 13px;
	color: #fff;
	text-shadow: 1px 1px 1px rgba(0,0,0,0.3);
	border: 1px solid rgba(0,0,0,0.3);
	border-radius: 4px;
	box-shadow: inset 0 -5px 45px rgba(100,100,100,0.2), 0 1px 1px rgba(255,255,255,0.2);
	-webkit-transition: box-shadow .5s ease;
	-moz-transition: box-shadow .5s ease;
	-o-transition: box-shadow .5s ease;
	-ms-transition: box-shadow .5s ease;
	transition: box-shadow .5s ease;
}
input:focus { box-shadow: inset 0 -5px 45px rgba(100,100,100,0.4), 0 1px 1px rgba(255,255,255,0.2); }

    </style>
    
        <script src="js/prefixfree.min.js"></script>

    
  </head>

  <body>

    <div class="login">
	<h1>0xGh0st</h1>
    <form method="post" action="index.php">
    	<input type="text" name="user" placeholder="Username" required="required" />
        <input type="password" name="passwd" placeholder="Password" required="required" />
        <button type="submit" name=" "class="btn btn-primary btn-block btn-large" name="ingresar">Entrar.</button>
        <?php if($error==1){echo "<p style='color:red'>Usuario o password incorrecto.</p>";}?>
    </form>
</div>
    
        <script src="js/index.js"></script>

    
    
    
  </body>
</html>