<?php
require_once('../common.php');
global $language, $dir, $locale;
?>
<!DOCTYPE html><html lang="<?php echo $language; ?>" dir="<?php echo $dir; ?>"><head>
<title><?php echo htmlspecialchars(_('Daniel\'s Hosting shutdown after hack')); ?></title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="author" content="Daniel Winzen">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="<?php echo htmlspecialchars(_('Daniel\'s Hosting - a former darknet web hosting service')); ?>">
<link rel="canonical" href="https://danwin1210.de/hosting/">
<link rel="alternate" href="https://danwin1210.de/hosting/" hreflang="x-default">
<?php alt_links(); ?>
<meta property="og:type" content="website">
<meta property="og:title" content="<?php echo htmlspecialchars(_('Daniel\'s Hosting shutdown after hack')); ?>">
<meta property="og:description" content="<?php echo htmlspecialchars(_('Daniel\'s Hosting - a former darknet web hosting service')); ?>">
<meta property="og:image" content="https://danwin1210.de/assets/daniel.jpg">
<meta property="og:image:type" content="image/jpeg">
<meta property="og:image:height" content="1000">
<meta property="og:image:width" content="1000">
<meta property="og:image:alt" content="<?php echo htmlspecialchars(_('An avatar representing Daniel Winzen')); ?>">
<meta property="og:url" content="https://danwin1210.de/hosting/">
<meta property="og:locale" content="<?php echo $locale; ?>">
<meta property="og:site_name" content="<?php echo htmlspecialchars(_('Daniel')); ?>">
<script type="application/ld+json">{"@context":"https://schema.org","@type":"WebPage","name":"<?php echo htmlspecialchars(_('Daniel\'s Hosting shutdown after hack')); ?>", "author":{"@type":"Person", "image": "/assets/daniel.jpg", "name": "Daniel Winzen", "email": "daniel@danwin1210.de", "telephone": "+4917698819809", "url": "https://danwin1210.de"}}</script>
</head><body>
<?php menu(_('Daniel\'s Hosting shutdown after hack')); ?>
<p><?php printf(htmlspecialchars(_('In March 2020 a hacker deleted all databases related to my hosting, thus I was forced to shut down my hosting service. If you want to contribute or setup your own hosting, check out my open source project at %s.')), '<a href="https://github.com/DanWin/hosting" target="_blank" rel="noopener">https://github.com/DanWin/hosting</a>'); ?></p>
<p><?php printf(htmlspecialchars(_('Being a darknet hoster has taught me many things. However, this was a free time project I did next to my full time job and it\'s very time-consuming to try and keep the server clean from illegal and scammy sites. I\'ve spent 10 times more time on deleting accounts than I could find time to continue development. At this time I do not plan on continuing the hosting project, but this doesn\'t have to be the end. There are other hosting providers like %1$s, %2$s, %3$s or a clearnet proxy service %4$s and my project is %5$s, which should enable anyone willing to become the next darknet shared hosting provider to start where I left of.')), '<a href="https://hzwjmjimhr7bdmfv2doll4upibt5ojjmpo3pbp5ctwcg37n3hyk7qzid.onion/" target="_blank" rel="noopener">Ablative Hosting</a>', '<a href="http://fhostingineiwjg6cppciac2bemu42nwsupvvisihnczinok362qfrqd.onion/" target="_blank" rel="noopener">Freedom Hosting Reloaded</a>', '<a href="http://dwebkjkovsjobzrb45dz6prnlifnapiyp2dba33vcmcsaikr2re4d5qd.onion" target="_blank" rel="noopener">OnionLand Hosting</a>', '<a href="https://clearnetonion.eu.org/" target="_blank" rel="noopener">Clearnet Onion | Easy clearnet relay</a>', '<a href="https://github.com/DanWin/hosting/" target="_blank" rel="noopener">'.htmlspecialchars(_('available for download')).'</a>'); ?></p>
</main>
</body></html>
