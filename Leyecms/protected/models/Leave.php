<?php

/**
 * This is the model class for table "tbl_leave".
 *
 * The followings are the available columns in table 'tbl_leave':
 * @property integer $id
 * @property string $name
 * @property string $content
 * @property string $tel
 * @property string $email
 * @property integer $validate
 * @property string $comment
 * @property string $createtime
 */
class Leave extends CActiveRecord
{
        const REJECT=2;
        const AGREE=1;
        const WAIT=0;
        
        
        public function getTypeOptions() {
            return array(
              self::REJECT=>'拒绝',
              self::AGREE=>'同意',
              self::WAIT=>'未审核'
            );
        }
        
        public function getText() {
            $type=$this->getTypeOptions();
            return $type[$this->validate];
        }
        
        /**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'tbl_leave';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('name, content', 'required'),
			array('name', 'length', 'max'=>50),
			array('tel', 'length', 'max'=>45),
			array('email', 'length', 'max'=>200),
                        array('email', 'email'),
                        //array('comment,validate','safe','on'=>array('create','update')),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, name, content, tel, email, validate, comment, createtime', 'safe', 'on'=>'search'),
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
			'name' => '用户',
			'content' => '内容',
			'tel' => '电话',
			'email' => '邮箱',
			'validate' => 'Validate',
			'comment' => 'Comment',
			'createtime' => 'Createtime',
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
		$criteria->compare('name',$this->name,true);
		$criteria->compare('content',$this->content,true);
		$criteria->compare('tel',$this->tel,true);
		$criteria->compare('email',$this->email,true);
		$criteria->compare('validate',$this->validate);
		$criteria->compare('comment',$this->comment,true);
		$criteria->compare('createtime',$this->createtime,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Leave the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
