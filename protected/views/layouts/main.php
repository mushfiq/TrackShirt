<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

    <head>
        <meta content="en-us" http-equiv="Content-Language" />
        <meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
        <?php Yii::app()->clientScript->registerCoreScript('jquery'); ?>
         <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/screen.css" media="screen, projection" />
        <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/print.css" media="print" />
        <!--[if lt IE 8]>
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/ie.css" media="screen, projection" />
	<![endif]-->

        <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/main.css" />
        <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/form.css" />
        
        <title>Untitled 1</title>
        <style type="text/css">
            a {
                color: #00FF00;
            }
            a:visited {
                color: #00FF00;
            }
            a:active {
                color: #00FF00;
            }
            a:hover {
                color: #00FF00;
            }
            .auto-style1 {
                text-align: center;
            }
            .auto-style2 {
                font-family: Arial, Helvetica, sans-serif;
                font-size: large;
                bottom: 25px;
                position: inherit;
                top: -15px;
                clip: rect(-15px, auto, 15px, auto);
                display: inline;
            }
            #TrackSearchForm_searchBox{
                height: 30px; 
                width: 223px
                
            }
            .button{
                margin-left: -300px;
            }
            .button, input[type="submit"]{
                height: 39px; 
                width: 99px;
               margin-left: 400px;
               padding-top: 10px;
            }
            .buttonLarge, input[name="yt0"]{
                width: 340px;
                margin-left: 400px;
            }
            
            #linkCloak{
                padding-left: 1300px;
            }
            
            #TrackForm_lot_number {
                height: 38px; 
                width: 347px
            }
            #TrackForm_print_date{
                 height: 38px; 
                width: 347px;
            }
            #TrackForm_print_location{
                height: 38px; 
                width: 347px;
            }
            #TrackForm_contact_bussiness{
                 height: 38px; 
                width: 347px;
            }
            #TrackForm_contact_city{
                 height: 38px; 
                width: 347px;
            }
            #TrackForm_contact_zip_code{
                 height: 38px; 
                width: 347px;
                
            }
            #TrackForm_contact_phone{
                 height: 38px; 
                width: 347px;
            }
            #TrackForm_product_image{
                width: 340px; 
                height: 36px
            }
            #TrackForm_contact_address{
                height: 38px; 
                width: 347px;
            }
            #TrackForm_contact_state{
                 height: 38px; 
                width: 347px;
                
            }
            #ytTrackForm_product_image{
                width: 340px;
                height: 36px;
            }
            
        </style>
    </head>

    <body style="color: #FFFFFF; background-color: #333333">



        <p class="auto-style1">&nbsp;</p>
        <p class="auto-style1">&nbsp;</p>
        <p class="auto-style1">&nbsp;</p>
        <p class="auto-style1"><img alt="" height="200" src="<?php echo Yii::app()->request->baseUrl; ?>/images/logo.png" width="622" /></p>
        <p class="auto-style1">
            <form method="post">
                <div class="auto-style1">
                    <div class="auto-style1">
                        <span class="auto-style2">
                             <?php echo $content; ?>
                         
                        <br />
                        <br />
                    </div>
                    
            </form>
        </p>
        </div><!-- mainmenu -->

       


    </body>

</html>
