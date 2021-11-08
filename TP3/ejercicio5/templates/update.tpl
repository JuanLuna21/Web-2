<form action="{BASE_URL}editarMaterias" method="POST">

    <input type="text" placeholder="materia" name="materia">
    <input type="text" placeholder="profesor" name="profesor">
    <input type="number" placeholder="carrera" name="carrera">
    <input hidden type="text" value="{$id}" name='id'>
    <input type="submit" value="Enviar">

</form>