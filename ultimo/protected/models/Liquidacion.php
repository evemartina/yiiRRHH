<?php

/**
 * This is the model class for table "liquidacion".
 *
 * The followings are the available columns in table 'liquidacion':
 * @property string $fechaLiquidacion
 * @property integer $sueldoBase
 * @property string $horasTrabajadas
 * @property integer $diasTrabajados
 * @property integer $antesImp
 * @property double $seguroCesantia
 * @property integer $despuesImp
 * @property integer $liquido
 * @property integer $aPagar
 * @property string $estadoLiquidacion
 * @property integer $AFP_idAFP
 * @property integer $Salud_idSalud
 * @property integer $Empleado_idEmpleado
 *
 * The followings are the available model relations:
 * @property Anticipo[] $anticipos
 * @property Bono[] $bonos
 * @property Afp $aFPIdAFP
 * @property Empleado $empleadoIdEmpleado
 * @property Salud $saludIdSalud
 */
class Liquidacion extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'liquidacion';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('sueldoBase, estadoLiquidacion, AFP_idAFP, Salud_idSalud, Empleado_idEmpleado', 'required'),
			array('sueldoBase, diasTrabajados, antesImp, despuesImp, liquido, aPagar, AFP_idAFP, Salud_idSalud, Empleado_idEmpleado', 'numerical', 'integerOnly'=>true),
			array('seguroCesantia', 'numerical'),
			array('estadoLiquidacion', 'length', 'max'=>45),
			array('horasTrabajadas', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('fechaLiquidacion, sueldoBase, horasTrabajadas, diasTrabajados, antesImp, seguroCesantia, despuesImp, liquido, aPagar, estadoLiquidacion, AFP_idAFP, Salud_idSalud, Empleado_idEmpleado', 'safe', 'on'=>'search'),
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
			'anticipos' => array(self::HAS_MANY, 'Anticipo', 'Liquidacion_fechaLiquidacion'),
			'bonos' => array(self::MANY_MANY, 'Bono', 'bonoliquidacion(Liquidacion_fechaLiquidacion, Bono_idBono)'),
			'aFPIdAFP' => array(self::BELONGS_TO, 'Afp', 'AFP_idAFP'),
			'empleadoIdEmpleado' => array(self::BELONGS_TO, 'Empleado', 'Empleado_idEmpleado'),
			'saludIdSalud' => array(self::BELONGS_TO, 'Salud', 'Salud_idSalud'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'fechaLiquidacion' => 'Fecha Liquidacion',
			'sueldoBase' => 'Sueldo Base',
			'horasTrabajadas' => 'Horas Trabajadas',
			'diasTrabajados' => 'Dias Trabajados',
			'antesImp' => 'Antes Imp',
			'seguroCesantia' => 'Seguro Cesantia',
			'despuesImp' => 'Despues Imp',
			'liquido' => 'Liquido',
			'aPagar' => 'A Pagar',
			'estadoLiquidacion' => 'Estado Liquidacion',
			'AFP_idAFP' => 'Afp Id Afp',
			'Salud_idSalud' => 'Salud Id Salud',
			'Empleado_idEmpleado' => 'Empleado Id Empleado',
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

		$criteria->compare('fechaLiquidacion',$this->fechaLiquidacion,true);
		$criteria->compare('sueldoBase',$this->sueldoBase);
		$criteria->compare('horasTrabajadas',$this->horasTrabajadas,true);
		$criteria->compare('diasTrabajados',$this->diasTrabajados);
		$criteria->compare('antesImp',$this->antesImp);
		$criteria->compare('seguroCesantia',$this->seguroCesantia);
		$criteria->compare('despuesImp',$this->despuesImp);
		$criteria->compare('liquido',$this->liquido);
		$criteria->compare('aPagar',$this->aPagar);
		$criteria->compare('estadoLiquidacion',$this->estadoLiquidacion,true);
		$criteria->compare('AFP_idAFP',$this->AFP_idAFP);
		$criteria->compare('Salud_idSalud',$this->Salud_idSalud);
		$criteria->compare('Empleado_idEmpleado',$this->Empleado_idEmpleado);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Liquidacion the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
