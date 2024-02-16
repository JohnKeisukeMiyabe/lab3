  <?php
  echo link_tag('css/interests-css.css');

  $preloaderscript = [
    'defer' => null,
    'src' => 'js/pre-loader.js', 
  ];

  $interestsscript = [
    'defer' => null,
    'src' => 'js/interests.js', 
  ];

  $imagemapresizescript = [
    'defer' => null,
    'src' => 'js/imageMapResize.min.js', 
  ];

  echo script_tag($preloaderscript);
  echo script_tag($interestsscript);
  echo script_tag($imagemapresizescript);
  ?>

  <audio autoplay loop id="audiobox" style="width:215px;">
    <source src="audio/interests.mp3" type="audio/mpeg">
  </audio>
</head>

<body>

  <!-- Loading Screen -->

  <div class="loader">
    <div class="loader-content">
      <?php
      echo img('images/pre-loader.gif');
      ?>
      <p>LOADING....</p>
    </div>
  </div>

  <!-- Parallax Scrolling -->

  <div class="parallax">

    <!-- Navigation Bar -->

    <div id="waypoints">
      <div id="left">
        <a id="teleportwaypoint" href="profile">
          <?php
          echo img('images/teleportwaypoint.png');
          ?>
          <p>Profile</p>
        </a>
        <a id="teleportwaypoint" href="interests">
          <?php
          echo img('images/teleportwaypoint.png');
          ?>
          <p>Interests</p>
        </a>
      </div>
      <div id="statueoftheseven">
        <a href="home">
          <?php
          $statue = [
            'id' => 'newstatueoftheseven',
            'src' => 'images/statueoftheseven.png',
          ];

          echo img($statue);
          ?>
        </a>
      </div>
      <div id="right">
        <a id="teleportwaypoint" href="steambird">
          <?php
          echo img('images/teleportwaypoint.png');
          ?>
          <p>Steambird</p>
        </a>
        <a id="teleportwaypoint" href="resources">
          <?php
          echo img('images/teleportwaypoint.png');
          ?>
          <p>Resources</p>
        </a>
      </div>
    </div>

    <?php
    $bg = [
      'class' => 'parallax_bg',
      'src' => 'images/interests/parallax/bg.png',
    ];

    $front = [
      'class' => 'parallax_front',
      'src' => 'images/interests/parallax/fron.png',
    ];

    $adventure = [
      'class' => 'parallax_adventure',
      'src' => 'images/interests/parallax/interests.png',
    ];

    $furina = [
      'class' => 'parallax_furina',
      'src' => 'images/interests/parallax/furina.png',
    ];

    $navia = [
      'class' => 'parallax_navia',
      'src' => 'images/interests/parallax/navia.png',
    ];

    echo img($bg);
    echo img($front);
    echo img($adventure);
    echo img($furina);
    echo img($navia);
    ?>
  </div>

  <div class="main-content">
    <div class="wrapper">

      <!-- Gallery -->

      <div class="pick">
        <div class="stack">
          <img class="gallery" src="images/interests/gallery/gallery.png" style="opacity: 1;" usemap="#gallerymap">
          <img class="gallery" src="images/interests/gallery/yelangallery.png" usemap="#gallerymap">
          <img class="gallery" src="images/interests/gallery/raidengallery.png" usemap="#gallerymap">
          <img class="gallery" src="images/interests/gallery/yaemikogallery.png" usemap="#gallerymap">
          <img class="gallery" src="images/interests/gallery/ayakagallery.png" usemap="#gallerymap">
          <img class="gallery" src="images/interests/gallery/hutaogallery.png" usemap="#gallerymap">
          <img class="gallery" src="images/interests/gallery/monagallery.png" usemap="#gallerymap">
          <img class="gallery" src="images/interests/gallery/jeangallery.png" usemap="#gallerymap">
          <img class="gallery" src="images/interests/gallery/keqinggallery.png" usemap="#gallerymap">
        </div>
      </div>

      <!-- Kpop Bias -->

      <div class="pick">
        <div class="stack">
          <img class="bias" src="images/interests/kpop/kpop.png" style="opacity: 1;" usemap="#kpopmap">
          <img class="bias" src="images/interests/kpop/lisa.png" usemap="#kpopmap">
          <img class="bias" src="images/interests/kpop/tzuyu.png" usemap="#kpopmap">
          <img class="bias" src="images/interests/kpop/chiquita.png" usemap="#kpopmap">
          <img class="bias" src="images/interests/kpop/haerin.png" usemap="#kpopmap">
          <img class="bias" src="images/interests/kpop/yuqi.png" usemap="#kpopmap">
          <img class="bias" src="images/interests/kpop/yuna.png" usemap="#kpopmap">
          <img class="bias" src="images/interests/kpop/sullyoon.png" usemap="#kpopmap">
          <img class="bias" src="images/interests/kpop/yunjin.png" usemap="#kpopmap">
          <img class="bias" src="images/interests/kpop/liz.png" usemap="#kpopmap">
          <img class="bias" src="images/interests/kpop/jungkook.png" usemap="#kpopmap">
          <img class="bias" src="images/interests/kpop/jungwon.png" usemap="#kpopmap">
          <img class="bias" src="images/interests/kpop/beomgyu.png" usemap="#kpopmap">
          <img class="bias" src="images/interests/kpop/haruto.png" usemap="#kpopmap">
        </div>
      </div>

      <!-- Anime ratings -->

      <div class="pick">
        <div class="stack">
          <img class="rate" src="images/interests/anime/anime.png" style="opacity: 1;" usemap="#animemap">
          <img class="rate" src="images/interests/anime/kaguyaanime.png" usemap="#animemap">
          <img class="rate" src="images/interests/anime/rkanime.png" usemap="#animemap">
          <img class="rate" src="images/interests/anime/komianime.png" usemap="#animemap">
          <img class="rate" src="images/interests/anime/violetevergardenanime.png" usemap="#animemap">
          <img class="rate" src="images/interests/anime/kakeguruianime.png" usemap="#animemap">
          <img class="rate" src="images/interests/anime/mhmanime.png" usemap="#animemap">
          <img class="rate" src="images/interests/anime/konosubaanime.png" usemap="#animemap">
          <img class="rate" src="images/interests/anime/anyaanime.png" usemap="#animemap">
          <img class="rate" src="images/interests/anime/takemichianime.png" usemap="#animemap">
          <img class="rate" src="images/interests/anime/tanjiroanime.png" usemap="#animemap">
          <img class="rate" src="images/interests/anime/narutoanime.png" usemap="#animemap">
          <img class="rate" src="images/interests/anime/jjkanime.png" usemap="#animemap">
        </div>
      </div>
    </div>
  </div>

  <map name="gallerymap">
    <area shape="rect" coords="1430,880,1860,1050" onclick="showgalleryDialog()">
  </map>

  <map name="kpopmap">
    <area shape="rect" coords="1200,850,1650,1050" onclick="showkpopDialog()">
  </map>

  <map name="animemap">
    <area shape="rect" coords="1200,850,1650,1050" onclick="showanimeDialog()">
  </map>

  <dialog id="galleryDialog">
    <div id="icons">
      <img class="iconGallery" onclick="showGallery(1)" src="images/interests/gallery/yelan.png">
      <img class="iconGallery" onclick="showGallery(2)" src="images/interests/gallery/raiden.png">
      <img class="iconGallery" onclick="showGallery(3)" src="images/interests/gallery/yaemiko.png">
      <img class="iconGallery" onclick="showGallery(4)" src="images/interests/gallery/ayaka.png">
    </div>
    <div id="icons">
      <img class="iconGallery" onclick="showGallery(5)" src="images/interests/gallery/hutao.png">
      <img class="iconGallery" onclick="showGallery(6)" src="images/interests/gallery/mona.png">
      <img class="iconGallery" onclick="showGallery(7)" src="images/interests/gallery/jean.png">
      <img class="iconGallery" onclick="showGallery(8)" src="images/interests/gallery/keqing.png">
    </div>
  </dialog>

  <dialog id="kpopDialog">
    <div id="icons">
      <img class="iconKpop" onclick="showKpop(1)" src="images/interests/kpop/blackpink.png">
      <img class="iconKpop" onclick="showKpop(2)" src="images/interests/kpop/twice.png">
      <img class="iconKpop" onclick="showKpop(3)" src="images/interests/kpop/babymonster.png">
      <img class="iconKpop" onclick="showKpop(4)" src="images/interests/kpop/newjeans.png">
    </div>
    <div id="icons">
      <img class="iconKpop" onclick="showKpop(5)" src="images/interests/kpop/gidle.png">
      <img class="iconKpop" onclick="showKpop(6)" src="images/interests/kpop/itzy.png">
      <img class="iconKpop" onclick="showKpop(7)" src="images/interests/kpop/nmixx.png">
      <img class="iconKpop" onclick="showKpop(8)" src="images/interests/kpop/lesserafim.png">
    </div>
    <div id="icons">
      <img class="iconKpop" onclick="showKpop(9)" src="images/interests/kpop/ive.png">
      <img class="iconKpop" onclick="showKpop(10)" src="images/interests/kpop/bts.png">
      <img class="iconKpop" onclick="showKpop(11)" src="images/interests/kpop/enhypen.png">
      <img class="iconKpop" onclick="showKpop(12)" src="images/interests/kpop/txt.png">
    </div>
    <div id="icons">
      <img class="iconKpop" onclick="showKpop(13)" src="images/interests/kpop/treasure.png">
    </div>
  </dialog>

  <dialog id="animeDialog">
    <div id="icons">
      <img class="iconAnime" onclick="showAnime(1)" src="images/interests/anime/kaguya.png">
      <img class="iconAnime" onclick="showAnime(2)" src="images/interests/anime/rk.png">
      <img class="iconAnime" onclick="showAnime(3)" src="images/interests/anime/komi.png">
      <img class="iconAnime" onclick="showAnime(4)" src="images/interests/anime/violetevergarden.png">
    </div>
    <div id="icons">
      <img class="iconAnime" onclick="showAnime(5)" src="images/interests/anime/kakegurui.png">
      <img class="iconAnime" onclick="showAnime(6)" src="images/interests/anime/mhm.png">
      <img class="iconAnime" onclick="showAnime(7)" src="images/interests/anime/konosuba.png">
      <img class="iconAnime" onclick="showAnime(8)" src="images/interests/anime/anya.png">
    </div>
    <div id="icons">
      <img class="iconAnime" onclick="showAnime(9)" src="images/interests/anime/takemichi.png">
      <img class="iconAnime" onclick="showAnime(10)" src="images/interests/anime/tanjiro.png">
      <img class="iconAnime" onclick="showAnime(11)" src="images/interests/anime/naruto.png">
      <img class="iconAnime" onclick="showAnime(12)" src="images/interests/anime/jujutsukaisen.png">
    </div>
  </dialog>
</body>

</html>