<?php
/* @var $this BarangController */
/* @var $model Barang */

$this->breadcrumbs=array(
	'Barangs'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Barang', 'url'=>array('index')),
	array('label'=>'Manage Barang', 'url'=>array('admin')),
);
?>

<h1>Create Barang</h1>

<div class="content">
    <?php
    /* @var $this SlaController */
    ?>
 
    <p>
        Example form of a one to many models with dynamic inputs!
    </p>
    <?php
    $form = $this->beginWidget('DynamicTabularForm', array(
        'defaultRowView'=>'_rowForm',
		'enableAjaxValidation'=>false,
    ));
    echo "<h3>Header</h3>";
    echo $form->errorSummary($sla);
    ?>
    <div class="row-fluid">
        <div class="span4">
            <?php
            echo $form->labelEx($sla, 'barcode');
            echo $form->textField($sla, 'barcode');
            echo $form->error($sla, 'barcode');
            ?>
        </div>
 
        <div class="span4">
            <?php
            echo $form->labelEx($sla, 'jenis');
            echo $form->textField($sla, 'jenis');
            echo $form->error($sla, 'jenis');
            ?>
        </div>
		
		<div class="span4">
            <?php
            echo $form->labelEx($sla, 'artikel');
            echo $form->textField($sla, 'artikel');
            echo $form->error($sla, 'artikel');
            ?>
        </div>
    </div>
    <h3>Details</h3>
<?php
/**
 * this is the main feature!!
 */
echo $form->rowForm($sladetails);
 
echo CHtml::submitButton('create');
 
$this->endWidget();
?>
</div>