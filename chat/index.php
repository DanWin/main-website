<?php
require_once('../common.php');
global $language, $dir, $locale;
?>
<!DOCTYPE html><html lang="<?php echo $language; ?>" dir="<?php echo $dir; ?>"><head>
<title><?php echo _('Daniel\'s Chat shutdnown'); ?></title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="author" content="Daniel Winzen">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="<?php echo _('Daniel\'s Chat - a former darknet chat community'); ?>">
<link rel="canonical" href="https://danwin1210.de/chat/">
<link rel="alternate" href="https://danwin1210.de/chat/" hreflang="x-default">
<?php alt_links(); ?>
<meta property="og:type" content="website">
<meta property="og:title" content="<?php echo _('Daniel\'s Chat shutdown'); ?>">
<meta property="og:description" content="<?php echo _('Daniel\'s Chat - a former darknet chat community'); ?>">
<meta property="og:image" content="https://danwin1210.de/assets/daniel.jpg">
<meta property="og:image:type" content="image/jpeg">
<meta property="og:image:height" content="1000">
<meta property="og:image:width" content="1000">
<meta property="og:image:alt" content="<?php echo _('An avatar representing Daniel Winzen'); ?>">
<meta property="og:url" content="https://danwin1210.de/chat/">
<meta property="og:locale" content="<?php echo $locale; ?>">
<meta property="og:site_name" content="<?php echo _('Daniel'); ?>">
<script type="application/ld+json">{"@context":"https://schema.org","@type":"WebPage","name":"<?php echo _('Daniel\' Chat shutdown'); ?>", "author":{"@type":"Person", "image": "/assets/daniel.jpg", "name": "Daniel Winzen", "email": "daniel@danwin1210.de", "telephone": "+4917698819809", "url": "https://danwin1210.de"}}</script>
</head><body>
<?php menu(_('Daniel\'s Chat shutdown')); ?>
<p><?php echo _('After 9 years, I\'m shutting down the chat for good.'); ?></p>
<p><?php echo _('If you are interested in running a similar chat community, you can download my chat script on <a href="https://github.com/DanWin/le-chat-php" target="_blank" rel="noopener noreferrer">GitHub</a>.'); ?></p>
<p><?php echo _('This chat started as a hobby project for use in school in 2013 and evolved into a very active darknet chat community. I handed over chat administration to various other people since 2017, as I was no longer able to find the time or motivation to administrate the chat. In recent months, the administration that took over, kept the chat very private, made people spend hours waiting to get access and randomly kicked people for no reason. This in turn filled my inbox with messages of people asking for assistance to access the chat and traffic has decreased to a fraction of what it used to be. In this state, it doesn\'t make sense to continue providing the service. Thus I decided to shut down the chat for good in December 2022, after 9 years.'); ?></p>
<p><?php echo _('Since a few people asked me to make them admin and re-enable the chat: No, this decision has been made and was long overdue. The chat had nothing at all to do with me anymore, except that I\'ve programmed it and I maintain the server. Anyone is welcome to create their own chat, but not here on my site.'); ?></p>
<p><?php echo _('If there are any further questions, feel free to <a href="/contact.php">contact me</a>.'); ?></p>
</main>
</body></html>
