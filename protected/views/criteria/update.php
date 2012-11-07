<?php
/* @var $this CriteriaController */
/* @var $model Criteria */

$this->breadcrumbs=array(
	'Criteria'=>array('index'),
	$model->criteriaID=>array('view','id'=>$model->criteriaID),
	'Update',
);

$this->menu=array(
	array('label'=>'List Criteria', 'url'=>array('index')),
	array('label'=>'Create Criteria', 'url'=>array('create')),
	array('label'=>'View Criteria', 'url'=>array('view', 'id'=>$model->criteriaID)),
	array('label'=>'Manage Criteria', 'url'=>array('admin')),
);
?>

<h1>Update Criteria <?php echo $model->criteriaID; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>