<?php
$this->pageTitle = Yii::app()->name . ' - Shirt Tracking';
?>

<h1>Shirt Tracking</h1>

<?php if (Yii::app()->user->hasFlash('contact')): ?>

    <div class="flash-success">
        <?php echo Yii::app()->user->getFlash('contact'); ?>
    </div>

<?php else: ?>

    <div class="form">

        <?php
        $form = $this->beginWidget('CActiveForm', array(
                    'id' => 'hide-form',
                    'enableClientValidation' => true,
                    'clientOptions' => array(
                        'validateOnSubmit' => true,
                    ),
                    'htmlOptions' => array('enctype' => 'multipart/form-data'),
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

        <div class="row" id="url_direct">
            <?php echo $form->labelEx($model, 'product_image'); ?>
            <?php echo $form->fileField($model, 'product_image'); ?>
            <?php echo $form->error($model, 'product_image'); ?>
        </div>

        <div class="row" id="url_direct">
            <?php echo $form->labelEx($model, 'general_conformity_certificate'); ?>
            <?php echo $form->fileField($model, 'general_conformity_certificate'); ?>
            <?php echo $form->error($model, 'general_conformity_certificate'); ?>
        </div>
        
        <div class="row" id="url_direct">
            <?php echo $form->labelEx($model, 'shirt_cpsia_certification'); ?>
            <?php echo $form->fileField($model, 'shirt_cpsia_certification'); ?>
            <?php echo $form->error($model, 'shirt_cpsia_certification'); ?>
        </div>
        
        
        <div class="row" id="url_direct">
            <?php echo $form->labelEx($model, 'ink_cpsia_certification'); ?>
            <?php echo $form->fileField($model, 'ink_cpsia_certification'); ?>
            <?php echo $form->error($model, 'ink_cpsia_certification'); ?>
        </div>
        
        <div class="row" id="url_direct">
            <?php echo $form->labelEx($model, 'vinyl_lettering_cpsia_certification'); ?>
            <?php echo $form->fileField($model, 'vinyl_lettering_cpsia_certification'); ?>
            <?php echo $form->error($model, 'vinyl_lettering_cpsia_certification'); ?>
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