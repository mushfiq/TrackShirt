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

<p class="auto-style2"><strong>Administration - Add New Product</strong></p>
<table align="center" style="width: 650px">
	<tr>
		<td class="auto-style3" style="width: 250px">Lot Number</td>
		<td>
		<?php echo $form->textField($model, 'lot_number'); ?>
<!--			<input name="Text1" type="text" style="height: 38px; width: 347px" />-->
		</td>
	</tr>
	<tr>
		<td class="auto-style3" style="width: 250px">Print Date</td>
		<td>
		
			<?php echo $form->textField($model, 'print_date'); ?>
	</tr>
	<tr>
		<td class="auto-style3" style="width: 250px">Print Location</td>
		<td>
		
			 <?php echo $form->textArea($model, 'print_location'); ?></td>
	</tr>
	<tr>
		<td class="auto-style3" style="width: 250px">Contact Business</td>
		<td>
		
			<?php echo $form->textArea($model, 'contact_bussiness'); ?></td>
	</tr>
	<tr>
		<td class="auto-style3" style="width: 250px">Contact Address</td>
		<td>
		
			<?php echo $form->textArea($model, 'contact_address'); ?></td>
	</tr>
	<tr>
		<td class="auto-style3" style="width: 250px">Contact City</td>
		<td>
		
			<?php echo $form->textArea($model, 'contact_city'); ?></td>
	</tr>
	<tr>
		<td class="auto-style3" style="width: 250px">Contact State</td>
		<td>
		
			<?php echo $form->textField($model, 'contact_state'); ?></td>
	</tr>
	<tr>
		<td class="auto-style3" style="width: 250px">Contact ZIP Code</td>
		<td>
		
			 <?php echo $form->textField($model, 'contact_zip_code'); ?></td>
	</tr>
	<tr>
		<td class="auto-style3" style="width: 250px">Contact Phone Number</td>
		<td>
		
			 <?php echo $form->textField($model, 'contact_phone'); ?></td>
	</tr>
	<tr>
		<td class="auto-style3" style="width: 250px">Product Image</td>
		<td>
		
			<?php echo $form->fileField($model, 'product_image'); ?>
		</td>
	</tr>
	<tr>
		<td class="auto-style3" style="width: 250px">General Conformity 
		Certificate</td>
		<td>
		
			 <?php echo $form->fileField($model, 'general_conformity_certificate'); ?></td>
	</tr>
	<tr>
		<td class="auto-style3" style="width: 250px">Shirt CPSIA Certification</td>
		<td>
		<?php echo $form->fileField($model, 'shirt_cpsia_certification'); ?></td>
			</td>
	</tr>
	<tr>
		<td class="auto-style3" style="width: 250px">Ink CPSIA Certification</td>
		<td>
		
			<?php echo $form->fileField($model, 'ink_cpsia_certification'); ?></td>
	</tr>
	<tr>
		<td class="auto-style3" style="width: 250px">Vinyl Lettering CPSIA 
		Certification</td>
		<td>
		
			 <?php echo $form->fileField($model, 'vinyl_lettering_cpsia_certification'); ?></td>
	</tr>
</table>

<p class="auto-style1">
		
			<div style="margin-leftL:-100px;">
            <?php echo CHtml::submitButton('Submit New Product Form'); ?>
        </div>

 <?php $this->endWidget(); ?>