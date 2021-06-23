<?php
/* @var $this AreatrabajoController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Areatrabajos',
);

$this->menu=array(
	array('label'=>'Create Areatrabajo', 'url'=>array('create')),
	array('label'=>'Manage Areatrabajo', 'url'=>array('admin')),
);
?>

<h1>Areatrabajos</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
