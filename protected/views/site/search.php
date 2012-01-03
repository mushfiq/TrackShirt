
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

<!--        <p class="note">Enter the lot number from your shirt <span class="required">*</span> </p>-->

        <?php echo $form->errorSummary($model); ?>

        
        
        <div class="row">
           <?php echo $form->labelEx($model, 'Enter the lot number from your shirt'); ?>
            <?php echo $form->textField($model, 'searchBox'); ?>
            <?php echo $form->error($model, 'searchBox'); ?>
        </div>

      

        <div style="margin-left: 30px;">
            <?php echo CHtml::submitButton('Submit'); ?> 
        </div>
      

        <?php $this->endWidget(); ?>

    </div><!-- form -->
