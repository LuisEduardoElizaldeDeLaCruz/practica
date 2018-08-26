<!-- Manual de PHP -->
<!DOCTYPE html>
<html>
<head>
<title>TIENDA DE ROPA</title>
</head>
<h1>ROPA MADRID</h1>
<body>

<TABLE>
<TR>
<TD>Edad:</TD>
<TD><INPUT TYPE="num" NAME="Edad" SIZE="20" MAXLENGTH="30"></TD>
</TR>
</TABLE>
<INPUT TYPE="submit" NAME="accion" VALUE="Entrar">

<TABLE BORDER=10 CELLSPACING=1 CELLPADDING=11>
<?php
$arreglo=array("casual", "deportiva", "formal", "ropa tradicional");

$num=3;
$edad=18;

echo "<br/><br/>";
printf("Las siguientes categorias pronto estaran disponibles");
echo "<br/><br/>";
//printf("<TABLE BORDER=10 CELLSPACING=1 CELLPADDING=10>");
for ($i=1;$i<=4;$i++)
{
printf("<tr>");
printf("<td>%d</td>",$i);
printf("</tr>");

}

foreach ($arreglo  as $value) {
	printf("<tr><td>%s</td>",$value);
	printf("</tr>");
	//echo "$value";
}
unset($value);
?>

</table>
<?php
echo "<br/><br/>";
if($Edad >= 18){
	echo "<h2>bienvenido a esta pagina que cuenta con una gran variedad de estilos para vestir bien</h2>";
}else{
	echo "Esta pagina maneja compras en linea";
}
?>

</body>
</html>