<?php if ($product): ?>

    <table class="auto-style2" style="width: 800px" align="center">
        <tr>
            <td style="width: 678px"><span class="auto-style3">Lot #: <strong>
                        <?php if ($product->lot_number): ?><?php echo $product->lot_number; ?><?php endif; ?></strong></span><br class="auto-style3" />
                <span class="auto-style3">Printing Date: <strong><?php if ($product->print_date): ?> <?php echo $product->print_date; ?><?php endif; ?></strong></span><br class="auto-style3" />
                <span class="auto-style3">Printed in: <strong><?php if ($product->print_location): ?><?php echo $product->print_location; ?><?php endif; ?><br />
                    </strong></span><br class="auto-style3" />
                <hr class="auto-style6" style="width: 308px" />
                <br class="auto-style3" />
                <span class="auto-style4">Product Contact Information:</span><br class="auto-style3" />
                <span class="auto-style3"><strong><?php if ($product->contact_bussiness): ?><?php echo $product->contact_bussiness; ?><?php endif; ?></strong></span><strong><br class="auto-style3" />
                </strong><span class="auto-style3"><strong><?php if ($product->contact_city): ?> <?php echo $product->contact_city; ?><?php endif; ?></strong></span><strong><br class="auto-style3" />
                </strong><span class="auto-style3"><strong><?php if ($product->contact_state): ?><?php echo $product->contact_state; ?><?php endif; ?>             <?php if ($product->contact_zip_code): ?><?php echo $product->contact_zip_code; ?>
                        <?php endif; ?></strong></span><strong><br class="auto-style3" />



                </strong><span class="auto-style3"><strong>(312)555-1212</strong></span></td>
            <?php if ($product->product_image): ?>
                <td><img alt="" src="<?php echo "/trackshirt/" . $product->product_image; ?>" width="400" style="float: right"  /></td>
            <?php endif; ?>
        </tr>
    </table>

    <p class="auto-style5"><em>PRODUCT STATUS: </em><strong>NO RECALLS</strong></p>
    <table align="center" style="width: 650px" class="auto-style7">
        <tr>
            <td class="auto-style5">CPSIA Compliance Documentation</td>
        </tr>
        <tr>
            <td class="auto-style5">
                <table style="width: 100%">
                    <tr>
                        <?php if ($product->general_conformity_certificate): ?>
                            <td>
                                <a href="<?php echo "/trackshirt/" . $product->general_conformity_certificate; ?>">
                                <img alt=""  src="<?php echo Yii::app()->request->baseUrl; ?>/images/PDF-Icon%20(1).png" width="130" /></td>
                            </a>
                        <?php endif; ?>
                        <?php if ($product->shirt_cpsia_certification): ?>
                            <td>
                                <a href="<?php echo "/trackshirt/" . $product->shirt_cpsia_certification; ?>">
                                <img alt=""  src="<?php echo Yii::app()->request->baseUrl; ?>/images/PDF-Icon%20(1).png" width="130" /></td>
                            </a>
                        <?php endif; ?>
                                <?php if ($product->ink_cpsia_certification): ?>
                        <td>
                            </a>
                            <a href="<?php echo "/trackshirt/" . $product->ink_cpsia_certification; ?>">
                            <img alt=""  src="<?php echo Yii::app()->request->baseUrl; ?>/images/PDF-Icon%20(1).png" width="130" /></td>
                        </a>
                            <?php endif; ?>
                        <td>&nbsp;</td>
                    </tr>
                    <tr> <?php if ($product->general_conformity_certificate): ?>
                        <td>General Conformity<br />
                        				Certificate</td>
                        <?php endif; ?>
                        <?php if ($product->shirt_cpsia_certification): ?>
                        <td>Apparel CPSIA<br />
                        				Certification</td>
                        <?php endif; ?>
                        <?php if ($product->ink_cpsia_certification): ?>
                        <td>Ink CPSIA <br />
                        				Certification</td>
                        <?php endif; ?>
                        <td>&nbsp;</td>
                    </tr>
                </table>
            </td>
        </tr>

    <?php else: ?>
        <?php echo "No Product Found"; ?>
    <?php endif; ?>
