<?php
require_once('../common.php');
global $language, $dir, $locale;
?>
<!DOCTYPE html><html lang="<?php echo $language; ?>" dir="<?php echo $dir; ?>"><head>
<title><?php echo htmlspecialchars(_('Daniel - Tutorials')); ?></title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="author" content="Daniel Winzen">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="<?php echo htmlspecialchars(_('Various tutorials provided by Daniel Winzen')); ?>">
<link rel="canonical" href="https://danwin1210.de/tutorials/">
<link rel="alternate" href="https://danwin1210.de/tutorials/" hreflang="x-default">
<?php alt_links(); ?>
<meta property="og:type" content="website">
<meta property="og:title" content="<?php echo htmlspecialchars(_('Daniel - Tutorials')); ?>">
<meta property="og:description" content="<?php echo htmlspecialchars(_('Various tutorials provided by Daniel Winzen')); ?>">
<meta property="og:image" content="https://danwin1210.de/assets/daniel.jpg">
<meta property="og:image:type" content="image/jpeg">
<meta property="og:image:height" content="1000">
<meta property="og:image:width" content="1000">
<meta property="og:image:alt" content="<?php echo htmlspecialchars(_('An avatar representing Daniel Winzen')); ?>">
<meta property="og:url" content="https://danwin1210.de/tutorials/">
<meta property="og:locale" content="<?php echo $locale; ?>">
<meta property="og:site_name" content="<?php echo htmlspecialchars(_('Daniel')); ?>">
<script type="application/ld+json">{"@context":"https://schema.org","@type":"WebPage","name":"<?php echo htmlspecialchars(_('Daniel - Tutorials')); ?>", "author":{"@type":"Person", "image": "/assets/daniel.jpg", "name": "Daniel Winzen", "email": "daniel@danwin1210.de", "telephone": "+4917698819809", "url": "https://danwin1210.de"}}</script>
</head><body>
<?php menu(_('Tutorials')); ?>
<p><?php printf(htmlspecialchars(_('Here I upload tutorials that have been asked for a number of times. If you have suggestions on how to improve a tutorial or want me to make one another one, you can %s.')), '<a href="/contact.php">'.htmlspecialchars(_('contact me here')).'</a>'); ?></p>
<div class="table">
<div class="headerrow"><div class="cell"><?php echo htmlspecialchars(_('Name')); ?></div><div class="cell"><?php echo htmlspecialchars(_('Short description')); ?></div></div>
<div class="row"><div class="cell"><a href="torify-ftp/"><?php echo htmlspecialchars(_('Torify FTP clients')); ?></a></div><div class="cell"><?php echo htmlspecialchars(_('This tutorial will show you how to torify FTP clients.')); ?></div></div>
<div class="row"><div class="cell"><a href="get-rich-fast/"><?php echo htmlspecialchars(_('How to get rich (fast)')); ?></a></div><div class="cell"><?php echo htmlspecialchars(_('This tutorial will guide you to achieving financial freedom.')); ?></div></div>
<div class="row"><div class="cell"><a href="successful-sugar-dating/"><?php echo htmlspecialchars(_('How to have a successful sugar dating relationship')); ?></a></div><div class="cell"><?php echo htmlspecialchars(_('This tutorial will guide you in finding a sugar relationship.')); ?></div></div>
<div class="row"><div class="cell"><a href="findom/"><?php echo htmlspecialchars(_('Earning money with findom')); ?></a></div><div class="cell"><?php echo htmlspecialchars(_('This tutorial will show you how you can use findom to earn money.')); ?></div></div>
<div class="row"><div class="cell"><a href="self-employed/"><?php echo htmlspecialchars(_('Becoming self-employed')); ?></a></div><div class="cell"><?php echo htmlspecialchars(_('This article offers valuable guidance to help you embark on your journey as a self-employed individual.')); ?></div></div>
</div>
</main>
</body></html>
