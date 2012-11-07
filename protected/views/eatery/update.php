<?php
/* @var $this EateryController */
/* @var $model Eatery */

$this->breadcrumbs=array(
	'Eateries'=>array('index'),
	$model->name=>array('view','id'=>$model->eateryID),
	'Update',
);

$this->menu=array(
	array('label'=>'List Eatery', 'url'=>array('index')),
	array('label'=>'Create Eatery', 'url'=>array('create')),
	array('label'=>'View Eatery', 'url'=>array('view', 'id'=>$model->eateryID)),
	array('label'=>'Manage Eatery', 'url'=>array('admin')),
);
?>

<h1>Update Eatery <?php echo $model->eateryID; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>