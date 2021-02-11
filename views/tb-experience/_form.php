<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\TbExperience */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="tb-experience-form">

<?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]); ?>

    <?= $form->field($model, 'foto_exper')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tahun')->textInput() ?>

    <?= $form->field($model, 'judul_exper')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'deskripsi_exper')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'about_id')->textInput() ?>

    <?= $form->field($model, 'alamat_exper')->textInput(['maxlength' => true]) ?>

  
	<?php if (!Yii::$app->request->isAjax){ ?>
	  	<div class="form-group">
	        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
	    </div>
	<?php } ?>

    <?php ActiveForm::end(); ?>
    
</div>
