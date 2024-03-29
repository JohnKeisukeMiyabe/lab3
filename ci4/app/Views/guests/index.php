<?php
  echo link_tag('css/guests-news-css.css');

  $script = [
    'defer' => null,
    'src' => 'js/pre-loader.js', 
  ];

  echo script_tag($script);
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
      'src' => 'images/steambird/parallax/steambird.png',
    ];

    $front = [
      'class' => 'parallax_front',
      'src' => 'images/steambird/parallax/fron.png',
    ];

    $adventure = [
      'class' => 'parallax_adventure',
      'src' => 'images/steambird/parallax/message.png',
    ];

    $charlotte = [
      'class' => 'parallax_charlotte',
      'src' => 'images/steambird/parallax/charlotte.png',
    ];

    echo img($bg);
    echo img($front);
    echo img($adventure);
    echo img($charlotte);
    ?>
</div>

<div class="main-content">
    <div class="wrapper">
        <a id="center" href="guests/new">Want to put your message Traveler? Click Here</a></div>
<div class="h"><?= esc($title) ?></div>

<?php if (! empty($guests) && is_array($guests)): ?>

    <?php foreach ($guests as $guests_item): ?>

        <h3><?= esc($guests_item['name']) ?></h3>

        <div class="main">
            <?= esc($guests_item['email']) ?>
            <br>
            <?= esc($guests_item['comment']) ?>
        </div>
        <p><a href="./guests/<?= esc($guests_item['email'], 'url') ?>">View Guest detail</a></p>

    <?php endforeach ?>

<?php else: ?>

    <h3>No Guests</h3>

    <p>Unable to find any guest for you.</p>

<?php endif ?>
</div>
</div>