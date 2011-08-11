<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('purchase_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->purchase_id), array('view', 'id'=>$data->purchase_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('applicant_id')); ?>:</b>
	<?php echo CHtml::encode($data->applicant_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('proposer_id')); ?>:</b>
	<?php echo CHtml::encode($data->proposer_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('create_on')); ?>:</b>
	<?php echo CHtml::encode($data->create_on); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('approver_id')); ?>:</b>
	<?php echo CHtml::encode($data->approver_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('section')); ?>:</b>
	<?php echo CHtml::encode($data->section); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('category')); ?>:</b>
	<?php echo CHtml::encode($data->category); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('model')); ?>:</b>
	<?php echo CHtml::encode($data->model); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('unit_price')); ?>:</b>
	<?php echo CHtml::encode($data->unit_price); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('quantity')); ?>:</b>
	<?php echo CHtml::encode($data->quantity); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('total_prices')); ?>:</b>
	<?php echo CHtml::encode($data->total_prices); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('arrival_of_goods')); ?>:</b>
	<?php echo CHtml::encode($data->arrival_of_goods); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('supplier')); ?>:</b>
	<?php echo CHtml::encode($data->supplier); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('project')); ?>:</b>
	<?php echo CHtml::encode($data->project); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('operator_id')); ?>:</b>
	<?php echo CHtml::encode($data->operator_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('storage_id')); ?>:</b>
	<?php echo CHtml::encode($data->storage_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('payment_status')); ?>:</b>
	<?php echo CHtml::encode($data->payment_status); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('invoice_status')); ?>:</b>
	<?php echo CHtml::encode($data->invoice_status); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('remarks')); ?>:</b>
	<?php echo CHtml::encode($data->remarks); ?>
	<br />

	*/ ?>

</div>