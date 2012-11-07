<?php
/* @var $this EateryController */
/* @var $model Eatery */

$this->breadcrumbs=array(
	'Eateries'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'List Eatery', 'url'=>array('index')),
	array('label'=>'Create Eatery', 'url'=>array('create')),
	array('label'=>'Update Eatery', 'url'=>array('update', 'id'=>$model->eateryID)),
	array('label'=>'Delete Eatery', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->eateryID),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Eatery', 'url'=>array('admin')),
);
?>

<h1>View Eatery #<?php echo $model->eateryID; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'eateryID',
		'name',
		'description',
	),
)); ?>
