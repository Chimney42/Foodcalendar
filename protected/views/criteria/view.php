<?php
/* @var $this CriteriaController */
/* @var $model Criteria */

$this->breadcrumbs=array(
	'Criteria'=>array('index'),
	$model->criteriaID,
);

$this->menu=array(
	array('label'=>'List Criteria', 'url'=>array('index')),
	array('label'=>'Create Criteria', 'url'=>array('create')),
	array('label'=>'Update Criteria', 'url'=>array('update', 'id'=>$model->criteriaID)),
	array('label'=>'Delete Criteria', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->criteriaID),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Criteria', 'url'=>array('admin')),
);
?>

<h1>View Criteria #<?php echo $model->criteriaID; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'criteriaID',
		'criterion',
		'operator',
		'value',
	),
)); ?>
