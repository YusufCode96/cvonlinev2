<?php 
use yii\helpers\Url;
?>
  <div class="animsition">  
    <div class="loader"><div class="spinner"><div class="double-bounce1"></div><div class="double-bounce2"></div></div></div>

    <!-- Content CLick Capture-->

    <div class="click-capture"></div>

   <!-- Sidebar Menu-->

   <div class="menu"> 
      <span class="close-menu icon-cross2 right-boxed"></span>
      <ul class="menu-list right-boxed">
        <li  data-menuanchor="page1">
          <a  href="#page1">Home</a>
        </li>
        <li  data-menuanchor="page2">
          <a href="#page2">Spesialisasi</a>
        </li>
        
        <li  data-menuanchor="page3">
          <a href="#page3">Pengalaman</a>
        </li>
        <li  data-menuanchor="page4">
          <a href="#page4">Projek</a>
        </li>
       
        <li  data-menuanchor="page5">
          <a href="#page5">Pengalaman Kerja</a>
        </li>
        <li  data-menuanchor="page6">
          <a href="#page6">Alat & Skill</a>
        </li>
      </ul>
      <div class="menu-footer right-boxed">
        <div class="social-list">
          <a href="" class="icon ion-social-twitter"></a>
          <a href="" class="icon ion-social-facebook"></a>
          <a href="" class="icon ion-social-googleplus"></a>
          <a href="" class="icon ion-social-linkedin"></a>
          <a href="" class="icon ion-social-dribbble-outline"></a>
        </div>
        <div class="copy">© Yusuf 2021. All Rights Reseverd</div>
      </div>
    </div>

    <!-- Navbar -->

    <header class="navbar navbar-fullpage boxed">
      <div class="navbar-bg"></div>
      <a class="brand" href="<?php echo Url::toRoute(['site/index'])  ?>">
      <img alt="" src="<?php  echo Yii::getAlias('@web') ?>/themeweb/images/brand.png">
        <div class="brand-info">
      
          <div class="brand-name"><?php echo $about['nama']; ?></div>
         
        </div>
      </a>

      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse" aria-expanded="false">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
  
      <div class="contacts d-none d-md-block">
        <div class="contact-item">
        <?php echo $about['no_hp']; ?>
        </div>
        <div class="contact-item spacer">
          /
        </div>
        <div class="contact-item">
          <a href="<?php echo $about['email']; ?>"><?php echo $about['email']; ?></a>
        </div>
      </div>
  
    </header>

    <div class="content">
      <div class="container">
        <div class="row row-project">
          <div class="col-project-name col-md-6  mt-5 mb-5 mb-md-0">
            <h1><?php echo $project['nama_project']  ?></h1>
            <!-- <div class="social-list social-list-detail">
              <a href="" class="icon ion-social-twitter"></a>
              <a href="" class="icon ion-social-facebook"></a>
              <a href="" class="icon ion-social-googleplus"></a>
              <a href="" class="icon ion-social-linkedin"></a>
              <a href="" class="icon ion-social-dribbble-outline"></a>
            </div> -->
          </div>
          <div class="col-project-info col-md-6">
            <div class="row">
              <div class="col-md-6 mt-5">
                <h5>Client</h5>
                <p><?php echo $project['client_project']  ?></p>
              </div>
              <div class="col-md-6 mt-5">
                <h5>Team</h5>
                <p>
                <?php echo $project['team_project']  ?>
                </p>
              </div>
              <div class="col-md-6 mt-5">
                <h5>Services</h5>
                <p><?php echo $project['services_project']  ?></p>
              </div>
              <div class="col-md-6 mt-5">
                <h5>Date</h5>
                <p><?php echo $project['date_project']  ?></p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <img alt="" class="image-holder wow fadeIn" src="<?php  echo Yii::getAlias('@web') ?>/images/project/<?php echo $project['image1']  ?>">
      <div class="container">
        <p class="project-detail-text text-center"><?php echo $project['desk_project']  ?>. <a href="https://example.domain/denima6vsco" target="_blank" class="underline">https://example.domain/denima6vsco</a>
        </p>
        <img alt="" class="image-holder wow fadeInLeft" src="<?php  echo Yii::getAlias('@web') ?>/images/project/<?php echo $project['image2']  ?>">
        <img alt="" class="image-holder wow fadeInRight" src="<?php  echo Yii::getAlias('@web') ?>/images/project/<?php echo $project['image3']  ?>">
        <p class="project-detail-text text-center"><?php echo $project['desk2_project']  ?>
        </p>
       </div>
      </div>
    </div>