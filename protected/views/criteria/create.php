<?php
/* @var $this CriteriaController */
/* @var $model Criteria */

$this->breadcrumbs=array(
	'Criteria'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Criteria', 'url'=>array('index')),
	array('label'=>'Manage Criteria', 'url'=>array('admin')),
);
?>

<h1>Create Criteria</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>