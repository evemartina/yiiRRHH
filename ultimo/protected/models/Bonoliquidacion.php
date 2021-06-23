<?php

/**
 * This is the model class for table "bonoliquidacion".
 *
 * The followings are the available columns in table 'bonoliquidacion':
 * @property integer $Bono_idBono
 * @property string $Liquidacion_fechaLiquidacion
 * @property string $fechaAsignacion
 */
class Bonoliquidacion extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'bonoliquidacion';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('Liquidacion_fechaLiquidacion', 'required'),
			array('Bono_idBono', 'numerical', 'integerOnly'=>true),
			array('fechaAsignacion', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('Bono_idBono, Liquidacion_fechaLiquidacion, fechaAsignacion', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'Bono_idBono' => 'Bono Id Bono',
			'Liquidacion_fechaLiquidacion' => 'Liquidacion Fecha Liquidacion',
			'fechaAsignacion' => 'Fecha Asignacion',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 *
	 * Typical usecase:
	 * - Initialize the model fields with values from filter form.
	 * - Execute this method to get CActiveDataProvider instance which will filter
	 * models according to data in model fields.
	 * - Pass data provider to CGridView, CListView or any similar widget.
	 *
	 * @return CActiveDataProvider the data provider that can return the models
	 * based on the search/filter conditions.
	 */
	public function search()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('Bono_idBono',$this->Bono_idBono);
		$criteria->compare('Liquidacion_fechaLiquidacion',$this->Liquidacion_fechaLiquidacion,true);
		$criteria->compare('fechaAsignacion',$this->fechaAsignacion,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Bonoliquidacion the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
