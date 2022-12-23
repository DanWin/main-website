<?php
require_once('common.php');
global $language, $dir;
?>
<!DOCTYPE html><html lang="<?php echo $language; ?>" dir="<?php echo $dir; ?>"><head>
<title><?php echo _('Daniel - About'); ?></title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="author" content="Daniel Winzen">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="<?php echo _('About the web developer, sysadmin and privacy enthusiast Daniel Winzen and this site'); ?>">
<link rel="canonical" href="https://danwin1210.de/about.php">
<link rel="alternate" href="https://danwin1210.de/about.php" hreflang="x-default">
<?php alt_links(); ?>
</head><body>
<?php menu(_('About')); ?>
<h2><?php echo _('About me'); ?></h2>
<p><?php echo _('Hello, my name is Daniel Winzen, a german web developer and system administrator. In my free time I like reading books, programming on my open-source projects and pole dancing, which I picked up in times of the covid pandemic and resulting home office, because it\'s fun and keeps me fit.'); ?>
<br><?php echo _('Programming languages I use regularly are PHP, SQL and JavaScript, but I also know some basics of Perl, Python, C, C++ and more. With my experience I\'m able to quickly adapt and work with new languages, when necessary.'); ?>
<br><?php echo _('Before I got into coding and server management, I contributed German translation to various open-source projects since the end of 2011.'); ?></p>
<p><?php echo _('Managing servers, email services and developing new web projects is what I thrive on. I like optimizing systems for performance and getting the best out of what I have. Do you need help with managing and optimizing your infrastructure or website? I\'m here to help. <a href="/contact.php">Get in touch</a> and we\'ll discuss details.'); ?></p>
<p><?php echo _('Profiles on other sites that I am active on:'); ?></p>
<ul>
<li><a href="https://github.com/DanWin" target="_blank" rel="noopener noreferrer">GitHub</a></li>
<li><a href="https://www.malt.de/profile/danielwinzen" target="_blank" rel="noopener noreferrer">Malt</a></li>
<li><a href="https://www.upwork.com/freelancers/~01d4f8ae4e8fb1604c" target="_blank" rel="noopener noreferrer">Upwork</a></li>
<li><a href="https://www.freelance.de/Freiberufler/244201-Backend-Web-Entwickler-und-Systemadministrator" target="_blank" rel="noopener noreferrer">Freelance.de</a></li>
</ul>
<h2><?php echo _('About this site'); ?></h2>
<p><?php echo _('This is my personal site, that I develop in my free time. I started development of this site in August/September 2013 when I wanted to have a platform to host files on, to use at school.'); ?>
<br><?php echo _('Quickly the idea of using a chat at school came up and I came across a simple perl chat script called <a href="https://github.com/virtualghetto/lechat" target="_blank" rel="noopener noreferrer">LE-CHAT</a>. When I deployed that on my Raspberry Pi it was running very slowly and wasn\'t really usable for use with several people. So I decided to port some parts I needed to PHP.'); ?>
<br><?php echo _('This has been the start for me to get deeper into web-development and I have since open-sourced that chat script and several other scripts of this site on my <a href="https://github.com/DanWin/" target="_blank" rel="noopener noreferrer">GitHub account</a>. Since then, I have added many new features and improved reliability and my code a lot.'); ?>
<br><?php echo _('I used to offer free file hosting, an url shortener, a chat and even a free darknet web hosting service. All these projects have taught me a lot about coding, security and server management. As of now, only the anonymous email and XMPP hosting, as well as the onion link list are still actively maintained.'); ?></p>
<h2><?php echo _('About the setup'); ?></h2>
<p><?php echo _('The software I use are Debian sid running Ceph, NginX, MariaDB, Dovecot, Postfix, Rspamd, Squirrelmail, PHP-FPM, cURL, Prosody, Tor, ssh, bind9, acme.sh and Wireguard.'); ?>
<br><?php echo _('The clearnet gateways on <a href="https://danwin1210.de" target="_blank">danwin1210.de</a> are an NginX Proxy that will forward all requests to the raspberry pis at home. Additionally, they run a Postfix instance only listening on the VPN network to send out mails to clearnet.'); ?>
<br><?php echo _('All servers are interconnected with a Wireguard VPN.'); ?></p>
<p><?php echo _('Hosting providers I use(ed) and servers hosted there:'); ?></p>
<ul>
<li><?php printf(_('%s - good for short-term and/or low-bandwidth projects'), '<a href="https://www.vultr.com/?ref=7173710" target="_blank" rel="noopener noreferrer">Vultr</a>'); ?></li>
<li><?php printf(_('%s - good for short-term and/or low-bandwidth projects'), '<a href="https://m.do.co/c/c066429f5e95" target="_blank" rel="noopener noreferrer">DigitalOcean</a>'); ?></li>
<li><?php printf(_('%s - good and reliable'), '<a href="https://www.ovh.com/" target="_blank" rel="noopener noreferrer">OVH</a>'); ?></li>
<li><?php printf(_('%s - comparably expensive but good and reliable'), '<a href="https://contabo.com/" target="_blank" rel="noopener noreferrer">Contabo</a>'); ?></li>
<li><?php printf(_('%s - (Used for my clearnet gateway) - good and reliable'), '<a href="https://hetzner.cloud/?ref=OXqb8WQ8yeXu" target="_blank" rel="noopener noreferrer">Hetzner</a>'); ?></li>
<li><?php printf(_('%s - (Used for my clearnet gateway + Domain registration) - good and reliable, hosted in my city'), '<a href="https://hosting.de/?partnerId=JZ0DZSUdrJUVJTKoHq7l" target="_blank" rel="noopener noreferrer">Hosting.de</a>'); ?></li>
<li><?php echo _('Home hosted: 4 Raspberry Pi 4 with the main site and data'); ?></li>
</ul>
<p><?php printf(_('If you like, what I\'ve built here, you can support me by donating via Monero: %1$s or Bitcoin: %2$s . More options available, just <a href="/contact.php">contact me</a>.'), '432Z3PTrRso52GHHpmPRpvLhecsnc7EFsVd2TzsCJaNmK4vivDxghRB5yVCj2nzCEGajeF3rBqJ43PcpxRnvZkMs49fufzD', 'bc1q8jcfxsmcz7lhk7g9urnzxpwhxsje2n2gz34cya'); ?></p>
</main>
</body></html>
