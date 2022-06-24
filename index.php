<?php
	/*
	ini_set('display_errors', 1);
	ini_set('display_startup_errors', 1);
	error_reporting(E_ALL);
	*/
	
	ob_start(); /* ajuta sa se faca header(location) adica refresh la toata pagina */
	// Date in the past pentru a nu face caching
	/*header("Expires: Mon, 26 Jul 1997 05:00:00 GMT");
	header("Cache-Control: no-cache");
	header("Pragma: no-cache");*/
	
	include 'conecteaza.php';
	
?>

<!DOCTYPE html>
<html lang="ro">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="robots" content="noindex, nofollow">
    <link rel="stylesheet" type="text/css" href="style/screen.css">
    <title>Certificate Garantie Produse</title>    
</head>
<body>
    <noscript>Activeaza Javascript altfel nu poti utiliza Certificate</noscript>
    <nav>
        <ul id="meniu">
            <li><a href="index.php" class="active">CERTIFICAT</a></li>
            <li><a href="cauta.php">CAUTA</a></li>
            <li><a href="../">ALTELE</a></li>
        </ul>
    </nav>
    <div id="container">
        <form name="formular" id="formular" action="" method="POST">
            <fieldset>
                <legend>CLIENT</legend>
                <div id="col-1">
                    <div class="radio">
                        <div id="alegClient">                            
                            <label>Persoane Fizica<input type="radio" id="b2c" name="tipClient" value="b2c" checked></label>                           
                            <label>Persoane Juridica<input type="radio" id="b2b" name="tipClient" value="b2b"></label>
                        </div>
                        <div id="divb2c">
                            <input type="text" name="nume" id="nume" placeholder="Nume *"><br>
                            <input type="text" name="prenume" id="prenume" placeholder="Prenume *"><br>
                        </div>
                        <div id="divb2b">
                            <input type="text" name="societate" id="societate" placeholder="Societate *"><br>                        
                            <input type="text" name="cui" id="cui" placeholder="CUI"><br>
                        </div>
                    </div>
					<p style="color: #FFFFFF">Serie Produs<br />daca nu este completata<br />nu apare pe certificat</p>
                </div>
            </fieldset>
            <fieldset>
                <legend>PRODUS</legend>
                <div id="col-2">                           
                    <select id="producator" name="producator" onchange="optProduse()">
                        <option value="" selected disabled>Producator *</option>
                        <option value="cps">CPS</option>
                        <option value="dixell">Dixell</option>
						<option value="esco">Esco</option>
						<option value="evco">EVCO</option>
                        <option value="keld">Keld</option>
                        <option value="rothenberger">Rothenberger</option>
                        <option value="solerpalau">SolerPalau</option>
                        <option value="testo">Testo</option>
                        <option value="valuetool">Value</option>
                        <option value="weiguang">Weiguang</option>
						<option value="wigam">Wigam</option>
                    </select><br>
                    <select id="catProd" name="catProd">
                        <option selected disabled>Alege Produs *</option>
                    </select><br>            
                    <input type="text" name="modelProd" id="modelProd" placeholder="Model Produs *" ><br>                    
                    <input type="text" name="serieProd" id="serieProd" placeholder="Serie Produs"><br>
                </div>
            </fieldset>
            <fieldset>
                <legend>FACTURA SI GARANTIE</legend>
                <div id="col-3">           
                    <input type="text" name="nrFact" id="nrFact" placeholder="Numar Factura *" required><br>                    
                    <input type="date" name="dataFact" id="dataFact" placeholder="Data Facturii *" required><br>
                    <select id="garantie" name="garantie" required>
                        <option selected disabled>Alege Perioada Garantie *</option>
                        <option value="3">3 luni</option>
                        <option value="6">6 luni</option>
                        <option value="12">12 luni</option>
                        <option value="24">24 luni</option>
                    </select>
                    <input type="submit" name="submit" value="SALVEAZA" id="butonSubmit"><br>
                </div>
            </fieldset>
            
            <?php
                if (!isset($_POST["submit"])) { /* conditie pusa ca la refresh de pagina sa nu se inscrie iar data in dB */
                    echo '';
                } else {
					if ($_POST['tipClient'] == 'b2c') {
						$php_tipClient = 0;
					} else {
						$php_tipClient = 1;
					}
                    /*$php_tipClient = strtoupper($_POST['tipClient']);*/
                    $php_nume = trim(strtoupper($_POST['nume']));
                    $php_prenume = trim(strtoupper($_POST['prenume']));
                    $php_societate = trim(strtoupper($_POST['societate']));
                    $php_cui = str_replace(' ','',trim(strtoupper($_POST['cui'])));
                    $php_producator = strtoupper($_POST['producator']);
                    $php_catProd = strtoupper($_POST['catProd']);
                    $php_modelProd = trim(strtoupper($_POST['modelProd']));
                    $php_serieProd = str_replace(' ','',trim(strtoupper($_POST['serieProd'])));
                    $php_nrFact = trim(strtoupper($_POST['nrFact']));
                    $php_dataFact = $_POST['dataFact'];
                    $php_garantie = $_POST['garantie'];
                
                    $sql_insert = "INSERT INTO cg_allprod (col_tipClient, col_nume, col_prenume, col_societate, col_cui, col_producator, col_catProd, col_modelProd, col_serieProd, col_nrFact, col_dataFact, col_garantie) VALUES ('$php_tipClient', '$php_nume', '$php_prenume', '$php_societate', '$php_cui', '$php_producator', '$php_catProd', '$php_modelProd', '$php_serieProd', '$php_nrFact', '$php_dataFact', '$php_garantie')";
            
                    /* mysqli_query($conn, $sql_insert); */
                    if (mysqli_query($conn, $sql_insert)) {
                        /* START in cazul in care se face refresh la pagina primesti inapoi pagina dar fara a se reinscrie date in dB */
                        /*echo "<script>location.href = 'index.php';</script>";*/ /* e mai bun acest script js de call header. Cica nu e bine pentru db sa faci cu php header ca mai jos in comment */
                        /* echo '<meta http-equiv="refresh" content="0">'; */
                        /* https://stackoverflow.com/questions/32461661/redirect-to-homepage-after-successful-query */
                        /* echo 'S-au inscris datele, urmeaza header'; */
                        header('Location: index.php', true);
                        exit();
                        /* STOP in cazul in care se face refresh la pagina primesti inapoi pagina dar fara a se reinscrie date in dB */
                    } else {
                        echo "<br />Eroare: " . $sql_insert . "<br>" . mysqli_error($conn);
                    }
                }
			?>
            
        </form>
    </div>
    <div id="semnatura">
        <span>Copyright &copy;2021 - creat de Alexa Ionut Gabriel</span>
    </div>
    <div id="ultimileCertificate">
        <p id="titluCertificate">ULTIMILE 10 CERTIFICATE DE GARANTIE</p>
        
        <?php
			$optimizez_tabela = "OPTIMIZE TABLE cg_allprod"; /* comanda MySQL pentru repararea si optimizarea tabelei */
			mysqli_query($conn, $optimizez_tabela); /* PHP executa comanda de optimizare MySQL */
			include 'ultimile-certificate.php';
			mysqli_close($conn);
			ob_end_flush(); /* goleste bufferul creat de ob_start() */
		?>
        
    </div>
	<script src="apps/script.js"></script>
</body>
</html>