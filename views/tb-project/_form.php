<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\TbProject */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="tb-project-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'nama_project')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'desk_project')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'desk2_project')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'client_project')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'team_project')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'services_project')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'date_project')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'about_id')->textInput() ?>
    
    <?= $form->field($model, 'image1')->fileInput() ?>

    <?= $form->field($model, 'image2')->fileInput() ?> 

    <?= $form->field($model, 'image3')->fileInput() ?>
  
	<?php if (!Yii::$app->request->isAjax){ ?>
	  	<div class="form-group">
	        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
	    </div>
	<?php } ?>

    <?php ActiveForm::end(); ?>
    
</div>
