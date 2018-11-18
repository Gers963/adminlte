<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace app\assets;

use yii\web\AssetBundle;

/**
 * Main application asset bundle.
 *
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';

    public $adminLte = 'adminlte';

    public $css = [
        'css/site.css',
       'adminlte/bower_components/bootstrap/dist/css/bootstrap.min.css',                      //bootstrap
       'adminlte/bower_components/Ionicons/css/ionicons.min.css',                             //Ionicons 
       'adminlte/dist/css/adminlte.min.css',                                                  //Theme style
       'adminlte/bower_components/font-awesome/css/font-awesome.min.css',                     //Font Awesome
       'adminlte/dist/css/skins/_all-skins.min.css',                                          //AdminLTE Skins
       'adminlte/bower_components/morris.js/morris.css',                                      //Morris chart 
       'adminlte/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css',// Date Picker
       'adminlte/bower_components/bootstrap-daterangepicker/daterangepicker.css',             //Daterange picker
       'adminlte/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">',                 //bootstrap wysihtml5 
       'adminlte/bower_components/jvectormap/jquery-jvectormap.css',                          //jvectormap  
    ];
    public $js = [
        // jQuery 3 
       "adminlte/bower_components/jquery/dist/jquery.min.js",
        // jQuery UI 1.11.4 
       "adminlte/bower_components/jquery-ui/jquery-ui.min.js",
        // Resolve conflict in jQuery UI tooltip with Bootstrap tooltip 
        //<script>
        //$.widget.bridge('uibutton', $.ui.button);
        //</script>
        // Bootstrap 3.3.7 
       "adminlte/bower_components/bootstrap/dist/js/bootstrap.min.js",
        // Morris.js charts 
       "adminlte/bower_components/raphael/raphael.min.js",
       "adminlte/bower_components/morris.js/morris.min.js",
        // Sparkline 
       "adminlte/bower_components/jquery-sparkline/dist/jquery.sparkline.min.js",
        // jvectormap 
       "adminlte/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js",
       "adminlte/plugins/jvectormap/jquery-jvectormap-world-mill-en.js",
        // jQuery Knob Chart 
       "adminlte/bower_components/jquery-knob/dist/jquery.knob.min.js",
        // daterangepicker 
       "adminlte/bower_components/moment/min/moment.min.js",
       "adminlte/bower_components/bootstrap-daterangepicker/daterangepicker.js",
        // datepicker 
       "adminlte/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js",
        // Bootstrap WYSIHTML5 
       "adminlte/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js",
        // Slimscroll 
       "adminlte/bower_components/jquery-slimscroll/jquery.slimscroll.min.js",
        // FastClick 
       "adminlte/bower_components/fastclick/lib/fastclick.js",
        // AdminLTE App 
       "adminlte/dist/js/adminlte.min.js",
        // AdminLTE dashboard demo (This is only for demo purposes) 
       "adminlte/dist/js/pages/dashboard.js",
        // AdminLTE for demo purposes 
       "adminlte/dist/js/demo.js",
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
