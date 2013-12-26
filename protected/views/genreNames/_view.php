<?php
/* @var $this GenreNamesController */
/* @var $data GenreNames */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('heb_name')); ?>:</b>
	<?php echo CHtml::encode($data->heb_name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('en_name')); ?>:</b>
	<?php echo CHtml::encode($data->en_name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('heb_des')); ?>:</b>
	<?php echo CHtml::encode($data->heb_des); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('en_des')); ?>:</b>
	<?php echo CHtml::encode($data->en_des); ?>
	<br />


</div>