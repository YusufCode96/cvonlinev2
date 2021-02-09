<?php

use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\TbPortofolio */
?>
<div class="tb-portofolio-view">
 
    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'gambar_porto',
            'judul_porto',
            'about_id',
            'desk_porto',
        ],
    ]) ?>

</div>
