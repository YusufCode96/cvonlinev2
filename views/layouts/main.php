

<?php

/* @var $this \yii\web\View */
/* @var $content string */

use app\widgets\Alert;
use yii\helpers\Html;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;


AppAsset::register($this);

?>
<?php 
use yii\helpers\Url;
?>


<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <style>
        .loader {
            position: fixed;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            background-color: #F5F8FA;
            z-index: 9998;
            text-align: center;
        }

        .plane-container {
            position: absolute;
            top: 50%;
            left: 50%;
        }
    </style>
    <link rel="stylesheet" href="<?php echo Yii::getAlias('@web') ?>/themeadmin/assets/css/app.css">
    <link rel="stylesheet" href=" https://use.fontawesome.com/releases/v5.3.1/css/all.css">
   
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

<!-- Pre loader -->
<div id="loader" class="loader">
    <div class="plane-container">
        <div class="preloader-wrapper small active">
            <div class="spinner-layer spinner-blue">
                <div class="circle-clipper left">
                    <div class="circle"></div>
                </div><div class="gap-patch">
                <div class="circle"></div>
            </div><div class="circle-clipper right">
                <div class="circle"></div>
            </div>
            </div>

            <div class="spinner-layer spinner-red">
                <div class="circle-clipper left">
                    <div class="circle"></div>
                </div><div class="gap-patch">
                <div class="circle"></div>
            </div><div class="circle-clipper right">
                <div class="circle"></div>
            </div>
            </div>

            <div class="spinner-layer spinner-yellow">
                <div class="circle-clipper left">
                    <div class="circle"></div>
                </div><div class="gap-patch">
                <div class="circle"></div>
            </div><div class="circle-clipper right">
                <div class="circle"></div>
            </div>
            </div>

            <div class="spinner-layer spinner-green">
                <div class="circle-clipper left">
                    <div class="circle"></div>
                </div><div class="gap-patch">
                <div class="circle"></div>
            </div><div class="circle-clipper right">
                <div class="circle"></div>
            </div>
            </div>
        </div>
    </div>
</div>
<div id="app">
<aside class="main-sidebar fixed offcanvas shadow" data-toggle='offcanvas'>
    <section class="sidebar">
        <div class="w-80px mt-3 mb-3 ml-3">
            <img src="<?php  echo Yii::getAlias('@web') ?>/themeadmin/assets/img/basic/logo.png" alt="">
        </div>
        <div class="relative">
            <a data-toggle="collapse" href="#userSettingsCollapse" role="button" aria-expanded="false"
               aria-controls="userSettingsCollapse" class="btn-fab btn-fab-sm absolute fab-right-bottom fab-top btn-primary shadow1 ">
                <i class="icon icon-cogs"></i>
            </a>
            <div class="user-panel p-3 light mb-2">
                <div>
                    <div class="float-left image">
                        <img class="user_avatar" src="<?php  echo Yii::getAlias('@web') ?>/themeadmin/assets/img/dummy/u2.png" alt="User Image">
                    </div>
                    <div class="float-left info">
                        <h6 class="font-weight-light mt-2 mb-1"><?php echo Yii::$app->user->identity->username  ?></h6>
                        <a href="#"><i class="icon-circle text-primary blink"></i> Online</a>
                    </div>
                </div>
                <div class="clearfix"></div>
                <div class="collapse multi-collapse" id="userSettingsCollapse">
                    <div class="list-group mt-3 shadow">
                    <a href="<?php  echo Url::toRoute(['site/logout']); ?>" data-method="post" class="list-group-item list-group-item-action ">
                    <i class="mr-2 icon-sign-out text-blue"></i>Log Out
                    </a>
                     
                        
                        
                    </div>
                </div>
            </div>
        </div>
        <ul class="sidebar-menu">
            <li class="header"><strong>MAIN NAVIGATION</strong></li>
            <li class="treeview"><a href="#">
                <i class="icon icon-sailing-boat-water purple-text s-18"></i> <span>Master</span> <i
                    class="icon icon-angle-left s-18 pull-right"></i>
            </a>
                <ul class="treeview-menu">
                    <li><a href="<?php echo Url::toRoute(['tb-about/index']) ?>"><i class="icon icon-folder5"></i>Master About</a>
                    </li>
                    <li><a href="<?php echo Url::toRoute(['tb-award/index']) ?>"><i class="icon icon-folder5"></i>Master Award</a>
                    </li>
                    <li><a href="<?php echo Url::toRoute(['tb-contact/index']) ?>"><i class="icon icon-folder5"></i>Master Contact</a>
                    </li>
                    <li><a href="<?php echo Url::toRoute(['tb-experience/index']) ?>"><i class="icon icon-folder5"></i>Master Experience</a>
                    </li>
                    <li><a href="<?php echo Url::toRoute(['tb-portofolio/index']) ?>"><i class="icon icon-folder5"></i>Master Portofolio</a>
                    </li>
                    <li><a href="<?php echo Url::toRoute(['tb-project/index']) ?>"><i class="icon icon-folder5"></i>Master Project</a>
                    </li>
                    <li><a href="<?php echo Url::toRoute(['tb-skill/index']) ?>"><i class="icon icon-folder5"></i>Master Skill</a>
                    </li>
                    <li><a href="<?php echo Url::toRoute(['tb-specialis/index']) ?>"><i class="icon icon-folder5"></i>Master Specialis</a></li>
                    <li><a href="<?php echo Url::toRoute(['tb-tools/index']) ?>"><i class="icon icon-folder5"></i> Master Tools</a></li>
                    <li><a href="<?php echo Url::toRoute(['tb-work/index']) ?>"><i class="icon icon-folder5"></i>Master Work</a></li>
                   
                </ul>
            </li>
            
        </ul>
    </section>
