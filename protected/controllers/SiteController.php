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
//
//    public function actionIndex() {
//        $model = new HideForm;
//        if (isset($_POST['HideForm'])) {
//            $hide = new Hide;
//            $model->attributes = $_POST['HideForm'];
//            if ($model->validate()) {
//                try {
//                    $hide->url = $_POST['HideForm']['url'];
//                    $hide->create_time = time();
//                    $hide->save();
//                    $read = Hide::model()->find('create_time=:create_time', array(':create_time' => $hide->create_time));
//                    $test["url"] = $_SERVER['SERVER_NAME'].$_SERVER['REQUEST_URI'].'site/redirect/?id=';
//                    $test["id"] = $read->id;
//                    $this->render('success', $test);
//                } catch (Exception $e) {
//                    echo 'Caught exception: ', $e->getMessage(), "\n";
//                }
//            }
//        }
//        else{
//            $this->render('hide', array('model' => $model));
//        }
//        
//    }

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
    
    
    
    public function actionIndex(){
        $model = new TrackSearchForm;
        if(isset($_POST['TrackSearchForm'])){
            print "here";
            die;
        }
        $this->render('details',array('model' => $model));
        
        
    }
//    
//    public function actionDetails(){
//        
//       $this->render('index');
//    }
    public function actionEntryshirt(){
        $model = new TrackEntryForm;
        
        
         if (isset($_POST['TrackEntryForm'])) {
             echo "go go!";
            $tracjentry = new TrackEntry  ;
            $model->attributes = $_POST['TrackEntryForm'];
            $this->render('success', $test);
            var_dump($model->attributes);
            
//            if ($model->validate()) {
//                try {
//                    $hide->url = $_POST['HideForm']['url'];
//                    $hide->create_time = time();
//                    $hide->save();
//                    $read = Hide::model()->find('create_time=:create_time', array(':create_time' => $hide->create_time));
//                    $test["url"] = $_SERVER['SERVER_NAME'].$_SERVER['REQUEST_URI'].'site/redirect/?id=';
//                    $test["id"] = $read->id;
//                    $this->render('success', $test);
//                } catch (Exception $e) {
//                    echo 'Caught exception: ', $e->getMessage(), "\n";
//                }
//            }
        }
        
        
        
        
        
        
        
        
        $this->render('entry-shirt',array('model' => $model));
    }
    
     public function actionDetails(){
         
         $this->render('details-product');
        
    }
    
    public function actionTest(){
        $model = new TrackForm;
        
          $this->render('test', array('model' => $model));
          if(isset($_POST['TrackForm'])){
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
            }
          
    }

}