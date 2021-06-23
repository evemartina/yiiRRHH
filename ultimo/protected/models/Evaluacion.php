<?php

class Evaluacion extends CActiveRecord {

    public function tableName() {
        return 'evaluacion';
    }

    public function rules() {

        return array(
            array('idEvaluacion, nota, fecha, Empleado_idEmpleado', 'required'),
            array('idEvaluacion, nota, Empleado_idEmpleado', 'numerical', 'integerOnly' => true),
            array('idEvaluacion, nota, fecha, Empleado_idEmpleado', 'safe', 'on' => 'search'),
        );
    }

    public function relations() {

        return array(
            'empleadoIdEmpleado' => array(self::BELONGS_TO, 'Empleado', 'Empleado_idEmpleado'),
        );
    }

    public function attributeLabels() {
        return array(
            'idEvaluacion' => 'Id Evaluacion',
            'nota' => 'Nota',
            'fecha' => 'Fecha',
            'Empleado_idEmpleado' => 'Empleado Id Empleado',
        );
    }

    public function search() {

        $criteria = new CDbCriteria;

        $criteria->compare('idEvaluacion', $this->idEvaluacion);
        $criteria->compare('nota', $this->nota);
        $criteria->compare('fecha', $this->fecha, true);
        $criteria->compare('Empleado_idEmpleado', $this->Empleado_idEmpleado);

        return new CActiveDataProvider($this, array(
            'criteria' => $criteria,
        ));
    }

    public static function model($className = __CLASS__) {
        return parent::model($className);
    }

}
