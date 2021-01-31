<?php
// We need to use sessions, so you should always start sessions using the below code.
session_start();
// If the user is not logged in redirect to the login page...
if (!isset($_SESSION['loggedin'])) {
	header('Location: ../');
	exit;
}

?>

<!DOCTYPE html>
<html lang="tr">
<head>
	<title>Lisans Sistemi V2</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">	
	<link rel="stylesheet" type="text/css" href="../css/style.css">
</head>
<body>
	<div id="navbar">
        <a id="right-nav" class="margin-nav" href="quit.php"><button id="nav-button">Çıkış Yap</button></a>
        <a id="right-nav" class="margin-nav login-button"><button id="nav-button" class="login-button">Ekle</button></a>
        <a id="right-nav" class="margin-nav main-buttons"><button id="nav-button">Anasayfa</button></a>
    </div>
    
    
    
    
    <div id="first-content">
        <div id="texts">
            <div id="textss" style="opacity: 1.0;">
                <h1 id="main-text">İNFİNİTY ROLEPLAY - ADMİN PANEL</h1>
                <p>Uzaktan whitelist sistemi.</p>
			</div>
			<div id="yedek" style="opacity: 0; display: none;">
                <h1 id="main-text">İNFİNİTY ROLEPLAY - ADMİN PANEL</h1>
                <p>Uzaktan whitelist sistemi.</p>
			</div>
			
            <div id="loginss" style="opacity: 0; display: none;">
                <form action="sets/insert.php" method="post">

					<span class="login-title">
						<b>HEX EKLE</b>
					</span>

					<div class="login-input" data-validate = "Need username!">
						<input class="input100" type="text" name="hex" placeholder="Hex ID">
					</div>

					<div class="login-input" data-validate = "Need password!">
						<input class="input100" type="text" name="discord" placeholder="Discord ID">
                    </div>
                    
                    <div class="login-input" data-validate = "Need password!">
						<input class="input100" type="text" name="steamprofil" placeholder="Steam Profil">
					</div>

					<div class="login-btn">
						<input class="login100-form-btn" type="submit" style="cursor: pointer;" value="Ekle">
					</div>

				</form>
            
            </div>
        </div>
    </div>
</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
<script type="text/javascript">
		var login = document.getElementById("loginss");
		var texts = document.getElementById("textss");
		var yedek = document.getElementById("yedek");
		  
         
        $( ".login-button" ).click(function() { 		
			texts.style.opacity = '0';
			setTimeout(function(){
				texts.innerHTML = login.innerHTML;
				texts.style.opacity = '1';
			}, 500);				 
        });

		$( ".main-buttons" ).click(function() {   			
			texts.style.opacity = '0';
			setTimeout(function(){
				texts.innerHTML = yedek.innerHTML;
				texts.style.opacity = '1';
			}, 500);
        });   
</script>
</html>


