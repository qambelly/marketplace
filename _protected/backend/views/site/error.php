<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $name string */
/* @var $message string */
/* @var $exception Exception */
?>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            $this->title = $name;
            <?= Html::encode($this->title) ?>
        </h1>

    </section>
    <br>
    <section class="content well">
        <?= nl2br(Html::encode($message)) ?>
    </section><!-- /.content -->
</div>
