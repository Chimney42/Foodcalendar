<?php
/* @var $this DishController */
/* @var $model Dish */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'dishID'); ?>
		<?php echo $form->textField($model,'dishID'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'name'); ?>
		<?php echo $form->textField($model,'name',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'vegetarian'); ?>
		<?php echo $form->textField($model,'vegetarian'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'vegan'); ?>
		<?php echo $form->textField($model,'vegan'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'lactosefree'); ?>
		<?php echo $form->textField($model,'lactosefree'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'glutenfree'); ?>
		<?php echo $form->textField($model,'glutenfree'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->