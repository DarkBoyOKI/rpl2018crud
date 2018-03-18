<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Automata */

$this->title = 'Create Automata';
$this->params['breadcrumbs'][] = ['label' => 'Automatas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="automata-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
