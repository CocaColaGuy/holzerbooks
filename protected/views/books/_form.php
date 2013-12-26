<?php
/* @var $this BooksController */
/* @var $model Books */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'books-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'book_name'); ?>
		<?php echo $form->textArea($model,'book_name',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'book_name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'book_author'); ?>
		<?php echo $form->textArea($model,'book_author',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'book_author'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'stock'); ?>
		<?php echo $form->textField($model,'stock'); ?>
		<?php echo $form->error($model,'stock'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'price'); ?>
		<?php echo $form->textField($model,'price'); ?>
		<?php echo $form->error($model,'price'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'langague'); ?>
		<?php echo $form->textArea($model,'langague',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'langague'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'publisher'); ?>
		<?php echo $form->textArea($model,'publisher',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'publisher'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'publish_year'); ?>
		<?php echo $form->textArea($model,'publish_year',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'publish_year'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'book_description'); ?>
		<?php echo $form->textArea($model,'book_description',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'book_description'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->