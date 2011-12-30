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
               $this->render('details-product', array('product'=>$product));
               
        }
        else{
            $this->render('details', array('model' => $model));
        }
        
    }

    public function actionDetails() {

        $this->render('details-product');
    }

    public function actionEntry() {
        $model = new TrackForm;


        if (isset($_POST['TrackForm'])) {
            $entry = new Track;
            print_r($_POST);
//           die;
//                          if ($model->validate()) {
            try {
                $entry->lot_number = $_POST['TrackForm']['lot_number'];
                $entry->print_date = $_POST['TrackForm']['print_date'];

                $entry->print_location = $_POST['TrackForm']['print_location'];
                $entry->contact_bussiness = $_POST['TrackForm']['contact_bussiness'];

                $entry->contact_city = $_POST['TrackForm']['contact_city'];
                $entry->contact_state = $_POST['TrackForm']['contact_state'];
                $entry->contact_zip_code = $_POST['TrackForm']['contact_zip_code'];
                $entry->contact_phone = $_POST['TrackForm']['contact_phone'];
//                    $entry->contact_city = $_POST['TrackForm']['contact_city'];
//                    $entry->contact_city = $_POST['TrackForm']['contact_city'];
//                    $entry->contact_city = $_POST['TrackForm']['contact_city'];
//                    $entry->contact_city = $_POST['TrackForm']['contact_city'];
                $entry->save();
                print "sucess!";
                $this->render('success', array('model' => $model));
            } catch (Exception $e) {
                echo 'Caught exception: ', $e->getMessage(), "\n";
            }
//                          }
        } else {
            $this->render('entry', array('model' => $model));
        }
    }

}