<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html><head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>DDLabs - CENARIO 01</title>
</head>
<body>
<?php
function getVersion(){return "2.0";}
function ShowIndexMessage($msgindex,$version){ echo "<strong>$msgindex - $version</strong>"; }
ShowIndexMessage("Estamos no Index.php",getVersion());
echo "<a href=\"msg.php\">Ir para msg.php</a>";
?>
</body></html>