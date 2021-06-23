<?php
/* @var $this TipopermisosController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Tipopermisoses',
);

$this->menu=array(
	array('label'=>'Create Tipopermisos', 'url'=>array('create')),
	array('label'=>'Manage Tipopermisos', 'url'=>array('admin')),
);
?>

<h1>Tipopermisoses</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
