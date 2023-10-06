<?php
require_once('common.php');
global $language, $dir, $locale;
?>
<!DOCTYPE html><html lang="<?php echo $language; ?>" dir="<?php echo $dir; ?>"><head>
<title><?php echo htmlspecialchars(_('Daniel - Home')); ?></title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="author" content="Daniel Winzen">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="<?php echo htmlspecialchars(_('Personal website of Daniel Winzen, the web developer, sysadmin and privacy enthusiast')); ?>">
<link rel="canonical" href="https://danwin1210.de/">
<link rel="alternate" href="https://danwin1210.de/" hreflang="x-default">
<?php alt_links(); ?>
<meta property="og:type" content="website">
<meta property="og:title" content="<?php echo htmlspecialchars(_('Daniel - Home')); ?>">
<meta property="og:description" content="<?php echo htmlspecialchars(_('Personal website of Daniel Winzen, the web developer, sysadmin and privacy enthusiast')); ?>">
<meta property="og:image" content="https://danwin1210.de/assets/daniel.jpg">
<meta property="og:image:type" content="image/jpeg">
<meta property="og:image:height" content="1000">
<meta property="og:image:width" content="1000">
<meta property="og:image:alt" content="<?php echo htmlspecialchars(_('An avatar representing Daniel Winzen')); ?>">
<meta property="og:url" content="https://danwin1210.de/">
<meta property="og:locale" content="<?php echo $locale; ?>">
<meta property="og:site_name" content="<?php echo htmlspecialchars(_('Daniel')); ?>">
<script type="application/ld+json">{"@context":"https://schema.org","@type":"WebSite","name":"Daniel","alternateName":"DanWin","url":"https://danwin1210.de/", "author":{"@type":"Person", "image": "/assets/daniel.jpg", "name": "Daniel Winzen", "email": "daniel@danwin1210.de", "telephone": "+4917698819809", "url": "https://danwin1210.de"}}</script>
</head><body>
<?php menu(_('Home')); ?>
<p><?php printf(htmlspecialchars(_('Hello! I\'m Daniel Winzen, a highly skilled German web developer and system administrator. With a deep passion for programming, server management, and cybersecurity, I offer a wide range of services tailored to your needs. My extensive experience and expertise enable me to adapt quickly to new challenges, ensuring top-notch solutions for every project. I offer a free and anonymous %1$s, %2$s, and you may also be interested in my %3$s. You can find my open-source projects on %4$s.')), '<a href="/mail/">'.htmlspecialchars(_('mail service')).'</a>', '<a href="/github-ipv6-proxy.php">'.htmlspecialchars(_('GitHub IPv6 proxy')).'</a>', '<a href="/tutorials/">'.htmlspecialchars(_('tutorials')).'</a>', '<a href="https://github.com/DanWin/" target="_blank" rel="noopener noreferrer">GitHub</a>'); ?></p>
<p><?php echo htmlspecialchars(_('I specialize in developing web applications in PHP, SQL, and JavaScript. Whether you need a WordPress website, a custom PHP application, or any other web project, I have the skills to bring your ideas to life. I excel in WordPress development, including WooCommerce, API connectors and custom plugins, ensuring seamless integration with your other services. Performance optimization is very important to me, and I can help you improve your website\'s loading speed and performance.')); ?></p>
<p><?php echo htmlspecialchars(_('Managing Linux servers, web hostings, and email services is my forte. I have experience with various hosting providers and am proficient in working with hosting panels like Plesk and WHMCS. I can help you with configuring your business network infrastructure, and ensure optimal performance and security, so you can focus on running your business. That includes setting up firewalls, VPNs, routers, and other security measures to protect your data from unauthorized access.')); ?></p>
<p><?php printf(htmlspecialchars(_('I\'m %1$s and possess a deep understanding of cybersecurity threats. My continuous learning and passion for cybersecurity have been instrumental in my ability to safeguard online environments effectively. I\'m constantly upgrading my skills and knowledge to stay ahead of the latest threats. I offer comprehensive cybersecurity solutions to safeguard your systems and data from potential threats. That includes both physical and digital security measures such as firewalls, anti-virus software, backups, password management, and more. I can also help you with incident response and recovery after a security breach.')), '<a href="https://www.credly.com/badges/2652f763-ca8c-4e23-b0a9-939a2f27c83c" target="_blank" rel="noopener noreferrer">'.htmlspecialchars(_('Certified in Cybersecurity')).'</a>'); ?></p>
<p><?php printf(htmlspecialchars(_('I\'d be happy to answer any questions you may have and look forward to working with you. %1$s to discuss your project and turn your vision to life!')), '<a href="/contact.php" target="_blank" rel="noopener noreferrer">'.htmlspecialchars(_('Get in touch with me')).'</a>'); ?></p>
<p><?php printf(htmlspecialchars(_('To learn more about me, check out my %1$s,')), '<a href="/about.php">'.htmlspecialchars(_('About page')).'</a>'); ?></p>
</main>
</body></html>
