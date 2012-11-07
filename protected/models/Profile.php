<?php

/**
 * This is the model class for table "Profile".
 *
 * The followings are the available columns in table 'Profile':
 * @property integer $profileID
 * @property string $name
 * @property integer $userID
 * @property integer $vegetarian
 * @property integer $vegan
 * @property integer $lactosefree
 * @property integer $glutenfree
 */
class Profile extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Profile the static model class
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
		return 'Profile';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('userID, vegetarian, vegan, lactosefree, glutenfree', 'numerical', 'integerOnly'=>true),
			array('name', 'length', 'max'=>45),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('profileID, name, userID, vegetarian, vegan, lactosefree, glutenfree', 'safe', 'on'=>'search'),
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
			'profileID' => 'Profile',
			'name' => 'Name',
			'userID' => 'User',
			'vegetarian' => 'Vegetarian',
			'vegan' => 'Vegan',
			'lactosefree' => 'Lactosefree',
			'glutenfree' => 'Glutenfree',
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

		$criteria->compare('profileID',$this->profileID);
		$criteria->compare('name',$this->name,true);
		$criteria->compare('userID',$this->userID);
		$criteria->compare('vegetarian',$this->vegetarian);
		$criteria->compare('vegan',$this->vegan);
		$criteria->compare('lactosefree',$this->lactosefree);
		$criteria->compare('glutenfree',$this->glutenfree);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}