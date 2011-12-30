
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
            <?php echo $form->labelEx($model, 'searchBox'); ?>
            <?php echo $form->textField($model, 'searchBox'); ?>
            <?php echo $form->error($model, 'searchBox'); ?>
        </div>

      

        <div>
            <?php echo CHtml::submitButton('Submit'); ?> 
        </div>
      

        <?php $this->endWidget(); ?>

    </div><!-- form -->
