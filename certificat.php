<?php
	$today = date('d.m.Y');
	$dataFact = date("d.m.Y", strtotime($_GET['dataFact']));
?>
<!DOCTYPE html>
<html lang="ro">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="robots" content="noindex, nofollow">
    <!-- <link rel="stylesheet" type="text/css" href="style/screen-certificat.css"> -->
    <link rel="stylesheet" type="text/css" href="style/print.css" media="print">
    <script src="apps/script.js"></script>
    <title>Certificat</title>
</head>
<body>
    <div id="pag1">
		<img src="imagini/logo.png" style="border:0; width:600px;">
		<hr>
		<br><br>
		<h2 style="text-align: center;">CERTIFICAT DE GARANTIE</h2>
		<br><br>
		<p><span class="col-1">Data</span> <span class="col-2"><strong><?php echo $today; ?></strong><span></p>
		<p><span class="col-1">Produs</span> <span class="col-2"><strong><?php echo $_GET['catprodus']; ?></strong></span></p>
		<p><span class="col-1">Model</span> <span class="col-2"><strong><?php echo $_GET['modelprodus']; ?></strong></span>
		<?php
			if (!empty($_GET['serieprodus'])) {
				echo '<p><span class="col-1">Serie</span> <span class="col-2"><strong>'.$_GET['serieprodus'].'</strong></span></p>';
			}
		?>
		<p><span class="col-1">Numar si data factura</span> <span class="col-2"><strong><?php echo $_GET['nrFact']; ?></strong> / <strong><?php echo $dataFact ?></strong></span></p>
		<br style="clear: both">
		<br><br>
		<p style="font-weight: bold;">TERMEN DE GARANTIE</p>
		<br>
		<p><span class="col-1">Garantie echipament</span> <span class="col-2"><strong><?php echo $_GET['garantie']; ?> luni</strong></span></p>
		<p><span class="col-1">Termen maxim de reparare:</span> <span class="col-2">15 zile</span></p>
		<p><span class="col-1">Termen maxim de inlocuire:</span> <span class="col-2">30 zile</span></p>
		<br style="clear: both">
		<br><br>
		<p>VANZATOR</p>
		<p><strong>Societate SRL</strong></p>
		<br><br><br>
		<p>............................</p>
		<br><br><br><br>
		<p>Am primit produsul in perfecta stare, a fost pus in functiune, am primit manualul de utilizare, am luat la cunostinta conditiile de garantie, postgarantie si reparatie (pe verso)</p>
		<br><br>
		<?php
			if ($_GET['tipclient'] == 0) {
				echo '<p>CLIENT</p><p><strong>'.$_GET['nume'].' '.$_GET['prenume'].'</strong></p>';
				echo '<br />';
				echo '<p>Semnatura client:</p>';
				echo '<br><br><br>';
				echo '<p>............................</p>';
			} else {
				echo '<p>SOCIETATE</p><p><strong>'.$_GET['societate'].'</p><p></strong> CUI: <strong>'.$_GET['cui'].'</strong></p>';
				echo '<br />';
				echo '<p>Semnatura si stampila</p>';
				echo '<br><br><br>';
				echo '<p>............................</p>';
			}
		?>
    </div>
    <div class="page-break"></div>
    <div id="pag2">
        <img src="imagini/logo.png" style="border:0; width:600px;">
        <hr>
		<br><br>
        <h2 style="text-align: center;">CONDIŢII GENERALE DE GARANŢIE,<br>POSTGARANŢIE ŞI REPARAŢIE</h2>
		<br><br>
        <p><strong>Societate SRL</strong> în calitate de Vânzător garantează performanţele echipamentului în conformitate cu caracteristicile tehnice, cu condiţia respectării condiţiilor de transport, depozitare, operare şi montare.</p>
        <p>Garanţia generală şi de reparaţie se aplică în conformitate cu drepturile consumatorului reglementate prin Legea nr 449/2003 şi a articolelor 1716 si 2531 din Codul Civil.</p>
        <p>Termenul de garanţie al echipamentului este indicat în certificatul de garanţie la “Garanţie echipament”.</p>
        <p>Perioada de garanţie decurge de la data cumpărării şi se prelungeşte cu termenul scurs de la data repunerii în funcţiune a echipamentului defect.</p>
        <p>La solicitările de reparaţie în garanţie, cumpărătorul este obligat să prezinte Certificatul de Garanţie şi documentul de achiziţie (factura sau bonul fiscal).</p>
        <p>Echipamentul trebuie folosit numai în scopul pentru care a fost fabricat. Orice altă aplicaţie este considerată neconformă şi periculoasă. Vânzătorul nu răspunde pentru nerespectarea indicaţiilor de instalare şi utilizare specificate de producător.</p>
        <p>În perioada de garanţie, orice defecţiune cauzată din vina producătorului va fi remediată pe cheltuiala acestuia.</p>
        <p>Garanţia şi repararea gratuită sunt excluse în următoarele cazuri:</p>
        <ul>
            <li>defecţiunile sunt produse de schimbările de design care nu sunt prevăzute de producător;</li>
            <li>defecţiunile sunt produse de pătrunderea unor obiecte străine, lichide, insecte sau animale etc. în echipament;</li>
            <li>defectiuni provocate de utilizarea incorectă sau în alte scopuri decât cele pentru care au fost construite si comercializate, utilizarea în condiţii de mediu (temperatura si umiditate) neconforme cu caracteristicile tehnice ale echipamentului sau nerespectarea indicaţiilor din manualul de utilizare;</li>
            <li>defecţiuni cauzate de şocuri de tensiune, fulgere, foc, probleme de alimentare, în circumstanţe de forţă majoră etc;</li>
            <li>defecţiuni datorate neefectuării reviziilor sau operaţiunilor de întreţinere periodice;</li>
            <li>intervenţii efectuate în perioada de garanţie de către personal neautorizat;</li>
            <li>cuplarea echipamentelor electrice/electronice la alte tensiuni decât cele menţionate pe echipament;</li>
            <li>dacă nu sunt completate toate rubricile certificatului de garanţie.</li>
        </ul>
        <p>Neprezentarea documentelor ce fac dovada achiziţiei şi a perioadei de garanţie duc la anularea drepturilor cumpărătorului în perioada de garanţie.</p>
        <p>Uzurile normale apărute la componentele echipamentului în perioada de utilizare nu sunt considerate defecţiuni.</p>
        <p>Cumpărătorul va suporta costurile de transport a echipei de service in cazul unei interventii nefondate.</p>
    </div>
</body>
</html>