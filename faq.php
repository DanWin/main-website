<?php
require_once('common.php');
global $language;
?>
<!DOCTYPE html><html lang="<?php echo $language; ?>"><head>
<title><?php echo _('Daniel - FAQ - Frequently Asked Questions'); ?></title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="<?php echo _('A list of frequently asked questions regarding the services I provide and their answers'); ?>">
<link rel="canonical" href="https://danwin1210.de/faq.php">
<?php alt_links(); ?>
</head><body>
<?php menu(_('FAQ - Frequently Asked Questions')); ?>
<p><?php echo _('Here you have a list of frequently asked questions regarding the services I provide and their answers.'); ?></p>
<div class="table">
<div class="headerrow">
    <div class="cell"><?php echo _('Question'); ?></div>
    <div class="cell"><?php echo _('Answer'); ?></div>
</div>
<div class="row">
    <div class="cell"><?php echo _('I found an illegal link/content on your site, can you remove it?'); ?></div>
    <div class="cell"><?php echo _('Yes, please <a href="contact.php">report it</a> and I will remove it as soon as possible.'); ?></div>
</div>
<div class="row">
    <div class="cell"><?php echo _('What is PGP?'); ?></div>
    <div class="cell"><?php echo _('PGP is an encryption program, that can be used to encrypt or sign emails and files. <a href="https://en.wikipedia.org/wiki/Pretty_Good_Privacy" target="_blank" rel="noopener noreferrer">More info in this Wikipedia article</a>.'); ?></div>
</div>
<div class="row">
    <div class="cell"><?php echo _('I have an idea how to make your site better, can you add feature xyz?'); ?></div>
    <div class="cell"><?php echo _('Yes, please <a href="contact.php">contact me</a> and I may add it on my ToDo list. It might take a while until your feature gets added though.'); ?></div>
</div>
<div class="row">
    <div class="cell"><?php echo _('I want to translate your site and services into another language, how can I do this?'); ?></div>
    <div class="cell"><?php echo _('Please see my <a href="https://github.com/DanWin/" target="_blank" rel="noopener noreferrer">GitHub repositories</a> and check out the individual projects you would like to translate.'); ?></div>
</div>
<div class="row">
    <div class="cell"><?php echo _('I heard of red rooms, live murder streams or similar. Are they real?'); ?></div>
    <div class="cell"><?php echo _('No, they are just horror stories people commonly tell you. Many people make YouTube videos about the "deep web" and claim there were sites like these. However, many scammers jump on the train and create a site where they tell you to pay bitcoins to gain access. Don\'t pay, because they simply do not exist.'); ?></div>
</div>
<div class="row">
    <div class="cell"><?php echo _('I heard of the shadow web, marianas web or closed shell network. How can I access them?'); ?></div>
    <div class="cell"><?php echo _('You can\'t, because they do not exist. Some scammers want to sell it to you though. Don\'t pay because you won\'t get anything in return for your money.'); ?></div>
</div>
<div class="row">
    <div class="cell"><?php echo _('Isn\'t the dark net supposed to be scary and full of creepy shit? Why can\'t I find any interesting sites?'); ?></div>
    <div class="cell"><?php echo _('No, the Tor darknet was created to be able to anonymously browse the internet, circumvent censorship and anonymously host websites. Of course, it\'s not only used for a good cause. There are many phishing sites, scammers and child porn sites. But apart from the fact that you are anonymous, there isn\'t that much of a difference to the clearnet (normal internet). So most horror stories you have heard about Tor are just that, stories.'); ?></div>
</div>
<div class="row">
    <div class="cell"><?php echo _('What\'s the difference between deep web and darknet?'); ?></div>
    <div class="cell"><?php echo _('The deep web is any site that can\'t be indexed by a search engine, so basically any site where you have to log in or be part of a private network. To access a darknet, it requires special software like Tor, I2P or Freenet. The darknet is a small part of the deep web.'); ?></div>
</div>
<div class="row">
    <div class="cell"><?php echo _('Can you hold my hands and teach me programming or hacking step by step?'); ?></div>
    <div class="cell">
        <?php echo _('Yes, marry me and I might actually do that. But only if you teach me something in return. <a href="contact.php">Send me your proposals</a>. Sorry guys, only considering females.'); ?>
        <br><br>
        <?php echo _('Joking aside, Teaching you programming or hacking is a task that will take a long time (years). I\'ve been learning for 10 years and still learn new things all the time. But for the beginning I would recommend reading a beginners introduction book, which can guide you with some simple programs you build yourself and examples. If you prefer watching videos, there are a lot of tutorials on YouTube too. But most importantly you will have to take your keyboard and start typing some programs. Start with something simple and keep yourself challenged with new tasks.'); ?>
    </div>
</div>
<div class="row">
    <div class="cell"><?php echo _('- Can you hack my school or university and change my grades, or find someone who would do that?'); ?><br><?php echo _('- Can you give me, or tell me where to reliably get stolen PayPal accounts or credit cards?'); ?><br><?php echo _('- Can you issue fake Covid19 test results?'); ?><br><?php echo _('- Can you do some other illegal things for me?'); ?></div>
    <div class="cell"><?php echo _('Yes, I would love to go to prison for you! - Ehm, or rather not. Sorry, can\'t help you with that.'); ?></div>
</div>
<div class="row">
    <div class="cell"><?php echo _('Can you hack my girlfriend? I think she\'s cheating.'); ?></div>
    <div class="cell"><?php echo _('Yes, I could try, but I won\'t. Don\'t trust the any sites that claim to give you that, because they are all scams. This is ethically just wrong and is more likely going to hurt your relationship than helping you. Talk to her, it\'s the best you can do. If you are at the point of thinking to hire a hacker, you should definitely think about breaking up, because relationships are based on trust, but obviously you can\'t trust anymore.'); ?></div>
</div>
<div class="row">
    <div class="cell"><?php echo _('My email doesn\'t get sent. I\'m getting an error about TLS'); ?></div>
    <div class="cell"><?php echo _('You\'ve tried sending an email to a mail server that doesn\'t accept emails via encrypted transfer, or is using insecure protocols. This is very unfortunate, because it would leak your email content to anyone on the internet, who can intercept your email before it reaches the destination. You can disable mandatory encryption in your <a href="/mail/manage_account.php">account settings</a>, if you still need to send this email.'); ?></div>
</div>
<div class="row">
    <div class="cell"><?php echo _('I can\'t receive email, the sender gets an error about TLS'); ?></div>
    <div class="cell"><?php echo _('Someone tried emailing you from a mail server that doesn\'t support sending emails via encrypted transfer, or is using insecure protocols. This is very unfortunate, because it would leak your email content to anyone on the internet, who can intercept your email before it reaches the destination. You can disable mandatory encryption in your <a href="/mail/manage_account.php">account settings</a>, if you still need to receive this email.'); ?></div>
</div>
<div class="row">
    <div class="cell"><?php echo _('I have more Questions.'); ?></div>
    <div class="cell"><?php echo _('Feel free, to <a href="contact.php">contact me</a>.'); ?></div>
</div>
</div>
</main>
</body></html>
