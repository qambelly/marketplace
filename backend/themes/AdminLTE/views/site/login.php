<?php
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \common\models\LoginForm */

$this->title = Yii::t('app', 'Login');
?>
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
  <body class="login-page">
    <div class="login-box">
      <div class="login-logo">
          <b>Market</b>place</div><!-- /.login-logo -->
      <div class="login-box-body">
        <p class="login-box-msg"><?= Yii::t('app', 'Sign in to start your session:') ?></p>
      
        <?php $form = ActiveForm::begin(['id' => 'login-form']); ?>
                 <div class="form-group has-feedback">
                       <?php if ($model->scenario === 'lwe'): ?>
                   <?= $form->field($model, 'email')->textInput(array('placeholder' => 'Email')) ?> 
        <?php else: ?>
            <?= $form->field($model, 'username')->textInput(array('placeholder' => 'Username')) ?>
        <?php endif ?>
           
            <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
          </div>
          <div class="form-group has-feedback">
              <?= $form->field($model, 'password')->passwordInput(array('placeholder' => 'Password')) ?>
           
            <span class="glyphicon glyphicon-lock form-control-feedback"></span>
          </div>
          <div class="row">
            <div class="col-xs-8">    
              <div class="checkbox icheck">
                      <!-- jQuery 2.1.3 -->
  
  
                <label>
                 <?= $form->field($model, 'rememberMe')->checkbox(array('id'=>'remember')) ?>
                   <script>
      $(function () {
        $('remember').iCheck({
          checkboxClass: 'icheckbox_square-blue',
          radioClass: 'iradio_square-blue',
          increaseArea: '20%' // optional
        });
      });
    </script>
                </label>
              </div>                        
            </div><!-- /.col -->
            <div class="col-xs-4">
                <?= Html::submitButton(Yii::t('app', 'Sign In'), ['class' => 'btn btn-primary btn-block btn-flat', 'name' => 'login-button']) ?>
              
            </div><!-- /.col -->
          </div>
         <?php ActiveForm::end(); ?>
 
        <div class="social-auth-links text-center">
          <p>- OR -</p>
          <a href="#" class="btn btn-block btn-social btn-facebook btn-flat"><i class="fa fa-facebook"></i> Sign in using Facebook</a>
          <a href="#" class="btn btn-block btn-social btn-google-plus btn-flat"><i class="fa fa-google-plus"></i> Sign in using Google+</a>
        </div><!-- /.social-auth-links -->

        <a href="#">I forgot my password</a><br>
        <a href="#" class="text-center">Register a new membership</a>

      </div><!-- /.login-box-body -->
    </div><!-- /.login-box -->


    
  </body>
  

