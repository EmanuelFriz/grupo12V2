<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name . ' - About';
$this->breadcrumbs=array(
	'Sobre la versión 1.0',
);
?>
<h1>Detalles de esta versión</h1>
<br><br>
<ul>
<li type="circle">En general.</li>
<br>
<ul><li type="disc">Se cambio el idioma para que muestre los mensajes nativos del framework en español.</li>
    <li type="disc">Los datos de cuentas están manejados por la tabla USUARIO.</li>
    <li type="disc">Aún no se definen los permisos de cuentas, por lo cual se pueden visualizar las funcionalidades (independiente del rol que tengan), 
    	con cualquier perfíl de ingreso.</li>
    </ul>
</ul>
<br>
<ul>
<li type="circle">Gestión de cuentas de empleador.</li>
<br>
<ul><li type="disc">Programado por Manuel Grandón H.</li>
    <li type="disc">Permite crear una cuenta para un empleador nuevo, con los datos de rut, nombres, apellidos, fono, e-mail y dirección.</li>
    <li type="disc">Permite eliminar y modificar una cuenta de empleador.</li>
    <li type="disc">Permite ver un listado con las cuentas de empleador existentes.</li>
    <li type="disc">Permite realizar búsquedas por rut, nombres, apellidos e e-mail. Futuramente también se podrá buscar por empresa, región y comuna.</li>
    <li type="disc">No considera como dato de creación el nombre de la empresa puesto que, según nuestro proceso de negocio, el empleador deberá actualizar sus datos
    	de contacto, incluyendo la empresa a la que pertenece al momento de recibir sus datos de acceso al sistema.</li>
    <li type="disc">El proceso de eliminación está en duda aun, posiblemente se cambiará a eliminación lógica (actualmente es eliminación física).</li>
    <li type="disc">Estás funciones están pensadas originalmente para los roles de Profesor y Secretaria (Actualmente cualquiera puede visualizar estas funciones).</li></ul>
</ul>

<ul>
<li type="circle">Ingresar ofertas de prácticas.</li>
<br>
<ul><li type="disc">Programado por José Bastías H.</li>
    <li type="disc">Permite subir prácticas al sistemas ingresando el rut del usuario que esta subiendo la práctica al igual que el rut de la empleador, nombre de la práctica
        descripción, número de vacantes y el tipo el cual puede ser práctica 1 o práctica 2.</li>
    <li type="disc">Permite ver una lista de las prácticas ingresadas en el sistema.</li></ul>
</ul>

<ul><li type="circle">Actualizar perfil de alumno.</li>
<br>
<ul><li type="disc">Programado por Andrés Constanzo R..</li></ul>
</ul>
<ul>
<li type="circle">Listar Alumnos y Cargar datos al Sistema.</li>
<br>
<ul><li type="disc">Programado por Emanuel Friz</li>
    <li type="disc">Permite listar los alumnos habilitados en el sistema y cargar datos al mismo</li>
    <li type="disc">Permite eliminar y modificar un alumno, esto es solo accesible por el usuario secretaria</li>
</ul>