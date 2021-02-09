<?php

use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\TbTools */
?>
<div class="tb-tools-view">
 
    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'nama_tool',
            'img',
            'about_id',
        ],
    ]) ?>

</div>
