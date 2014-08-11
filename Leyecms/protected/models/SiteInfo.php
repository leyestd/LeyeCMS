<?php

/**
 * This is the model class for table "tbl_site_info".
 *
 * The followings are the available columns in table 'tbl_site_info':
 * @property integer $id
 * @property string $sitename
 * @property string $website
 * @property string $adminemail
 * @property string $websiterecords
 * @property string $Copyright
 * @property string $Keyword
 * @property string $description
 * @property string $mobile
 * @property string $fax
 * @property string $programversion
 */
class SiteInfo extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'tbl_site_info';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('sitename, Copyright, Keyword, description', 'length', 'max'=>255),
			array('website, adminemail, websiterecords', 'length', 'max'=>100),
			array('mobile, fax, programversion', 'length', 'max'=>45),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, sitename, website, adminemail, websiterecords, Copyright, Keyword, description, mobile, fax, programversion', 'safe', 'on'=>'search'),
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
			'sitename' => 'Sitename',
			'website' => 'Website',
			'adminemail' => 'Adminemail',
			'websiterecords' => 'Websiterecords',
			'Copyright' => 'Copyright',
			'Keyword' => 'Keyword',
			'description' => 'Description',
			'mobile' => 'Mobile',
			'fax' => 'Fax',
			'programversion' => 'Programversion',
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
		$criteria->compare('sitename',$this->sitename,true);
		$criteria->compare('website',$this->website,true);
		$criteria->compare('adminemail',$this->adminemail,true);
		$criteria->compare('websiterecords',$this->websiterecords,true);
		$criteria->compare('Copyright',$this->Copyright,true);
		$criteria->compare('Keyword',$this->Keyword,true);
		$criteria->compare('description',$this->description,true);
		$criteria->compare('mobile',$this->mobile,true);
		$criteria->compare('fax',$this->fax,true);
		$criteria->compare('programversion',$this->programversion,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return SiteInfo the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
