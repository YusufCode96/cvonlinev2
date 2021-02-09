<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\TbEducation */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="tb-education-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'nama_instan')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nama_edu')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tahun')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'alamat_edu')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'deskripsi_edu')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'about_id')->textInput() ?>

  
	<?php if (!Yii::$app->request->isAjax){ ?>
	  	<div class="form-group">
	        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
	    </div>
	<?php } ?>

    <?php ActiveForm::end(); ?>
    
</div>
