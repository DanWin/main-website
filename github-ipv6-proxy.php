<?php
require_once('common.php');
global $language, $dir, $locale;
?>
<!DOCTYPE html><html lang="<?php echo $language; ?>" dir="<?php echo $dir; ?>"><head>
<title><?php echo htmlspecialchars(_('GitHub IPv6 proxy')); ?></title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="author" content="Daniel Winzen">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="<?php echo htmlspecialchars(_('GitHub IPv6 proxy allows downloading GitHub repositories on IPv6 only servers')); ?>">
<link rel="canonical" href="https://danwin1210.de/github-ipv6-proxy.php">
<link rel="alternate" href="https://danwin1210.de/github-ipv6-proxy.php" hreflang="x-default">
<meta property="og:type" content="article">
<meta property="article:published_time" content="2022-08-20">
<meta property="article:modified_time" content="2024-11-25">
<meta property="article:tag" content="IPv6">
<meta property="article:tag" content="GitHub">
<meta property="article:tag" content="proxy">
<meta property="article:section" content="Technology">
<meta property="og:title" content="<?php echo htmlspecialchars(_('GitHub IPv6 proxy')); ?>">
<meta property="og:description" content="<?php echo htmlspecialchars(_('GitHub IPv6 proxy allows downloading GitHub repositories on IPv6 only servers')); ?>">
<meta property="og:image" content="https://danwin1210.de/assets/daniel.jpg">
<meta property="og:image:type" content="image/jpeg">
<meta property="og:image:height" content="1000">
<meta property="og:image:width" content="1000">
<meta property="og:image:alt" content="<?php echo htmlspecialchars(_('An avatar representing Daniel Winzen')); ?>">
<meta property="og:url" content="https://danwin1210.de/github-ipv6-proxy.php">
<meta property="og:locale" content="<?php echo $locale; ?>">
<meta property="og:site_name" content="<?php echo htmlspecialchars(_('Daniel')); ?>">
<script type="application/ld+json">{"@context":"https://schema.org","@type":"Article ","headline":"<?php echo htmlspecialchars(_('GitHub IPv6 proxy')); ?>", "datePublished": "2022-08-20", "dateModified": "2024-11-25", "discussionUrl": "https://github.com/orgs/community/discussions/10539", "author":{"@type":"Person", "image": "/assets/daniel.jpg", "name": "Daniel Winzen", "email": "daniel@danwin1210.de", "telephone": "+4917698819809", "url": "https://danwin1210.de"}}</script>
<?php alt_links(); ?>
</head><body>
<?php menu(_('GitHub IPv6 proxy')); ?>
<p><?php printf(htmlspecialchars(_('Recently I had to clone a git repository on GitHub via an IPv6 only server that I rented at my favourite hosting provider %1$s. Unfortunately I realized that GitHub still %2$s.')), '<a href="https://hetzner.cloud/?ref=OXqb8WQ8yeXu" target="_blank" rel="noopener noreferrer">Hetzner</a>', '<a href="https://github.com/orgs/community/discussions/10539" target="_blank" rel="noopener noreferrer">'.htmlspecialchars(_('does not support IPv6')).'</a>'); ?></p>
<p><?php echo htmlspecialchars(_('My workaround was setting up a WireGuard VPN with one of my dual-stack servers. An alternative could have been installing Tor to download anonymously.')); ?></p>
<p><?php echo htmlspecialchars(_('As I\'m by far not the only user with an IPv6 only server looking to download repositories from GitHub, I decided to provide a public proxy server that can be used to access GitHub on an IPv6 network, until GitHub provides native IPv6 support. The proxy is only available on IPv6, to prevent IPv4 users from using unnecessary resources, as they can already clone from GitHub directly.')); ?></p>
<p><?php echo htmlspecialchars(_('Note, that my https proxy is serving a ssl certificate issued for my domain, which means I decrypt and re-encrypt your traffic (and could potentially look into it, but I don\'t). It is necessary as you\'d get an invalid ssl certificate warning otherwise + github would redirect to the default port after accepting it. See below for a more permanent solution, that\'s more privacy-friendly.')); ?></p>
<p><?php printf(htmlspecialchars(_('So how does it work? Let\'s assume we want to clone the PHP Chat script I\'ve published at %s. Normally cloning the repository would look like this:')), '<a href="https://github.com/DanWin/le-chat-php" target="_blank" rel="noopener noreferrer">https://github.com/DanWin/le-chat-php</a>'); ?><br>
<code>git clone https://github.com/DanWin/le-chat-php</code><br>
    <?php echo htmlspecialchars(_('On an IPv6 connection, you can use my proxy service like this:')); ?><br>
