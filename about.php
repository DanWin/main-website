<?php
require_once('common.php');
global $language, $dir, $locale;
?>
<!DOCTYPE html><html lang="<?php echo $language; ?>" dir="<?php echo $dir; ?>"><head>
<title><?php echo htmlspecialchars(_('Daniel - About')); ?></title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="author" content="Daniel Winzen">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="<?php echo htmlspecialchars(_('About the web developer, sysadmin and privacy enthusiast Daniel Winzen and this site')); ?>">
<link rel="canonical" href="https://danwin1210.de/about.php">
<link rel="alternate" href="https://danwin1210.de/about.php" hreflang="x-default">
<?php alt_links(); ?>
<meta property="og:type" content="profile">
<meta property="profile:first_name" content="Daniel">
<meta property="profile:last_name" content="Winzen">
<meta property="og:title" content="<?php echo htmlspecialchars(_('Daniel - About')); ?>">
<meta property="og:description" content="<?php echo htmlspecialchars(_('About the web developer, sysadmin and privacy enthusiast Daniel Winzen and this site')); ?>">
<meta property="og:image" content="https://danwin1210.de/assets/daniel.jpg">
<meta property="og:image:type" content="image/jpeg">
<meta property="og:image:height" content="1000">
<meta property="og:image:width" content="1000">
<meta property="og:image:alt" content="<?php echo htmlspecialchars(_('An avatar representing Daniel Winzen')); ?>">
<meta property="og:url" content="https://danwin1210.de/about.php">
<meta property="og:locale" content="<?php echo $locale; ?>">
<meta property="og:site_name" content="<?php echo htmlspecialchars(_('Daniel')); ?>">
<script type="application/ld+json">{"@context":"https://schema.org","@type":"AboutPage","about":{"@type":"Person", "image": "/assets/daniel.jpg", "name": "Daniel Winzen", "email": "daniel@danwin1210.de", "telephone": "+4917698819809", "url": "https://danwin1210.de"}}</script>
</head><body>
<?php menu(_('About')); ?>
<h2><?php echo htmlspecialchars(_('About me')); ?></h2>
<a href="assets/daniel.jpg" target="_blank">
<picture>
<source srcset="assets/daniel.avif" type="image/avif">
<source srcset="assets/daniel.webp" type="image/webp">
<img loading="lazy" src="assets/daniel.jpg" alt="<?php echo htmlspecialchars(_('An avatar representing Daniel Winzen')); ?>" width="200" height="200" class="float-left">
</picture>
</a>
<p><?php echo htmlspecialchars(_('Hello, my name is Daniel Winzen, a German web developer and system administrator. In my free time, I like reading books, programming on my open-source projects and pole dancing, which I picked up during the covid pandemic and resulting home office because it\'s fun and keeps me fit.')); ?>
<br><?php echo htmlspecialchars(_('Programming languages I use regularly are PHP, SQL and JavaScript, but I also know some basics of Perl, Python, C, C++ and more. With my experience, I\'m able to quickly adapt and work with new languages, when necessary.')); ?>
<br><?php echo htmlspecialchars(_('Before I got into coding and server management, I contributed German translation to various open-source projects since the end of 2011.')); ?></p>
<p><?php printf(htmlspecialchars(_('I\'m %s and have a good understanding of cybersecurity threats. I continuously broaden my knowledge in this field, because I consider this essential and fun. This site would probably not exist, were it not for my passion for cybersecurity and hacking. Like many good parents, mine were strict about my internet usage. So I had to become creative in finding ways of gaining access to the internet, even when the timer already expired. Thus I was learning about hacking, darknet and network security at a very early age.')), '<a href="https://www.credly.com/badges/2652f763-ca8c-4e23-b0a9-939a2f27c83c" target="_blank" rel="noopener noreferrer">'.htmlspecialchars(_('Certified in Cybersecurity')).'</a>'); ?></p>
<p><?php printf(htmlspecialchars(_('Managing servers and email services and developing new web projects is what I thrive on. I like optimizing systems for performance and getting the best out of what I have. Do you need help with managing and optimizing your infrastructure or website? %s.')), '<a href="/contact.php">'.htmlspecialchars(_('I\'m available for hire')).'</a>'); ?></p>
<p><?php echo htmlspecialchars(_('Profiles on other sites that I am active on:')); ?></p>
<ul>
<li><a href="https://github.com/DanWin" target="_blank" rel="noopener noreferrer">GitHub</a></li>
<li><a href="https://gitlab.com/DanWin1210" target="_blank" rel="noopener noreferrer">GitLab</a></li>
<li><a href="https://www.malt.de/profile/danielwinzen" target="_blank" rel="noopener noreferrer">Malt</a></li>
<li><a href="https://www.upwork.com/freelancers/~01d4f8ae4e8fb1604c" target="_blank" rel="noopener noreferrer">Upwork</a></li>
<li><a href="https://www.freelance.de/Freiberufler/244201-Backend-Web-Entwickler-und-Systemadministrator" target="_blank" rel="noopener noreferrer">Freelance.de</a></li>
<li><a href="https://www.instagram.com/winzen.daniel/" target="_blank" rel="noopener noreferrer">Instagram</a></li>
</ul>
<h2><?php echo htmlspecialchars(_('About this site')); ?></h2>
<p><?php echo htmlspecialchars(_('This is my site, that I develop in my free time. I started development of this site in August/September 2013 when I wanted to have a platform to host files on, to use at school.')); ?>
<br><?php printf(htmlspecialchars(_('Quickly the idea of using a chat at school came up, and I came across a simple Perl chat script called %s. When I deployed that on my Raspberry Pi, it was running very slowly and wasn\'t usable for use by several people. So I decided to port some parts I needed to PHP.')), '<a href="https://github.com/virtualghetto/lechat" target="_blank" rel="noopener noreferrer">LE-CHAT</a>'); ?>
<br><?php printf(htmlspecialchars(_('This has been the start for me to get deeper into web development and I have since open-sourced that chat script and several other scripts of this site on my %s account. Since then, I have added many new features and improved reliability and my code a lot.')), '<a href="https://github.com/DanWin/" target="_blank" rel="noopener noreferrer">GitHub</a>'); ?>
<br><?php echo htmlspecialchars(_('I used to offer free file hosting, an URL shortener, a chat and even a free darknet web hosting service. All these projects have taught me a lot about coding, security and server management. As of now, only the anonymous email and XMPP hosting, as well as the onion link list are still actively maintained.')); ?></p>
<h2><?php echo htmlspecialchars(_('About the setup')); ?></h2>
<p><?php echo htmlspecialchars(_('Hosting providers I use(ed) and servers hosted there:')); ?></p>
<ul>
<li><?php printf(htmlspecialchars(_('%s - good for short-term and/or low-bandwidth projects. They also offer a %s')), '<a href="https://www.vultr.com/?ref=7173710" target="_blank" rel="noopener noreferrer">Vultr</a>', '<a href="https://www.vultr.com/free-tier-program/?ref=7173710" target="_blank" rel="noopener noreferrer">'.htmlspecialchars(_('Free Tier Program for businesses')).'</a>'); ?></li>
<li><?php printf(htmlspecialchars(_('%s - good for short-term and/or low-bandwidth projects')), '<a href="https://m.do.co/c/c066429f5e95" target="_blank" rel="noopener noreferrer">DigitalOcean</a>'); ?></li>
<li><?php printf(htmlspecialchars(_('%s - (Used for my clearnet gateway) - good and reliable')), '<a href="https://hetzner.cloud/?ref=OXqb8WQ8yeXu" target="_blank" rel="noopener noreferrer">Hetzner</a>'); ?></li>
<li><?php printf(htmlspecialchars(_('%s - (Used for my clearnet gateway + Domain registration) - good and reliable, hosted in my city')), '<a href="https://hosting.de/?partnerId=JZ0DZSUdrJUVJTKoHq7l" target="_blank" rel="noopener noreferrer">Hosting.de</a>'); ?></li>
<li><?php echo htmlspecialchars(_('Home hosted: 4 Raspberry Pi 4 with the main site and data')); ?></li>
</ul>
<a href="assets/servers.jpg" target="_blank">
<picture>
<source srcset="assets/servers.avif" type="image/avif">
<source srcset="assets/servers.webp" type="image/webp">
<img loading="lazy" src="assets/servers.jpg" alt="<?php echo htmlspecialchars(_('A small network rack with 4 Raspberry Pis in it, a wifi router on top and a phone next to it')); ?>" width="480" height="360" class="float-left">
</picture>
</a>
<p><?php echo htmlspecialchars(_('In the image on the left, you can see my current home server setup. I have 4 Raspberry Pi 4s, which all have a 500GB SSD attached to them. Each SSD has 16GB allocated to OS and applications while the rest of the space is used for Ceph OSDs. On top of my rack, I have an internet router, which is connected to the fastest broadband internet connection available to me. Although I hardly use my landline phone, I have a FeTAp 611-2 (yes it still works, in the 80s things were built to last). As my router no longer supports a pulse dial, I had to get a converter to translate pulse signals into modern DTMF.')); ?></p>
<p><?php echo htmlspecialchars(_('The operating system I use is Debian sid. To share data between all servers, I deployed a CephFS for distributed and redundant file storage, as well as a MariaDB Galera cluster.')); ?>
<br><?php printf(htmlspecialchars(_('The clearnet gateways on %s are an NginX Proxy that will forward all requests to the Raspberry Pis at home. Additionally, they run a Postfix instance only listening on the VPN network to send emails to clearnet.')), '<a href="https://danwin1210.de" target="_blank">danwin1210.de</a>'); ?>
<br><?php echo htmlspecialchars(_('All servers are interconnected with a Wireguard VPN.')); ?></p>
<p><?php echo htmlspecialchars(_('Backups are very important too, thus I use BorgBackup on all my devices to regularly create an encrypted backup, stored on remote backup storage, which takes regular snapshots, ensuring recoverability in case of backup failures.')); ?></p>
</main>
</body></html>
