<?php
/* @var $this PrivilegioController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Privilegios',
);

$this->menu=array(
	array('label'=>'Create Privilegio', 'url'=>array('create')),
	array('label'=>'Manage Privilegio', 'url'=>array('admin')),
);
?>

<h1>Privilegios</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
