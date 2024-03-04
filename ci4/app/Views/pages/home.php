  <?php
  echo link_tag('css/home-css.css');

  $script = [
    'defer' => null,
    'src' => 'js/pre-loader.js', 
  ];

  echo script_tag($script);
  ?>

  <audio autoplay loop id="audiobox" style="width:215px;">
    <source src="audio/home.mp3" type="audio/mpeg">
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
      'src' => 'images/home/parallax/background.png',
    ];

    $front = [
      'class' => 'parallax_front',
      'src' => 'images/home/parallax/front-parallax.png',
    ];

    $adventure = [
      'class' => 'parallax_adventure',
      'src' => 'images/home/parallax/lets-go-adventure-parallax.png',
    ];

    $furina = [
      'class' => 'parallax_furina',
      'src' => 'images/home/parallax/furina-parallax.png',
    ];

    $mc = [
      'class' => 'parallax_mc',
      'src' => 'images/home/parallax/mc-parallax.png',
    ];

    $sc = [
      'class' => 'parallax_sc',
      'src' => 'images/home/parallax/sc-parallax.png',
    ];

    $gu = [
      'class' => 'parallax_gu',
      'src' => 'images/home/parallax/gu-parallax.png',
    ];

    echo img($bg);
    echo img($front);
    echo img($adventure);
    echo img($furina);
    echo img($mc);
    echo img($sc);
    echo img($gu);
    ?>
  </div>
<!--Main Content-->
  <div class="main-content">
    <div class="wrapper">
      <div class="pic">
        <?php
        $cio = [
          'src' => 'images/home/maincontent/checkitout.png',
        ];
    
        $profile = [
          'src' => 'images/home/maincontent/profile.png',
        ];
    
        $interests = [
          'src' => 'images/home/maincontent/interests.png',
        ];
    
        $steambird = [
          'src' => 'images/home/maincontent/steambird.png',
        ];
    
        $resources = [
          'src' => 'images/home/maincontent/resources.png',
        ];

        echo img($cio);
        echo img($profile);
        echo img($interests);
        echo img($steambird);
        echo img($resources);
        ?>
      </div>
    </div>
  </div>
