<?php
/* @var $this PrivilegioController */
/* @var $model Privilegio */

$this->breadcrumbs=array(
	'Privilegios'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Privilegio', 'url'=>array('index')),
	array('label'=>'Manage Privilegio', 'url'=>array('admin')),
);
?>

<h1>Create Privilegio</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>