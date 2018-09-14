<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Golf-club</title>
  <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no"/>

  <link rel="stylesheet" type="text/css" href="/public/src/lib/bootstrap/css/bootstrap.min.css"/>
  <link rel="stylesheet" type="text/css" href="/public/src/lib/fatNav/jquery.fatNav.min.css">

  <script type="text/javascript" src="/public/src/lib/jquery/index.js" ></script>
  <script type="text/javascript" src="/public/src/lib/fatNav/jquery.fatNav.min.js" ></script>
  <script type="text/javascript" src="/public/src/js/main.js"></script>
  
  <link rel="stylesheet" href="/public/src/css/styles.css"/>
  <link rel="stylesheet" href="/public/src/css/ground-golf.css"/>

</head>
<body>

  <!-- inc header menu -->
  <?php include 'views/inc/header-menu.php' ?>
  <!-- end inc header menu -->

  <!-- inc navigation menu -->
  <?php include 'views/inc/navigation.php' ?>
  <!-- end inc navigation menu -->

  <div class="wrapper">
    <ul class="ground-golf">
      <li class="col-md-12 col-sm-12 ground-golf-info container-fluid">
        <h2 class="headline">
          Ground Golf
        </h2>
        <div class="row articleTitle">
          <div class="col-md-4 groundGolfPhoto">
            <img class="go-photo" src="/public/src/img/ground-golf/gg1.jpg">
          </div>
          <div class="col-md-8 groundGolfText">
            <h3><?= $trans['ground-golf-title-1']?>
            </h3>
            <?= $trans['ground-golf-text-1']?>
            <h3><?= $trans['ground-golf-title-2']?>
            </h3>
            <?= $trans['ground-golf-text-2']?>
            <h3><?= $trans['ground-golf-title-3']?>
            </h3>
            <?= $trans['ground-golf-text-3']?>
          </div>
        </div>
      </li>
      <li class="col-md-12 ground-golf-zasady container-fluid">
        <div class="articleTitle">
          <h2 class="headline"><?= $trans['ground-golf-title-4']?></h2>
          <div class="taskContainer">
            <div class="roundNumber">1.</div>
            <div class="taskTitle"><?= $trans['ground-golf-text-4']?></div>
            <div class="containerInfo"><?= $trans['ground-golf-text-5']?></div>
          </div>
          <div class="taskContainer">
            <div class="roundNumber">2.</div>
            <div class="taskTitle"><?= $trans['ground-golf-text-6']?></div>
            <div class="containerInfo"><?= $trans['ground-golf-text-7']?></div>
          </div>
          <div class="taskContainer">
            <div class="roundNumber">3.</div>
            <div class="taskTitle"><?= $trans['ground-golf-text-8']?></div>
            <div class="containerInfo"><?= $trans['ground-golf-text-9']?></div>
          </div>
          <div class="taskContainer">
            <div class="roundNumber">4.</div>
            <div class="taskTitle"><?= $trans['ground-golf-text-10']?></div>
            <div class="containerInfo"><?= $trans['ground-golf-text-11']?></div>
          </div>
          <div class="taskContainer">
            <div class="roundNumber">5.</div>
            <div class="taskTitle"><?= $trans['ground-golf-text-12']?></div>
            <div class="containerInfo"><?= $trans['ground-golf-text-13']?></div>
          </div>
          <div class="taskContainer">
            <div class="roundNumber">6.</div>
            <div class="taskTitle"><?= $trans['ground-golf-text-14']?></div>
            <div class="containerInfo"><?= $trans['ground-golf-text-15']?></div>
          </div>
          <div class="taskContainer">
            <div class="roundNumber">7.</div>
            <div class="taskTitle"><?= $trans['ground-golf-text-16']?></div>
            <div class="containerInfo"><?= $trans['ground-golf-text-17']?></div>
          </div>
         <!--  <div><b>Zasada 1</b> Po oddaniu strzału gracze powinni szybko się odsunąć, aby nie przeszkadzać kolejnym graczom.
          <br><b>Zasada 2</b> Kiedy jest kolej na oddanie strzału przez kolejnego gracza, pozostali gracze nie powinni rozmawiać ani stać blisko niego, jego piłki lub bramki. Grupy nie powinny rozpoczynać rozgrywki do konkretnej bramki dopóki inna grupa przed nimi nie zakończy swojej rozgrywki do tej bramki.
          <br><b>Zasada 3</b> Gracze powinni naprawić uszkodzenia lub ślady na darni powstałe podczas ich rozgrywki, zanim przejdą do kolejnej bramki.
          <br><b>Zasada 4</b> Po ustaleniu kolejności uderzania, gracze rozpoczynają rundę z maty startowej i liczą ilość oddanych strzałów do momentu aż piłka zatrzyma się w okręgu bramki (zwanym tomari).
          <br><b>Zasada 5</b> Gracze powinni używać autoryzowane kije, piłki, bramki i maty startowe. 
          <br><b>Zasada 6</b> Ćwiczenie uderzeń nie jest dozwolone podczas gry. Naruszenie tego zakazu skutkuje doliczeniem karnego punktu do wyniku gracza.
          <br><b>Zasada 7</b> Gracze nie mogą otrzymywać pomocy w trakcie gry, w tym jakiejkolwiek pomocy fizycznej lub w formie porady. Obejmuje to układanie ramp, otrzymywanie wsparcia od innych graczy lub ochronę przed wiatrem i deszczem. Naruszenie tego zakazu skutkuje doliczeniem karnego punktu do wyniku gracza.
          <br><b>Zasada 8</b> Uderzanie piłki z miejsca gdzie ona leży Jeśli piłka wpadnie na teren z wysoką trawą lub gęstymi zaroślami, gracze powinni wówczas jedynie potwierdzić lokalizację swojej piłki. Naruszenia tej zasady tj. przycinanie trawy lub przyginanie gałęzi skutkują dodaniem punktu karnego do wyniku gracza.
          <br><b>Zasada 9</b> Gracze muszą uderzać piłkę główką kija, nie wolno popychać ani przestawiać piłki bliżej bramki. Naruszenia tych zakazów skutkują doliczeniem karnego punktu do wyniku gracza. Uderzenia nie trafione w piłkę nie są doliczane do wyniku gracza.
          <br><b>Zasada 10</b> Jeśli gracz utraci piłkę lub wybije ją poza pole gry, wówczas dolicza się punkt karny do wyniku gracza a piłkę należy umieścić z powrotem na torze w miejscu, z którego gra jest możliwa, ale nie przesuwając jej bliżej bramki. Rozgrywka musi zostać wznowiona od miejsca, w którym znajduje się piłka. 
          <br><b>Zasada 11</b> Jeśli to konieczne, piłki które utrudniają rozgrywkę, mogą zostać tymczasowo usunięte z trasy. Gracz, którego piłka przeszkadza w grze musi najpierw umieścić swój znacznik bezpośrednio za piłką patrząc od strony bramki, zanim usunie piłkę.
          <br><b>Zasada 12</b> Jeżeli wybita piłka uderzy piłkę innego gracza, wówczas piłka która uderza powinna być pozostawiona w miejscu gdzie się zatrzyma. Piłka która została trafiona, powinna być z powrotem umieszczona na pierwotnej pozycji.
          <br><b>Zasada 13</b> Gracze nie mogą powtórnie uderzyć piłki w ruchu po pierwszym uderzeniu. Jeśli piłka zostanie poruszona przez wiatr, grę wznawia się z miejsca, w którym piłka naturalnie się zatrzymała. Jeśli piłka zatrzyma się w otworze bramki, liczy się ona jako tomari (gracz zaliczył). 
          <br><b>Zasada 14</b> Jeśli gracz trafi piłką do bramki jednym uderzeniem (hole-in-one), wówczas odejmuje się 3 punkty od końcowego wyniku tego gracza.
          <br><b>Zasada 15</b> Wyniki rozgrywki są podliczane i autoryzowane przez samych graczy. W przypadku wątpliwości lub trudnej decyzji, gracze powinni skonsultować się z innymi graczami.
          <br><b>Zasada 16</b> Standardowe pole składa się z 8 bramek, tj. po 2 bramki na każdy dystans 50m, 30m, 25m i 15m.</div> -->
        </div>
      </li>
      <li class="ground-golf-pole container-fluid">
        <div class="row articleTitle">
          <h3 class="headline"><?= $trans['ground-golf-title-5']?>
          </h3>
          <div class="golfMap-photo col-md-7"><img class="pole-photo" src="/public/src/img/ground-golf/pole.jpg">
          </div>
          <div class="golfMap-text col-md-5"><b><?= $trans['ground-golf-text-18']?></b><?= $trans['ground-golf-text-19']?> 
          <br><br><b><?= $trans['ground-golf-text-20']?></b> <?= $trans['ground-golf-text-21']?>
          </div>
        </div>
      </li>
      <!--<li class="ground-golf-sprzety container-fluid">
        <div class="row articleTitle">
          <h3 class="headline">Sprzęt do gry w ground golfa</h3>
          <div class="col-md-4 photo-intext-container"><img class="sprzet-photo" src="../../images/ground-golf/sprzet1.jpg">
          </div>
          <div class="col-md-4 photo-intext-container"><img class="sprzet-photo" src="../../images/ground-golf/sprzet2.jpg">
          </div>
          <div class="col-md-4 photo-intext-container"><img class="sprzet-photo" src="../../images/ground-golf/sprzet3.jpg">
          </div>
        </div>
      </li>-->
    </ul>
  </div>

  <!-- inc footer -->
  <?php include 'views/inc/footer.php' ?>
  <!-- inc footer -->

</body>
</html>

