<?php
/* @var $this MealController */
/* @var $model Meal */

$this->breadcrumbs=array(
	'Meals'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'List Meal', 'url'=>array('index')),
	array('label'=>'Create Meal', 'url'=>array('create')),
	array('label'=>'Update Meal', 'url'=>array('update', 'id'=>$model->mealID)),
	array('label'=>'Delete Meal', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->mealID),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Meal', 'url'=>array('admin')),
);

?>

<h1>View Meal #<?php echo $model->mealID; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'mealID',
		'name',
		'cost',
		'rating',
		array('value' => $model->eatery_relation->name, 'label' => 'Eatery'),
		array('value' => $model->created_relation->name, 'label' => 'Created By'),
		array('value' => $model->edited_relation->name, 'label' => 'Last edited by')
	),
)); ?>
