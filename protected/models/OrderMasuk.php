<?php

/**
 * This is the model class for table "order_masuk".
 *
 * The followings are the available columns in table 'order_masuk':
 * @property integer $id
 * @property string $tanggal_order
 * @property string $nama
 * @property integer $id_barang
 * @property integer $qty
 * @property double $harga_bahan
 * @property integer $id_sablon
 * @property integer $id_jahit
 * @property double $total_sablon
 * @property double $total_jahit
 * @property double $total_all
 */
class OrderMasuk extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'order_masuk';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id_barang, qty, id_sablon, id_jahit', 'numerical', 'integerOnly'=>true),
			array('harga_bahan, total_sablon, total_jahit, total_all', 'numerical'),
			array('nama', 'length', 'max'=>255),
			array('tanggal_order', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, tanggal_order, nama, id_barang, qty, harga_bahan, id_sablon, id_jahit, total_sablon, total_jahit, total_all', 'safe', 'on'=>'search'),
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
			'nama' => 'Nama',
			'id_barang' => 'Id Barang',
			'qty' => 'Qty',
			'harga_bahan' => 'Harga Bahan',
			'id_sablon' => 'Id Sablon',
			'id_jahit' => 'Id Jahit',
			'total_sablon' => 'Total Sablon',
			'total_jahit' => 'Total Jahit',
			'total_all' => 'Total All',
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
		$criteria->compare('nama',$this->nama,true);
		$criteria->compare('id_barang',$this->id_barang);
		$criteria->compare('qty',$this->qty);
		$criteria->compare('harga_bahan',$this->harga_bahan);
		$criteria->compare('id_sablon',$this->id_sablon);
		$criteria->compare('id_jahit',$this->id_jahit);
		$criteria->compare('total_sablon',$this->total_sablon);
		$criteria->compare('total_jahit',$this->total_jahit);
		$criteria->compare('total_all',$this->total_all);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return OrderMasuk the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
