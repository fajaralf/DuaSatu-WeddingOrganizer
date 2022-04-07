<?php

/** @var yii\web\View $this */

use Codeception\Lib\Interfaces\Web;
use yii\helpers\Html;

$this->title = "About Us";
$this->params["breadcrumbs"][] = $this->title;
?>
<div class="site-about">
    <div class="jumbotron text-center bg-transparent">
        <h1>Meet Our Crew</h1>
        <p>
            WE SET OUR MINDS TO SUPPORT AND GUIDE OUR CLIENTS AS WELL AS TO CURATE EACH EVENT. 
            WE ARE A CREATIVE, BRIGHT TEAM OF MULTI-LINGUAL PLANNERS WHO PLACE INTEGRITY, 
            CREATIVITY AND ATTENTION TO DETAIL AT THE CORE OF ALL WE DO.
        </p>
    
        <div class="row">
            <div class="col-lg-4">
                <div class="jumbotron text-center bg-transparent">
                    <p>
                        <?= Html::img('@web/assets/images/crew/lukman.jpg', ['class'=>'img-thumbnail', 'alt'=>'Lukman']) ?>
                    </p>
                    <p>Lukman</p>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="jumbotron text-center bg-transparent">
                    <p>
                        <?= Html::img('@web/assets/images/crew/putri.jpg', ['class'=>'img-thumbnail', 'alt'=>'Putri']) ?>
                    </p>
                    <p>Putri</p>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="jumbotron text-center bg-transparent">
                    <p>
                        <?= Html::img('@web/assets/images/crew/rahma.jpg', ['class'=>'img-thumbnail', 'alt'=>'Rahma']) ?>
                    </p>
                    <p>Rahma</p>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="jumbotron text-center bg-transparent">
                    <p>
                        <?= Html::img('@web/assets/images/crew/yasin.jpg', ['class'=>'img-thumbnail', 'alt'=>'Yasin']) ?>
                    </p>
                    <p>Yasin</p>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="jumbotron text-center bg-transparent">
                    <p>
                        <?= Html::img('@web/assets/images/crew/fajar.jpg', ['class'=>'img-thumbnail', 'alt'=>'Fajar']) ?>
                    </p>
                    <p>Fajar</p>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="jumbotron text-center bg-transparent">
                    <p>
                        <?= Html::img('@web/assets/images/crew/eko.jpg', ['class'=>'img-thumbnail', 'alt'=>'Eko']) ?>
                    </p>
                    <p>Eko</p>
                </div>
            </div>

        </div>
    </div>
</div>