<?php

/**
 * This is the model class for table "User".
 *
 * The followings are the available columns in table 'User':
 * @property integer $userID
 * @property string $name
 * @property string $password
 * @property string $salt
 * @property int $access
 */
class User extends CActiveRecord {

    const LEVEL_REGISTERED = 0, LEVEL_AUTHOR = 1, LEVEL_ADMIN = 6, LEVEL_SUPERADMIN = 99;

    /**
     * Returns the static model of the specified AR class.
     * @param string $className active record class name.
     * @return User the static model class
     */
    static function getAccessLevelList($level = null) {
        $levelList = array(
            self::LEVEL_REGISTERED => 'Registered',
            self::LEVEL_AUTHOR => 'Author',
            self::LEVEL_ADMIN => 'Administrator'
        );
        if ($level === null)
            return $levelList;
        return $levelList[$level];
    }

    public static function model($className = __CLASS__) {
        return parent::model($className);
    }

    /**
     * @return string the associated database table name
     */
    public function tableName() {
        return 'User';
    }

    /**
     * @return array validation rules for model attributes.
     */
    public function rules() {
        // NOTE: you should only define rules for those attributes that
        // will receive user inputs.
        return array(
            array('name, password', 'length', 'max' => 45),
            // The following rule is used by search().
            // Please remove those attributes that should not be searched.
            array('userID, name, password, salt, access', 'safe', 'on' => 'search'),
        );
    }

    /**
     * @return array relational rules.
     */
    public function relations() {
        // NOTE: you may need to adjust the relation name and the related
        // class name for the relations automatically generated below.
        return array(
        );
    }

    /**
     * @return array customized attribute labels (name=>label)
     */
    public function attributeLabels() {
        return array(
            'userID' => 'User',
            'name' => 'Name',
            'password' => 'Password',
            'access' => 'Role'
        );
    }

    /**
     * Retrieves a list of models based on the current search/filter conditions.
     * @return CActiveDataProvider the data provider that can return the models based on the search/filter conditions.
     */
    public function search() {
        // Warning: Please modify the following code to remove attributes that
        // should not be searched.

        $criteria = new CDbCriteria;

        $criteria->compare('userID', $this->userID);
        $criteria->compare('name', $this->name, true);
        $criteria->compare('password', $this->password, true);
        $criteria->compare('salt', $this->salt, true);
        $criteria->compare('access', $this->access, true);

        return new CActiveDataProvider($this, array(
                    'criteria' => $criteria,
                ));
    }

}