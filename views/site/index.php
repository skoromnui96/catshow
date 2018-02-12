<?php
use app\models\Programm\Programm;

Yii::setAlias('@images', dirname(dirname(dirname(__DIR__))) . '/web/img/');
?>
<header >
    <!--<div class="container">-->
    <!-- class="container" -->
    <!--menu row START -->
    <div class="row"  style="position: relative; z-index: 0;">
        <div  class=" col-lg-12 col-md-12 col-sm-12 col-xs-12 " style="position: absolute; z-index: 5;">
            <!--class="partners-slider" data-slick='{"slidesToShow": 4, "slidesToScroll": 4}' -->
            <div class="col-lg-12 col-md-12 col-xs-12 col-sm-12  owl-carousel owl-theme" id="owl-header" style="position: absolute; z-index: 3; overflow: hidden;">
                <?php foreach ($header_slider->images as $one):?>
                <div><div class="owl-img-wrapper" style="background-image: url(img/headersl/<?=$one->name?>); " ></div></div>
                <?php endforeach;?>
            </div>
        </div>


    </div>

    <!--menu row END  -->
    <!--Logo row START
Logo row END  -->

    <!--Last - news  row START -->
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" >
            <div class="hidden-sm hidden-xs col-md-4 col-lg-4 col-md-offset-1 col-lg-offset-1">
                <a class="navbar-brand" href="#"></a>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
                    <a class="navbar-brand hidden-sm hidden-md hidden-lg" href="#"></a>
                    <div class="container-fluid">
                        <!-- Brand and toggle get grouped for better mobile display -->
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                                <span class="sr-only"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                        </div>
                        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                            <ul class="nav navbar-nav navbar-right">
                                <li class="active">
                                    <a href="#about">О выставке</a>
                                </li>
                                <li>
                                    <a href="#juges">Судейский состав</a>
                                </li>
                                <li >
                                    <a href="#price">Стоимость</a>
                                </li>
                                <li>
                                    <a href="#sponsors">Программа</a>
                                </li>
                                <li>
                                    <a href="#partners">Партнёры</a>
                                </li>
                                <li>
                                    <a href="#footer">Контакты</a>
                                </li>
                                <li >
                                    <ul class="list-horizontal social-link-wraper">
                                        <li><a href="<?=$contacts->in_link?>"><div class="social-link-inst"></div></a></li>
                                        <li><a href="<?=$contacts->vk_link?>"><div class="social-link-facebook"></div></a></li>
                                    </ul>
                                </li>

                            </ul>
                        </div>
                    </div>
                </nav>
            </div>
            <div class="hidden-sm hidden-xs col-md-2 col-lg-2">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-md-offset-1 col-lg-offset-1 last-news" id="0">
                <span class="date-of-public"><i class="	glyphicon glyphicon-calendar"></i><?=$header_ex->date?></span>
                <h1><?=$header_ex->title?></h1>
                <!--сделать логику для отображения половину названия красными полову белыми символами -->
                <p> <?=$header_ex->description?></p>
            </div>
            <div class="col-md-2 col-lg-2">
            </div>
        </div>
        <!--Last - news -Buttons row START -->
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 col-md-offset-1 col-lg-offset-1">
                <div class="btn-group">
                    <!-- <a href="#rools-of-contest" class="btn-md whyte-btn" data-toggle="modal" data-target="#rools-of-contest">Правила выстваки</a> -->
                    <a href="#form" class="btn-md red-btn"><i class="glyxcon-for-registration"></i> Регистрация</a>
                </div>
            </div>
            <div class=" col-md-6 col-lg-6">
            </div>
        </div>

        <!--Last - news -Buttons row END  -->
    </div>
    <!--Last - news  row END  -->
    <!--List - of - partners  row START -->
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-0 col-lg-0">
            <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8 col-md-offset-1 col-lg-offset-1 " id="header-partners-list" >
                <ul class="list-inline header-partners-list">
                    <?php foreach ($header_ex->images as $one):?>
                        <li class="partner-1">
                            <a href="">
                                <img src="./img/headerex/<?=$one->name?>" alt="" class="partner-logo">
                            </a>
                        </li>
                    <?php endforeach;?>
                </ul>
            </div>
            <div class=" col-md-2 col-lg-2">
            </div>
        </div>
    </div>
    <!--List - of - partners  row END  -->
    <!--modal  row START  -->
    <div class="modal fade" id="rools-of-contest" role="dialog">
        <div class="modal-dialog modal-sm modal-md modal-lg ">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title text-center"> Правила участия </h4>
                </div>
                <div class="modal-body">
                    <p>Lorem ipsum dolor
                        sit amet, consectetur adipisicing elit. Consequatur distinctio eos, fugit mollitia porro veritatis voluptatum.
                        Alias, atque dolor ducimus earum, eveniet excepturi ipsum laudantium molestiae praesentium qui quia sed!</p>
                </div>
            </div>
        </div>
    </div>
    <!--modal  row END  -->
    <!-- Day - counter before event   row START -->
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <div class="col-xs-12 col-sm-12 col-md-5 col-lg-5  col-md-offset-1  col-lg-offset-1" >
                <h3 class="day-before">До выставки осталось</h3>
                <ul class="list-inline timer-row">
                    <li class="days">
                        <ul class="list-vertical">
                            <li>
                                <div class="round-container" id="day-counter" >0</div>
                            </li>
                            <li class="text-center"><span>Дней</span></li>
                        </ul>
                    </li>
                    <li class="hours">
                        <ul class="list-vertical">
                            <li>
                                <div class="round-container" id="hours-counter" >1</div>
                            </li>
                            <li class="text-center"><span>Часов</span></li>
                        </ul>
                    </li>
                    <li class="minutes">
                        <ul class="list-vertical">
                            <li>
                                <div class="round-container" id="minutes-counter">2</div>
                            </li>
                            <li class="text-center"><span>Минут</span></li>
                        </ul>
                    </li>
                    <li class="seconds">
                        <ul class="list-vertical">
                            <li>
                                <div class="round-container" id="seconds-counter">3</div>
                            </li>
                            <li class="text-center"><span>Секунд</span></li>
                        </ul>
                    </li>
                </ul>
            </div>
            <div class=" col-md-6 col-lg-6">
            </div>
        </div>
    </div>
    <!-- Day - counter before event   row START -->




    <!--    </div>-->
