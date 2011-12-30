<?php

class TrackEntryForm extends CFormModel {

    public $lotNumber;
    public $printDate;
    public $printLocation;
    public $contactBusiness;
    public $contactAddress;
    public $contactCity;
    public $contactState;
    public $contactZipCode;
    public $contactPhoneNumber;
    public $productImage;
    public $generalConformityCertificate;
    public $shirtCpsiaCertification;
    public $inkCpsiaCertification;
    public $vinylLetteringCpsiaCertification;

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
            array('lotNumber,printDate,printLocation', 'required'),
            // email has to be a valid email address
//            array('printDate', 'date'),
//            array('productImage', 'file', 'types' => 'jpg, gif, png'),
//            array('generalConformityCertificate', 'file', 'types' => 'pdf'),
//            array('shirtCpsiaCertification', 'file', 'types' => 'pdf'),
//            array('inkCpsiaCertification', 'file', 'types' => 'pdf'),
//            array('vinylLetteringCpsiaCertification', 'file', 'types' => 'pdf')

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