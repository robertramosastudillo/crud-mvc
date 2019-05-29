<h1>Crear una persona</h1>

<form action="http://localhost/crud-persona/?controller=Persona&action=save" method="POST">
    <label for="nombre">Nombre</label>
    <input type="text" name="nombre">

    <label for="apellido">Apellido</label>
    <input type="text" name="apellido">

    <label for="edad">Edad</label>
    <input type="number" name="edad">

    <input type="submit" value="Enviar">
</form>