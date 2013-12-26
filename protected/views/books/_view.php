<?php
/* @var $this BooksController */
/* @var $data Books */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('book_name')); ?>:</b>
	<?php echo CHtml::encode($data->book_name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('book_author')); ?>:</b>
	<?php echo CHtml::encode($data->book_author); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('stock')); ?>:</b>
	<?php echo CHtml::encode($data->stock); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('price')); ?>:</b>
	<?php echo CHtml::encode($data->price); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('langague')); ?>:</b>
	<?php echo CHtml::encode($data->langague); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('publisher')); ?>:</b>
	<?php echo CHtml::encode($data->publisher); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('publish_year')); ?>:</b>
	<?php echo CHtml::encode($data->publish_year); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('book_description')); ?>:</b>
	<?php echo CHtml::encode($data->book_description); ?>
	<br />

	*/ ?>

</div>