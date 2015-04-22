<?php
use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $user common\models\User */
/* @var $role common\rbac\models\Role; */

$this->title = Yii::t('app', 'Update User') . ': ' . $user->username;



?>

  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
      <?= Html::encode($this->title) ?>
           
        </h1>
        <ol class="breadcrumb">
          <?php  $this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Users'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title; ?>
            <li><a href="index"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="view?id=<?php echo $user->id; ?>"><i class="fa fa-user"></i>View</a></li>
            <li class="active">Update</li>
        </ol>
    </section>
    <br>
       <!-- Main content -->
    <section class="content">
    
        <div class="">
        <?= $this->render('_form', [
            'user' => $user,
            'role' => $role,
        ]) ?>
        </div>
    </section><!-- /.content -->
    </div>

