<?php
$this->pageTitle = Yii::app()->name . ' - Shirt Track!';
?>

<h1>Shirt Track</h1>

<?php if (Yii::app()->user->hasFlash('contact')): ?>

    <div class="flash-success">
        <?php echo Yii::app()->user->getFlash('contact'); ?>
    </div>

<?php else: ?>

    <p>
        If you have business inquiries or other questions, please fill out the following form to contact us. Thank you.
    </p>
    
   
    
   
  
    <div class="form">

        <?php
        $form = $this->beginWidget('CActiveForm', array(
                    'id' => 'hide-form',
                    'enableClientValidation' => true,
                    'clientOptions' => array(
                        'validateOnSubmit' => true,
                    ),
                ));
        ?>

        <p class="note">Fields with <span class="required">*</span> are required.</p>

        <?php echo $form->errorSummary($model); ?>

        <div class="row">
            <?php echo $form->labelEx($model, 'lot_number'); ?>
            <?php echo $form->textField($model, 'lot_number'); ?>
            <?php echo $form->error($model, 'lot_number'); ?>
        </div>

        <div class="row" id="url_direct">
            <?php echo $form->labelEx($model, 'print_date'); ?>
            <?php echo $form->textField($model, 'print_date'); ?>
            <?php echo $form->error($model, 'print_date'); ?>
        </div>
       <div class="row" id="url_direct">
            <?php echo $form->labelEx($model, 'print_location'); ?>
            <?php echo $form->textArea($model, 'print_location'); ?>
            <?php echo $form->error($model, 'print_location'); ?>
        </div>
        <div class="row" id="url_direct">
            <?php echo $form->labelEx($model, 'contact_bussiness'); ?>
            <?php echo $form->textArea($model, 'contact_bussiness'); ?>
            <?php echo $form->error($model, 'contact_bussiness'); ?>
        </div>
        <div class="row" id="url_direct">
            <?php echo $form->labelEx($model, 'contact_city'); ?>
            <?php echo $form->textArea($model, 'contact_city'); ?>
            <?php echo $form->error($model, 'contact_city'); ?>
        </div>
        <div class="row" id="url_direct">
            <?php echo $form->labelEx($model, 'contact_state'); ?>
            <?php echo $form->textArea($model, 'contact_state'); ?>
            <?php echo $form->error($model, 'contact_state'); ?>
        </div>
        <div class="row" id="url_direct">
            <?php echo $form->labelEx($model, 'contact_zip_code'); ?>
            <?php echo $form->textField($model, 'contact_zip_code'); ?>
            <?php echo $form->error($model, 'contact_zip_code'); ?>
        </div>
        <div class="row" id="url_direct">
            <?php echo $form->labelEx($model, 'contact_phone'); ?>
            <?php echo $form->textField($model, 'contact_phone'); ?>
            <?php echo $form->error($model, 'contact_phone'); ?>
        </div>
 

<!--        <div id="linkSubmit">
            <?php //echo CHtml::submitButton('Create'); ?> 
        </div>-->
        <div id="linkCloak">
            <?php echo CHtml::submitButton('Submit'); ?>
        </div>

        <?php $this->endWidget(); ?>

    </div><!-- form -->


<?php endif; ?>