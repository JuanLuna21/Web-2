<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<table>
    <thead>
        <tr>
            <th>id_materia</th>
            <th>nombre</th>
            <th>profesor</th>
        </tr>
    </thead>
    <tbody>
    {foreach from=$datos item=$materia}
		<tr>
			<td>{$materia->id_materia}</td>
			<td>{$materia->nombre}</td>
            <td>{$materia->profesor}</td>
            <td><a href="editarMaterias/{$materia->id_materia}">Editar</a></td>
        </tr>
    </tbody>
    {{/foreach}}
</table>  

  <form action="insertMaterias" method="POST">

        <input type="text" placeholder="materia" name="materia">
        <input type="text" placeholder="profesor" name="profesor">
        <input type="number" placeholder="carrera" name="carrera">
          <select name="carrera">
            <option value=1>Ingeniería de Sistemas</option>
            <option value=2>Tecnicatura Universitaria en Desarrollo de Aplicaciones Informáticas</option>
            <option value=3>Tecnicatura Universitaria en Administración de Redes Informáticas</option>
            <option value=4>Profesorado de Informática</option>
        </select>
        <input type="submit" value="Enviar">
        
</form>
 
    
</body>
</html>