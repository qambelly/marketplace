<?php
use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\User */

$this->title = $model->username;

?>
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
       <?= Html::encode($this->title) ?>
           
        </h1>
        
        <ol class="breadcrumb" >
          <?php  $this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Users'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title; ?>
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="index"><i class="fa fa-user"></i>User</a></li>
            <li class="active"> <?= Html::encode($this->title) ?></li>
        </ol>
       
    </section>
    <br>
       <!-- Main content -->
    <section class="content">
        
        <div class="">
            
              <!-- general form elements -->
             
              
                <!-- form start -->
             
                  <div class="box-body">
                                                 <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
           // 'id',
            'username',
            'email:email',
            //'password_hash',
            [
                'attribute'=>'status',
                'value' => $model->getStatusName(),
            ],
            [
                'attribute'=>'item_name',
                'value' => $model->getRoleName(),
            ],
            //'auth_key',
            //'password_reset_token',
            //'account_activation_token',
            'created_at:date',
            'updated_at:date',
        ],
    ]) ?>
                 
                  </div><!-- /.box-body -->
    
              <!-- /.box-body -->
   

              <div class="center-block" style="padding-left: 15px">
                <?= Html::a(Yii::t('app', 'Back'), ['index'], ['class' => 'btn btn-warning']) ?>
        <?= Html::a(Yii::t('app', 'Update'), ['update', 'id' => $model->id], [
            'class' => 'btn btn-primary']) ?>
        <?= Html::a(Yii::t('app', 'Delete'), ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => Yii::t('app', 'Are you sure you want to delete this user?'),
                'method' => 'post',
            ],
        ]) ?>
                  </div>
              <hr>
                 
               
              </div><!-- /.box -->

        
           

     

   
    </section><!-- /.content -->
    </div>
 