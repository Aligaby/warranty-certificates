<?php
include 'conecteaza.php';

$sql_select = "SELECT * FROM cg_allprod ORDER BY ID DESC LIMIT 10";
$result = mysqli_query($conn, $sql_select);

echo "<!-- <br /> -->" . "\r\n\t";
echo '<table id="tabcertificate">' . "\r\n\t";
echo "<tr>" . "\r\n\t\t";
echo "<th>ID</th>" . "\r\n\t\t";
/* echo "<th>Tip</th>" . "\r\n\t\t"; */ /* nu vreau sa fie vizibila pentru utilizatori variabila Tip Client */
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

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
		echo "<tr>" . "\r\n\t\t";
		echo "<td>" . $row["ID"] . "</td>" . "\r\n\t\t";
		/* echo "<td>" . $row["col_tipClient"] . "</td>" . "\r\n\t\t"; */ /* nu vreau sa fie vizibila pentru utilizatori variabila Tip Client */
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
echo "</table>" . "\r\n";

?>