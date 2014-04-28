<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name;
?>

<h1><i><?php echo CHtml::encode(Yii::app()->name); ?> Versión 1.0</i></h1>

<p>Para ver las funciones implementadas, correspondientes a los sprints 1-4, ingrese con la cuenta admin.</p>
<?php $this->widget('zii.widgets.CMenu',array(
			'items'=>array(
				array('label'=>'Gestión de cuentas de empleador', 'url'=>array('empleador/index'), 'visible'=>!Yii::app()->user->isGuest),
				array('label'=>'Ingresar oferta de práctica','url'=>array('/ofertaPractica/index'), 'visible'=>!Yii::app()->user->isGuest),
                array('label'=>'Actualizar perfil de alumno', 'url'=>array('/usuario/datos','id'=>Yii::app()->getSession()->get('id_usuario')), 'visible'=>!Yii::app()->user->isGuest),    
				array('label'=>'Listar Alumnos', 'url'=>array('/ALUMNO/index','id'=>Yii::app()->getSession()->get('id_usuario')), 'visible'=>!Yii::app()->user->isGuest),
			),
		)); ?>
