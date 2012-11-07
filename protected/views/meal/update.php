<?php
/* @var $this MealController */
/* @var $model Meal */

$this->breadcrumbs=array(
	'Meals'=>array('index'),
	$model->name=>array('view','id'=>$model->mealID),
	'Update',
);

$this->menu=array(
	array('label'=>'List Meal', 'url'=>array('index')),
	array('label'=>'Create Meal', 'url'=>array('create')),
	array('label'=>'View Meal', 'url'=>array('view', 'id'=>$model->mealID)),
	array('label'=>'Manage Meal', 'url'=>array('admin')),
);
?>

<h1>Update Meal <?php echo $model->mealID; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>