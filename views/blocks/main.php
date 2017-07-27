<!-- Contents events -->

 <div id="events">
 <div class="main-text-body">
    <h2>Самые интересные места отдыха в Краматорске ждут вас!</h2>
  </div>
  <div class="container-fluid ">
    <div class="content">
     <div lass="row">
        <?php
    foreach($values['events'] as $itemx):?>
            
        <div class="col-xs-6 col-sm-4 col-md-3">
          <div class="thumbnail">
            <div class="caption">
              <div class="event-title">
                <h2><?= $itemx->title; ?></h2>
              </div>
              <div class="event-description">
                <p><?= $itemx->description; ?></p>
              </div>
              <div class="event-date">
                <h3><?= $itemx->date_start; ?></h3>
              </div>
              <p><a href="?ctrl=event&act=one&id=<?= $itemx->id; ?>" class="label label-default">Узнать больше</a></p>

            </div>
            <div class="event-picture">
              <div class="event-picture-wrap" style="background-image: url(img/Velosipedisty.jpg);"><img src="img/Velosipedisty.jpg" alt="" title=""></div>
              </div>
          </div>
        </div>
<?php endforeach ?>
       <a href="index.php?ctrl=event&act=all" style="color:white;"><button type="button" class="btn btn-succ btn-lg btn-block">
        Посмотреть все события в Краматорске</button></a>
      </div>
<?php include "carousel.php";?>