</header>
<!-- About   row START -->
<div class="row" data-row-id="0" id="about">
    <div class="col-xs-0 col-sm-0 col-md-0 col-lg-1"></div>
    <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
        <h2 class="section_title">О вытсавке</h2>
        <?=$about->description?> </div>
    <div class="col-xs-12 col-sm-12 col-md-7 col-lg-6 container-vor_vertical-slick">
        <!-- img-table   row START -->
        <div id="slick-container">
            <div class="" style=" margin: 0 auto; width: 240px;  padding: 0px; ">
                <div class="hero__title" id="animatedHeading">
                    <?php foreach ($about->images as $one):?>
                    <div class="slick-dupe"><div class="hero__title-misc  |  animate" >
                            <img src="img/about/<?=$one->name?>" alt="" >
                        </div></div>
                    <?php endforeach;?>
                </div>
            </div>

        </div>
        <div id="slick-container-active-item" >
        </div>
        <!-- img-table   row END -->
    </div>
    <div class="col-xs-0 col-sm-0 col-md-1 col-lg-1"></div>
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-10 col-lg-10 col-md-offset-1 col-lg-offset-1 ">

            <div class="list-image-egpt">
                <ul>
                    <li >
                        <div class="img-wrapp-egpt"><img src="img/egpt-1.png" alt=""></div>
                        <h5>
                            <span>Победитель рейтинга  <b>получает звание в родословную.</b></span>
                        </h5>
                    </li>

                    <li >
                        <div class="img-wrapp-egpt"><img src="img/egpt-2.png" alt=""></div>
                        <h5>
                            <span><b>Награждение победителей</b> от организаторов  рейтинга.</span>
                        </h5>
                    </li>

                    <li >
                        <div class="img-wrapp-egpt"><img src="img/egpt-3.png" alt=""></div>
                        <h5>
                            <span><b>Награждение победителей</b> от международных организаторов.</span>
                        </h5>
                    </li>

                    <li >
                        <div class="img-wrapp-egpt"><img src="img/egpt-4.png" alt=""></div>
                        <h5><span><b>Бесплатная фотосессия</b> по итогам рейтинга на одной из выставок</span></h5>
                    </li>

                    <li >
                        <div class="img-wrapp-egpt"><img src="img/egpt-5.png" alt=""></div>
                        <h5><span> <b>Поездка в Германию</b> на  Cat Olimpia</span></h5>
                        <!--<h5 class="text-center"><b>Ivan Ivanov</b></h5>
                        <h5 class="text-center">Президент асоциации</h5>-->
                    </li>
                </ul>
            </div>


            <!--         <ul class="list-horizontal egpt-list ">
                         <li  >
                             <ul class="list-vertical resp-margin">
                                 <li><div class="egpt-icons egpt-1"></div></li>
                                 <li><span>Победитель рейтинга  <b>получает звание в родословную.</b></span></li>
                             </ul>
                         </li>
                         <li >
                             <ul class="list-vertical resp-margin">
                                 <li><div class="egpt-icons egpt-2"></div></li>
                                 <li><span><b>Награждение победителей</b> от организаторов  рейтинга.</span></li>
                             </ul>
                         </li>
                         <li >
                             <ul class="list-vertical resp-margin">
                                 <li><div class="egpt-icons egpt-3"></div></li>
                                 <li><span><b>Награждение победителей</b> от международных оорганизаторов.</span></li>
                             </ul>
                         </li>
                         <li >
                             <ul class="list-vertical resp-margin">
                                 <li><div class="egpt-icons egpt-4"></div></li>
                                 <li><span><b>Бесплатная фотосессия</b> по итогам рейтинга на одной из выставок</span></li>
                             </ul>
                         </li>
                         <li >
                             <ul class="list-vertical resp-margin">
                                 <li><div class="egpt-icons egpt-5"></div></li>
                                 <li><span> <b>Поездка в Германию</b> на  Cat Olimpia</span></li>
                             </ul>
                         </li>
                     </ul>
         -->
        </div>
    </div>
