<?php
/* @var $this EateryController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Eateries',
);

$this->menu=array(
	array('label'=>'Create Eatery', 'url'=>array('create')),
	array('label'=>'Manage Eatery', 'url'=>array('admin')),
);
?>

<h1>Eateries</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
