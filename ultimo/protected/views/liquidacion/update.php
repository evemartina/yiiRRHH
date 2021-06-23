<?php
/* @var $this LiquidacionController */
/* @var $model Liquidacion */

$this->breadcrumbs=array(
	'Liquidacions'=>array('index'),
	$model->fechaLiquidacion=>array('view','id'=>$model->fechaLiquidacion),
	'Update',
);

$this->menu=array(
	array('label'=>'List Liquidacion', 'url'=>array('index')),
	array('label'=>'Create Liquidacion', 'url'=>array('create')),
	array('label'=>'View Liquidacion', 'url'=>array('view', 'id'=>$model->fechaLiquidacion)),
	array('label'=>'Manage Liquidacion', 'url'=>array('admin')),
);
?>

<h1>Update Liquidacion <?php echo $model->fechaLiquidacion; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>