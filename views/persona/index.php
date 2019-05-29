<h1>Listado de Personas</h1>

<table>
    <tr>
        <th>Nombre</th>
        <th>Apellido</th>
        <th>Edad</th>
        <th>Acciones</th>
    </tr>
<?php while($persona = $personas->fetch_object()): ?>
    <tr>
        <td><?=$persona->nombre;?></td>
        <td><?=$persona->apellido;?></td>
        <td><?=$persona->edad;?></td>
        <td>
            <a href="http://localhost/crud-persona/?controller=Persona&action=edit&id=<?=$persona->id?>">Editar</a>
            <a href="http://localhost/crud-persona/?controller=Persona&action=delete&id=<?=$persona->id?>">Eliminar</a>
        </td>
        
    </tr>
<?php endwhile; ?>

</table>