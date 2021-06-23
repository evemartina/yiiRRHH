<?php

class Areatrabajo extends CActiveRecord {

    public function tableName() {
        return 'areatrabajo';
    }

    public function rules() {

        return array(
            array(' nombre', 'required'),
            array('idAreaTrabajo', 'numerical', 'integerOnly' => true),
            array('nombre', 'length', 'max' => 45),
            array('idAreaTrabajo, nombre', 'safe', 'on' => 'search'),
        );
    }

    public function relations() {
        return array(
            'empleados' => array(self::HAS_MANY, 'Empleado', 'AreaTrabajo_idAreaTrabajo'),
        );
    }

    public function attributeLabels() {
        return array(
            'idAreaTrabajo' => 'Id Area Trabajo',
            'nombre' => 'Nombre',
        );
    }

    public function search() {
        $criteria = new CDbCriteria;
        $criteria->compare('idAreaTrabajo', $this->idAreaTrabajo);
        $criteria->compare('nombre', $this->nombre, true);
        return new CActiveDataProvider($this, array(
            'criteria' => $criteria,
        ));
    }

    public static function model($className = __CLASS__) {
        return parent::model($className);
    }

}
