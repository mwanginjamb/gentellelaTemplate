<?php

namespace frontend\assets;

use yii\web\AssetBundle;

/**
 * Main frontend application asset bundle.
 */
class GentellelaAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'assets-gentellela/css/bootstrap.min.css',
        'assets-gentellela/fonts/css/font-awesome.min.css',
        'assets-gentellela/css/animate.min.css',
        'assets-gentellela/css/custom.css',
        'assets-gentellela/css/maps/jquery-jvectormap-2.0.3.css',
        'assets-gentellela/css/icheck/flat/green.css',
        'assets-gentellela/css/floatexamples.css',
        
    ];
    public $js = [
        'assets-gentellela/js/jquery.min.js',
        'assets-gentellela/js/nprogress.js',
        'assets-gentellela/js/bootstrap.min.js',
        'assets-gentellela/js/gauge/gauge.min.js',
        'assets-gentellela/js/gauge/gauge_demo.js',
        'assets-gentellela/js/progressbar/bootstrap-progressbar.min.js',
        'assets-gentellela/js/nicescroll/jquery.nicescroll.min.js',
        'assets-gentellela/js/icheck/icheck.min.js',
        'assets-gentellela/js/moment/moment.min.js',
        'assets-gentellela/js/datepicker/daterangepicker.js',
        'assets-gentellela/js/chartjs/chart.min.js',
        'assets-gentellela/js/custom.js',
        'assets-gentellela/js/flot/jquery.flot.js',
        'assets-gentellela/js/flot/jquery.flot.pie.js',
        'assets-gentellela/js/flot/jquery.flot.orderBars.js',
        'assets-gentellela/js/flot/jquery.flot.time.min.js',
        'assets-gentellela/js/flot/date.js',
        'assets-gentellela/js/flot/jquery.flot.spline.js',
        'assets-gentellela/js/flot/jquery.flot.stack.js',
        'assets-gentellela/js/flot/curvedLines.js',
        'assets-gentellela/js/flot/jquery.flot.resize.js',
        'assets-gentellela/js/maps/jquery-jvectormap-2.0.3.min.js',
        'assets-gentellela/js/maps/gdp-data.js',
        'assets-gentellela/js/maps/jquery-jvectormap-world-mill-en.js',
        'assets-gentellela/js/maps/jquery-jvectormap-us-aea-en.js',
        'assets-gentellela/js/pace/pace.min.js',
        'assets-gentellela/js/skycons/skycons.min.js',
        

    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
