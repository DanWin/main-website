<?php
require_once('../../common.php');
global $language, $dir, $locale;
?>
<!DOCTYPE html><html lang="<?php echo $language; ?>" dir="<?php echo $dir; ?>"><head>
<title><?php echo _('Tutorials - Torify FTP clients'); ?></title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="author" content="Daniel Winzen">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="<?php echo _('This tutorial will show you how to torify FTP clients in the example of FileZilla and WinSCP.'); ?>">
<link rel="canonical" href="https://danwin1210.de/tutorials/torify-ftp/">
<link rel="alternate" href="https://danwin1210.de/tutorials/torify-ftp/" hreflang="x-default">
<?php alt_links(); ?>
<meta property="og:type" content="article">
<meta property="article:published_time" content="2017-10-21">
<meta property="article:tag" content="FTP">
<meta property="article:tag" content="SFTP">
<meta property="article:tag" content="Tor">
<meta property="article:tag" content="Proxy">
<meta property="article:tag" content="FileZilla">
<meta property="article:tag" content="WinSCP">
<meta property="article:section" content="Technology">
<meta property="og:title" content="<?php echo _('Tutorials - Torify FTP clients'); ?>">
<meta property="og:description" content="<?php echo _('This tutorial will show you how to torify FTP clients in the example of FileZilla and WinSCP.'); ?>">
<meta property="og:image" content="https://danwin1210.de/daniel.jpg">
<meta property="og:image:type" content="image/jpeg">
<meta property="og:image:height" content="1000">
<meta property="og:image:width" content="1000">
<meta property="og:image:alt" content="<?php echo _('An avatar representing Daniel Winzen'); ?>">
<meta property="og:url" content="https://danwin1210.de/tutorials/torify-ftp/">
<meta property="og:locale" content="<?php echo $locale; ?>">
<meta property="og:site_name" content="<?php echo _('Daniel'); ?>">
<script type="application/ld+json">{"@context":"https://schema.org","@type":"HowTo","name":"<?php echo htmlspecialchars(_('Torify FTP clients')); ?>", "datePublished": "2017-10-21", "author":{"@type":"Person", "image": "/daniel.jpg", "name": "Daniel Winzen", "email": "daniel@danwin1210.de", "telephone": "+4917698819809", "url": "https://danwin1210.de"}, "tool": [{"@type":"HowToTool", "name":"Tor", "url": "https://www.torproject.org/"},{"@type":"HowToTool", "name":"FileZilla", "url": "https://filezilla-project.org/"},{"@type":"HowToTool", "name":"WinSCP", "url": "https://winscp.net/"}], "totalTime": "PT5M", "step": [{"@type": "HowToStep", "name": "<?php echo htmlspecialchars(_("Download FileZilla")); ?>", "text": "<?php echo htmlspecialchars(_("If you haven't installed FileZilla yet, you need to first download FileZilla.")); ?>", "url": "https://filezilla-project.org/download.php?type=client"},{"@type": "HowToStep", "name": "<?php echo htmlspecialchars(_("Configure proxy")); ?>", "text": "<?php echo htmlspecialchars(_("Go to Generic Proxy settings and change the type to SOCKS5, host to localhost and Port to 9050 (if you run Tor as daemon) or 9150 (if you run TorBrowser).")); ?>", "image": ["2.gif", "3.gif"]},{"@type": "HowToStep", "name": "<?php echo htmlspecialchars(_("Alternatively download WinSCP")); ?>", "text": "<?php echo htmlspecialchars(_("If you haven't installed WinSCP yet, you need to first download WinSCP.")); ?>", "url": "https://winscp.net/eng/download.php"},{"@type": "HowToStep", "name": "<?php echo htmlspecialchars(_("Enter connection details")); ?>", "text": "<?php echo htmlspecialchars(_("When started, enter your connection details.")); ?>", "image": "1.jpg"},{"@type": "HowToStep", "name": "<?php echo htmlspecialchars(_("Change connection timeout")); ?>", "text": "<?php echo htmlspecialchars(_("Click on the Advanced… button and under Connection, change timeout to 50 as Tor can be slow at times.")); ?>", "image": "2.jpg"},{"@type": "HowToStep", "name": "<?php echo htmlspecialchars(_("Configure proxy")); ?>", "text": "<?php echo htmlspecialchars(_('Now switch to the Proxy tab and change the type to SOCKS5, host to 127.0.0.1 and Port to 9050 (if your run Tor as daemon) or 9150 (if you run TorBrowser) and set "Do DNS name lookup at proxy end" to yes.')); ?>", "image": "3.jpg"}]}</script>
<style>img{max-width:100%}</style>
</head><body>
<?php menu(_('Tutorials - Torify FTP clients')); ?>
<p><?php echo _('This tutorial will show you how to torify FTP clients in the example of <a href="#filezilla">FileZilla</a> and <a href="#winscp">WinSCP</a>.'); ?></p>
<p><?php echo _('Let\'s assume you have created an account on my former Hosting service and you want to upload your files. To do that, you connect with the detials given in your dashboard. Clearnet works out of the box, but is not torified. To connect to the hidden service, you need to make a few changes to the configuration.'); ?></p>
<picture>
<source srcset="1.gif.webp" type="image/webp">
<img loading="lazy" src="1.gif" alt="<?php echo _('Hosting dashboard'); ?>">
</picture>
<h2 id="filezilla"><?php echo _('1. FileZilla'); ?></h2>
<p><?php echo _('If you haven\'t installed FileZilla yet, you can <a href="https://filezilla-project.org/download.php?type=client" target="_blank" rel="noopener noreferrer">download FileZilla here</a>.'); ?></p>
<p><?php echo _('Go to Generic Proxy settings and change the type to SOCKS5, host to localhost and Port to 9050 (if you run Tor as daemon) or 9150 (if you run TorBrowser).'); ?></p>
<a href="2.gif" target="_blank">
<picture>
<source srcset="2.1.gif.avif" type="image/avif">
<source srcset="2.1.gif.webp" type="image/webp">
<img loading="lazy" src="2.1.gif" alt="<?php echo _('FileZilla settings'); ?>">
</picture>
</a>
<a href="3.gif" target="_blank">
<picture>
<source srcset="3.1.gif.avif" type="image/avif">
<source srcset="3.1.gif.webp" type="image/webp">
<img loading="lazy" src="3.1.gif" alt="<?php echo _('FileZilla Generic Proxy settings'); ?>">
</picture>
</a>
<p><?php echo _('If you have changed your proxy settings and get the following error: "ECONNREFUSED - Connection refused by server" that likely means you have configured your proxy incorrectly. Check if everything is set correctly, Tor is running and if you still have the issue, switch the Port between 9050 and 9150. This is what\'s causing most connection issues people have.'); ?></p>
<picture>
<source srcset="4.gif.webp" type="image/webp">
<source srcset="4.gif.avif" type="image/avif">
<img loading="lazy" src="4.gif" alt="<?php echo _('FileZilla connection error'); ?>">
</picture>
<p><?php echo _('Once you have configured everything correctly, you should be able to successfully connect and start uploading files.'); ?></p>
<a href="5.gif" target="_blank">
<picture>
<source srcset="5.1.gif.avif" type="image/avif">
<source srcset="5.1.gif.webp" type="image/webp">
<img loading="lazy" src="5.1.gif" alt="<?php echo _('FileZilla success'); ?>">
</picture>
</a>
<br>
<h2 id="winscp"><?php echo _('2. WinSCP'); ?></h2>
<p><?php echo _('If you haven\'t installed WinSCP yet, you can <a href="https://winscp.net/eng/download.php" target="_blank" rel="noopener noreferrer">download WinSCP here</a>.'); ?></p>
<p><?php echo _('When started, enter your connection details.'); ?></p>
<picture>
<source srcset="1.jpg.webp" type="image/webp">
<source srcset="1.jpg.avif" type="image/avif">
<img loading="lazy" src="1.jpg" alt="<?php echo _('Connection details'); ?>">
</picture>
<p><?php echo _('Click on the Advanced… button and under Connection, change timeout to 50 as Tor can be slow at times.'); ?></p>
<picture>
<source srcset="2.jpg.webp" type="image/webp">
<source srcset="2.jpg.avif" type="image/avif">
<img loading="lazy" src="2.jpg" alt="<?php echo _('Connection optimizations'); ?>">
</picture>
<p><?php echo _('Now switch to the Proxy tab and change the type to SOCKS5, host to 127.0.0.1 and Port to 9050 (if your run Tor as daemon) or 9150 (if you run TorBrowser) and set "Do DNS name lookup at proxy end" to yes.'); ?></p>
<picture>
<source srcset="3.jpg.webp" type="image/webp">
<source srcset="3.jpg.avif" type="image/avif">
<img loading="lazy" src="3.jpg" alt="<?php echo _('Proxy configuration'); ?>">
</picture>
</main>
</body></html>
