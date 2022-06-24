<?php
	include 'conecteaza.php';
?>
<!DOCTYPE html>
<html lang="ro" xml:lang="ro" xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="robots" content="noindex, nofollow">
	<link rel="stylesheet" type="text/css" href="style/screen.css">
	<title>Cauta Certificat Garantie</title>
</head>
<body>
	<noscript>Activeaza Javascript altfel nu poti utiliza Certificate</noscript>
    <nav>
        <ul id="meniu">
            <li><a href="index.php">CERTIFICAT</a></li>
            <li><a href="cauta.php" class="active">CAUTA</a></li>
            <li><a href="../">ALTELE</a></li>
        </ul>
    </nav>
	<div id="container">
		<form action="" method="POST">
			<fieldset style="height: 25vh;">
				<legend>Cauta certificat</legend>
				<br>
				<input type="text" name="cauta" placeholder="Nume / Prenume / Societate / CUI">
				<input type="submit" name="submit" class="submit" value="CAUTA">
			</fieldset>
		</form>
	</div>
	<div id="ultimileCertificate">
			<?php
				if (!isset($_POST["submit"])) {
					echo '<p>POTI CAUTA DUPA URMATOARELE CRITERII</p>';
					echo '<ul>';
					echo '<li>Nume sau portiune din nume</li>';
					echo '<li>Prenume sau portiune din prenume</li>';
					echo '<li>Societate sau portiune din societate</li>';
					echo '<li>CUI sau portiune din cui</li>';
					echo '<li>fara sa scrii nimic si iti vor apare toate certificatele</li>';
					echo '</ul>';
				}
				else {	
					$keyword = $_POST['cauta'];
					$keyword = trim($keyword);
					echo '<p>ai cautat: <span style="color: #FF0000; font-weight: bold;">'.$keyword. '</span></p>';
					$sql_cauta = "SELECT * FROM cg_allprod WHERE col_nume LIKE '%{$keyword}%' OR col_prenume LIKE '%{$keyword}%' OR col_societate LIKE '%{$keyword}%' OR col_cui LIKE '%{$keyword}%' ORDER BY ID DESC";
					/* $sql_cauta = "SELECT * FROM cg_allprod WHERE MATCH(col_societate, col_cui) AGAINST('$keyword*' IN BOOLEAN MODE)";*/ /* pt a putea utiliza MATCH creezi cu FULLTEXT index la coloanele nume si prenume in baza de date */
					
					$sql_rezultat = mysqli_query($conn, $sql_cauta);
					echo "<br />" . "\r\n\t";
					echo '<table id="tabcertificate">' . "\r\n\t";
					echo "<tr>" . "\r\n\t\t";
					echo "<th>ID</th>" . "\r\n\t\t";
					/* echo "<th>Tip</th>" . "\r\n\t\t"; */
					echo "<th>Nume</th>" . "\r\n\t\t";
					echo "<th>Prenume</th>" . "\r\n\t\t";
					echo "<th>Societate</th>" . "\r\n\t\t";
					echo "<th>CUI</th>" . "\r\n\t\t";
					echo "<th>Producator</th>" . "\r\n\t\t";
					echo "<th>Produs</th>" . "\r\n\t\t";
					echo "<th>Model</th>" . "\r\n\t\t";
					echo "<th>Serie</th>" . "\r\n\t\t";
					echo "<th>Nr Fact</th>" . "\r\n\t\t";
					echo "<th>Data Fact</th>" . "\r\n\t\t";
					echo "<th>Garantie<br/>[luni]</th>" . "\r\n\t\t";
					echo "<th>Download</th>" . "\r\n\t";
					echo "</tr>" . "\r\n\t";
					if (mysqli_num_rows($sql_rezultat) > 0) {
						// output data of each row
						while($row = mysqli_fetch_assoc($sql_rezultat)) {
							echo "<tr>" . "\r\n\t\t";
							echo "<td>" . $row["ID"] . "</td>" . "\r\n\t\t";
							/* echo "<td>" . $row["col_tipClient"] . "</td>" . "\r\n\t\t"; */
							echo "<td>" . $row["col_nume"] . "</td>" . "\r\n\t\t";
							echo "<td>" . $row["col_prenume"] . "</td>" . "\r\n\t\t";
							echo "<td>" . $row["col_societate"] . "</td>" . "\r\n\t\t";
							echo "<td>" . $row["col_cui"] . "</td>" . "\r\n\t\t";
							echo "<td>" . $row["col_producator"] . "</td>" . "\r\n\t\t";
							echo "<td>" . $row["col_catProd"] . "</td>" . "\r\n\t\t";
							echo "<td>" . $row["col_modelProd"] . "</td>" . "\r\n\t\t";
							echo "<td>" . $row["col_serieProd"] . "</td>" . "\r\n\t\t";		
							echo "<td>" . $row["col_nrFact"] . "</td>" . "\r\n\t\t";
							$dataFact = date("d.m.Y", strtotime($row['col_dataFact']));
							echo "<td>" . $dataFact . "</td>" . "\r\n\t\t";
							echo "<td>" . $row["col_garantie"] . "</td>" . "\r\n\t\t";
							echo "<td>";
							$url_doc = 'tipclient='.$row["col_tipClient"].'&nume='.$row["col_nume"].'&prenume='.$row["col_prenume"].'&societate='.$row["col_societate"].'&cui='.$row["col_cui"].'&producator='.$row["col_producator"].'&catprodus='.$row["col_catProd"].'&modelprodus='.$row["col_modelProd"].'&serieprodus='.$row["col_serieProd"].'&nrFact='.$row["col_nrFact"].'&dataFact='.$dataFact.'&garantie='.$row["col_garantie"];
							echo '<a href="certificat.php?'.$url_doc.'" target="_blank" class="listareDOC">DOC</a>';
							echo "</td>" . "\r\n\t\t";
							echo "</tr>" . "\r\n\t";
						}
					} else {
						echo "0 rezultate";
					}	
				}
				echo "</table>" . "\r\n";
			?>
	</div>
</body>
</html>
<?php
	mysqli_close($conn);
?>