</aside>
<!--Sidebar End-->
<div class="has-sidebar-left">
    <div class="pos-f-t">
    <div class="collapse" id="navbarToggleExternalContent">
        <div class="bg-dark pt-2 pb-2 pl-4 pr-2">
            <div class="search-bar">
                <input class="transparent s-24 text-white b-0 font-weight-lighter w-128 height-50" type="text"
                       placeholder="start typing...">
            </div>
            <a href="#" data-toggle="collapse" data-target="#navbarToggleExternalContent" aria-expanded="false"
               aria-label="Toggle navigation" class="paper-nav-toggle paper-nav-white active "><i></i></a>
        </div>
    </div>
</div>
    <div class="sticky">
        <div class="navbar navbar-expand navbar-dark d-flex justify-content-between bd-navbar blue accent-3">
            <div class="relative">
                <a href="#" data-toggle="push-menu" class="paper-nav-toggle pp-nav-toggle">
                    <i></i>
                </a>
            </div>
            <!--Top Menu Start -->
<div class="navbar-custom-menu">
    <ul class="nav navbar-nav">
      
     
    </ul>
</div>
        </div>
    </div>
</div>
<div class="page has-sidebar-left height-full">
    <header class="blue accent-3 relative nav-sticky">
        <div class="container-fluid text-white">
            <div class="row p-t-b-10 ">
                <div class="col">
                    <h4>
                        <i class="icon-box"></i>
                        Dashboard
                    </h4>
                </div>
            </div>
            
        </div>
    </header>
    <div class="container-fluid relative animatedParent animateOnce">
    <div class="row">
        <div class="col-md-12">
            <div class="counter-box white r-5 p-3">
            <?= $content ?>
            </div>
        </div>
    </div>
    </div>
</div>

<!-- Add the sidebar's background. This div must be placed
         immediately after the control sidebar -->
<div class="control-sidebar-bg shadow white fixed"></div>
</div>
<script src="<?php echo Yii::getAlias('@web') ?>/themeadmin/assets/js/app.js"></script>


<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage()

?>
<script>
// if (typeof jQuery != 'undefined') {  
//     // jQuery is loaded => print the version
//     alert(jQuery.fn.jquery);
// }
</script>


