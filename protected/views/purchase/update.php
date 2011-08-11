<?php
$this->breadcrumbs=array(
	'Purchases'=>array('index'),
	$model->purchase_id=>array('view','id'=>$model->purchase_id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Purchase', 'url'=>array('index')),
	array('label'=>'Create Purchase', 'url'=>array('create')),
	array('label'=>'View Purchase', 'url'=>array('view', 'id'=>$model->purchase_id)),
	array('label'=>'Manage Purchase', 'url'=>array('admin')),
);
?>

<h1>Update Purchase <?php echo $model->purchase_id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>