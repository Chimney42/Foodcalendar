<?php
/* @var $this CriteriaController */
/* @var $model Criteria */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('criteriaID')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->criteriaID), array('view', 'id'=>$data->criteriaID)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('criterion')); ?>:</b>
	<?php echo CHtml::encode($data->criterion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('operator')); ?>:</b>
	<?php echo CHtml::encode($data->operator); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('value')); ?>:</b>
	<?php echo CHtml::encode($data->value); ?>
	<br />


</div>