<code>git clone https://danwin1210.de:1443/DanWin/le-chat-php</code><br>
    <?php echo htmlspecialchars(_('And if you would like to clone via ssh you can also do it like this:')); ?><br>
<code>git clone git@github-ipv6-proxy.danwin1210.de:DanWin/le-chat-php</code></p>
<p><?php echo htmlspecialchars(_('Those wanting to use the proxy more permanently and/or talk directly to GitHub, without me re-encrypting your traffic, should add the following to /etc/hosts:')); ?></p>
<pre>
2a01:4f8:c010:d56::2 github.com
2a01:4f8:c010:d56::3 api.github.com
2a01:4f8:c010:d56::4 codeload.github.com
2a01:4f8:c010:d56::6 ghcr.io
2a01:4f8:c010:d56::7 pkg.github.com npm.pkg.github.com maven.pkg.github.com nuget.pkg.github.com rubygems.pkg.github.com
2a01:4f8:c010:d56::8 uploads.github.com
2606:50c0:8000::133 objects.githubusercontent.com www.objects.githubusercontent.com release-assets.githubusercontent.com gist.githubusercontent.com repository-images.githubusercontent.com camo.githubusercontent.com private-user-images.githubusercontent.com avatars0.githubusercontent.com avatars1.githubusercontent.com avatars2.githubusercontent.com avatars3.githubusercontent.com cloud.githubusercontent.com desktop.githubusercontent.com support.github.com
2606:50c0:8000::154 support-assets.githubassets.com github.githubassets.com opengraph.githubassets.com github-registry-files.githubusercontent.com github-cloud.githubusercontent.com
</pre>
<p><?php echo htmlspecialchars(_('Once added, you can clone as usual, without any changes:')); ?></p>
<code>git clone https://github.com/DanWin/le-chat-php</code>

<p><?php echo htmlspecialchars(_('All of this is done with the following nginx configuration on a dual stack server:')); ?></p>
<pre>
http {
	server {
		listen [::]:1443 fastopen=100 backlog=2048 ipv6only=on ssl http2 default_server;
		location = /robots.txt {
			return 200 'User-agent: *
Disallow:';
		}
		location / {
			proxy_pass https://github.com;
			proxy_set_header Host "github.com";
		}
	}
}
stream {
	server {
		listen [2a01:4f8:c010:d56::2]:22 fastopen=100 ipv6only=on;
		proxy_pass github.com:22;
	}
	server {
		listen [2a01:4f8:c010:d56::2]:443 fastopen=100 ipv6only=on;
		proxy_pass github.com:443;
	}
	server {
		listen [2a01:4f8:c010:d56::3]:443 fastopen=100 ipv6only=on;
		proxy_pass api.github.com:443;
	}
	server {
		listen [2a01:4f8:c010:d56::4]:443 fastopen=100 ipv6only=on;
		proxy_pass codeload.github.com:443;
	}
	server {
		listen [2a01:4f8:c010:d56::5]:443 fastopen=100 ipv6only=on;
		proxy_pass objects.githubusercontent.com:443;
	}
	server {
		listen [2a01:4f8:c010:d56::6]:443 fastopen=100 ipv6only=on;
		proxy_pass ghcr.io:443;
	}
	server {
		listen [2a01:4f8:c010:d56::7]:443 fastopen=100 ipv6only=on;
		proxy_pass pkg.github.com:443;
	}
	server {
		listen [2a01:4f8:c010:d56::8]:443 fastopen=100 ipv6only=on;
		proxy_pass uploads.github.com:443;
	}
}
</pre>
<p><?php printf(htmlspecialchars(_('If there are any further questions, %s.')), '<a href="/contact.php">'.htmlspecialchars(_('contact me')).'</a>'); ?></p>
</main>
</body></html>
