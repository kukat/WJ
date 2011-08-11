<?php
$this->breadcrumbs=array(
	'Purchases'=>array('index'),
	$model->purchase_id,
);

$this->menu=array(
	array('label'=>'List Purchase', 'url'=>array('index')),
	array('label'=>'Create Purchase', 'url'=>array('create')),
	array('label'=>'Update Purchase', 'url'=>array('update', 'id'=>$model->purchase_id)),
	array('label'=>'Delete Purchase', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->purchase_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Purchase', 'url'=>array('admin')),
);
?>

<h1>View Purchase #<?php echo $model->purchase_id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'purchase_id',
		'applicant_id',
		'proposer_id',
		'create_on',
		'approver_id',
		'section',
		'category',
		'model',
		'unit_price',
		'quantity',
		'total_prices',
		'arrival_of_goods',
		'supplier',
		'project',
		'operator_id',
		'storage_id',
		'payment_status',
		'invoice_status',
		'remarks',
	),
)); ?>
