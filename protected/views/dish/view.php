<?php
/* @var $this DishController */
/* @var $model Dish */

$this->breadcrumbs=array(
	'Dishes'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'List Dish', 'url'=>array('index')),
	array('label'=>'Create Dish', 'url'=>array('create')),
	array('label'=>'Update Dish', 'url'=>array('update', 'id'=>$model->dishID)),
	array('label'=>'Delete Dish', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->dishID),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Dish', 'url'=>array('admin')),
);
?>

<h1>View Dish #<?php echo $model->dishID; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'dishID',
		'name',
                array(
                    'name' => 'vegetarian',
                    'type'=> 'boolean',
                ),
                array(
                    'name' => 'vegan',
                    'type'=> 'boolean',
                ),
                array(
                    'name' => 'lactosefree',
                    'type'=> 'boolean',
                ),
		array(
                    'name' => 'glutenfree',
                    'type'=> 'boolean',
                ),
	),
)); ?>
