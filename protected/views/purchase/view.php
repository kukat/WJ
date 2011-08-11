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
		array(
                    'name'=>'applicant_id',
                    'value'=>$model->applicant->title,
                ),
                array(
                    'name'=>'proposer_id',
                    'value'=>$model->proposer->name,
                ),
                'create_on',
                array(
                    'name'=>'approver_id',
                    'value'=>$model->approver->name,
                ),
		'section',
		'category',
		'model',
		'unit_price',
		'quantity',
		'total_prices',
		'arrival_of_goods',
		'supplier',
		'project',
                array(
                    'name'=>'operator_id',
                    'value'=>$model->operator->name,
                ),
                array(
                    'name'=>'storage_id',
                    'value'=>$model->storage->name,
                ),
		'payment_status',
		'invoice_status',
		'remarks',
	),
)); ?>
