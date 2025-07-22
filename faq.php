<?php
require_once('common.php');
global $language, $dir, $locale;
?>
<!DOCTYPE html><html lang="<?php echo $language; ?>" dir="<?php echo $dir; ?>"><head>
<title><?php echo htmlspecialchars(_('Daniel - FAQ - Frequently Asked Questions')); ?></title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="<?php echo htmlspecialchars(_('A list of frequently asked questions regarding the services I provide and their answers')); ?>">
<link rel="canonical" href="https://danwin1210.de/faq.php">
<link rel="alternate" href="https://danwin1210.de/faq.php" hreflang="x-default">
<?php alt_links(); ?>
<meta property="og:type" content="website">
<meta property="og:title" content="<?php echo htmlspecialchars(_('Daniel - FAQ - Frequently Asked Questions')); ?>">
<meta property="og:description" content="<?php echo htmlspecialchars(_('A list of frequently asked questions regarding the services I provide and their answers')); ?>">
<meta property="og:image" content="https://danwin1210.de/assets/daniel.jpg">
<meta property="og:image:type" content="image/jpeg">
<meta property="og:image:height" content="1000">
<meta property="og:image:width" content="1000">
<meta property="og:image:alt" content="<?php echo htmlspecialchars(_('An avatar representing Daniel Winzen')); ?>">
<meta property="og:url" content="https://danwin1210.de/faq.php">
<meta property="og:locale" content="<?php echo $locale; ?>">
<meta property="og:site_name" content="<?php echo htmlspecialchars(_('Daniel')); ?>">
</head><body itemscope itemtype="https://schema.org/FAQPage">
<?php menu(_('FAQ - Frequently Asked Questions')); ?>
<p><?php echo htmlspecialchars(_('Here you have a list of frequently asked questions regarding the services I provide and their answers.')); ?></p>
<div class="table">
    <div class="headerrow">
        <div class="cell"><?php echo htmlspecialchars(_('Question')); ?></div>
        <div class="cell"><?php echo htmlspecialchars(_('Answer')); ?></div>
    </div>
    <div itemprop="mainEntity" itemscope itemtype="https://schema.org/Question" class="row">
        <div itemprop="name" class="cell"><?php echo htmlspecialchars(_('What is PGP?')); ?></div>
        <div itemprop="acceptedAnswer" itemscope itemtype="https://schema.org/Answer" class="cell"><div itemprop="text"><?php echo htmlspecialchars(_('PGP is an encryption program, that can be used to encrypt or sign emails and files.')) . ' <a href="https://en.wikipedia.org/wiki/Pretty_Good_Privacy" target="_blank" rel="noopener noreferrer">'.htmlspecialchars(_('More info in this Wikipedia article')).'</a>.'; ?></div></div>
    </div>
    <div itemprop="mainEntity" itemscope itemtype="https://schema.org/Question" class="row">
        <div itemprop="name" class="cell"><?php echo htmlspecialchars(_('I have an idea how to make your site better, can you add feature xyz?')); ?></div>
        <div itemprop="acceptedAnswer" itemscope itemtype="https://schema.org/Answer" class="cell"><div itemprop="text"><?php printf(htmlspecialchars(_('Yes, please %s and I may add it on my ToDo list. It might take a while until your feature gets added though.')), '<a href="contact.php">'.htmlspecialchars(_('contact me')).'</a>'); ?></div></div>
    </div>
    <div itemprop="mainEntity" itemscope itemtype="https://schema.org/Question" class="row">
        <div itemprop="name" class="cell"><?php echo htmlspecialchars(_('I want to translate your site and services into another language, how can I do this?')); ?></div>
        <div itemprop="acceptedAnswer" itemscope itemtype="https://schema.org/Answer" class="cell"><div itemprop="text"><?php printf(htmlspecialchars(_('Please see my %s and check out the individual projects you would like to translate.')), '<a href="https://github.com/DanWin/" target="_blank" rel="noopener noreferrer">'.htmlspecialchars(_('GitHub repositories')).'</a>'); ?></div></div>
    </div>
    <div itemprop="mainEntity" itemscope itemtype="https://schema.org/Question" class="row">
        <div itemprop="name" class="cell"><?php echo htmlspecialchars(_('I heard of red rooms, live murder streams or similar. Are they real?')); ?></div>
        <div itemprop="acceptedAnswer" itemscope itemtype="https://schema.org/Answer" class="cell"><div itemprop="text"><?php echo htmlspecialchars(_('No, they are just horror stories people commonly tell you. Many people make YouTube videos about the "deep web" and claim there were sites like these. However, many scammers jump on the train and create a site where they tell you to pay bitcoins to gain access. Don\'t pay, because they simply do not exist.')); ?></div></div>
    </div>
    <div itemprop="mainEntity" itemscope itemtype="https://schema.org/Question" class="row">
        <div itemprop="name" class="cell"><?php echo htmlspecialchars(_('I heard of the shadow web, marianas web or closed shell network. How can I access them?')); ?></div>
        <div itemprop="acceptedAnswer" itemscope itemtype="https://schema.org/Answer" class="cell"><div itemprop="text"><?php echo htmlspecialchars(_('You can\'t, because they do not exist. Some scammers want to sell it to you though. Don\'t pay because you won\'t get anything in return for your money.')); ?></div></div>
    </div>
    <div itemprop="mainEntity" itemscope itemtype="https://schema.org/Question" class="row">
        <div itemprop="name" class="cell"><?php echo htmlspecialchars(_('Isn\'t the dark net supposed to be scary and full of creepy shit? Why can\'t I find any interesting sites?')); ?></div>
        <div itemprop="acceptedAnswer" itemscope itemtype="https://schema.org/Answer" class="cell"><div itemprop="text"><?php echo htmlspecialchars(_('No, the Tor darknet was created to be able to anonymously browse the internet, circumvent censorship and anonymously host websites. Of course, it\'s not only used for a good cause. There are many phishing sites, scammers and child porn sites. But apart from the fact that you are anonymous, there isn\'t that much of a difference to the clearnet (normal internet). So most horror stories you have heard about Tor are just that, stories.')); ?></div></div>
    </div>
    <div itemprop="mainEntity" itemscope itemtype="https://schema.org/Question" class="row">
        <div itemprop="name" class="cell"><?php echo htmlspecialchars(_('What\'s the difference between deep web and darknet?')); ?></div>
        <div itemprop="acceptedAnswer" itemscope itemtype="https://schema.org/Answer" class="cell"><div itemprop="text"><?php echo htmlspecialchars(_('The deep web is any site that can\'t be indexed by a search engine, so basically any site where you have to log in or be part of a private network. To access a darknet, it requires special software like Tor, I2P or Freenet. The darknet is a small part of the deep web.')); ?></div></div>
    </div>
    <div itemprop="mainEntity" itemscope itemtype="https://schema.org/Question" class="row">
        <div itemprop="name" class="cell"><?php echo htmlspecialchars(_('Can you hold my hands and teach me programming or hacking step by step?')); ?></div>
        <div itemprop="acceptedAnswer" itemscope itemtype="https://schema.org/Answer" class="cell"><div itemprop="text"><?php printf(htmlspecialchars(_('Teaching you programming or hacking is a task that will take a long time (years). I\'ve been learning for 10 years and still learn new things all the time. But for the beginning I would recommend reading a beginners introduction book, which can guide you with some simple programs you build yourself and examples. If you prefer watching videos, there are a lot of tutorials on YouTube too. But most importantly you will have to take your keyboard and start typing some programs. Start with something simple and keep yourself challenged with new tasks. You may also enroll in a professional course on a platform like %s or %s. Good places to start learning about hacking are %s, %s or %s.')), '<a href="https://www.coursera.org/" target="_blank" rel="noopener noreferrer">'.htmlspecialchars(_('Coursera')).'</a>', '<a href="https://www.udemy.com/" target="_blank" rel="noopener noreferrer">'.htmlspecialchars(_('Udemy')).'</a>', '<a href="https://www.hacker101.com/" target="_blank" rel="noopener noreferrer">'.htmlspecialchars(_('Hacker101')).'</a>', '<a href="https://academy.hackthebox.com/" target="_blank" rel="noopener noreferrer">'.htmlspecialchars(_('HackTheBox')).'</a>', '<a href="https://www.hackthissite.org/" target="_blank" rel="noopener noreferrer">'.htmlspecialchars(_('Hack This Site')).'</a>'); ?></div></div>
    </div>
    <div itemprop="mainEntity" itemscope itemtype="https://schema.org/Question" class="row">
        <div itemprop="name" class="cell"><?php echo htmlspecialchars(_('Can you hack my school or university and change my grades, or find someone who would do that?')); ?></div>
        <div itemprop="acceptedAnswer" itemscope itemtype="https://schema.org/Answer" class="cell"><div itemprop="text"><?php echo htmlspecialchars(_('Yes, I would love to go to prison for you! - Ehm, or rather not. Sorry, can\'t help you with that.')); ?></div></div>
    </div>
    <div itemprop="mainEntity" itemscope itemtype="https://schema.org/Question" class="row">
        <div itemprop="name" class="cell"><?php echo htmlspecialchars(_('Can you give me, or tell me where to reliably get stolen PayPal accounts or credit cards?')); ?></div>
        <div itemprop="acceptedAnswer" itemscope itemtype="https://schema.org/Answer" class="cell"><div itemprop="text"><?php echo htmlspecialchars(_('Yes, I would love to go to prison for you! - Ehm, or rather not. Sorry, can\'t help you with that.')); ?></div></div>
    </div>
    <div itemprop="mainEntity" itemscope itemtype="https://schema.org/Question" class="row">
        <div itemprop="name" class="cell"><?php echo htmlspecialchars(_('Can you do some other illegal things for me?')); ?></div>
        <div itemprop="acceptedAnswer" itemscope itemtype="https://schema.org/Answer" class="cell"><div itemprop="text"><?php echo htmlspecialchars(_('Yes, I would love to go to prison for you! - Ehm, or rather not. Sorry, can\'t help you with that.')); ?></div></div>
    </div>
    <div itemprop="mainEntity" itemscope itemtype="https://schema.org/Question" class="row">
        <div itemprop="name" class="cell"><?php echo htmlspecialchars(_('Can you hack my girlfriend? I think she\'s cheating.')); ?></div>
        <div itemprop="acceptedAnswer" itemscope itemtype="https://schema.org/Answer" class="cell"><div itemprop="text"><?php echo htmlspecialchars(_('Yes, I could try, but I won\'t. Don\'t trust the many sites that claim to give you that, because they are all scams. This is ethically just wrong and is more likely going to hurt your relationship than helping you. Talk to her, it\'s the best you can do. If you are at the point of thinking to hire a hacker, you should definitely think about breaking up, because relationships are based on trust, but obviously you can\'t trust anymore.')); ?></div></div>
    </div>
    <div itemprop="mainEntity" itemscope itemtype="https://schema.org/Question" class="row">
        <div itemprop="name" class="cell"><?php echo htmlspecialchars(_('My email doesn\'t get sent. I\'m getting an error about TLS')); ?></div>
        <div itemprop="acceptedAnswer" itemscope itemtype="https://schema.org/Answer" class="cell"><div itemprop="text"><?php printf(htmlspecialchars(_('You\'ve tried sending an email to a mail server that doesn\'t accept emails via encrypted transfer, or is using insecure protocols. This is very unfortunate, because it would leak your email content to anyone on the internet, who can intercept your email before it reaches the destination. You can disable mandatory encryption in your %s, if you still need to send this email.')), '<a href="/mail/manage_account.php">'.htmlspecialchars(_('account settings')).'</a>'); ?></div></div>
    </div>
    <div itemprop="mainEntity" itemscope itemtype="https://schema.org/Question" class="row">
        <div itemprop="name" class="cell"><?php echo _('I can\'t receive email, the sender gets an error about TLS'); ?></div>
        <div itemprop="acceptedAnswer" itemscope itemtype="https://schema.org/Answer" class="cell"><div itemprop="text"><?php printf(htmlspecialchars(_('Someone tried emailing you from a mail server that doesn\'t support sending emails via encrypted transfer, or is using insecure protocols. This is very unfortunate, because it would leak your email content to anyone on the internet, who can intercept your email before it reaches the destination. You can disable mandatory encryption in your %s, if you still need to receive this email.')), '<a href="/mail/manage_account.php">'.htmlspecialchars(_('account settings')).'</a>'); ?></div></div>
    </div>
    <div itemprop="mainEntity" itemscope itemtype="https://schema.org/Question" class="row">
        <div itemprop="name" class="cell"><?php echo htmlspecialchars(_('I\'m in debt and I need to get money fast. How can I quickly make some money?')); ?></div>
        <div itemprop="acceptedAnswer" itemscope itemtype="https://schema.org/Answer" class="cell"><div itemprop="text"><?php printf(htmlspecialchars(_('Becoming rich and clearing your debts is a process that starts in your head. Chances of becoming rich overnight are extremely low, you should rather focus on long term goals. It may take you a few years to become financially free, but everyone can get there, if you are willing to learn and educate yourself. I made an in-depth tutorial about some steps you can take: %s.')), '<a href="/tutorials/get-rich-fast/">'.htmlspecialchars(_('How to get rich (fast)')).'</a>'); ?></div></div>
    </div>
    <div itemprop="mainEntity" itemscope itemtype="https://schema.org/Question" class="row">
        <div itemprop="name" class="cell"><?php echo htmlspecialchars(_('I want to sell my kidney, can you help me?')); ?></div>
        <div itemprop="acceptedAnswer" itemscope itemtype="https://schema.org/Answer" class="cell"><div itemprop="text"><?php printf(htmlspecialchars(_('In most countries, selling organs is illegal. So if you succeed in finding a doctor that would agree to take out your organs, and have a buyer, then both of them are risking several years of prison time. For them, it is much safer and easier to kill you while taking your organs, to prevent you from telling anyone, and of course not having to pay you. Your motive is most likely financial gain. However, when you sell your kidney, you can expect to be paid only a fraction of its worth. For a more detailed answer, you may want to read %s.')), '<a href="https://en.wikipedia.org/wiki/Organ_trade" target="_blank" rel="noopener noreferrer">'.htmlspecialchars(_('this Wikipedia article')).'</a>'); ?></div></div>
    </div>
    <div itemprop="mainEntity" itemscope itemtype="https://schema.org/Question" class="row">
        <div itemprop="name" class="cell"><?php echo htmlspecialchars(_('How can I veryify that you are still in control of your server?')); ?></div>
        <div itemprop="acceptedAnswer" itemscope itemtype="https://schema.org/Answer" class="cell"><div itemprop="text"><?php printf(htmlspecialchars(_('To make sure your data is safe and I am still in control of my server, you can verify my %1$s with my %2$s.')), '<a href="/canary.txt" target="_blank">'.htmlspecialchars(_('warrant canary')).'</a>', '<a href="/pgp.txt" target="_blank">'.htmlspecialchars(_('PGP key')).'</a>'); ?></div></div>
    </div>
    <div itemprop="mainEntity" itemscope itemtype="https://schema.org/Question" class="row">
        <div itemprop="name" class="cell"><?php echo htmlspecialchars(_('I have more Questions.')); ?></div>
        <div itemprop="acceptedAnswer" itemscope itemtype="https://schema.org/Answer" class="cell"><div itemprop="text"><?php echo '<a href="contact.php">'.htmlspecialchars(_('Contact me')).'</a>.'; ?></div></div>
    </div>
</div>
</main>
</body></html>
