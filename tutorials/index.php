<?php
require_once('../common.php');
global $language, $dir, $locale;
?>
<!DOCTYPE html><html lang="<?php echo $language; ?>" dir="<?php echo $dir; ?>"><head>
<title><?php echo _('Daniel - Tutorials'); ?></title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="author" content="Daniel Winzen">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="<?php echo _('Various tutorials provided by Daniel Winzen'); ?>">
<link rel="canonical" href="https://danwin1210.de/tutorials/">
<link rel="alternate" href="https://danwin1210.de/tutorials/" hreflang="x-default">
<?php alt_links(); ?>
<meta property="og:type" content="website">
<meta property="og:title" content="<?php echo _('Daniel - Tutorials'); ?>">
<meta property="og:description" content="<?php echo _('Various tutorials provided by Daniel Winzen'); ?>">
<meta property="og:image" content="https://danwin1210.de/daniel.jpg">
<meta property="og:image:type" content="image/jpeg">
<meta property="og:image:height" content="1000">
<meta property="og:image:width" content="1000">
<meta property="og:image:alt" content="<?php echo _('An avatar representing Daniel Winzen'); ?>">
<meta property="og:url" content="https://danwin1210.de/tutorials/">
<meta property="og:locale" content="<?php echo $locale; ?>">
<meta property="og:site_name" content="<?php echo _('Daniel'); ?>">
</head><body>
<?php menu(_('Tutorials')); ?>
<p><?php echo _('Here I upload tutorials that have been asked for a number of times. If you have suggestions on how to improve a tutorial or want me to make one another one, you can <a href="/contact.php">contact me here</a>.'); ?></p>
<div class="table">
<div class="headerrow"><div class="cell"><?php echo _('Name'); ?></div><div class="cell"><?php echo _('Short description'); ?></div></div>
<div class="row"><div class="cell"><a href="torify-ftp/"><?php echo _('Torify FTP clients'); ?></a></div><div class="cell"><?php echo _('This tutorial will show you how to torify FTP clients.'); ?></div></div>
</div>
</main>
</body></html>
