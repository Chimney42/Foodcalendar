<?php

/**
 * This is the model class for table "Criteria".
 *
 * The followings are the available columns in table 'Criteria':
 * @property integer $criteriaID
 * @property string $name
 * @property string $criterion
 * @property string $operator
 * @property string $value
 */
class Criteria extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Criteria the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
	
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'Criteria';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('criteriaID', 'required'),
			array('criteriaID', 'numerical', 'integerOnly'=>true),
			array('criterion', 'length', 'max'=>14),
			array('operator', 'length', 'max'=>2),
			array('value, name', 'length', 'max'=>45),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('criteriaID, name, criterion, operator, value', 'safe', 'on'=>'search'),
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
			'criteriaID' => 'Criteria',
                        'name' => 'Name',
			'criterion' => 'Criterion',
			'operator' => 'Operator',
			'value' => 'Value',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 * @return CActiveDataProvider the data provider that can return the models based on the search/filter conditions.
	 */
	public function search()
	{
		// Warning: Please modify the following code to remove attributes that
		// should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('criteriaID',$this->criteriaID);
                $criteria->compare('name', $this->name,true);
		$criteria->compare('criterion',$this->criterion,true);
		$criteria->compare('operator',$this->operator,true);
		$criteria->compare('value',$this->value,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}