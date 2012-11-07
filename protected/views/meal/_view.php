<?php
/* @var $this MealController */
/* @var $model Meal */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('mealID')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->mealID), array('view', 'id'=>$data->mealID)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('name')); ?>:</b>
	<?php echo CHtml::encode($data->name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cost')); ?>:</b>
	<?php echo CHtml::encode($data->cost); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('rating')); ?>:</b>
	<?php echo CHtml::encode($data->rating); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('eateryID')); ?>:</b>
	<?php echo CHtml::encode($data->eatery_relation->name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('createdBy')); ?>:</b>
	<?php echo CHtml::encode($data->created_relation->name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('lastEditedBy')); ?>:</b>
	<?php echo CHtml::encode($data->edited_relation->name); ?>
	<br />


</div>