</div>
<!-- About   row END -->
<!-- etc   row START -->
<div  id="juges-row">

    <div class="row" id="juges">
        <!-- Tabs col  START -->
        <div class="col-xs-12 col-sm-12 col-md-4  col-md-offset-1 col-lg-4">
            <h3 class="section_title">Судейский состав</h3>
            <!-- TAB NAVIGATION -->
            <ul class="nav nav-tabs  juge-tabs" role="tablist">
                <li class="active"><a href="#tab0" role="tab" data-toggle="tab"> Список всех Судьей </a></li>
                <li><a href="#FIFE" role="tab" data-toggle="tab">FIFE</a></li>
                <li><a href="#WCF" role="tab" data-toggle="tab">WCF</a></li>
                <li><a href="#CFA" role="tab" data-toggle="tab">CFA</a></li>
            </ul>
            <!-- TAB CONTENT -->
            <div class="tab-content">
                <!--  ДЛЯ  BACK-END-а  всю выкладку делать в первый
                таб с id="tab0" сортировка будет происходить на сторонне клиента -->

                <div class="active tab-pane fade in" id="tab0">
                    <div class="pagination-container">
                        <ul class="pagination">
                            <li class="active"><a href="#">1</a></li>
                        </ul>
                    </div>
                    <div class="list-image">
                        <ul>
                            <?php foreach ($judges as $judge):?>
                            <li data-jg-catagere="<?=$judge->category?>">
                                <div class="img-wrapp"><img src="img/judges/<?=$judge->image->name?>" alt=""></div>
                                <h5 class="text-center"><b><?=$judge->name?></b></h5>
                                <h5 class="text-center"><?=$judge->profession?></h5>
                            </li>
                            <?php endforeach;?>
                        </ul>
                    </div>

                </div>
                <div class="tab-pane fade" id="FIFE">
                    <div class="list-image">
                        <ul>

                        </ul>
                    </div>
                </div>
                <div class="tab-pane fade" id="WCF">
                    <!-- место для судей -->
                    <div class="list-image">
                        <ul>

                        </ul>
                    </div>
                </div>
                <div class="tab-pane fade" id="CFA">
                    <!-- место для судей -->
                    <div class="list-image">
                        <ul>

                        </ul>
                    </div>
                </div>
            </div>

        </div>
        <!-- Tabs col END -->
        <!-- призвой фонд   col START -->
        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
            <!-- призвой фонд   col START -->
            <h3 class="section_title">Призовой фонд</h3>
            <ul class="list-vertical col-xs-12 col-sm-12 col-md-12 col-lg-12 ">
                <?php foreach ($fond as $one):?>
                <li>
                    <div class="media">
                        <a class="media-left" href="#">
                            <img src="img/fond/<?=$one->image->name?>" style="width: 90px; height: 90px;">
                        </a>
                        <div class="media-body">
                            <h4 class="media-heading"></h4>
                             <?=$one->description?>
                        </div>
                    </div>

                </li>
                <?php endforeach;?>

            </ul>
            <div class="img-table-wraper">
                <div  data-slick-id="second" class="col-xs-12 col-sm-12 col-md-12 col-lg-12 container-vor_vertical-slick">
                    <!-- img-table   row START -->


                    <!-- img-table   row END -->
                </div>
            </div>
        </div>
        <!-- призвой фонд   col END -->
        <div class="col-xs-0 col-sm-0 col-md-0 col-lg-1"></div>

    </div>
