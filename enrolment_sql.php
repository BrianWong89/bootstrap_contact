<?php

require_once("vendor/autoload.php");

$results = DB::query("SELECT * FROM `enrolment`");

echo "<table border='1'>\r\n";
echo "	<tr>";
echo "		<th>Name</th>";
echo "		<th>Enrolment</th>";
echo "	</tr>";

foreach ($results as $row) {
    if ($row['startDate'] == "25-12-2017" && $row['endDate'] == "25-12-2017") {
        echo "<tr>\r\n";
        echo "	<td>" . $row['name'] . "</td>\r\n";
        echo "	<td>" . $row['enrolmentDate'] . "</td>\r\n";
        echo "</tr>\r\n";
    }
}
echo "</table>";

echo json_encode($return, JSON_PRETTY_PRINT);