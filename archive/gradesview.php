<? $NUM_PSETS = 16; ?>
<? $NUM_QUIZZES = 2; $QUIZ_NUM1  = 4; $QUIZ_NUM2 = 8 ?>

<table border=1>
<tr>
<td class="text"><b>Name</b></td> 
<? for($i = 1; $i <= 10 + $NUM_QUIZZES; $i++) {
   if ($i < $QUIZ_NUM1) {
      echo "<td class=text><b>$i</b></td>";
      } else if ($i == $QUIZ_NUM1) {
      echo "<td class=text><b>Quiz 1</b></td>";
      } else if ($i == $QUIZ_NUM2) {
      echo "<td class=text><b>Quiz 2</b></td>";
      } else if ($i < $QUIZ_NUM2) {
            $j = $i - 1;
      	    echo "<td class=text><b>$j</b></td>";
      } else {
      	    $j = $i - 2;
	    echo "<td class=text><b>$j</b></td>";
}
}
	    echo "<td class=text><b>HW Avg</b></td>";
	    echo "<td class=text><b>Quiz Avg</b></td>";
	    echo "<td class=text><b>Section</b></td>";
	    echo "<td class=text><b>Final</b></td>";
	    echo "<td class=text><b>Casino Night</b></td>";
	    echo "<td class=text><b>Overall</b></td>";
?> 
</tr>

<?
$id = $_GET['id'];

/* If my ID is entered,  then the grades for all the students are shown. */
if ($id == "10663725") {
	$handle = fopen("grades.csv","r");
	$count = 0;
	while ($row = fgetcsv($handle, 9999, ","))
	{
		$count++;
		echo "<tr><td class=text>{$row[3]}</td>";
		if ($count > 1) {
		   for ($i=4;$i < 4 + $NUM_PSETS + $NUM_QUIZZES;$i++) {
			echo "<td class=text>{$row[$i]}</td>";
			}
		}
		echo "</tr>";
	}
}

/* If a student's ID is entered, then only the data corresponding to that student's grade is shown. */
else {

	$handle = fopen("grades.csv","r");
	while ($row = fgetcsv($handle, 9999, ","))
	{
		if ($id == $row[0] || $row[0] == -1) {
			if ($id == $row[0]) {
			   echo "<tr><td class=text>{$row[0]}</td>";
			} else {
			   echo "<tr><td class=text>{$row[3]}</td>";
			}
			for ($i=4;$i < 4 + $NUM_PSETS + $NUM_QUIZZES;$i++) {
				echo "<td class=text>{$row[$i]}</td>";
			}
			echo "</tr>";
		}
	}
	
}

?>

</table>

<br>

<b>Note 1:</b> Only 50 out of 100 points in the Overall grade have been
earned so far.  The final will count for the other 50 points.

<br>

<b>Note 2:</b> Problem Set 10 has been given 1/4 of the weight of each
other problem set.

<br>

<b>Note 3:</b> The weights of HW, Quizzes, Section, and Finals to the
Overall grade are 20%, 20%, 10%, and 50%, respectively.
