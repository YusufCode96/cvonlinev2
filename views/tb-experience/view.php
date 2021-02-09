<?php

use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\TbExperience */
?>
<div class="tb-experience-view">
 
    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'foto_exper',
            'tahun',
            'judul_exper',
            'deskripsi_exper',
            'about_id',
            'alamat_exper',
        ],
    ]) ?>

</div>
