<?php

/**
 * This is the model class for table "tbl_user".
 *
 * The followings are the available columns in table 'tbl_user':
 * @property integer $id
 * @property string $firstname
 * @property string $lastname
 * @property integer $role_id
 * @property integer $company_id
 * @property integer $post_id
 * @property string $tel_home
 * @property string $tel_work
 * @property string $email_home
 * @property string $email_work
 * @property integer $status_id
 * @property integer $created_dt
 * @property integer $updated_dt
 * @property integer $by_user_id
 *
 * The followings are the available model relations:
 * @property User $byUser
 * @property User[] $tblUsers
 * @property TblCompany $company
 * @property TblPost $post
 * @property TblRole $role
 */
class User extends CActiveRecord
{
        /**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'tbl_user';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('firstname, lastname, role_id, company_id, post_id, tel_home, tel_work, email_home, email_work, status_id', 'required'),
			array('role_id, company_id, post_id, status_id, created_dt, updated_dt, by_user_id', 'numerical', 'integerOnly'=>true),
			array('firstname, lastname', 'length', 'max'=>50),
			array('tel_home, tel_work', 'length', 'max'=>20),
			array('email_home, email_work', 'length', 'max'=>100),
                        array('email_home, email_work', 'email'),
                        array('tel_work, tel_home', 'match',
                                'pattern' => Regex::$phone,
                                'message' => "Пример: +79261234567, 9261234567, 79261234567, +7 926 123 45 67, 54(926)123-45-67, 123-45-67, 9261234567, 79261234567, (495)1234567, (495) 123 45 67, +374-926-123-45-67, 374 927 1234 234, +374 927 12 12 888, 97 927 12 555 12, 51 927 123 8 123"
                        ),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, firstname, lastname, role_id, company_id, post_id, tel_home, tel_work, email_home, email_work, status_id, created_dt, updated_dt, by_user_id', 'safe', 'on'=>'search'),
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
			'by_user' => array(self::BELONGS_TO, 'User', 'by_user_id'),
			'by_user' => array(self::HAS_MANY, 'User', 'by_user_id'),
			'company' => array(self::BELONGS_TO, 'Company', 'company_id'),
			'post' => array(self::BELONGS_TO, 'Post', 'post_id'),
			'role' => array(self::BELONGS_TO, 'Role', 'role_id'),
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
			'firstname' => 'Имя',
			'lastname' => 'Фамилия',
			'role_id' => 'Роль',
			'company_id' => 'Компания',
			'post_id' => 'Пост',
			'tel_home' => 'Телефон дом.',
			'tel_work' => 'Телефон раб.',
			'email_home' => 'Эл. почта дом.',
			'email_work' => 'Эл. почта раб.',
			'status_id' => 'Статус',
			'created_dt' => 'Создан',
			'updated_dt' => 'Обновлен',
			'by_user_id' => 'Создал',
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
		$criteria->compare('firstname',$this->firstname,true);
		$criteria->compare('lastname',$this->lastname,true);
		$criteria->compare('role_id',$this->role_id);
		$criteria->compare('company_id',$this->company_id);
		$criteria->compare('post_id',$this->post_id);
		$criteria->compare('tel_home',$this->tel_home,true);
		$criteria->compare('tel_work',$this->tel_work,true);
		$criteria->compare('email_home',$this->email_home,true);
		$criteria->compare('email_work',$this->email_work,true);
		$criteria->compare('status_id',$this->status_id);
		$criteria->compare('created_dt',$this->created_dt);
		$criteria->compare('updated_dt',$this->updated_dt);
		$criteria->compare('by_user_id',$this->by_user_id);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return User the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
        
        public function userActiveRoles(){
            $criteria = new CDbCriteria();
            $criteria->select = "t.id, t.name";
            $criteria->join = "RIGHT JOIN ".Table::user()." u ON u.role_id = t.id";
            return Role::model()->findAll($criteria);
        }
        
        public function userActiveStatuses(){
            $criteria = new CDbCriteria();
            $criteria->select = "t.id, t.name";
            $criteria->join = "RIGHT JOIN ".Table::user()." u ON u.role_id = t.id";
            return Status::model()->findAll($criteria);
        }
        
        public function userActivePosts(){
            $criteria = new CDbCriteria();
            $criteria->select = "t.id, t.name";
            $criteria->join = "RIGHT JOIN ".Table::user()." u ON u.role_id = t.id";
            return Post::model()->findAll($criteria);
        }
        
        public function userActiveCompanies(){
            $criteria = new CDbCriteria();
            $criteria->select = "t.id, t.name";
            $criteria->join = "RIGHT JOIN ".Table::user()." u ON u.role_id = t.id";
            return Company::model()->findAll($criteria);
        }
        
        public function userRoles(){
            $criteria = new CDbCriteria();
            $criteria->select = "t.id, t.name";
            return Role::model()->findAll($criteria);
        }
        
        public function userStatuses(){
            $criteria = new CDbCriteria();
            $criteria->select = "t.id, t.name";
            return Status::model()->findAll($criteria);
        }
        
        public function userPosts(){
            $criteria = new CDbCriteria();
            $criteria->select = "t.id, t.name";
            return Post::model()->findAll($criteria);
        }
        
        public function userCompanies(){
            $criteria = new CDbCriteria();
            $criteria->select = "t.id, t.name";
            return Company::model()->findAll($criteria);
        }
        
        public function beforeSave() {
            
            if ($this->isNewRecord) {
                $this->created_dt = app::secondsDT();
            }else {
                $this->updated_dt = app::secondsDT();
            }

            return parent::beforeSave();
        }
}
