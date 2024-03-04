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

    <br>
    <div class="center">
<h2><?= esc($title) ?></h2>
        </div>

<?= session()->getFlashdata('error') ?>
<?= validation_list_errors() ?>

<form action=" <?php echo site_url('news'); ?> " method="post">
    <?= csrf_field() ?>

    <div class="center">
    <label for="title">Title</label>
        </div>
        <div class="center">
    <input type="input" name="title" value="<?= set_value('title') ?>">
        </div>
    <br>

    <div class="center">
    <label for="body">Text</label>
        </div>
        <div class="center">
    <textarea name="body" cols="45" rows="4"><?= set_value('body') ?></textarea>
        </div>
    <br>
    <div class="center">
    <input type="submit" name="submit" value="Create news item">
</form>
        </div>