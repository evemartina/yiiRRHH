<?php
/* @var $this PermisoController */
/* @var $model Permiso */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'permiso-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>


	<div class="row">
		<?php echo $form->labelEx($model,'inicio Permiso'); ?>
		 <?php
             if ($model->inicioPermiso != '') {
                  $model->inicioPermiso = date('y-m-d', strtotime($model->inicioPermiso));
            }
            $this->widget('zii.widgets.jui.CJuiDatePicker', array(
            'model' => $model,
            'attribute' => 'inicioPermiso',
            'value' => $model->inicioPermiso,
            'language' => 'es',
            'htmlOptions' => array('readonly' => "readonly"),
            'options' => array(
                'autoSize' => true,
                'defaultDate' => $model->inicioPermiso,
                'dateFormat' => 'y-m-d',
                'buttonImage' => Yii::app()->baseUrl . '/images/calendar.png',
                'buttonImageOnly' => true,
                'buttonText' => 'inicioPermiso',
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
		<?php echo $form->error($model,'inicioPermiso'); ?>
	</div>
	<div class="row">
		<?php echo $form->labelEx($model,'termino permiso'); ?>
		 <?php
             if ($model->terminoPermiso != '') {
                  $model->terminoPermiso = date('y-m-d', strtotime($model->terminoPermiso));
            }
            $this->widget('zii.widgets.jui.CJuiDatePicker', array(
            'model' => $model,
            'attribute' => 'terminoPermiso',
            'value' => $model->terminoPermiso,
            'language' => 'es',
            'htmlOptions' => array('readonly' => "readonly"),
            'options' => array(
                'autoSize' => true,
                'defaultDate' => $model->terminoPermiso,
                'dateFormat' => 'y-m-d',
                'buttonImage' => Yii::app()->baseUrl . '/images/calendar.png',
                'buttonImageOnly' => true,
                'buttonText' => 'terminoPermiso',
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
		<?php echo $form->error($model,'terminoPermiso'); ?>
	</div>
	

	<div class="row">
		<?php echo $form->labelEx($model,'descripcion'); ?>
		<?php echo $form->textArea($model,'descripcion',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'descripcion'); ?>
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
		<?php echo $form->error($model,'terminoPermiso'); ?>
	</div>
		

	<div class="row">
		<?php echo $form->labelEx($model,'fechaResolucion'); ?>
            
		<?php $this->widget('zii.widgets.jui.CJuiDatePicker', array(
            'model' => $model,
            'attribute' => 'fechaResolucion',
            'value' => $model->fechaResolucion,
            'language' => 'es',
            'htmlOptions' => array('readonly' => "readonly"),
            'options' => array(
                'autoSize' => true,
                'defaultDate' => $model->fechaResolucion,
                'dateFormat' => 'y-m-d',
                'buttonImage' => Yii::app()->baseUrl . '/images/calendar.png',
                'buttonImageOnly' => true,
                'buttonText' => 'fechaResolucion',
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
		<?php echo $form->error($model,'fechaResolucion'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'estadoPermiso'); ?>
		<?php echo $form->textField($model,'estadoPermiso',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'estadoPermiso'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Empleado_idEmpleado'); ?>
		<?php echo $form->textField($model,'Empleado_idEmpleado'); ?>
		<?php echo $form->error($model,'Empleado_idEmpleado'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'TipoPermisos_idTipoPermisos'); ?>
		<?php echo $form->textField($model,'TipoPermisos_idTipoPermisos'); ?>
		<?php echo $form->error($model,'TipoPermisos_idTipoPermisos'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->