
<div class="form">

    <?php
    $form = $this->beginWidget('CActiveForm', array(
                'id' => 'entryform',
                'enableClientValidation' => true,
                'clientOptions' => array(
                    'validateOnSubmit' => true,
                ),
            ));
    ?>

    <p class="note">Fields with <span class="required">*</span> are required.</p>

    <?php echo $form->errorSummary($model); ?>

    <div class="row">
        <?php echo $form->labelEx($model, 'lotNumber'); ?>
        <?php echo $form->textField($model, 'lotNumber'); ?>
        <?php echo $form->error($model, 'lotNumber'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model, 'Print Date'); ?>
        <?php echo $form->textField($model, 'printDate'); ?>
        <?php echo $form->error($model, 'printDate'); ?>
    </div>
    <div class="row">
        <?php echo $form->labelEx($model, 'Print Location'); ?>
        <?php echo $form->textField($model, 'printLocation'); ?>
        <?php echo $form->error($model, 'printLocation'); ?>
    </div>
    <div class="row">
        <?php echo $form->labelEx($model, 'Contact Business'); ?>
        <?php echo $form->textField($model, 'contactBusiness'); ?>
        <?php echo $form->error($model, 'contactBusiness'); ?>
    </div>
    <div class="row">
        <?php echo $form->labelEx($model, 'Contact Address'); ?>
        <?php echo $form->textField($model, 'contactAddress'); ?>
        <?php echo $form->error($model, 'contactAddress'); ?>
    </div>
    <div class="row">
        <?php echo $form->labelEx($model, 'Contact City'); ?>
        <?php echo $form->textField($model, 'contactCity'); ?>
        <?php echo $form->error($model, 'contactCity'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model, 'Contact State'); ?>
        <?php echo $form->textField($model, 'contactState'); ?>
        <?php echo $form->error($model, 'contactState'); ?>
    </div>
    <div class="row">
        <?php echo $form->labelEx($model, 'Contact Zip Code'); ?>
        <?php echo $form->textField($model, 'contactZipCode'); ?>
        <?php echo $form->error($model, 'contactZipCode'); ?>
    </div>
    <div class="row">
        <?php echo $form->labelEx($model, 'Contact Phone Number'); ?>
        <?php echo $form->textField($model, 'contactPhoneNumber'); ?>
        <?php echo $form->error($model, 'contactPhoneNumber'); ?>
    </div>
    <?php echo $form->labelEx($model, 'Product Image'); ?>
    <div class="row">
        <?php echo CHtml::form('', 'post', array('enctype' => 'multipart/form-data')); ?>

        <?php echo CHtml::activeFileField($model, 'productImage'); ?>
        <?php echo CHtml::endForm(); ?>
    </div>
    <?php echo $form->labelEx($model, 'General Conformity Certificate'); ?>
    <div class="row">
        <?php echo CHtml::form('', 'post', array('enctype' => 'multipart/form-data')); ?>

        <?php echo CHtml::activeFileField($model, 'generalConformityCertificate'); ?>
        <?php echo CHtml::endForm(); ?>
    </div>
    <?php echo $form->labelEx($model, 'Shirt CPSIA Certification'); ?>
    <div class="row">
        <?php echo CHtml::form('', 'post', array('enctype' => 'multipart/form-data')); ?>

        <?php echo CHtml::activeFileField($model, 'shirtCpsiaCertification'); ?>
        <?php echo CHtml::endForm(); ?>
    </div>
    <?php echo $form->labelEx($model, 'Ink CPSIA Certification'); ?>
    <div class="row">
        <?php echo CHtml::form('', 'post', array('enctype' => 'multipart/form-data')); ?>

        <?php echo CHtml::activeFileField($model, 'inkCpsiaCertification'); ?>
        <?php echo CHtml::endForm(); ?>
    </div>
     <?php echo $form->labelEx($model, 'Vinyl Lettering CPSIA Certification'); ?>
    
    <div class="row">
        <?php echo CHtml::form('', 'post', array('enctype' => 'multipart/form-data')); ?>

        <?php echo CHtml::activeFileField($model, 'vinylLetteringCpsiaCertification'); ?>
        <?php echo CHtml::endForm(); ?>
    </div>
    <div id="linkCloak">
            <?php echo CHtml::submitButton('Submit'); ?>
        </div>

   

    <?php $this->endWidget(); ?>

</div><!-- form -->
