<?php
/* @var $this ProfileController */
/* @var $model Profile */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('profileID')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->profileID), array('view', 'id'=>$data->profileID)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('name')); ?>:</b>
	<?php echo CHtml::encode($data->name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('userID')); ?>:</b>
	<?php echo CHtml::encode($data->userID); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('vegetarian')); ?>:</b>
	<?php echo CHtml::encode($data->vegetarian); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('vegan')); ?>:</b>
	<?php echo CHtml::encode($data->vegan); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('lactosefree')); ?>:</b>
	<?php echo CHtml::encode($data->lactosefree); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('glutenfree')); ?>:</b>
	<?php echo CHtml::encode($data->glutenfree); ?>
	<br />


</div>