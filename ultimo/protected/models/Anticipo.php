<?php


class Anticipo extends CActiveRecord
{
	
	public function tableName()
	{
		return 'anticipo';
	}

	
	public function rules()
	{
		
		return array(
			array('montoAnticipo, fechaSolicitud, estadoAnticipo', 'required'),
			array('montoAnticipo', 'numerical', 'integerOnly'=>true),
			array('estadoAnticipo', 'length', 'max'=>45),
			array('fechaResolucion', 'safe'),
			
			array('idAnticipo, montoAnticipo, fechaSolicitud, fechaResolucion, estadoAnticipo, Liquidacion_fechaLiquidacion', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		return array(
			'liquidacionFechaLiquidacion' => array(self::BELONGS_TO, 'Liquidacion', 'Liquidacion_fechaLiquidacion'),
		);
	}

	
	public function attributeLabels()
	{
		return array(
			'idAnticipo' => 'Id Anticipo',
			'montoAnticipo' => 'Monto Anticipo',
			'fechaSolicitud' => 'Fecha Solicitud',
			'fechaResolucion' => 'Fecha Resolucion',
			'estadoAnticipo' => 'Estado Anticipo',
			'Liquidacion_fechaLiquidacion' => 'Liquidacion Fecha Liquidacion',
		);
	}

	
	public function search()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('idAnticipo',$this->idAnticipo);
		$criteria->compare('montoAnticipo',$this->montoAnticipo);
		$criteria->compare('fechaSolicitud',$this->fechaSolicitud,true);
		$criteria->compare('fechaResolucion',$this->fechaResolucion,true);
		$criteria->compare('estadoAnticipo',$this->estadoAnticipo,true);
		$criteria->compare('Liquidacion_fechaLiquidacion',$this->Liquidacion_fechaLiquidacion,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
