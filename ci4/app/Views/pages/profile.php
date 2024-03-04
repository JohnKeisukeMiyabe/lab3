  <?php
  echo link_tag('css/profile-css.css');

  $preloaderscript = [
    'defer' => null,
    'src' => 'js/pre-loader.js', 
  ];

  $profilescript = [
    'defer' => null,
    'src' => 'js/profile.js', 
  ];

  echo script_tag($preloaderscript);
  echo script_tag($profilescript);
  ?>
  <audio autoplay loop id="audiobox" style="width:215px;">
    <source src="audio/test.mp3" type="audio/mpeg">
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
        <a id="teleportwaypoint" href="guests">
          <?php
          echo img('images/teleportwaypoint.png');
          ?>
          <p>Guest</p>
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
        <a id="teleportwaypoint" href="news">
          <?php
          echo img('images/teleportwaypoint.png');
          ?>
          <p>News</p>
        </a>
        <a id="teleportwaypoint" href="resources">
          <?php
          echo img('images/teleportwaypoint.png');
          ?>
          <p>Resources</p>
        </a>
        <a id="teleportwaypoint" href="thankyou">
          <?php
          echo img('images/teleportwaypoint.png');
          ?>
          <p>Thank you</p>
        </a>
      </div>
    </div>

    <?php
    $bg = [
      'class' => 'parallax_bg',
      'src' => 'images/profile/parallax/fountain of lucine.png',
    ];

    $front = [
      'class' => 'parallax_front',
      'src' => 'images/profile/parallax/fron.png',
    ];

    $adventure = [
      'class' => 'parallax_adventure',
      'src' => 'images/profile/parallax/profile.png',
    ];

    $furina = [
      'class' => 'parallax_furina',
      'src' => 'images/profile/parallax/furina.png',
    ];

    echo img($bg);
    echo img($front);
    echo img($adventure);
    echo img($furina);
    ?>
  </div>

  <div class="main-content">
    <div class="wrapper">
      <div class="content">
        <div class="stack">
          <button id="button1" onclick="hideone()">
            <?php
            echo img('images/profile/maincontent/self.png');
            ?>
          </button>
          <?php
          echo img('images/profile/maincontent/selfinfo.png');
          ?>
        </div>
      </div>
      <div class="content">
        <div class="stack">
          <button id="button2" onclick="hidetwo()">
            <?php
            echo img('images/profile/maincontent/school.png');
            ?>
          </button>
          <?php
          echo img('images/profile/maincontent/schoolinfo.png');
          ?>
        </div>
      </div>
    </div>
  </div>
</body>

</html>
