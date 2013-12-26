<?php

/**
 * This is the model class for table "books".
 *
 * The followings are the available columns in table 'books':
 * @property integer $id
 * @property string $book_name
 * @property string $book_author
 * @property integer $stock
 * @property integer $price
 * @property string $langague
 * @property string $publisher
 * @property string $publish_year
 * @property string $book_description
 *
 * The followings are the available model relations:
 * @property Genre $id0
 */
class Books extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'books';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('book_name, book_author, stock, price, langague, publisher, publish_year, book_description', 'required'),
			array('stock, price', 'numerical', 'integerOnly'=>true),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, book_name, book_author, stock, price, langague, publisher, publish_year, book_description', 'safe', 'on'=>'search'),
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
			'id0' => array(self::BELONGS_TO, 'Genre', 'id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'CONSTRAINT FOREIGN KEY (id) REFERENCES genre(book_id)',
			'book_name' => 'Book Name',
			'book_author' => 'Book Author',
			'stock' => 'Stock',
			'price' => 'Price',
			'langague' => 'Langague',
			'publisher' => 'Publisher',
			'publish_year' => 'Publish Year',
			'book_description' => 'Book Description',
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
		$criteria->compare('book_name',$this->book_name,true);
		$criteria->compare('book_author',$this->book_author,true);
		$criteria->compare('stock',$this->stock);
		$criteria->compare('price',$this->price);
		$criteria->compare('langague',$this->langague,true);
		$criteria->compare('publisher',$this->publisher,true);
		$criteria->compare('publish_year',$this->publish_year,true);
		$criteria->compare('book_description',$this->book_description,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Books the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
