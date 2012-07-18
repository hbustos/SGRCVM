<div id="menu">
<ul id="sddm">
    <li><a href="#"
        onmouseover="mopen('m1')"
        onmouseout="mclosetime()">Administrar Usuarios</a>
        <div id="m1"
            onmouseover="mcancelclosetime()"
            onmouseout="mclosetime()">
        <a href="index.php?page=usuario&accion=lista">Listar Usuarios</a>
        <a href="index.php?page=usuario&accion=crea">Crear Usuario</a>
        <a href="index.php?page=usuario&accion=actualiza">Actualizar Usuario</a>
        <a href="index.php?page=usuario&accion=borra">Borrar Usuario</a>
        </div>
    </li>
    <li><a href="#"
        onmouseover="mopen('m2')"
        onmouseout="mclosetime()">Menu2</a>
        <div id="m2"
            onmouseover="mcancelclosetime()"
            onmouseout="mclosetime()">
        <a href="index.php?page=proyecto&accion=lista">Item1</a>
        <a href="index.php?page=proyecto&accion=crea">Item2</a>
        <a href="index.php?page=proyecto&accion=actualiza">Item3</a>
        <a href="index.php?page=proyecto&accion=borra">Item4</a>
        </div>
    </li>

    <li><a href="#"
        onmouseover="mopen('m3')"
        onmouseout="mclosetime()">Visitar Vender</a>
        <div id="m3"
            onmouseover="mcancelclosetime()"
            onmouseout="mclosetime()">
        <a href="index.php?page=etapa&accion=lista">Item1</a>
        <a href="index.php?page=etapa&accion=crea">Item2</a>
        <a href="index.php?page=etapa&accion=actualiza">Item3</a>
        <a href="index.php?page=etapa&accion=borra">Item4</a>
        <a href="index.php?page=venta&accion=vender">Vender</a>
        <a href="index.php?page=actividad&accion=crea">Item6</a>
        <a href="index.php?page=actividad&accion=actualiza">Item7</a>
        <a href="index.php?page=actividad&accion=borra">Item8</a>
        </div>
    </li>

    <li><a href="#"
        onmouseover="mopen('m4')"
        onmouseout="mclosetime()">Listar</a>
        <div id="m4"
            onmouseover="mcancelclosetime()"
            onmouseout="mclosetime()">
        <a href="index.php?page=cliente&accion=lista">Clientes</a>
        <a href="index.php?page=inventario&accion=lista">Inventario</a>
        <a href="index.php?page=movimiento&accion=lista">Item3</a>
        </div>
    </li>

    <li><a href="index.php?page=ayuda&accion=lista"
        onmouseover="mopen('m5')"
        onmouseout="mclosetime()">Ayuda</a>
        <div id="m5"
            onmouseover="mcancelclosetime()"
            onmouseout="mclosetime()">
        </div>
    </li>
    <li>
        <a href="{$smarty.server.PHP_SELF}?logout=1"
        onmouseover="mopen('m6')"
        onmouseout="mclosetime()">Salir</a>
        <div id="m6"
            onmouseover="mcancelclosetime()"
            onmouseout="mclosetime()">
        </div>
    </li>
</ul>
<td>
Usuario en el sistema : {$user|upper}
</td>
<div style="clear:both"></div>
<br>
