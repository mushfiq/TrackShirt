
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
            <?php echo $form->labelEx($model, 'username'); ?>
            <?php echo $form->textField($model, 'username'); ?>
            <?php echo $form->error($model, 'username'); ?>
        </div>
        
        <div class="row">
            <?php echo $form->labelEx($model, 'password'); ?>
            <?php echo $form->textField($model, 'password'); ?>
            <?php echo $form->error($model, 'password'); ?>
        </div>

      

        <div>
            <?php echo CHtml::submitButton('Submit'); ?> 
        </div>
      

        <?php $this->endWidget(); ?>

    </div><!-- form -->
