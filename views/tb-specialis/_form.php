<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\TbSpecialis */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="tb-specialis-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'nama_spes')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'desk_spes')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'icon_spes')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'about_id')->textInput() ?>

  
	<?php if (!Yii::$app->request->isAjax){ ?>
	  	<div class="form-group">
	        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
	    </div>
	<?php } ?>

    <?php ActiveForm::end(); ?>
    
</div>