</div>
<!-- etc   row END -->


<!-- registration   row START -->
<div class="row" id="price">
    <div class="col-xs-0 col-sm-0 col-md-0 col-lg-0"></div>
    <div class="col-xs-10 col-sm-10 col-xs-offset-1 col-sm-offset-1 col-md-4 col-lg-4">
        <h3 class="section_title">Стоимость&nbsp</h3>
        <ul class="list-vertical price-lists">
            <li>
                <div class="price-fife" data-price-id="FIFE" data-toggle="modal" data-target="#fife"><i></i><h5>Стоимость участия в FIFE</h5></div>
            </li>
            <li>
                <div class="price-wcf"  data-price-id="WCF" data-toggle="modal" data-target="#wcf"><i></i><h5>Стоимость участия в WCF</h5></div>
            </li>
            <li>
                <div class="price-cfa" data-price-id="CFA" data-toggle="modal" data-target="#cfa"><i></i><h5>Стоимость участия в CFA</h5></div>
            </li>
        </ul>
    </div>
    <div class="col-xs-10 col-sm-10 col-xs-offset-1 col-sm-offset-1 col-md-4 col-lg-4 schema-plan">

        <h4>План-схема зала</h4>
        <p><?=$scheme->text?></p>
        <img src="img/scheme/<?=$scheme->image->name?>" class="img-responsive col-sm-12 col-xs-12" alt="Image" style="margin-bottom: 2rem;">
    </div>
    <div class="col-xs-10 col-sm-10 col-xs-offset-1 col-sm-offset-1 col-md-3  col-lg-3  registration">
        <form action="" method="post" role="form" id="form">
            <legend class="text-center">РЕГИСТРАЦИЯ</legend>

            <div class="input-group">

                <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                <input required type="text" class="form-control  col-md-4 col-lg-4" name="name"   id="name"  placeholder=" Ваше имя фамилия (минимально 5 символов)">
            </div>
            <div class="input-group">
                <span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span>
                <input required type="text" class="form-control  col-md-4 col-lg-4" name="phone"  id="phone"  data-msg-phone="Вы забылми указать свой кклнтакный номер телефона" placeholder=" Ваш номер телефона (10 символов минимум 095******* )">
            </div>
            <div class="input-group">
                <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
                <input required type="email" class="form-control " name="email" id="email" data-msg-email="Вы забылми указать свой email" placeholder=" Ваш email">
            </div>
            <div class="form-group">
                <button id="FormControlSelect1" type="button" class=" form-control dropdown-toggle" data-toggle="dropdown">Выберите выставочную систему <span class="caret"></span>
                </button>
                <ul class="dropdown-menu">
                    <li><a  href="#form" data-value="http://www.wcf-online.de/WCF-EN/zuechterinfo/zwinger.html">WCF</a></li>
                    <li><a href="#form" data-value="http://fifeweb.org/wp/lib/lib_current.php">FIFE</a></li>
                    <li><a href="#form" data-value="http://cfa.org/Registration/OnlineIndividualRegistration.aspx">CFA</a></li>

                </ul>

            </div><!-- /btn-group -->

            <div id="messageBox">
                <ul>

                </ul>
            </div>
            <p class="text-center validation-respons">Lorem ipsum dolor sit amet, consectetur adipisicing elit. <span class="href"></span></p>
            <!-- corrent  href === url  from  select button-->
            <a  class="btn red-btn btn-margin-for-link" style="pointer-events: none;" > Перейти <span class="corrent-href"></span></a>
        </form>
    </div>
