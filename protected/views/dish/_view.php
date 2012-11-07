<?php
/* @var $this DishController */
/* @var $model Dish */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('dishID')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->dishID), array('view', 'id'=>$data->dishID)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('name')); ?>:</b>
	<?php echo CHtml::encode($data->name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('vegetarian')); ?>:</b>
	<?php echo CHtml::encode(((int)$data->vegetarian) === 1 ? 'Yes' : 'No'); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('vegan')); ?>:</b>
	<?php echo CHtml::encode(((int)$data->vegan) === 1 ? 'Yes' : 'No'); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('lactosefree')); ?>:</b>
	<?php echo CHtml::encode(((int)$data->lactosefree) === 1 ? 'Yes' : 'No'); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('glutenfree')); ?>:</b>
	<?php echo CHtml::encode(((int)$data->glutenfree) === 1 ? 'Yes' : 'No'); ?>
	<br />


</div>