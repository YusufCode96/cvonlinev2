<?php

use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\TbContact */
?>
<div class="tb-contact-view">
 
    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'nama_user',
            'email:email',
            'subject',
            'message:ntext',
            'about_id',
        ],
    ]) ?>

</div>