</div>
<div class="modal fade" id="fife" role="dialog">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title text-center"> таблица цен по версии FIFE</h4>
            </div>
            <div class="modal-body">
                <table class="table table-striped">
                    <thead>
                    <tr>
                        <th><?=$cost_fife->th11?></th>
                        <th>
                            <?=$cost_fife->th12?>
                        </th>
                        <th> <?=$cost_fife->th13?>
                        </th>
                        <th><?=$cost_fife->th14?>
                        </th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td><?=$cost_fife->td21?></td>
                        <td><?=$cost_fife->td22?></td>
                        <td><?=$cost_fife->td23?></td>
                        <td><?=$cost_fife->td24?></td>
                    </tr>
                    <tr>
                        <td><?=$cost_fife->td31?></td>
                        <td><?=$cost_fife->td32?></td>
                        <td><?=$cost_fife->td33?></td>
                        <td><?=$cost_fife->td34?></td>
                    </tr>

                    <tr>
                        <td><?=$cost_fife->td41?></td>
                        <td><?=$cost_fife->td42?></td>
                        <td><?=$cost_fife->td43?></td>
                        <td><?=$cost_fife->td44?></td>
                    </tr>

                    <tr>
                        <td><?=$cost_fife->td51?></td>
                        <td><?=$cost_fife->td52?></td>
                        <td><?=$cost_fife->td53?></td>
                        <td><?=$cost_fife->td54?></td>
                    </tr>
                    <tr>
                        <td><?=$cost_fife->td61?></td>
                    </tr>
                    <tr>
                        <td><?=$cost_fife->td71?></td>
                    </tr>
                    <tr>
                        <td><?=$cost_fife->td81?></td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="wcf" role="dialog">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title text-center"> таблица цен по версии WCF</h4>
            </div>
            <div class="modal-body">
                <table class="table table-striped">
                    <thead>
                    <tr>
                        <th><?=$cost_wcf->th11?></th>
                        <th>
                            <?=$cost_wcf->th12?>
                        </th>
                        <th> <?=$cost_wcf->th13?>
                        </th>
                        <th><?=$cost_wcf->th14?>
                        </th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td><?=$cost_wcf->td21?></td>
                        <td><?=$cost_wcf->td22?></td>
                        <td><?=$cost_wcf->td23?></td>
                        <td><?=$cost_wcf->td24?></td>
                    </tr>
                    <tr>
                        <td><?=$cost_wcf->td31?></td>
                        <td><?=$cost_wcf->td32?></td>
                        <td><?=$cost_wcf->td33?></td>
                        <td><?=$cost_wcf->td34?></td>
                    </tr>

                    <tr>
                        <td><?=$cost_wcf->td41?></td>
                        <td><?=$cost_wcf->td42?></td>
                        <td><?=$cost_wcf->td43?></td>
                        <td><?=$cost_wcf->td44?></td>
                    </tr>

                    <tr>
                        <td><?=$cost_wcf->td51?></td>
                        <td><?=$cost_wcf->td52?></td>
                        <td><?=$cost_wcf->td53?></td>
                        <td><?=$cost_wcf->td54?></td>
                    </tr>
                    <tr>
                        <td><?=$cost_wcf->td61?></td>
                    </tr>
                    <tr>
                        <td><?=$cost_wcf->td71?></td>
                    </tr>
                    <tr>
                        <td><?=$cost_wcf->td81?></td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="cfa" role="dialog">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title text-center"> таблица цен по версии CFA</h4>
            </div>
            <div class="modal-body">
                <table class="table table-striped">
                    <thead>
                    <tr>
                        <th><?=$cost_cfa->th11?></th>
                        <th>
                            <?=$cost_cfa->th12?>
                        </th>
                        <th> <?=$cost_cfa->th13?>
                        </th>
                        <th><?=$cost_cfa->th14?>
                        </th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td><?=$cost_cfa->td21?></td>
                        <td><?=$cost_cfa->td22?></td>
                        <td><?=$cost_cfa->td23?></td>
                        <td><?=$cost_cfa->td24?></td>
                    </tr>
                    <tr>
                        <td><?=$cost_cfa->td31?></td>
                        <td><?=$cost_cfa->td32?></td>
                        <td><?=$cost_cfa->td33?></td>
                        <td><?=$cost_cfa->td34?></td>
                    </tr>

                    <tr>
                        <td><?=$cost_cfa->td41?></td>
                        <td><?=$cost_cfa->td42?></td>
                        <td><?=$cost_cfa->td43?></td>
                        <td><?=$cost_cfa->td44?></td>
                    </tr>

                    <tr>
                        <td><?=$cost_cfa->td51?></td>
                        <td><?=$cost_cfa->td52?></td>
                        <td><?=$cost_cfa->td53?></td>
                        <td><?=$cost_cfa->td54?></td>
                    </tr>
                    <tr>
                        <td><?=$cost_cfa->td61?></td>
                    </tr>
                    <tr>
                        <td><?=$cost_cfa->td71?></td>
                    </tr>
                    <tr>
                        <td><?=$cost_cfa->td81?></td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<!-- registration   row END -->
