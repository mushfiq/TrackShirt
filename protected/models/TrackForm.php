<?php

/**
 * ContactForm class.
 * ContactForm is the data structure for keeping
 * contact form data. It is used by the 'contact' action of 'SiteController'.
 */
class TrackForm extends CFormModel {

    public $lot_number;
    public $print_date;
    public $print_location;
    public $contact_bussiness;
    public $contact_city;
    public $contact_state;
    public $contact_zip_code;
    public $contact_phone;
    public $product_image;
    public $general_conformity_certificate;
    public $shirt_cpsia_certification;
    public $ink_cpsia_certification;
    public $vinyl_lettering_cpsia_certification;
    public $product_entry_time;
    
    

//	public $email;
//	public $subject;
//	public $body;
//	public $verifyCode;

    /**
     * Declares the validation rules.
     */
    public function rules() {
        return array(
            // name, email, subject and body are required
            array('lot_number,print_date', 'required'),
        // email has to be a valid email address
//			array('url', 'url'),
        // verifyCode needs to be entered correctly
        //array('verifyCode', 'captcha', 'allowEmpty'=>!CCaptcha::checkRequirements()),
        );
    }

    /**
     * Declares customized attribute labels.
     * If not declared here, an attribute would have a label that is
     * the same as its name with the first letter in upper case.
     */
}