<?php

/** @var yii\web\View $this */
/** @var yii\bootstrap4\ActiveForm $form */
/** @var \frontend\models\ContactForm $model */

use yii\bootstrap4\Html;
use yii\bootstrap4\ActiveForm;
use yii\captcha\Captcha;

$this->title = 'Contact';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-contact">
    <div class="jumbotron text-center bg-transparent">
        <p>
            Sampaikan Ide Anda!
        </p>
        <p>
            Mengenal klien kami adalah salah satu langkah terpenting bagi kami. Kami senang mengetahui ide-ide, apa yang orang bayangkan dan bagaimana kami dapat membantu mereka mencapai mewujudkan kesempurnaan pada salah satu moment terpenting dalam hidup mereka. Kami terbuka untuk semua ide, biarkan kami membantu Anda mewujudkan impian Anda! Hubungi Kami!
        </p>
        <h1><?= Html::encode($this->title) ?></h1>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <div class="jumbotron text-center bg-transparent">
                <p>08129479079</p>
            </div>
          </div>

        <div class="col-lg-6">
            <div class="jumbotron text-center bg-transparent">
                <p>Info@duasatuwo.com</p>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-5">
            <?php $form = ActiveForm::begin(['id' => 'contact-form']); ?>

                <?= $form->field($model, 'name')->textInput(['autofocus' => false]) ?>

                <?= $form->field($model, 'email') ?>

                <?= $form->field($model, 'subject') ?>

                <?= $form->field($model, 'body')->textarea(['rows' => 6]) ?>

                <!-- $form->field($model, 'verifyCode')->widget(Captcha::className(), [
                    'template' => '<div class="row"><div class="col-lg-3">{image}</div><div class="col-lg-6">{input}</div></div>',
                ])  -->

                <div class="form-group">
                    <?= Html::submitButton('Submit', ['class' => 'btn btn-primary', 'name' => 'contact-button']) ?>
                </div>

            <?php ActiveForm::end(); ?>
        </div>  
    </div>
</div>