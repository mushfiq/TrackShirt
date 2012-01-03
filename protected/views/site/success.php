<?php
$this->pageTitle=Yii::app()->name . ' - Sucess';
$this->breadcrumbs=array(
	'Success',
);
?>



<?php if(Yii::app()->user->hasFlash('contact')): ?>

<div class="flash-success">
	<?php echo Yii::app()->user->getFlash('contact'); ?>
</div>

<?php else: ?>

<p>
The Product has been sucesfully Saved.
</p>

<div class="form">
   <?php echo "SUCESS!";?>

</div><!-- form -->

<?php endif; ?>