<?php
/* @var $this ProfileController */
/* @var $model Profile */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'profile-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'name'); ?>
		<?php echo $form->textField($model,'name',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'userID'); ?>
		<?php echo $form->textField($model,'userID'); ?>
		<?php echo $form->error($model,'userID'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'vegetarian'); ?>
		<?php echo $form->textField($model,'vegetarian'); ?>
		<?php echo $form->error($model,'vegetarian'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'vegan'); ?>
		<?php echo $form->textField($model,'vegan'); ?>
		<?php echo $form->error($model,'vegan'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'lactosefree'); ?>
		<?php echo $form->textField($model,'lactosefree'); ?>
		<?php echo $form->error($model,'lactosefree'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'glutenfree'); ?>
		<?php echo $form->textField($model,'glutenfree'); ?>
		<?php echo $form->error($model,'glutenfree'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->