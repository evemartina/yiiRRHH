<?php
/* @var $this SaludController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Saluds',
);

$this->menu=array(
	array('label'=>'Create Salud', 'url'=>array('create')),
	array('label'=>'Manage Salud', 'url'=>array('admin')),
);
?>

<h1>Saluds</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
