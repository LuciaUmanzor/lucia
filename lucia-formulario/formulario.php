
<html >
<head>
	
   </head>

<body>
  
  
<form action="conexioAlumno.php" method= "post">


<p><tr>
<td>
Carnet:
</td>
<td>
<input type = "text" Name="Carnet">
</td>
</td>
</tr></p>

<p><tr>
<td>
Nombre:
</td>
<td>
<input type = "text" Name="Nombre">
</td>
</td>
</tr></p>

<p><tr>
<td>
Apellido:
</td>
<td>
<input type = "text" Name="Apellido ">
</td>
</td>
</tr></p>


<p><tr>
<td>
Fecha de nacimiento:
</td>
<td>
<input type = "text" Name="FechaNacimiento">
</td>
</td>
</tr></p>

<p><tr>
<td>
Direccion:
</td>
<td>
<input type = "text" Name="Direccion">
</td>
</td>
</tr></p>

<p><td>
Seccion:
</td>
<td>
<select Name = "text" Name="Seccion">
	<option value= ""></option>
		<option value= "sis"> Sistemas</option>
	<option value= "mantto"> Mantenimiento</option>
	<option value= "Logistica"> Logistica</option>
	<option value= "Electronica"> Electronia</option>

</select>
</td>
</td>
</td>
</tr></p>

<p><tr>
	<td colspan="2">
		<input type = "submit" name='botton' value= 'Enviar'>
	</td>
</tr><p/>


</form>

</body>
</html>