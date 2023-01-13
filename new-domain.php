<?php
require_once('common.php');
global $language, $dir, $locale;
?>
<!DOCTYPE html><html lang="<?php echo $language; ?>" dir="<?php echo $dir; ?>"><head>
<title><?php echo _('Daniel - New domain'); ?></title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta name="author" content="Daniel Winzen">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="<?php echo _('We moved to a brand new domain - migrate your accounts'); ?>">
<link rel="canonical" href="https://danwin1210.de/new-domain.php">
<link rel="alternate" href="https://danwin1210.de/new-domain.php" hreflang="x-default">
<?php alt_links(); ?>
<meta property="og:type" content="article">
<meta property="article:published_time" content="2021-12-02">
<meta property="article:modified_time" content="2022-12-25">
<meta property="og:title" content="<?php echo _('Daniel - New domain'); ?>">
<meta property="og:description" content="<?php echo _('We moved to a brand new domain - migrate your accounts'); ?>">
<meta property="og:image" content="https://danwin1210.de/daniel.jpg">
<meta property="og:image:type" content="image/jpeg">
<meta property="og:image:height" content="1000">
<meta property="og:image:width" content="1000">
<meta property="og:image:alt" content="<?php echo _('An avatar representing Daniel Winzen'); ?>">
<meta property="og:url" content="https://danwin1210.de/new-domain.php">
<meta property="og:locale" content="<?php echo $locale; ?>">
<meta property="og:site_name" content="<?php echo _('Daniel'); ?>">
<script type="application/ld+json">{"@context":"https://schema.org","@type":"Article ","headline":"<?php echo _('Daniel - New domain'); ?>", "datePublished": "2021-12-02", "dateModified": "2022-12-25", "author":{"@type":"Person", "image": "/daniel.jpg", "name": "Daniel Winzen", "email": "daniel@danwin1210.de", "telephone": "+4917698819809", "url": "https://danwin1210.de"}}</script>
</head><body>
<?php menu(_('New domain - DanWin1210.Me is now DanWin1210.De')); ?>
<h2><?php echo _('Why this sudden and drastic change?'); ?></h2>
<p><?php echo _('In mid-October 2021 I noticed that I was locked out of my registrar\'s control panel (Namecheap Inc.) for <q>suspected fraud, a chargeback or some similar violation of our terms of service</q>. After contacting their customer support multiple times, even after more than a year, all I have ever gotten back from them is that I will hear from them soon, as they need more time to investigate, and they appreciate my patience. I was refused renewing the domain or moving to a different registrar.'); ?></p>
<p><?php echo _('Given that I was unable to get a satisfying answer and the old domain was due to expire, I went ahead and bought the new domain danwin1210.de, to switch over to. danwin1210.me went down after expiry, but thankfully I was allowed to pay for extension by creating a new account and depositing the money for renewal there, so it was back up shortly afterwards.'); ?></p>
<p><?php echo _('After a year my domain was due expiry again, so I enquired if I could move to a different registrar now. They offered me again to pay via an alternate account, because: <q>Unfortunately, we need more time to investigate your issue.</q> A year should be more than enough time to solve whatever issue they might have with my account… This time I decided to let it expire for good, since almost everyone should have switched over to the new domain by now.'); ?></p>
<h2><?php echo _('What does it mean for users?'); ?></h2>
<p><?php echo _('You don\'t have an account and just browse the site? Not much will change, just the address in your browsers URL bar.'); ?></p>
<p><?php echo _('You are using the XMPP/E-Mail service? I\'m sorry, but this will likely cause you some struggles, as you now only have a few days left to migrate all your contacts/accounts to the new address. Any service where you registered with your email address will need to be updated to reflect the new domain. You might otherwise get locked out of your accounts, if they require you to e.g. click a link in your email for login.'); ?></p>
<p><?php echo _('E-Mail users should also update their PGP key <a href="/mail/manage_account.php" target="_blank">in their account settings</a> to reflect the new domain and allow WKD clients to grab your key automatically.'); ?></p>
<p><?php echo _('You can still login with your .me user credentials, but the account is going to be .de. As long as the old domain is still online, you can also receive emails on the .me domain, while sending is switched over to .de.'); ?></p>
<p><?php echo _('XMPP users will most likely notice their account stopped working. Unfortunately there is no easy way to migrate accounts with prosody (the XMPP server), as there is with email. You will need to update your account settings to reflect the new domain in order to login and re-connect with all your buddies.'); ?></p>
<h2><?php echo _('Will the old address still work?'); ?></h2>
<p><?php echo _('After a very brief downtime, it was back online. Now, after a year, it\'s expired once more. I may be able to buy it again after Namecheap returns the domain to the registry. However, Namecheap apparently sells the domain now for $400…'); ?></p>
<h2><?php echo _('I have a question, something is broken with my account.'); ?></h2>
<p><?php echo _('Make sure you have switched all your settings to the new domain. It should work as before. Stil not working correctly? Feel free to <a href="/contact.php">contact me</a> for help.'); ?></p>
<h2><?php echo _('How do I know you are still the same person? This could be law enforcement taking over the servers.'); ?></h2>
<p><?php echo _('I have taken the opportunity to create a <a href="/pgp.txt" target="_blank">new PGP key</a> and signed it with my <a href="/old_pgp.txt" target="_blank">old PGP key</a>. This can be verified by running a command like this:'); ?></p>
<pre>curl -s https://danwin1210.de/pgp.txt | gpg --import && gpg --list-sigs 222FCC3F35C41077</pre>
<p><?php echo _('It should show proof that it is signed by my old key <code>F8B8CFC35FBDB40D</code>. I have also included signatures of previous keys on my old key, so you can even verify the key, in case you have an older key I was using before.'); ?></p>
</main>
</body></html>
