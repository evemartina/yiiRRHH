<?php
/* @var $this PrivilegioController */
/* @var $model Privilegio */

$this->breadcrumbs=array(
	'Privilegios'=>array('index'),
	$model->idPrivilegio=>array('view','id'=>$model->idPrivilegio),
	'Update',
);

$this->menu=array(
	array('label'=>'List Privilegio', 'url'=>array('index')),
	array('label'=>'Create Privilegio', 'url'=>array('create')),
	array('label'=>'View Privilegio', 'url'=>array('view', 'id'=>$model->idPrivilegio)),
	array('label'=>'Manage Privilegio', 'url'=>array('admin')),
);
?>

<h1>Update Privilegio <?php echo $model->idPrivilegio; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>