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

<form action="<?php echo site_url('guests'); ?>" method="post">
    <?= csrf_field() ?>

    <div class="center">
    <label for="name">Name</label>
        </div>
        <div class="center">
    <input type="input" name="name" value="<?= set_value('name') ?>">
        </div>
    <br>

    <div class="center">
    <label for="email">Email</label>
        </div>
        <div class="center">
    <input type="input" name="email" value="<?= set_value('email') ?>">
        </div>
    <br>

    <div class="center">
    <label for="comment">Comment</label>
        </div>
        <div class="center">
    <textarea name="comment" cols="45" rows="4"><?= set_value('comment') ?></textarea>
        </div>
    <br>

    <div class="center">
    <input type="submit" name="submit" value="Create guest item">

</form>
        </div>