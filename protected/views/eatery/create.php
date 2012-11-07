<?php
/* @var $this EateryController */
/* @var $model Eatery */

$this->breadcrumbs=array(
	'Eateries'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Eatery', 'url'=>array('index')),
	array('label'=>'Manage Eatery', 'url'=>array('admin')),
);
?>

<h1>Create Eatery</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>