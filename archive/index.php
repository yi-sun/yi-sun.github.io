<?php $query = ltrim($_GET["search"],"/"); 
      $search =	strtolower($query);
      $url = "KLSDJFhiofhsiofhsiiowerjksdhvjsiohfsiohdj";
      switch ($search) {
	   case "mathxb":
	     $url = "http://www.courses.fas.harvard.edu/3857";
	     break;
	   case "math1a":
	     $url = "http://isites.harvard.edu/icb/icb.do?keyword=k30281";
	     break;
	   case "math1b":
	     $url = "http://isites.harvard.edu/icb/icb.do?keyword=k27550";
	     break;
	   case "math19b":
	     $url = "http://www.courses.fas.harvard.edu/6144";
	     break;
	   case "math20":
	     $url = "http://isites.harvard.edu/icb/icb.do?keyword=k30267";
	     break;
	   case "math21a":
	     $url = "http://isites.harvard.edu/icb/icb.do?keyword=k26082";
	     break;		
	   case "math21b":
	     $url = "http://isites.harvard.edu/icb/icb.do?keyword=k25821";
	     break;
	   case "math23b":
	     $url = "http://www.courses.fas.harvard.edu/8571";
	     break;
	   case "math25b":
	     $url = "http://www.courses.fas.harvard.edu/1590";
	     break;
	   case "math55b":
	     $url = "http://www.courses.fas.harvard.edu/3312";
	     break;
           case "math231b":
	   case "math231br":
	     $url = "http://www.courses.fas.harvard.edu/9127";
	     break;
	   case "math123":
	     $url = "http://www.courses.fas.harvard.edu/5613";
	     break;
	   case "math124":
	     $url = "http://www.courses.fas.harvard.edu/2398";
	     break;
	   case "math129":
	     $url = "http://www.courses.fas.harvard.edu/2345";
	     break;
	   case "math130":
	     $url = "http://www.courses.fas.harvard.edu/5811";
	     break;
	   case "math132":
	     $url = "http://www.courses.fas.harvard.edu/7725";
	     break;
	   case "math137":
	     $url = "http://www.courses.fas.harvard.edu/0556";
	     break;
	   case "math143":
	     $url = "http://www.courses.fas.harvard.edu/6005";
	     break;
	   case "math154":
	     $url = "http://www.courses.fas.harvard.edu/4306";
	     break;
	   case "math212b":
	   case "math212br":
	     $url = "http://www.courses.fas.harvard.edu/7294";
	     break;
	   case "math213b":
	   case "math213br":
	     $url = "http://www.courses.fas.harvard.edu/2641";
	     break;
	   case "phys181":
	   case "physics181":
	     $url = "http://www.courses.fas.harvard.edu/6346";
	     break;
	   case "ec2052":
	     $url = "http://www.courses.fas.harvard.edu/3690";
	     break;
	   case "hista12":
	     $url = "http://www.courses.fas.harvard.edu/5129";
	     break;
	   case "mcb54":
	     $url = "http://www.courses.fas.harvard.edu/0801";
	     break;
           case "mcb56":
	     $url = "http://www.courses.fas.harvard.edu/5424";
	     break;
	   case "mcb80":
	     $url = "http://www.courses.fas.harvard.edu/6052";
	     break;
	   case "chem20":
	     $url = "http://www.courses.fas.harvard.edu/0876";
	     break;
	   case "chem27":
	     $url = "http://www.courses.fas.harvard.edu/5978";
	     break;
	   case "chem60":
	     $url = "http://www.courses.fas.harvard.edu/5181";
	     break;
	}
      if ($url != "KLSDJFhiofhsiofhsiiowerjksdhvjsiohfsiohdj") {
	 header('Location:'."".$url);
	 die();
      }
?>

<html>
    <head>
        <title>Test</title>
    </head>
    <body>	
	<p>You typed: <?php echo $_GET["search"]; ?></p>
	<p>You want to search for: <?php $query = ltrim($_GET["search"],"/"); 
				      echo $query;
				      ?></p>
	<p>Lowercase version: <?php
				      $search =	strtolower($query);
				      echo $search;
				?></p>
	<p>URL: <?php 
		      switch ($search) {
			     case "math231":
				  $url = "http://www.courses.fas.harvard.edu/9127";
			     case "math123":
				  $url = "http://www.courses.fas.harvard.edu/5613";
			}
		 if ($url == "KLSDJFhiofhsiofhsiiowerjksdhvjsiohfsiohdj") {
		 	echo "Sorry, ".$search." could not be found.";
		 }			  		
		?></p>
    </body>
</html>

