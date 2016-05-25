<?php

/**
 * This is the model class for table "detail_barang".
 *
 * The followings are the available columns in table 'detail_barang':
 * @property integer $id
 * @property integer $barcode
 * @property string $size
 * @property integer $stock_awal
 * @property integer $bm
 * @property integer $bk
 * @property integer $stock_akhir
 * @property integer $id_barang
 * @property string $c_at
 * @property string $c_by
 * @property string $u_at
 * @property string $u_by
 * @property string $status
 */
class DetailBarang extends ParentModels
{
	/**
	 * @return string the associated database table name
	 */
	public $updateType;
	
	public function tableName()
	{
		return 'detail_barang';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('barcode, stock_awal, bm, bk, stock_akhir, id_barang', 'numerical', 'integerOnly'=>true),
			array('size, c_by, u_by, status', 'length', 'max'=>255),
			array('c_at, u_at', 'safe'),
			array('id, updateType', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, barcode, size, stock_awal, bm, bk, stock_akhir, id_barang, c_at, c_by, u_at, u_by, status', 'safe', 'on'=>'search'),
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
		'barang' => array(self::BELONGS_TO, 'Barang', 'id_barang'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'barcode' => 'Barcode',
			'size' => 'Size',
			'stock_awal' => 'Stock Awal',
			'bm' => 'Bm',
			'bk' => 'Bk',
			'stock_akhir' => 'Stock Akhir',
			'id_barang' => 'Id Barang',
			'c_at' => 'C At',
			'c_by' => 'C By',
			'u_at' => 'U At',
			'u_by' => 'U By',
			'status' => 'Status',
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
		$criteria->compare('barcode',$this->barcode);
		$criteria->compare('size',$this->size,true);
		$criteria->compare('stock_awal',$this->stock_awal);
		$criteria->compare('bm',$this->bm);
		$criteria->compare('bk',$this->bk);
		$criteria->compare('stock_akhir',$this->stock_akhir);
		$criteria->compare('id_barang',$this->id_barang);
		$criteria->compare('c_at',$this->c_at,true);
		$criteria->compare('c_by',$this->c_by,true);
		$criteria->compare('u_at',$this->u_at,true);
		$criteria->compare('u_by',$this->u_by,true);
		$criteria->compare('status',$this->status,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return DetailBarang the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
