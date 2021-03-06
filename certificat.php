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
        <h2 style="text-align: center;">CONDI??II GENERALE DE GARAN??IE,<br>POSTGARAN??IE ??I REPARA??IE</h2>
		<br><br>
        <p><strong>Societate SRL</strong> ??n calitate de V??nz??tor garanteaz?? performan??ele echipamentului ??n conformitate cu caracteristicile tehnice, cu condi??ia respect??rii condi??iilor de transport, depozitare, operare ??i montare.</p>
        <p>Garan??ia general?? ??i de repara??ie se aplic?? ??n conformitate cu drepturile consumatorului reglementate prin Legea nr 449/2003 ??i a articolelor 1716 si 2531 din Codul Civil.</p>
        <p>Termenul de garan??ie al echipamentului este indicat ??n certificatul de garan??ie la ???Garan??ie echipament???.</p>
        <p>Perioada de garan??ie decurge de la data cump??r??rii ??i se prelunge??te cu termenul scurs de la data repunerii ??n func??iune a echipamentului defect.</p>
        <p>La solicit??rile de repara??ie ??n garan??ie, cump??r??torul este obligat s?? prezinte Certificatul de Garan??ie ??i documentul de achizi??ie (factura sau bonul fiscal).</p>
        <p>Echipamentul trebuie folosit numai ??n scopul pentru care a fost fabricat. Orice alt?? aplica??ie este considerat?? neconform?? ??i periculoas??. V??nz??torul nu r??spunde pentru nerespectarea indica??iilor de instalare ??i utilizare specificate de produc??tor.</p>
        <p>??n perioada de garan??ie, orice defec??iune cauzat?? din vina produc??torului va fi remediat?? pe cheltuiala acestuia.</p>
        <p>Garan??ia ??i repararea gratuit?? sunt excluse ??n urm??toarele cazuri:</p>
        <ul>
            <li>defec??iunile sunt produse de schimb??rile de design care nu sunt prev??zute de produc??tor;</li>
            <li>defec??iunile sunt produse de p??trunderea unor obiecte str??ine, lichide, insecte sau animale etc. ??n echipament;</li>
            <li>defectiuni provocate de utilizarea incorect?? sau ??n alte scopuri dec??t cele pentru care au fost construite si comercializate, utilizarea ??n condi??ii de mediu (temperatura si umiditate) neconforme cu caracteristicile tehnice ale echipamentului sau nerespectarea indica??iilor din manualul de utilizare;</li>
            <li>defec??iuni cauzate de ??ocuri de tensiune, fulgere, foc, probleme de alimentare, ??n circumstan??e de for???? major?? etc;</li>
            <li>defec??iuni datorate neefectu??rii reviziilor sau opera??iunilor de ??ntre??inere periodice;</li>
            <li>interven??ii efectuate ??n perioada de garan??ie de c??tre personal neautorizat;</li>
            <li>cuplarea echipamentelor electrice/electronice la alte tensiuni dec??t cele men??ionate pe echipament;</li>
            <li>dac?? nu sunt completate toate rubricile certificatului de garan??ie.</li>
        </ul>
        <p>Neprezentarea documentelor ce fac dovada achizi??iei ??i a perioadei de garan??ie duc la anularea drepturilor cump??r??torului ??n perioada de garan??ie.</p>
        <p>Uzurile normale ap??rute la componentele echipamentului ??n perioada de utilizare nu sunt considerate defec??iuni.</p>
        <p>Cump??r??torul va suporta costurile de transport a echipei de service in cazul unei interventii nefondate.</p>
    </div>
</body>
</html>