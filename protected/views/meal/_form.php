<?php
/* @var $this MealController */
/* @var $model Meal */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'meal-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'name'); ?>
		<?php echo $form->textField($model,'name',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'cost'); ?>
		<?php echo $form->textField($model,'cost'); ?>
		<?php echo $form->error($model,'cost'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'rating'); ?>
		<?php echo $form->dropDownList($model,'rating', array(0 => 0, 1 => 1, 2 => 2, 3 => 3, 4 => 4, 5 => 5)); ?>
		<?php echo $form->error($model,'rating'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'eateryID'); ?>
		<?php echo $form->dropDownList($model, 'eateryID', CHtml::listData(Eatery::model()->findAll(), 'eateryID', 'name')) ?>
		<?php echo $form->error($model,'eateryID'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($dishModel, 'dishID'); ?>
                <?php echo $form->dropDownList($dishModel, 'name', CHtml::listData(Dish::model()->findAll(), 'dishID', 'name')); ?>
                <?php echo $form->error($dishModel, 'name'); ?>
                <input type="button" value="add" onclick="fu(tmp)">
	</div>

	<div class="row">
                <?php echo $form->hiddenField($model,'createdBy',array('value'=>Yii::app()->user->id)); ?>
		<?php echo $form->hiddenField($model,'lastEditedBy',array('value'=>Yii::app()->user->id)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

        <script type="text/javascript">
            
            
        
            
        var tmp = 'Dish_name';
        
        function fu(id) {
            tmp = cloneAndAppendElement(id)
        }    
        function cloneAndAppendElement(id) {
            var node = document.getElementById(id);
            var clone = node.cloneNode(true);
            var cloneName = clone.attributes['name'].value
            var parts = cloneName.match(/([A-Za-z]*)\[([a-zA-Z]*)([0-9]*)\]/)
            var count = (parts[3] === "" ? 1 : (parseInt(parts[3]) + 1))
            var name = parts[1] + "[" + parts[2] + count + "]"
            var id   = parts[1] + "_" + parts[2] + count
            clone.setAttribute('name', name)
            clone.setAttribute('id', id)
            var newDiv = document.createElement("div");
            newDiv.setAttribute('class', 'row')
            newDiv.appendChild(clone)
            node.parentNode.parentNode.insertBefore(newDiv, node.parentNode.nextSibling)
            return id;
        }
        </script>
<?php $this->endWidget(); ?>

</div><!-- form -->