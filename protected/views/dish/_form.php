<?php
/* @var $this DishController */
/* @var $model Dish */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'dish-form',
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
		<?php echo $form->labelEx($model,'vegetarian'); ?>
		<?php echo $form->checkBox($model,'vegetarian'); ?>
		<?php echo $form->error($model,'vegetarian'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'vegan'); ?>
		<?php echo $form->checkBox($model,'vegan'); ?>
		<?php echo $form->error($model,'vegan'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'lactosefree'); ?>
		<?php echo $form->checkBox($model,'lactosefree'); ?>
		<?php echo $form->error($model,'lactosefree'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'glutenfree'); ?>
		<?php echo $form->checkBox($model,'glutenfree'); ?>
		<?php echo $form->error($model,'glutenfree'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->