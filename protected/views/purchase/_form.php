<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'purchase-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'applicant_id'); ?>
                <?php echo $form->dropDownList($model,'applicant_id', CHtml::listData(Applicant::model()->findAll(), 'applicant_id', 'title'), array('empty'=>'Select Applicant'));?>
		<?php echo $form->error($model,'applicant_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'proposer_id'); ?>
                <?php echo $form->dropDownList($model,'proposer_id', CHtml::listData(People::model()->findAll(), 'people_id', 'name'), array('empty'=>'Select Proposer'));?>
		<?php echo $form->error($model,'proposer_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'create_on'); ?>
                <?php $this->widget('zii.widgets.jui.CJuiDatePicker', array(    
                        'attribute'=>'create_on',
                        'model'=>$model, 
                        'options'=>array(
                           'showAnim'=>'clip',
                           'dateFormat'=>'yy-mm-dd',
                         ),
                        'htmlOptions'=>array(
                           'class'=>'inputBox',
                         ),
                ));?>
		<?php echo $form->error($model,'create_on'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'approver_id'); ?>
                <?php echo $form->dropDownList($model,'approver_id', CHtml::listData(People::model()->findAll(), 'people_id', 'name'), array('empty'=>'Select Approver'));?>
		<?php echo $form->error($model,'approver_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'section'); ?>
		<?php echo $form->textArea($model,'section',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'section'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'category'); ?>
		<?php echo $form->textArea($model,'category',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'category'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'model'); ?>
		<?php echo $form->textArea($model,'model',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'model'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'unit_price'); ?>
		<?php echo $form->textField($model,'unit_price'); ?>
		<?php echo $form->error($model,'unit_price'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'quantity'); ?>
		<?php echo $form->textField($model,'quantity'); ?>
		<?php echo $form->error($model,'quantity'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'total_prices'); ?>
		<?php echo $form->textField($model,'total_prices'); ?>
		<?php echo $form->error($model,'total_prices'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'arrival_of_goods'); ?>
                <?php $this->widget('zii.widgets.jui.CJuiDatePicker', array(    
                        'attribute'=>'arrival_of_goods',
                        'model'=>$model, 
                        'options'=>array(
                           'showAnim'=>'clip',
                           'dateFormat'=>'yy-mm-dd',
                         ),
                        'htmlOptions'=>array(
                           'class'=>'inputBox',
                         ),
                ));?>
		<?php echo $form->error($model,'arrival_of_goods'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'supplier'); ?>
		<?php echo $form->textArea($model,'supplier',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'supplier'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'project'); ?>
		<?php echo $form->textArea($model,'project',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'project'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'operator_id'); ?>
                <?php echo $form->dropDownList($model,'operator_id', CHtml::listData(People::model()->findAll(), 'people_id', 'name'), array('empty'=>'Select Operator'));?>
		<?php echo $form->error($model,'operator_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'storage_id'); ?>
                <?php echo $form->dropDownList($model,'storage_id', CHtml::listData(People::model()->findAll(), 'people_id', 'name'), array('empty'=>'Select Storage'));?>
		<?php echo $form->error($model,'storage_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'payment_status'); ?>
		<?php echo $form->textArea($model,'payment_status',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'payment_status'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'invoice_status'); ?>
		<?php echo $form->textArea($model,'invoice_status',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'invoice_status'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'remarks'); ?>
		<?php echo $form->textArea($model,'remarks',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'remarks'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->