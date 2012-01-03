<div id="content">
<? if($product):?>
<?php if($product->lot_number):?>
Lot Number: <?php echo $product->lot_number;?>
<?php endif;?>
<?php if($product->print_date):?>
<br/>
Print Date: <?php echo $product->print_date;?>
<?php endif; ?>
<?php if($product->print_location):?>
<br/>
Product Location: <?php echo  $product->print_location; ?>
<?php endif;?>
<?php if($product->contact_bussiness):?>
<br/>
Contact Bussiness: <?php echo  $product->contact_bussiness; ?>
<?php endif;?>
<?php if($product->contact_city):?>
<br/>
Contact City: <?php echo  $product->contact_city; ?>
<?php endif;?>
<?php if($product->contact_state):?>
<br/>
Contact State: <?php echo  $product->contact_state; ?>
<?php endif;?>
<?php if($product->contact_zip_code):?>
<br/>
Zip Code: <?php echo $product->contact_zip_code; ?>
<?php endif;?>
<?php if($product->contact_phone):?>
<br/>
Contact Phone: <?php echo  $product->contact_phone; ?>
<?php endif;?>
<?php if($product->product_image):?>
<div style="float: right">
Product Image:
<img src="<?php echo  "/trackshirt/".$product->product_image; ?>" hieght="300" width="400"></img>
 <?php echo  $product->product_image; ?>
</div>
<?php endif;?>
<?php if($product->general_conformity_certificate):?>
<br/>
General Conformity Certificate:
<a href=<?php echo "/trackshirt/".$product->general_conformity_certificate; ?>><?php echo  $product->general_conformity_certificate; ?></a>
<br/>
<?php endif;?>
<?php if($product->shirt_cpsia_certification):?>
Shirt Cpsia Certification: <?php echo  $product->shirt_cpsia_certification; ?>
<?php endif;?>
<br/>
<?php if($product->ink_cpsia_certification):?>
Ink Cpsia Certification:
<a href=<?php echo "/trackshirt/".$product->ink_cpsia_certification; ?>><?php echo  $product->ink_cpsia_certification; ?></a>
<?php endif;?>
<br/>
<?php if($product->vinyl_lettering_cpsia_certification):?>
Vinyl lettering Cpsia Certification:
<a href=<?php echo "/trackshirt/".$product->vinyl_lettering_cpsia_certification; ?>><?php echo  $product->vinyl_lettering_cpsia_certification; ?></a>

<?php endif; ?>


<?php else:?>
No Product Found!

<?php endif;?>

</div>