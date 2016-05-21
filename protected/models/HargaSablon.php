<?php

/**
 * This is the model class for table "harga_sablon".
 *
 * The followings are the available columns in table 'harga_sablon':
 * @property integer $id
 * @property string $nama
 * @property double $ongkos
 * @property double $cat
 * @property double $listrik
 * @property double $makan
 * @property double $press
 * @property double $dll
 * @property string $c_at
 * @property string $c_by
 * @property string $u_at
 * @property string $u_by
 * @property string $status
 */
class HargaSablon extends ParentModels
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'harga_sablon';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
                        array('nama,ongkos, cat, listrik, makan, press, dll', 'required'),
			array('ongkos, cat, listrik, makan, press, dll', 'numerical'),
			array('nama, c_by, u_by, status', 'length', 'max'=>255),
			array('c_at, u_at', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, ongkos, cat, listrik, makan, press, dll, c_at, c_by, u_at, u_by, status', 'safe', 'on'=>'search'),
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
                        'nama' => 'Nama',
			'ongkos' => 'Ongkos',
			'cat' => 'Cat',
			'listrik' => 'Listrik',
			'makan' => 'Makan',
			'press' => 'Press',
			'dll' => 'Dll',
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
		$criteria->compare('ongkos',$this->ongkos);
		$criteria->compare('cat',$this->cat);
		$criteria->compare('listrik',$this->listrik);
		$criteria->compare('makan',$this->makan);
		$criteria->compare('press',$this->press);
		$criteria->compare('dll',$this->dll);
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
	 * @return HargaSablon the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
        
        public function sumField($id) {
            $sablon = $this->find("id = $id");
            
            $total = $sablon->ongkos + $sablon->cat + $sablon->listrik + $sablon->makan +
                    $sablon->press + $sablon->dll;
            return $total;
                    
        }
}