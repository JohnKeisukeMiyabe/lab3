<?php
  echo link_tag('css/create-css.css');

  $script = [
    'defer' => null,
    'src' => 'js/pre-loader.js', 
  ];

  echo script_tag($script);
  ?>

  <audio autoplay loop id="audiobox" style="width:215px;">
    <source src="../audio/test.mp3" type="audio/mpeg">
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
        <a id="teleportwaypoint" href="../profile">
          <?php
          echo img('images/teleportwaypoint.png');
          ?>
          <p>Profile</p>
        </a>
        <a id="teleportwaypoint" href="../interests">
          <?php
          echo img('images/teleportwaypoint.png');
          ?>
          <p>Interests</p>
        </a>
        <a id="teleportwaypoint" href="../guests">
          <?php
          echo img('images/teleportwaypoint.png');
          ?>
          <p>Guest</p>
        </a>
      </div>
      <div id="statueoftheseven">
        <a href="../home">
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
        <a id="teleportwaypoint" href="../news">
          <?php
          echo img('images/teleportwaypoint.png');
          ?>
          <p>News</p>
        </a>
        <a id="teleportwaypoint" href="../resources">
          <?php
          echo img('images/teleportwaypoint.png');
          ?>
          <p>Resources</p>
        </a>
        <a id="teleportwaypoint" href="../thankyou">
          <?php
          echo img('images/teleportwaypoint.png');
          ?>
          <p>Thank you</p>
        </a>
      </div>
    </div>
<h2><?= esc($news['title']) ?></h2>
<p><?= esc($news['body']) ?></p>
        </body>