<?php /* @var $this Controller */ ?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="language" content="en" />

    <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/styles.css" />

	<title><?php echo CHtml::encode($this->pageTitle); ?></title>

	<?php Yii::app()->bootstrap->register(); ?>
</head>

<body>

<?php $this->widget('bootstrap.widgets.TbNavbar',array(
    'items'=>array(
        array(
            'class'=>'bootstrap.widgets.TbMenu',
            'items'=>array(
                array('label'=>'Home', 'url'=>array('/site/index')),
				array('label'=>'Login', 'url'=>array('/site/login'), 'visible'=>Yii::app()->user->isGuest),
				array('label'=>'User', 'url'=>array('/user/admin'), 'visible'=>!Yii::app()->user->isGuest),
				array('label'=>' Data ',
					'items'=>array(
						array('label'=>'Barang', 'url'=>array('/barang/admin')),
						array('label'=>'Sablon', 'url'=>array('/hargasablon/admin')),
						array('label'=>'Jahit', 'url'=>array('/hargajahit/admin')),
						
						),
					),
				array('label'=>' Transaksi ',
					'items'=>array(
						array('label'=>'Order Masuk', 'url'=>array('/ordermasuk/admin')),
						array('label'=>'Order Keluar', 'url'=>array('/orderkeluar/admin')),						
						),
					),
				array('label'=>' Laporan ',
					'items'=>array(
						array('label'=>'Stok Barang', 'url'=>array('')),
						array('label'=>'Penjualan', 'url'=>array('')),	
						array('label'=>'Peramalan', 'url'=>array('')),
						),
					),
				array('label'=>'Logout ('.Yii::app()->user->name.')', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest)
            ),
        ),
    ),
)); ?>

<div class="container" id="page">

	<?php if(isset($this->breadcrumbs)):?>
		<?php $this->widget('bootstrap.widgets.TbBreadcrumbs', array(
			'links'=>$this->breadcrumbs,
		)); ?><!-- breadcrumbs -->
	<?php endif?>

	<?php echo $content; ?>

	<div class="clear"></div>

	<div id="footer">
		Copyright &copy; <?php echo date('Y'); ?> by My Company.<br/>
		All Rights Reserved.<br/>
		<?php echo Yii::powered(); ?>
	</div><!-- footer -->

</div><!-- page -->

</body>
</html>
