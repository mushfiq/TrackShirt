<?php
$this->pageTitle=Yii::app()->name . ' - HideRefer';
$this->breadcrumbs=array(
	'Contact',
);
?>

<h1>HideRefer</h1>

<?php if(Yii::app()->user->hasFlash('contact')): ?>

<div class="flash-success">
	<?php echo Yii::app()->user->getFlash('contact'); ?>
</div>

<?php else: ?>

<p>
Your cloaked link is:
</p>

<div class="form">
   <?php echo "SUCESS!";?>

</div><!-- form -->

<?php endif; ?>