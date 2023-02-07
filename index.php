<?php
require_once('common.php');
global $language, $dir, $locale;
?>
<!DOCTYPE html><html lang="<?php echo $language; ?>" dir="<?php echo $dir; ?>"><head>
<title><?php echo _('Daniel - Home'); ?></title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="author" content="Daniel Winzen">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="<?php echo _('Personal website of Daniel Winzen, the web developer, sysadmin and privacy enthusiast'); ?>">
<link rel="canonical" href="https://danwin1210.de/">
<link rel="alternate" href="https://danwin1210.de/" hreflang="x-default">
<?php alt_links(); ?>
<meta property="og:type" content="website">
<meta property="og:title" content="<?php echo _('Daniel - Home'); ?>">
<meta property="og:description" content="<?php echo _('Personal website of Daniel Winzen, the web developer, sysadmin and privacy enthusiast'); ?>">
<meta property="og:image" content="https://danwin1210.de/daniel.jpg">
<meta property="og:image:type" content="image/jpeg">
<meta property="og:image:height" content="1000">
<meta property="og:image:width" content="1000">
<meta property="og:image:alt" content="<?php echo _('An avatar representing Daniel Winzen'); ?>">
<meta property="og:url" content="https://danwin1210.de/">
<meta property="og:locale" content="<?php echo $locale; ?>">
<meta property="og:site_name" content="<?php echo _('Daniel'); ?>">
<script type="application/ld+json">{"@context":"https://schema.org","@type":"WebSite","name":"Daniel","alternateName":"DanWin","url":"https://danwin1210.de/", "author":{"@type":"Person", "image": "/daniel.jpg", "name": "Daniel Winzen", "email": "daniel@danwin1210.de", "telephone": "+4917698819809", "url": "https://danwin1210.de"}}</script>
</head><body>
<?php menu(_('Home')); ?>
<p><?php echo _('Hello, my name is Daniel Winzen, a german web developer and system administrator. This is my personal website, that I develop in my free time. This site is available as <a href="http://danielas3rtn54uwmofdo3x2bsdifr47huasnmbgqzfrec5ubupvtpid.onion">Tor hidden service</a> or via my clearnet proxy <a href="https://danwin1210.de">danwin1210.de</a>. To learn more about me and this site, check <a href="/about.php">the about page</a>.'); ?></p>
<p><?php echo _('This is just the landing page. You can navigate to the pages that interest you most, such as my free and anonymous <a href="/mail/">mail service</a> or <a href="https://onions.danwin1210.de">Tor darknet link collection</a>, by clicking on the entries in the navigation bar on the left.'); ?></p>
<p><?php echo _('You can download and/or contribute to my various open-source projects on <a href="https://github.com/DanWin/" target="_blank" rel="noopener noreferrer">GitHub</a>.'); ?></p>
<p><?php printf(_('If you like, what I\'ve built here, you can support me by donating via Monero: %1$s or Bitcoin: %2$s . More options available, just <a href="/contact.php">contact me</a>.'), DONATE_XMR, DONATE_BTC); ?></p>
</main>
</body></html>
