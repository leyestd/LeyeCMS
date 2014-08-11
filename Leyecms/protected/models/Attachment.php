<?php

/**
 * This is the model class for table "tbl_attachment".
 *
 * The followings are the available columns in table 'tbl_attachment':
 * @property integer $id
 * @property string $name
 * @property string $path
 * @property string $type
 * @property string $url
 * @property string $describe
 */
class Attachment extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
        public $file;
    
	public function tableName()
	{
		return 'tbl_attachment';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('name', 'required'),
			array('name ,describe', 'length', 'max'=>255),
			array('file', 'file', 'types'=>'jpg, gif, png','allowEmpty'=>TRUE),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, name, path, type, url, describe', 'safe', 'on'=>'search'),
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
			'name' => 'Name',
			'path' => 'Path',
			'type' => 'Type',
			'url' => 'Url',
			'describe' => 'Describe',
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
		$criteria->compare('path',$this->path,true);
		$criteria->compare('type',$this->type,true);
		$criteria->compare('url',$this->url,true);
		$criteria->compare('describe',$this->describe,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

        protected function afterValidate() 
        {   
            parent::afterValidate();
            $file=CUploadedFile::getInstance($this,'file');
            
            if (!$this->hasErrors() && is_object($file)) {
                $this->path='/upload/attachment/'.time().rand(1000,9999).'.'.$file->extensionName;
                $this->type=  strtolower($file->extensionName);
                $this->url=Yii::app()->request->baseUrl.$this->path;
            }
        }
	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Attachment the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
