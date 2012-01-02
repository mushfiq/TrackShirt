<?php

class SiteController extends Controller {

    /**
     * Declares class-based actions.
     */
    public function actions() {
        return array(
            // captcha action renders the CAPTCHA image displayed on the contact page
            'captcha' => array(
                'class' => 'CCaptchaAction',
                'backColor' => 0xFFFFFF,
            ),
            // page action renders "static" pages stored under 'protected/views/site/pages'
            // They can be accessed via: index.php?r=site/page&view=FileName
            'page' => array(
                'class' => 'CViewAction',
            ),
        );
    }

    /**
     * This is the action to handle external exceptions.
     */
    public function actionError() {
        if ($error = Yii::app()->errorHandler->error) {
            if (Yii::app()->request->isAjaxRequest)
                echo $error['message'];
            else
                $this->render('error', $error);
        }
    }

    public function actionRedirect() {
        $urlId = Yii::app()->request->getParam('id', 'default');
        if ($urlId != "default") {
            //echo $urlId;
            $read = Hide::model()->find('id=:id', array(':id' => $urlId));
            $test["a"] = $read->url;
            //echo $read->url;
        }
        $this->render('redirect', $test);
    }

    public function actionIndex() {
        $model = new TrackSearchForm;
        if (isset($_POST['TrackSearchForm'])) {
            $track = new Track;
            $track->lot_number = ($_POST['TrackSearchForm']['searchBox']);


            $product = Track::model()->find('lot_number=:lot_number', array(':lot_number' => $track->lot_number));
            $this->render('details-product', array('product' => $product));
        } else {
            $this->render('details', array('model' => $model));
        }
    }

    public function actionDetails() {

        $this->render('details-product');
    }

    public function actionEntry() {
        if (!Yii::app()->user->isGuest) {

            $model = new TrackForm;


            if (isset($_POST['TrackForm'])) {
                $entry = new Track;

//           die;
//                          if ($model->validate()) {
                try {
                    ;
                    $entry->lot_number = $_POST['TrackForm']['lot_number'];
                    $entry->print_date = $_POST['TrackForm']['print_date'];

                    $entry->print_location = $_POST['TrackForm']['print_location'];
                    $entry->contact_bussiness = $_POST['TrackForm']['contact_bussiness'];

                    $entry->contact_city = $_POST['TrackForm']['contact_city'];
                    $entry->contact_state = $_POST['TrackForm']['contact_state'];
                    $entry->contact_zip_code = $_POST['TrackForm']['contact_zip_code'];
                    $entry->contact_phone = $_POST['TrackForm']['contact_phone'];

                    $entry->product_image = $_POST['TrackForm']['product_image'];
                    $entry->product_image = CUploadedFile::getInstance($model, 'product_image');
                    $entry->general_conformity_certificate = $_POST['TrackForm']['general_conformity_certificate'];
                    $entry->general_conformity_certificate = CUploadedFile::getInstance($model, 'general_conformity_certificate');
                    $entry->shirt_cpsia_certification = $_POST['TrackForm']['shirt_cpsia_certification'];
                    $entry->shirt_cpsia_certification  = CUploadedFile::getInstance($model, 'shirt_cpsia_certification');
                    $entry->ink_cpsia_certification = $_POST['TrackForm']['ink_cpsia_certification'];
                    $entry->ink_cpsia_certification  = CUploadedFile::getInstance($model, 'ink_cpsia_certification');
                    
                    $entry->vinyl_lettering_cpsia_certification = $_POST['TrackForm']['vinyl_lettering_cpsia_certification'];
                    $entry->vinyl_lettering_cpsia_certification  = CUploadedFile::getInstance($model, 'vinyl_lettering_cpsia_certification');
                    
                    $entry->product_entry_time = time();
                    
//                    die;
                    if ($entry->save()) {

                        $entry->product_image->saveAs($entry->product_image->name, '/trackshirt/uploads');
                        $entry->general_conformity_certificate->saveAs($entry->general_conformity_certificate->name, '/trackshirt/uploads');
                        $entry->shirt_cpsia_certification->saveAs($entry->shirt_cpsia_certification->name, '/trackshirt/uploads');
                        $entry->ink_cpsia_certification->saveAs($entry->ink_cpsia_certification->name, '/trackshirt/uploads');
                        $entry->vinyl_lettering_cpsia_certification->saveAs($entry->vinyl_lettering_cpsia_certification->name, '/trackshirt/uploads');
                        
                        print "success";
                        $this->render('success', array('model' => $model));
                        
                        // redirect to success page
                    }
            
                    
                } catch (Exception $e) {
                    echo 'Caught exception: ', $e->getMessage(), "\n";
                }
//                          }
            } else {
                $this->render('entry', array('model' => $model));
            }
        }
    }

    public function actionLogin() {
        $model = new LoginForm;
        // collect user input data
        if (isset($_POST['LoginForm'])) {
            $model->attributes = $_POST['LoginForm'];
            // validate user input and redirect to previous page if valid
            if ($model->validate() && $model->login()) {

                $this->redirect('/trackshirt/index.php/site/entry');
            }
        }
        // display the login form
        $this->render('login', array('model' => $model));
    }

    public function actionLogout() {
        Yii::app()->user->logout();
        $this->redirect(Yii::app()->homeUrl);
    }

  

}