<!-- program of contest   row START -->
<div class="row backgr-for-contest" id="sponsors">
    <!-- program-list of contest   col START -->
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
            <h3 class="prog-list-ttl">Программа выставки</h3>
        </div>
        <div class="hidden-xs hidden-sm col-md-6 col-lg-6">
            <h3 class="text-left">Рекламная компания</h3>
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-5 col-lg-5 col-md-offset-1 col-lg-offset-1 table-with-marks">
        <!-- TAB NAVIGATION -->
        <?php foreach ($programm as $prog):?>
        <ul class="nav nav-tabs juge-tabs" role="tablist">
            <li class="active"><a href="#tab<?=$prog->day?>" role="tab" data-toggle="tab"><?=$prog->day .' '.$prog->month?></a></li>
        </ul>
        <!-- TAB CONTENT -->
        <div class="tab-content">

            <div class="active tab-pane fade in" id="tab<?=$prog->day?>">
                <?php $prog_tab = Programm::find()->where(['day' => $prog->day])->all()?>
                <?php foreach ($prog_tab as $tab):?>
                <table class="table table-hover ">
                    <tbody>
                    <tr>
                        <td class="td-time">
                            <span class="time-from"><span class="hours"><?=$tab->from?></span></span>&nbsp-&nbsp
                            <span class="time-from"><span class="hours"><?=$tab->to?></span></span>
                        </td>
                        <td><p>
                                <?=$tab->description?>
                            </p></td>
                    </tr>
                    </tbody>
                </table>
                <?php endforeach;?>
            </div>


        </div>
        <?php endforeach;?>

    </div>
    <!-- programm  list of contest   col END -->
    <!-- Massmedia   col START -->
    <div class="col-xs-12 col-sm-12 col-md-5 col-lg-5">
        <h3 class="text-center hidden-md hidden-lg ">Рекламная компания</h3>
        
        <p class="market-place-text"><?=$reklama->name?></p>
        <div class="list-image">
            <ul>
                <?php foreach($reklama->images as $one):?>
                <li >
                    <div class="img-wrapp">
                        <a href=""><img src="img/headersl1/<?=$one->name?>" alt=""></a>
                    </div>
                </li>
               <?php endforeach;?>
            </ul>
        </div>



    </div>
    <!-- Massmedia   col END -->

</div>
<!-- program of contest   row END -->
<!-- champions   row START -->
<div class="row champions">
    <div class="col-xs-12 col-sm-12 col-md-10 col-lg-10 col-md-offset-1 col-lg-offset-1">
        <div class="list-image">
            <ul class="winners-list">
                <?php foreach ($cats as $cat):?>
                <li class="smoller-container">
                    <div class="img-wrapp">
                        <a href=""><img src="img/cats/<?=$cat->image->name?>" alt=""></a>
                    </div>
                    <h5 class="cat-name"><?=$cat->name?></h5>
                    <span><?=$cat->description?></span>

                </li>
                <?php endforeach;?>

                <li class="smoller-container " >
                    <div class="img-wrapp">
                        <a href=""><img src="img/icons-for-prices-2.png" alt=""></a>
                    </div>
                    <h5 class="cat-name">National winner!</h5>
                    <a href="" class="btn red-btn btn-margin-for-link">Bast cat</a>
                </li>
            </ul>
        </div>

    </div>
</div>
<!-- champions   row END -->
<!-- map   row START -->
<!-- map-background"  style="height: 100vh;" -->
<div class="row " id="addaptButton"  >

</div>
<div class="row " id="firstMap"  >

</div>
<!-- map   row END -->

