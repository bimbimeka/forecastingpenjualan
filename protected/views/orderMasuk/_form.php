<?php
/* @var $this OrderMasukController */
/* @var $model OrderMasuk */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'order-masuk-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'nama'); ?>
		<?php echo $form->textField($model,'nama',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'nama'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'id_barang'); ?>
		<?php echo $form->dropDownList($model,'id_barang', 
                        CHtml::listData(Barang::model()->findAll(array(
                            'order' => 'artikel ASC')), 
                                'id', 
                                'artikel'), 
                        array('empty'=>'Pilih Barang')); ?>
		<?php echo $form->error($model,'id_barang'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'qty'); ?>
		<?php echo $form->textField($model,'qty'); ?>
		<?php echo $form->error($model,'qty'); ?>
	</div>
        
        <div class="row">
		<?php echo $form->labelEx($model,'harga'); ?>
		<?php echo $form->textField($model,'harga'); ?>
		<?php echo $form->error($model,'harga'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'harga_bahan'); ?>
		<?php echo $form->textField($model,'harga_bahan'); ?>
		<?php echo $form->error($model,'harga_bahan'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'id_sablon'); ?>
		<?php echo $form->dropDownList($model,'id_sablon', 
                        CHtml::listData(HargaSablon::model()->findAll(array(
                            'order' => 'nama ASC')), 
                                'id', 
                                'nama'), 
                        array('empty'=>'Pilih Sablon')); ?>
		<?php echo $form->error($model,'id_sablon'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->