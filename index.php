<?php
date_default_timezone_set('America/Montreal');
$mtime = filemtime(__FILE__);
if (isset($_SERVER['HTTP_IF_MODIFIED_SINCE'])
  && strtotime($_SERVER['HTTP_IF_MODIFIED_SINCE']) >= $mtime)
{
    header('HTTP/1.0 304 Not Modified');
    exit;
}
header("Last-Modified: " . gmdate("D, d M Y H:i:s", $mtime) . " GMT");
header("Cache-Control: s-maxage=157680000");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Web à Québec - 19 au 21 mars 2014 à l'Espace 400e Bell</title>

    <meta name="viewport" content="width=device-width,user-scalable=no">

    <meta property="og:image" content="<?php echo 'http://'.$_SERVER['HTTP_HOST']; ?>/img/fb-share-img.jpg"/>
    <meta property="og:title" content="Web à Québec - 19 au 21 mars 2014 à l'Espace 400e Bell"/>
    <meta property="og:site_name" content="Web à Québec" />
    <meta property="og:url" content="<?php echo 'http://'.$_SERVER['HTTP_HOST']; ?>"/>
    <meta property="og:description" content="Le Web à Québec c'est trois jours de rencontres par et pour les gens qui imaginent le web." />
    <meta property="og:type" content="website">

    <meta name="description" content="Le Web à Québec c'est trois jours de rencontres par et pour les gens qui imaginent le web.">
    <meta name="author" content="Libéo - http://www.libeo.com">
    <meta name="image_src" content="<?php echo 'http://'.$_SERVER['HTTP_HOST']; ?>/img/fb-share-img.jpg">

    <link rel="icon" href="img/waq-favicon.ico" type="image/x-icon">
    <link rel="shortcut icon" href="img/waq-favicon.ico" type="image/x-icon">

    <link rel="stylesheet" href="css/fonts/miso_bold/stylesheet.css">
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="css/styles.css">
    <!--[if IE]>
        <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
    <script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
    (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
    m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

    ga('create', 'UA-20043510-1', 'webaquebec.org');
    ga('send', 'pageview');
  </script>
</head>

<body id="home">

  <div class="page vevent">
    <div class="dark clearfix">
      <div class="content">
        <div class="infos">
          <h1><img class="photo" src="img/waq-logo.png" alt="WAQ"></a></h1>
          <h2 class="summary">Le Web à Québec</h2>
          <p class="date"><time class="dtstart" datetime="2014-03-19" title="2014-03-19">19</time> au <time class="dtend" datetime="2014-03-21" title="2014-03-21">21</time> mars</p>
          <p class="location">Espace 400e Bell</p>
          <ul class="social">
            <li><a lang="en" href="http://www.facebook.com/webaquebec"><img src="img/social-facebook.png" alt="Facebook"></a></li>
            <li><a lang="en" href="http://twitter.com/webaquebec"><img src="img/social-twitter.png" alt="Twitter"></a></li>
            <li><a lang="en" href="http://www.linkedin.com/company/1609788"><img src="img/social-linkedin.png" alt="LinkedIn"></a></li>
          </ul>
        </div>
        <div class="eventbrite">
          <!-- Billets semiaccessibles en commentaire -->
          <a href="#tickets" class="jump-eventbrite visuallyhidden focusable" tabindex="0">Le contenu suivant n'est pas géré par ce site et n'est pas accessible. Cliquer pour sauter ce contenu</a>
          <iframe src="https://www.eventbrite.ca/tickets-external?eid=8015888739&ref=etckt&v=1" frameborder="0" height="300" width="100%" vspace="0" hspace="0" marginheight="5" marginwidth="5" scrolling="auto" allowtransparency="true"></iframe>
          <a class="eventbrite-button" href="http://www.eventbrite.com/event/8015888739?ref=ebtn" target="_blank">
            <img border="0" src="http://www.eventbrite.com/custombutton?eid=8015888739" alt="Register for Eventbrite API - Office Hours on Eventbrite" />
          </a>
          <h2 id="tickets" tabindex="0" class="visuallyhidden">Billets</h2>
          <span id="tickets" class="tickets visuallyhidden">
            <span class="hoffer">
              <a href="http://webaquebec2014.eventbrite.com/" class="offerurl">Tarif réserve-tôt</a>
              <span class="price">$385,00</span> jusqu'au <span class="pricevaliduntil">31 oct. 2013</span>
            </span>
          </span>
        </div>
      </div>
    </div>
    <div class="shade">
      <div class="content">
        <p class="description">Le Web à Québec est l’événement par et pour les gens de l’industrie du Web de Québec. Renouvelant sa formule à succès de présentation éclair par des talents locaux, l’événement accueillera à nouveau des invités internationaux inspirants qui vous entretiendront sur les sujets et thèmes les plus actuels.</p>
      </div>
    </div>
  </div>
</body>
</html>
