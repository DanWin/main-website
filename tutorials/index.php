<?php
require_once('../common.php');
global $language;
?>
<!DOCTYPE html><html lang="<?php echo $language; ?>"><head>
<title><?php echo _('Daniel - Tutorials'); ?></title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="author" content="Daniel Winzen">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="<?php echo _('Various tutorials provided by Daniel Winzen'); ?>">
<link rel="canonical" href="https://danwin1210.de/tutorials/">
<?php alt_links(); ?>
</head><body>
<?php menu(_('Tutorials')); ?>
<p><?php echo _('Here I upload tutorials that have been asked for a number of times. If you have suggestions on how to improve a tutorial or want me to make one another one, you can <a href="/contact.php">contact me here</a>.'); ?></p>
<div class="table">
<div class="headerrow"><div class="cell"><?php echo _('Name'); ?></div><div class="cell"><?php echo _('Short description'); ?></div></div>
<div class="row"><div class="cell"><a href="torify-ftp/"><?php echo _('Torify FTP clients'); ?></a></div><div class="cell"><?php echo _('This tutorial will show you how to torify FTP clients.'); ?></div></div>
</div>
</main>
</body></html>
