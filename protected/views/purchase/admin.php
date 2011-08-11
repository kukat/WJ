<?php
$this->breadcrumbs=array(
	'Purchases'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List Purchase', 'url'=>array('index')),
	array('label'=>'Create Purchase', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('purchase-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Purchases</h1>

<p>
You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p>

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'purchase-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
                array(
                    'name'=>'applicant_id',
                    'value'=>'$data->applicant->title',
                    'filter' => CHtml::listData(Applicant::model()->findAll(), 'applicant_id', 'title'),
                ),
                array(
                    'name'=>'proposer_id',
                    'value'=>'$data->proposer->name',
                    'filter' => CHtml::listData(People::model()->findAll(), 'people_id', 'name'),
                ),
                'create_on',
                array(
                    'name'=>'approver_id',
                    'value'=>'$data->approver->name',
                    'filter' => CHtml::listData(People::model()->findAll(), 'people_id', 'name'),
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
                    'value'=>'$data->operator->name',
                    'filter' => CHtml::listData(People::model()->findAll(), 'people_id', 'name'),
                ),
                array(
                    'name'=>'storage_id',
                    'value'=>'$data->storage->name',
                    'filter' => CHtml::listData(People::model()->findAll(), 'people_id', 'name'),
                ),
		'payment_status',
		'invoice_status',
		'remarks',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
