<?php

use app\models\Service;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var app\models\ServiceSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

// 



use yii\web\View;

// ...

// Register your CSS file
$this->registerCssFile('@web/css/stylehome2.css', ['depends' => [yii\web\YiiAsset::class]]);
?>

<svg width="118" height="48" viewBox="0 0 118 48" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M27.4157 30.6287C25.5165 28.7853 24.5685 26.4461 24.5685 23.6082C24.5685 20.7703 25.5134 18.4343 27.4064 16.6002C29.2994 14.7568 31.6199 13.8335 34.368 13.8335C37.1161 13.8335 39.4273 14.7568 41.3048 16.6002C43.1854 18.4436 44.1241 20.7796 44.1241 23.6051C44.1241 26.4306 43.1823 28.7698 41.3017 30.6256C39.4211 32.469 37.1099 33.3953 34.368 33.4077C31.6292 33.417 29.3118 32.4907 27.4188 30.6318L27.4157 30.6287ZM38.0207 27.6018C38.9347 26.6103 39.3932 25.275 39.3901 23.602C39.3901 21.929 38.9285 20.5937 38.0145 19.5992C37.1006 18.6078 35.8737 18.109 34.3401 18.109C32.8065 18.109 31.5827 18.6047 30.6688 19.5992C29.7548 20.5906 29.2963 21.9259 29.2994 23.5958C29.2994 25.2688 29.761 26.601 30.675 27.5925C31.592 28.5839 32.8158 29.0827 34.3494 29.0827C35.883 29.0827 37.1037 28.5901 38.0207 27.6018Z" fill="#171D35"></path>
<path d="M45.512 17.6377V14.1027L60.5815 14.0903V17.6284H55.3549L55.3673 33.1874H50.7138V17.6253L45.5089 17.6346L45.512 17.6377Z" fill="#171D35"></path>
<path d="M64.7767 30.6011C62.8775 28.7515 61.9294 26.4093 61.9294 23.5807C61.9294 20.7521 62.8744 18.4161 64.7674 16.5757C66.6572 14.7323 68.9778 13.8091 71.7289 13.8091C74.4801 13.8091 76.7914 14.7323 78.6657 16.5757C80.5432 18.413 81.482 20.7428 81.482 23.5714C81.482 26.4 80.5432 28.7391 78.6626 30.5919C76.7759 32.4353 74.4615 33.3616 71.7258 33.3709C68.9902 33.3802 66.6727 32.4569 64.7767 30.6042V30.6011ZM75.3817 27.5711C76.2956 26.5797 76.7542 25.2444 76.7511 23.5745C76.7511 21.9015 76.2894 20.5693 75.3755 19.5779C74.4615 18.5865 73.2378 18.0877 71.7042 18.0877C70.1706 18.0877 68.9468 18.5834 68.0328 19.5779C67.1158 20.5693 66.6603 21.9046 66.6603 23.5776C66.6603 25.2506 67.122 26.5828 68.0359 27.5742C68.953 28.5657 70.1768 29.0645 71.7104 29.0645C73.244 29.0645 74.4677 28.5687 75.3817 27.5742V27.5711Z" fill="#171D35"></path>
<path d="M87.4955 25.7398V33.1661H82.8482L82.8358 14.0659H90.3675C92.5826 14.0659 94.3083 14.6329 95.5383 15.7668C96.728 16.8109 97.4034 18.3197 97.391 19.8998C97.3755 21.0523 97.0254 22.1769 96.3872 23.1374C95.718 24.1876 94.6212 24.9312 93.0969 25.368L97.7783 33.1444H92.3379L88.0345 25.7367H87.4924L87.4955 25.7398ZM87.4955 17.6071V22.2048H90.3768C90.9964 22.2389 91.6036 22.0127 92.0498 21.579C92.4649 21.1328 92.6849 20.538 92.657 19.9307C92.6787 19.3111 92.4463 18.7101 92.0188 18.2608C91.585 17.8178 90.9809 17.5792 90.3613 17.6102H87.4924L87.4955 17.6071Z" fill="#171D35"></path>
<path d="M110.416 33.1471H105.759V27.0003L99.1414 14.0623H104.418L108.098 22.6814L111.735 14.0562H117.008L110.412 27.0096V33.144L110.416 33.1471Z" fill="#171D35"></path>
<path d="M23.2115 18.4063V13L11.7204 21.4797L0 13.0186L0.0123927 33.231H4.43657L4.42728 22.7561L11.615 27.5583L23.2115 18.4063Z" fill="#171D35"></path>
<path d="M16.2901 27.1123L23.2145 22.0034V27.7474L16.2932 32.8656V27.1123H16.2901Z" fill="#EC1D32"></path>
<path d="M16.2901 27.1118C16.2901 27.2172 19.9862 30.1387 19.9862 30.1387L16.2963 32.8651V27.4371" fill="#AD1E2E"></path>
<path d="M117.111 34.644H0V48.0002H117.111V34.644Z" fill="#EC1D32"></path>
<path d="M76.0166 46.1909C75.747 45.9399 75.6107 45.6301 75.6107 45.2583C75.6107 44.8866 75.747 44.5612 76.0166 44.3041C76.2861 44.0469 76.6362 43.9199 77.0638 43.9199C77.4913 43.9199 77.8259 44.0469 78.0954 44.3041C78.365 44.5612 78.5013 44.8773 78.5013 45.2583C78.5013 45.6394 78.365 45.9399 78.0954 46.1909C77.8259 46.4418 77.482 46.5689 77.0638 46.5689C76.6455 46.5689 76.2892 46.4418 76.0166 46.1909Z" fill="white"></path>
<path d="M80.1651 38.8048C80.5927 38.0303 81.1875 37.4292 81.9497 36.9986C82.7118 36.5679 83.5793 36.3511 84.5459 36.3511C85.7325 36.3511 86.7456 36.664 87.5914 37.2898C88.4341 37.9156 89.0011 38.7707 89.2861 39.852H86.6093C86.411 39.4337 86.1291 39.1177 85.7635 38.8978C85.3979 38.6809 84.9828 38.5694 84.518 38.5694C83.7683 38.5694 83.161 38.8296 82.6963 39.3532C82.2316 39.8737 81.9992 40.5739 81.9992 41.4445C81.9992 42.315 82.2316 43.0152 82.6963 43.5357C83.161 44.0562 83.7683 44.3196 84.518 44.3196C84.9828 44.3196 85.3979 44.2111 85.7635 43.9912C86.1291 43.7743 86.411 43.4552 86.6093 43.0369H89.2861C89.0011 44.1182 88.4372 44.9702 87.5914 45.5929C86.7456 46.2156 85.7325 46.5255 84.5459 46.5255C83.5793 46.5255 82.7118 46.3086 81.9497 45.8779C81.1875 45.4473 80.5896 44.8462 80.1651 44.0779C79.7376 43.3096 79.5238 42.4328 79.5238 41.4445C79.5238 40.4561 79.7376 39.5794 80.1651 38.8048Z" fill="white"></path>
<path d="M92.9234 45.8987C92.1396 45.4619 91.5199 44.8515 91.0583 44.0708C90.5967 43.2869 90.3674 42.4071 90.3674 41.4311C90.3674 40.4552 90.5967 39.5753 91.0583 38.7977C91.5168 38.0201 92.1396 37.4128 92.9234 36.976C93.7073 36.5391 94.5685 36.3223 95.5073 36.3223C96.446 36.3223 97.3073 36.5422 98.0912 36.976C98.875 37.4128 99.4915 38.0201 99.9408 38.7977C100.39 39.5753 100.616 40.4521 100.616 41.4311C100.616 42.4102 100.387 43.29 99.9315 44.0708C99.476 44.8546 98.8595 45.4619 98.0819 45.8987C97.3042 46.3355 96.446 46.5524 95.5042 46.5524C94.5623 46.5524 93.7042 46.3355 92.9203 45.8987H92.9234ZM97.422 43.5379C97.9022 43.0081 98.1407 42.3048 98.1407 41.4311C98.1407 40.5575 97.9022 39.8449 97.422 39.3182C96.9417 38.7915 96.3035 38.5282 95.5073 38.5282C94.7111 38.5282 94.0573 38.7884 93.5802 39.312C93.1 39.8325 92.8615 40.542 92.8615 41.4311C92.8615 42.3203 93.1 43.0174 93.5802 43.5441C94.0604 44.0708 94.7018 44.3341 95.5073 44.3341C96.3128 44.3341 96.9417 44.0677 97.422 43.5379Z" fill="white"></path>
<path d="M113.285 36.4619V46.4535H110.849V40.4616L108.616 46.4535H106.651L104.402 40.4462V46.4535H101.967V36.4619H104.842L107.646 43.3801L110.422 36.4619H113.281H113.285Z" fill="white"></path>
</svg>

  <div class="row">
        <div class="listing col-md-9" >
    <?php foreach ($products as $product): ?>

            <!-- ======================================arabic========================= -->
            <div class="row col-md-12 mb-5" style="border: 1px solid lightgray;">
                <div class="col-md-2 p-2 pl-2">
                    <div class="icon ">
                        <div class="overlap-group">
                            <div class="rectangle-3 ml-3"></div>
                    <img class="icon-1" style="width: 100%;" src="<?= Yii::getAlias('@web') . '/uploads/' . $product->iconName?>" alt="Icon" />
                        </div>
                    </div>
                </div>

                <div class="col-md-10">
                    <div class="text col-md-12 ">
                        <div class="div">
                            <div class="text-wrapper"><?= Html::encode($product->title) ?></div>
                            <p class="text-wrapper-2"><?= Html::encode($product->category->name) ?></p>
                        </div>
                        <div class="row col-md-12" >
                            
                            <div class="price-button col-md-5 row">

                                <div class="price col-md-6 ">
                                    <div class="cash-price ml-0">
                                        <div class="rectangle-2"></div>
                                        <div class="price-2 ml-0">
                                            <div class="text-wrapper-4">Warranty</div>
                                            <div class="number">
                                                <div class="text-wrapper-5"><?= Html::encode($product->warranty) ?> Years</div>
                                                
                                            </div>
                                        </div>
                                       
                                    </div>
                                    <div class="cash-price-2  ml-0">
                                        <div class="rectangle"></div>

                                        <div class="price-2">
                                            <div class="text-wrapper-4">Price</div>
                                            <div class="number">
                                                
                                                <div class="text-wrapper-7"><?= Html::encode($product->price) ?></div>

                                                <div class="text-wrapper-6">SAR</div>
                                            </div>
                                            
                                        </div>
                                        
                                        
                                    </div>
                                </div>
 <div class="button-large-icon col-md-6">
                                <div class="text-icon">
                                    <div class="text-wrapper-3">Service Purchase Request</div>
                                </div>
                            </div>
                            </div>
                           
                        </div>
                    </div>
                </div>

            </div>
                    <?php endforeach; ?>

            
        </div>
                <!-- <div class="col-md-1 mr-2 mt-2" style="border: 2px solid gray; width: 100%; background-color: lightgray; height:1000px;"></div> -->

    </div>




    
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>