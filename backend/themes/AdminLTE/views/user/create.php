<?php
use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $user common\models\User */
/* @var $role common\rbac\models\Role */
?>

    <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
        <?php echo $this->title = Yii::t('app', 'Create User'); ?>
           
        </h1>
        <ol class="breadcrumb">
          <?php  $this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Users'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title; ?>
            <li><a href="index"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="index"><i class="fa fa-user"></i>User</a></li>
            <li class="active"><?php echo $this->params['breadcrumbs'][] = $this->title; ?></li>
        </ol>
    </section>
    <br>
       <!-- Main content -->
    <section class="content">
    
        <?= $this->render('_form', [
            'user' => $user,
            'role' => $role,
        ]) ?>

    
    </section><!-- /.content -->
    </div>
    
