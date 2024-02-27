  <?php
  echo link_tag('css/resources-css.css');

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
        <a id="teleportwaypoint" href="news">
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
      'src' => 'images/resources/parallax/erinnyes.png',
    ];

    $front = [
      'class' => 'parallax_front',
      'src' => 'images/resources/parallax/fron.png',
    ];

    $adventure = [
      'class' => 'parallax_adventure',
      'src' => 'images/resources/parallax/resources.png',
    ];

    $furina = [
      'class' => 'parallax_furina',
      'src' => 'images/resources/parallax/furina.png',
    ];

    echo img($bg);
    echo img($front);
    echo img($adventure);
    echo img($furina);
    ?>

    <img class="parallax_bg" src="images/resources/parallax/erinnyes.png" alt="" />
    <img class="parallax_front" src="images/resources/parallax/fron.png" alt="" />
    <img class="parallax_adventure" src="images/resources/parallax/resources.png" alt="" />
    <img class="parallax_furina" src="images/resources/parallax/furina.png" alt="" />
  </div>

  <div class="main-content">
    <div class="wrapper">
      <div id="inside">
        <div id="resources">
          <h1>Pages Resources</h1>
          <a href="https://ko-fi.com/s/9348c523d0">
            Cursors
          </a>
          <br>
          <br>
          <a href="https://www.reddit.com/r/Genshin_Impact/comments/lbawi2/vectorized_teleport_icons_w_psd_file/">
            Waypoints
          </a>
        </div>
      </div>
      <div id="inside">
        <div id="resources">
          <h1>Welcome Page Resources</h1>
          <div id="link">
            <a href="https://www.youtube.com/watch?v=AwXtsQYouFw">
              Background Video in Welcome Screen
            </a>
            <br>
            <br>
            <a href="https://www.canva.com/design/DAF5MG0VRi8/RsYh4VIP1S5egELxXNo-ZA/edit?utm_content=DAF5MG0VRi8&utm_campaign=designshare&utm_medium=link2&utm_source=sharebutton">
              Click Anywhere to Continue Image
            </a>
          </div>
        </div>
      </div>
      <div id="inside">
        <div id="resources">
          <h1>Home Page Resources</h1>
          <a href="https://danbooru.donmai.us/posts/6725994">
            Furina
          </a>
          <br>
          <br>
          <a href="https://genshin-impact.fandom.com/f/p/4400000000000432917/r/4400000000001943512">
            Furina's elemental skill members
          </a>
          <br>
          <br>
          <a href="https://www.reddit.com/r/Genshin_Impact/comments/165wvmn/illustration_of_fontaine_underwater_this_is_the/?rdt=53998">
            Background in Parallax Scroll
          </a>
          <br>
          <br>
          <a href="https://www.reddit.com/r/Genshin_Impact/comments/lbawi2/vectorized_teleport_icons_w_psd_file/">
            Waypoints
          </a>
          <br>
          <br>
          <a href="https://www.canva.com/design/DAF7b_vNRn8/ilV0R9AoI194mkDq1nzdDA/edit?utm_content=DAF7b_vNRn8&utm_campaign=designshare&utm_medium=link2&utm_source=sharebutton">
            Home Page Contents
          </a>
        </div>
      </div>
      <div id="inside">
        <div id="resources">
          <h1>Profile Page Resources</h1>
          <a href="https://www.deviantart.com/serenext/art/FURINA-Genshin-Impact-Render-992975495">
            Furina
          </a>
          <br>
          <br>
          <a href="https://www.sportskeeda.com/esports/genshin-impact-4-1-fountain-lucine-level-limit-rewards-total-hydro-sigil-count">
            Background in Parallax Scroll
          </a>
          <br>
          <br>
          <a href="https://www.canva.com/design/DAF7byUG9MQ/-hwd0SaAoyl9DR0ReHO_FQ/edit?utm_content=DAF7byUG9MQ&utm_campaign=designshare&utm_medium=link2&utm_source=sharebutton">
            Profile Page Contents
          </a>
        </div>
      </div>
      <div id="inside">
        <div id="resources">
          <h1>Interests Page Resources</h1>
          <a href="https://www.deviantart.com/mandatorymochi/art/4-1-Livestream-2-Furina-982886430">
            Furina
          </a>
          <br>
          <br>
          <a href="https://www.deviantart.com/taemuepuan/art/Navia-Transparent-992768007">
            Navia
          </a>
          <br>
          <br>
          <a href="https://anitrendz.net/news/2023/08/04/genshin-impact-4-0/court-of-fontaine/">
            Background in Parallax Scroll
          </a>
          <br>
          <br>
          <a href="https://www.canva.com/design/DAF6SzHtbj8/iNZdXRvPk9I5upb6gkjnsw/edit?utm_content=DAF6SzHtbj8&utm_campaign=designshare&utm_medium=link2&utm_source=sharebutton">
            Interests Page Contents
          </a>
        </div>
      </div>
      <div id="inside">
        <div id="resources">
          <h1>Steambird Page Resources</h1>
          <a href="https://www.deviantart.com/mhesagnta/art/Charlotte-Genshin-Impact-Render-991664973">
            Charlotte
          </a>
          <br>
          <br>
          <a href="https://www.sportskeeda.com/esports/the-steambird-genshin-impact-everything-important-know-fontaine-s-newspaper">
            Background in Parallax Scroll
          </a>
          <br>
          <br>
          <a href="https://www.canva.com/design/DAF6ZW6-ADw/nySm6AE6GXjVmbMjKAS42g/edit?utm_content=DAF6ZW6-ADw&utm_campaign=designshare&utm_medium=link2&utm_source=sharebutton">
            Steambird Page Contents
          </a>
        </div>
      </div>
      <div>
        <h1>These are my resources so far</h1>
      </div>
    </div>
  </div>
</body>

</html>
