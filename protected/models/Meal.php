<?php

/**
 * This is the model class for table "Meal".
 *
 * The followings are the available columns in table 'Meal':
 * @property integer $mealID
 * @property string $name
 * @property double $cost
 * @property string $rating
 * @property integer $eateryID
 * @property integer $createdBy
 * @property integer $lastEditedBy
 */
class Meal extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Meal the static model class
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
		return 'Meal';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('eateryID, createdBy, lastEditedBy', 'numerical', 'integerOnly'=>true),
			array('cost', 'numerical', 'allowEmpty'=>false,
                            'message'=>'Cost must be a number with no more than two decimal places'),
			array('name', 'length', 'max'=>45),
			array('rating', 'length', 'max'=>1),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('mealID, name, cost, rating, eateryID, createdBy, lastEditedBy', 'safe', 'on'=>'search'),
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
                    'eatery_relation' => array(self::BELONGS_TO, 'Eatery', 'eateryID'),
                    'created_relation' => array(self::BELONGS_TO, 'User', 'createdBy'),
                    'edited_relation' => array(self::BELONGS_TO, 'User', 'lastEditedBy')
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'mealID' => 'Meal',
			'name' => 'Name',
			'cost' => 'Cost',
			'rating' => 'Rating',
			'eateryID' => 'Eatery',
			'createdBy' => 'Created By',
			'lastEditedBy' => 'Last Edited By',
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

		$criteria->compare('mealID',$this->mealID);
		$criteria->compare('name',$this->name,true);
		$criteria->compare('cost',$this->cost);
		$criteria->compare('rating',$this->rating,true);
		$criteria->compare('eateryID',$this->eateryID);
		$criteria->compare('createdBy',$this->createdBy);
		$criteria->compare('lastEditedBy',$this->lastEditedBy);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}