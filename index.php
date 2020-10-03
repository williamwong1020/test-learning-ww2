<html>

<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>WW</title>
<style type="text/css">
body {
	color:#000000;
	background-color:#AAAFFF;
	margin:0;
}

#container {
	margin-left:auto;
	margin-right:auto;
	text-align:center;
	}

a img {
	border:none;
}
</style>
</head>

<body>

<?php
if( ! isset( $_POST["pw"] ) )
{
?>

<FORM action="index.php" method="POST" target="_self">
<INPUT type="password" NAME="pw">
<INPUT type="submit" value="login">
</FORM>

<?php
}
else
{
	if( $_POST["pw"] == "1" )
	{
		phpinfo();
	}
	else
	{
		header( "Location: #" );
	}
}
?>

</body>

</html>