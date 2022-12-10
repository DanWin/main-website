<?php
require_once('../common.php');
global $language;
?>
<!DOCTYPE html><html lang="<?php echo $language; ?>>"><head>
<title><?php echo _('Daniel - Chat'); ?></title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="author" content="Daniel Winzen">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="<?php echo _('Daniel\'s Chat - a former darknet chat community'); ?>">
<link rel="canonical" href="https://danwin1210.de/chat/">
<?php alt_links(); ?>
</head><body>
<?php menu(_('Daniel\'s Chat')); ?>
<p><?php echo _('After 9 years, I\'m shutting down the chat for good.'); ?></p>
<p><?php echo _('You can find alternative chats on <a href="https://onions.danwin1210.de/?cat=2">my onion link list</a>. If you are interested in running a similar chat community, you can download my chat script on <a href="https://github.com/DanWin/le-chat-php" target="_blank" rel="noopener noreferrer">GitHub</a>.'); ?></p>
<p><?php echo _('This chat started as a hobby project for use in school in 2013 and evolved into a very active darknet chat community. I handed over chat administration to various other people since 2017, as I was no longer able to find the time or motivation to administrate the chat. In recent months, the administration that took over, kept the chat very private, made people spend hours waiting to get access and randomly kicked people for no reason. This in turn filled my inbox with messages of people asking for assistance to access the chat and traffic has decreased to a fraction of what it used to be. In this state, it doesn\'t make sense to continue providing the service. Thus I decided to shut down the chat for good in December 2022, after 9 years.'); ?></p>
<p><?php echo _('Since a few people asked me to make them admin and re-enable the chat: No, this decision has been made and was long overdue. The chat had nothing at all to do with me anymore, except that I\'ve programmed it and I maintain the server. Anyone is welcome to create their own chat, but not here on my site.'); ?></p>
<p><?php echo _('If there are any further questions, feel free to <a href="/contact.php">contact me</a>.'); ?></p>
</main>
</body></html>
