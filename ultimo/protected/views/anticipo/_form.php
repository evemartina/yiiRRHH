<?php
/* @var $this AnticipoController */
/* @var $model Anticipo */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'anticipo-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'montoAnticipo'); ?>
		<?php echo $form->textField($model,'montoAnticipo'); ?>
		<?php echo $form->error($model,'montoAnticipo'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'fechaSolicitud'); ?>
		 <?php
             if ($model->fechaSolicitud != '') {
                  $model->fechaSolicitud = date('y-m-d', strtotime($model->fechaSolicitud));
            }
            $this->widget('zii.widgets.jui.CJuiDatePicker', array(
            'model' => $model,
            'attribute' => 'fechaSolicitud',
            'value' => $model->fechaSolicitud,
            'language' => 'es',
            'htmlOptions' => array('readonly' => "readonly"),
            'options' => array(
                'autoSize' => true,
                'defaultDate' => $model->fechaSolicitud,
                'dateFormat' => 'y-m-d',
                'buttonImage' => Yii::app()->baseUrl . '/images/calendar.png',
                'buttonImageOnly' => true,
                'buttonText' => 'fechaSolicitud',
                'selectOtherMonths' => true,
                'showAnim' => 'slide',
                'showButtonPanel' => true,
                'showOn' => 'button',
                'showOtherMonths' => true,
                'changeMonth' => 'true',
                'changeYear' => 'true',
             ),
            ));
            ?> 
		<?php echo $form->error($model,'fechaSolicitud'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'fechaResolucion'); ?>
		 <?php echo $form->textField($model,'fechaResolucion',array('value'=>'0000-00-00')); ?>
            
		<?php echo $form->error($model,'fechaResolucion'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'estadoAnticipo'); ?>
		<?php echo $form->textField($model,'estadoAnticipo',array('size'=>45,'maxlength'=>45,'value'=>'Solicitud')); ?>
		<?php echo $form->error($model,'estadoAnticipo'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Liquidacion_fechaLiquidacion'); ?>
		<?php echo $form->textField($model,'Liquidacion_fechaLiquidacion'); ?>
		<?php echo $form->error($model,'Liquidacion_fechaLiquidacion'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->