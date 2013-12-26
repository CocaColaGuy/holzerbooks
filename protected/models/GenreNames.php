<?php

/**
 * This is the model class for table "genre_names".
 *
 * The followings are the available columns in table 'genre_names':
 * @property integer $id
 * @property string $heb_name
 * @property string $en_name
 * @property string $heb_des
 * @property string $en_des
 *
 * The followings are the available model relations:
 * @property Genre[] $genres
 */
class GenreNames extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'genre_names';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('heb_name, en_name, heb_des, en_des', 'required'),
			array('heb_name, en_name, heb_des, en_des', 'length', 'max'=>200),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, heb_name, en_name, heb_des, en_des', 'safe', 'on'=>'search'),
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
			'genres' => array(self::HAS_MANY, 'Genre', 'genre'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'heb_name' => 'Heb Name',
			'en_name' => 'En Name',
			'heb_des' => 'Heb Des',
			'en_des' => 'En Des',
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

		$criteria->compare('id',$this->id);
		$criteria->compare('heb_name',$this->heb_name,true);
		$criteria->compare('en_name',$this->en_name,true);
		$criteria->compare('heb_des',$this->heb_des,true);
		$criteria->compare('en_des',$this->en_des,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return GenreNames the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