<!--   Организаторы row START -->
<div class="row owl-org-slider" style="border: 1px solid #3333">
    <!-- START slider for org-->
    <div class=" col-lg-10 col-md-10  col-lg-offset-1 col-md-offset-1  col-sm-12 col-xs-12 ">
        <h2>Организаторы</h2>
        <div class="owl-carousel owl-theme" id="owl-carousel-first">
            <?php foreach ($organizers as $organizer):?>
            <div>
                <div class="media">
                    <a class="media-left img-wrapp" href="#">
                        <img src="img/organizers/<?=$organizer->image->name?>" style="width: 64px; height: 64px;">
                    </a>
                    <div class="media-body">
                        <h4 class="media-heading"><?=$organizer->name?></h4>
                        <span class="status"><?=$organizer->description?></span><br/>
                            <span>
                                <?=$organizer->text?>
                            </span>
                    </div>
                </div>
            </div>
            <?php endforeach;?>

        </div>
    </div>

    <!-- END slider for org-->
</div>
<!-- Организаторы   row END -->

<!--   Памятник row START -->
<div class="row banner" >
    <div class="col-xs-12 col-sm-12 col-md-10 col-lg-10 col-md-offset-1 col-lg-offset-1"></div>
</div>
<!-- Памятник  row END -->

<!--   Partners-slider row START -->
<div class="row " id="partners">


    <div class=" col-lg-10 col-md-10 col-lg-offset-1 col-md-offset-1 col-sm-12 col-xs-12 " style="display: block; height: 20vh; position: relative; z-index: 1;">
        <!--class="partners-slider" data-slick='{"slidesToShow": 4, "slidesToScroll": 4}' -->
        <div class="col-lg-11 col-md-11  owl-carousel owl-theme" id="owl-carousel-second" style="position: absolute; z-index: 10;">
            <?php foreach ($slider->images as $one):?>
            <div><img src="img/slider/<?=$one->name?>" class="img-responsive" alt="Image"></div>
            <?php endforeach;?>
        </div>

        <div class="col-lg-12 col-md-12 hidden-sm hidden-xs" id="arrow-owl-arr-second" style="position: absolute; z-index: 30;">

        </div>
    </div>
</div>

<!-- Partners-slider  row END -->
<!-- class="container" -->
<footer class="" id="footer">
    <div class="row" >
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 wall-map-container" style="position: relative; z-index: 1;">
            <div   class="col-xs-12 col-sm-12 col-md-4 col-lg-4 contacts-list-footer">

                <ul class="list-vertical contacts-container">
                    <li class="contacts-title">
                        <h3>Контакты</h3>
                    </li>
                    <li>
                        <ul class="list-vertical">
                            <li class="list-section" >
                                <i class="glyphicon glyphicon-map-marker"></i> Адресс
                            </li>
                            <li>
                                <b> <?=$contacts->place?></b>
                            </li>
                            <li>
                                <?=$contacts->address?>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <ul class="list-vertical">
                            <li class="list-section">
                                <i class="glyphicon glyphicon-phone-alt"></i> Телефон
                            </li>
                            <li>
                                <?=$contacts->phone?>
                                <a href="phoneto:"></a>
                            </li>
                        </ul>
                    </li>
                    <li>

                        <ul class="list-vertical">
                            <li class="list-section">
                                <i class="glyphicon glyphicon-envelope"></i> Email
                            </li>
                            <li>
                                <?=$contacts->email?>
                                <a href="mailto:<?=$contacts->address?>"></a>
                            </li>
                        </ul>
                    </li>
                    <li>

                        <ul class="list-vertical">
                            <li class="list-section">
                                Мы в соц.сетях
                            </li>
                            <li>
                                <ul class="list-horizontal social-link-wraper">
                                    <li><a href="<?=$contacts->vk_link?>"><div class="social-link-bottom-vk"></div></a></li>
                                    <li><a href=<?=$contacts->in_link?>""><div class="social-link-bottom-inst"></div></a></li>
                                </ul>

                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
            <!-- Google-maps-api   row START -->
            <div   class="col-xs-12 col-sm-12 col-md-8 col-lg-8 empty-container">

            </div>
            <div  id="footer-map"  class="map-container col-xs-12 col-sm-12 col-md-12 col-lg-12">

            </div>
            <!-- Google-maps-api   row START -->
        </div>
    </div>

</footer>