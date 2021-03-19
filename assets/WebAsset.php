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
class WebAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        //  'css/site.css',
       
        'themeweb/css/bootstrap.min.css',
        'themeweb/css/bootstrap-grid.min.css',
        'themeweb/css/animate.css',
        'themeweb/css/ionicons.min.css',
        'themeweb/css/linearicons.css',
        'themeweb/css/animsition.css',
        'themeweb/css/magnific-popup.css',
        'themeweb/css/jquery.pagepiling.css',
        'themeweb/css/owl.carousel.css',
        'themeweb/css/style.css',
    ];
    public $js = [
        'themeweb/js/jquery.min.js',
        'themeweb/js/wow.min.js',
        'themeweb/js/smoothscroll.js',
        'themeweb/js/animsition.js',
        'themeweb/js/jquery.validate.min.js',
        'themeweb/js/jquery.magnific-popup.min.js',
        'themeweb/js/owl.carousel.min.js',
        'themeweb/js/owl.carousel.min.js',
        'themeweb/js/jquery.pagepiling.min.js',
        'themeweb/js/scripts.js'
    ];
    public $depends = [
      //  'yii\web\YiiAsset',
        // 'yii\bootstrap4\BootstrapAsset',
    ];
}



