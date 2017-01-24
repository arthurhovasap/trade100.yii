<?php

/**
 * This is the model class for table "tbl_subscrib".
 *
 * The followings are the available columns in table 'tbl_subscrib':
 * @property integer $id
 * @property string $ip
 * @property integer $created_dt
 * @property integer $updated_dt
 * @property string $email
 * @property integer $status_id
 *
 * The followings are the available model relations:
 * @property TblStatus $status
 */
class Subscribe extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'tbl_subscribe';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('email', 'required'),
			array('created_dt, updated_dt, status_id', 'numerical', 'integerOnly'=>true),
			array('ip', 'length', 'max'=>50),
			array('email', 'length', 'max'=>100),
                        array('email', 'unique'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, ip, created_dt, updated_dt, email, status_id', 'safe', 'on'=>'search'),
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
			'status' => array(self::BELONGS_TO, 'Status', 'status_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'ip' => 'Ip',
			'created_dt' => 'Создан',
			'updated_dt' => 'Обновлен',
			'email' => 'Эл. почта',
			'status_id' => 'Статус',
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
		$criteria->compare('ip',$this->ip,true);
		$criteria->compare('created_dt',$this->created_dt);
		$criteria->compare('updated_dt',$this->updated_dt);
		$criteria->compare('email',$this->email,true);
		$criteria->compare('status_id',$this->status_id);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Subscrib the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
        
        public function subscribeStatuses(){
            $criteria = new CDbCriteria();
            $criteria->select = "t.id, t.name";
            return Status::model()->findAll($criteria);
        }
        
        public function beforeSave() {
            
            if ($this->isNewRecord) {
                $this->created_dt = app::secondsDT();
                $this->ip = app::ip();
            }else {
                $this->updated_dt = app::secondsDT();
            }

            return parent::beforeSave();
        }
}
