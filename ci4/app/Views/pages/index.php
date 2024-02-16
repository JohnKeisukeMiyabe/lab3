  <style>
    video#furina {
      position: fixed;
      top: 0;
      right: 0;
      width: 100vw;
      z-index: -1;
    }

    div#clickToContinue img {
      display: block;
      margin-left: auto;
      margin-right: auto;
      padding-top: 39vw;
      width: 50%;
    }
  </style>
</head>

<body>
  <video autoplay muted loop id="furina">
    <source src="images/welcome/furina bg.webm" type="video/mp4">
  </video>
  <a href="home">
    <div id="clickToContinue">
      <?php
      echo img('images/welcome/clicktocontinue.png');
      ?>
    </div>
  </a>
</body>

</html>