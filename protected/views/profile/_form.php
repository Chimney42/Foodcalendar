<?php
/* @var $this ProfileController */
/* @var $model Profile */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'profile-form',
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
                <?php echo $form->hiddenField($model,'userID',array('value'=>Yii::app()->user->id)); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'vegetarian'); ?>
		<?php echo $form->checkBox($model,'vegetarian'); ?>
		<?php echo $form->error($model,'vegetarian'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'vegan'); ?>
		<?php echo $form->checkBox($model,'vegan'); ?>
		<?php echo $form->error($model,'vegan'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'lactosefree'); ?>
		<?php echo $form->checkBox($model,'lactosefree'); ?>
		<?php echo $form->error($model,'lactosefree'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'glutenfree'); ?>
		<?php echo $form->checkBox($model,'glutenfree'); ?>
		<?php echo $form->error($model,'glutenfree'); ?>
	</div>
        
        	<div class="row">
		<?php echo $form->labelEx($criteriaModel, 'criteriaID'); ?>
                <?php echo $form->dropDownList($criteriaModel, 'name', CHtml::listData(Criteria::model()->findAll(), 'criteriaID', 'name')); ?>
                <?php echo $form->error($criteriaModel, 'name'); ?>
                <input type="button" value="add" onclick="fu(tmp)">
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>
        
        <script type="text/javascript">

        var tmp = 'Criteria_name';
        
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