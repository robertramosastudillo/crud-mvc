<h1>Editar una persona</h1>

<form action="http://localhost/crud-persona/?controller=Persona&action=update&id=<?=$personas->id?>" method="POST">
    <label for="nombre">Nombre</label>
    <input type="text" name="nombre" value="<?=isset($personas) && is_object($personas) ? $personas->nombre : ''; ?>">

    <label for="apellido">Apellido</label>
    <input type="text" name="apellido" value="<?=isset($personas) && is_object($personas) ? $personas->apellido : ''; ?>">

    <label for="edad">Edad</label>
    <input type="number" name="edad" value="<?=isset($personas) && is_object($personas) ? $personas->edad : ''; ?>">

    <input type="submit" value="Guardar">
</form>