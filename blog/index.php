<?php
require_once('../common.php');
global $language, $dir, $locale;
?>
<!DOCTYPE html><html lang="<?php echo $language; ?>" dir="<?php echo $dir; ?>"><head>
<title><?php echo htmlspecialchars(_('Daniel - Blog and news')); ?></title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="author" content="Daniel Winzen">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="<?php echo htmlspecialchars(_('Blog and news by Daniel Winzen')); ?>">
<link rel="canonical" href="https://danwin1210.de/blog/">
<link rel="alternate" href="https://danwin1210.de/blog/" hreflang="x-default">
<?php alt_links(); ?>
<meta property="og:type" content="website">
<meta property="og:title" content="<?php echo htmlspecialchars(_('Daniel - Blog and news')); ?>">
<meta property="og:description" content="<?php echo htmlspecialchars(_('Blog and news by Daniel Winzen')); ?>">
<meta property="og:image" content="https://danwin1210.de/assets/daniel.jpg">
<meta property="og:image:type" content="image/jpeg">
<meta property="og:image:height" content="1000">
<meta property="og:image:width" content="1000">
<meta property="og:image:alt" content="<?php echo htmlspecialchars(_('An avatar representing Daniel Winzen')); ?>">
<meta property="og:url" content="https://danwin1210.de/blog/">
<meta property="og:locale" content="<?php echo $locale; ?>">
<meta property="og:site_name" content="<?php echo htmlspecialchars(_('Daniel')); ?>">
<script type="application/ld+json">{"@context":"https://schema.org","@type":"WebPage","name":"<?php echo htmlspecialchars(_('Daniel - Blog and news')); ?>", "author":{"@type":"Person", "image": "/assets/daniel.jpg", "name": "Daniel Winzen", "email": "daniel@danwin1210.de", "telephone": "+4917698819809", "url": "https://danwin1210.de"}}</script>
</head><body>
<?php menu(_('Blog and news')); ?>
<p><?php echo htmlspecialchars(_('Blog posts and news related to my services will be posted here.')); ?></p>
<div class="table">
<div class="headerrow"><div class="cell"><?php echo htmlspecialchars(_('Date')); ?></div><div class="cell"><?php echo htmlspecialchars(_('Title')); ?></div></div>
<div class="row"><div class="cell"><?php echo htmlspecialchars(_('October 2023')); ?></div><div class="cell"><a href="/blog/ipv6/"><?php echo htmlspecialchars(_('Embracing IPv6: The Key to a Future-Proof Internet')); ?></a></div></div>
<div class="row"><div class="cell"><?php echo htmlspecialchars(_('August 2023')); ?></div><div class="cell"><a href="/blog/onion-link-list-shutdown/"><?php echo htmlspecialchars(_('Onion link list shutdown')); ?></a></div></div>
<div class="row"><div class="cell"><?php echo htmlspecialchars(_('December 2022')); ?></div><div class="cell"><a href="/chat/"><?php echo htmlspecialchars(_('Daniel\'s Chat shutdown')); ?></a></div></div>
<div class="row"><div class="cell"><?php echo htmlspecialchars(_('December 2021')); ?></div><div class="cell"><a href="/new-domain.php"><?php echo htmlspecialchars(_('New domain - DanWin1210.Me is now DanWin1210.De')); ?></a></div></div>
<div class="row"><div class="cell"><?php echo htmlspecialchars(_('March 2020')); ?></div><div class="cell"><a href="/hosting/"><?php echo htmlspecialchars(_('Hosting service shutdown due to hack')); ?></a></div></div>
</div>
</main>
</body></html>
