<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-7" />
<title>Σχολή Χορού</title>
<style type="text/css">
<!--
.style1 {
	font-size: 24px;
	font-weight: bold;
	font-family: "Times New Roman", Times, serif;
}
body {
	background-color: #FFEBCD;
}
.style3 {font-size: 9px}
-->
</style>
</head>

<body>
<p align="center"><strong><font size="+2">Εγεγγραμμένοι</font></strong><br/>
<center>
<table border="2" bgcolor="lightcyan">
<thead>
 <tr>
  <th>
   ID
  </th>
  <th>
   Ονοματεπώνυμο
  </th>
  <th>
   Τμήμα
  </th>     
 </tr>
</thead>
<tbody>
<?php
    //phpinfo();
    include 'Connect.php';

    //SQL query 
    $query = "Select * id,name,name_group from student"; 
     
    //execute query 
	$result = mysql_query($query);
	
	if (!$result) {
 		die('Could not query:' . mysql_error());
	}

    //query database 
    while($row = mysql_fetch_array($result, MYSQL_NUM))
    { 
    //format results 

    print ("<tr><td><div align=\"center\"> $row[0] </div></td> <td><div align=\"center\"> $row[1] </div></td> <td><div ");     
    print ("align=\"center\"> $row[2] </div></td>");  
    print ("</tr>");
    
    }  
 
    //disconnect from database 
    mysql_close($connectionstring);

    ?> 

</tbody>
	</table>
    </center>
<br><br>
<center>  
    <a href="index.php">Πίσω</a>
</center>
</body>
</html>
