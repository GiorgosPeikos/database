<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-7" />
<title>�������� �����������</title>
<style type="text/css">
<!--
.style1 {
	font-size: 36px;
	font-style: italic;
}
body {
	background-color: #FFFFFF;
}
-->
</style>
</head>
<body>
  <div align="center">
    <p><BR>
      <?php 

    include 'Connect.php';

    $query = "delete from prof where id = ".$_POST['id']."";
  
    //execute query 
    if (mysql_query($query)) { 
	mysql_query("COMMIT");
	print("<p><font size=\"+1\">� �������� ���� ��������!</font></p>");
	} else { 
	print("<p><font size=\"+1\">������������� ������ ����� ���� �� ��������!</font></p>");
	} 
	
    //disconnect from database 
    mysql_close($connectionstring); 

?>
      </p>
    <a href="index.php">����</a><BR>
</div>
</body>
</html>