<?php

/**
 * This is the model class for table "order_keluar".
 *
 * The followings are the available columns in table 'order_keluar':
 * @property integer $id
 * @property string $tanggal_order
 * @property integer $id_order_masuk
 * @property integer $qty_awal
 * @property integer $qty_akhir
 * @property string $c_at
 * @property string $u_at
 * @property integer $c_by
 * @property integer $u_by
 */
class OrderKeluar extends ParentModels
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'order_keluar';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id_order_masuk, qty_awal, qty_akhir, c_by, u_by', 'numerical', 'integerOnly'=>true),
			array('tanggal_order, c_at, u_at', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, tanggal_order, id_order_masuk, qty_awal, qty_akhir, c_at, u_at, c_by, u_by', 'safe', 'on'=>'search'),
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
			'id' => 'ID',
			'tanggal_order' => 'Tanggal Order',
			'id_order_masuk' => 'Id Order Masuk',
			'qty_awal' => 'Qty Awal',
			'qty_akhir' => 'Qty Akhir',
			'c_at' => 'C At',
			'u_at' => 'U At',
			'c_by' => 'C By',
			'u_by' => 'U By',
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
		$criteria->compare('tanggal_order',$this->tanggal_order,true);
		$criteria->compare('id_order_masuk',$this->id_order_masuk);
		$criteria->compare('qty_awal',$this->qty_awal);
		$criteria->compare('qty_akhir',$this->qty_akhir);
		$criteria->compare('c_at',$this->c_at,true);
		$criteria->compare('u_at',$this->u_at,true);
		$criteria->compare('c_by',$this->c_by);
		$criteria->compare('u_by',$this->u_by);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return OrderKeluar the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
