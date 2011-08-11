<?php

/**
 * This is the model class for table "purchase".
 *
 * The followings are the available columns in table 'purchase':
 * @property integer $purchase_id
 * @property integer $applicant_id
 * @property integer $proposer_id
 * @property string $create_on
 * @property integer $approver_id
 * @property string $section
 * @property string $category
 * @property string $model
 * @property string $unit_price
 * @property integer $quantity
 * @property string $total_prices
 * @property string $arrival_of_goods
 * @property string $supplier
 * @property string $project
 * @property integer $operator_id
 * @property integer $storage_id
 * @property string $payment_status
 * @property string $invoice_status
 * @property string $remarks
 */
class Purchase extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @return Purchase the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'purchase';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('applicant_id, proposer_id, approver_id, quantity, operator_id, storage_id', 'numerical', 'integerOnly'=>true),
			array('create_on, section, category, model, unit_price, total_prices, arrival_of_goods, supplier, project, payment_status, invoice_status, remarks', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('purchase_id, applicant_id, proposer_id, create_on, approver_id, section, category, model, unit_price, quantity, total_prices, arrival_of_goods, supplier, project, operator_id, storage_id, payment_status, invoice_status, remarks', 'safe', 'on'=>'search'),
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
			'purchase_id' => 'Purchase',
			'applicant_id' => 'Applicant',
			'proposer_id' => 'Proposer',
			'create_on' => 'Create On',
			'approver_id' => 'Approver',
			'section' => 'Section',
			'category' => 'Category',
			'model' => 'Model',
			'unit_price' => 'Unit Price',
			'quantity' => 'Quantity',
			'total_prices' => 'Total Prices',
			'arrival_of_goods' => 'Arrival Of Goods',
			'supplier' => 'Supplier',
			'project' => 'Project',
			'operator_id' => 'Operator',
			'storage_id' => 'Storage',
			'payment_status' => 'Payment Status',
			'invoice_status' => 'Invoice Status',
			'remarks' => 'Remarks',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 * @return CActiveDataProvider the data provider that can return the models based on the search/filter conditions.
	 */
	public function search()
	{
		// Warning: Please modify the following code to remove attributes that
		// should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('purchase_id',$this->purchase_id);
		$criteria->compare('applicant_id',$this->applicant_id);
		$criteria->compare('proposer_id',$this->proposer_id);
		$criteria->compare('create_on',$this->create_on,true);
		$criteria->compare('approver_id',$this->approver_id);
		$criteria->compare('section',$this->section,true);
		$criteria->compare('category',$this->category,true);
		$criteria->compare('model',$this->model,true);
		$criteria->compare('unit_price',$this->unit_price,true);
		$criteria->compare('quantity',$this->quantity);
		$criteria->compare('total_prices',$this->total_prices,true);
		$criteria->compare('arrival_of_goods',$this->arrival_of_goods,true);
		$criteria->compare('supplier',$this->supplier,true);
		$criteria->compare('project',$this->project,true);
		$criteria->compare('operator_id',$this->operator_id);
		$criteria->compare('storage_id',$this->storage_id);
		$criteria->compare('payment_status',$this->payment_status,true);
		$criteria->compare('invoice_status',$this->invoice_status,true);
		$criteria->compare('remarks',$this->remarks,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}