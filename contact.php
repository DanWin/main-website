<?php
require_once('common.php');
global $language, $dir, $locale;
?>
<!DOCTYPE html><html lang="<?php echo $language; ?>" dir="<?php echo $dir; ?>"><head>
<title><?php echo htmlspecialchars(_('Daniel - Contact')); ?></title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="author" content="Daniel Winzen">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="<?php echo htmlspecialchars(_('Contact Daniel Winzen')); ?>">
<link rel="canonical" href="https://danwin1210.de/contact.php">
<link rel="alternate" href="https://danwin1210.de/contact.php" hreflang="x-default">
<?php alt_links(); ?>
<meta property="og:type" content="website">
<meta property="og:title" content="<?php echo htmlspecialchars(_('Daniel - Contact')); ?>">
<meta property="og:description" content="<?php echo htmlspecialchars(_('Contact Daniel Winzen')); ?>">
<meta property="og:image" content="https://danwin1210.de/assets/daniel.jpg">
<meta property="og:image:type" content="image/jpeg">
<meta property="og:image:height" content="1000">
<meta property="og:image:width" content="1000">
<meta property="og:image:alt" content="<?php echo htmlspecialchars(_('An avatar representing Daniel Winzen')); ?>">
<meta property="og:url" content="https://danwin1210.de/contact.php">
<meta property="og:locale" content="<?php echo $locale; ?>">
<meta property="og:site_name" content="<?php echo htmlspecialchars(_('Daniel')); ?>">
<script type="application/ld+json">{"@context":"https://schema.org","@type":"ContactPage","mainEntity":{"@type":"Person", "image": "/assets/daniel.jpg", "name": "Daniel Winzen", "email": "daniel@danwin1210.de", "telephone": "+4917698819809", "url": "https://danwin1210.de"}}</script>
</head><body>
<?php menu(_('Contact')); ?>
<p><?php echo htmlspecialchars(_('You can send me a message here. Don\'t forget to leave a contact option, if you want me to answer.')); ?></p>
<form action="<?php echo $_SERVER['SCRIPT_NAME']; ?>" method="POST">
<label><?php echo htmlspecialchars(_('Name:')); ?> <br><input name="name" id="name" size="30" value="<?php
echo htmlspecialchars($_POST['name'] ?? '');
?>" autofocus></label><br>
<div <?php echo empty($_POST['subject']) ? 'hidden' : ''; ?>><label><?php echo htmlspecialchars(_('Honeypot (do not fill anything):')); ?> <input type="text" name="subject" value="<?php echo htmlspecialchars($_POST['subject'] ?? ''); ?>"></label><br></div>
<label><?php echo htmlspecialchars(_('Subject:')); ?> <br><input name="real_subj" size="30" value="<?php
echo htmlspecialchars($_POST['real_subj'] ?? '');
?>"></label><br>
<label><?php echo htmlspecialchars(_('Message:')); ?> <br><textarea name="msg" rows="5" cols="30" required><?php
echo htmlspecialchars($_POST['msg'] ?? '');
?></textarea></label><br>
<label><input type="checkbox" name="accept_privacy" required<?php echo isset($_REQUEST['accept_privacy']) ? ' checked' : ''; ?>><?php printf(htmlspecialchars(_('I have read and agreed to the %s')), '<a href="/privacy.php" target="_blank">'.htmlspecialchars(_('Privacy Policy')).'</a>'); ?></label><br>
<button type="submit" name="action"><?php echo htmlspecialchars(_('Send')); ?></button></form><br>
<?php
if($_SERVER['REQUEST_METHOD']==='POST'){
	$subject='Formmail';
	$name='';
	if(!empty($_POST['name'])){
		$name.=preg_replace("~[\n\r<>;,]*~", '', $_POST['name']);
	}else{
		$name.='www-data';
	}
	$name='=?utf-8?B?'.base64_encode($name).'?=';
	$headers="Content-Type: text/plain; charset=utf-8\r\nContent-Transfer-Encoding: base64\r\nMime-Version: 1.0\r\nFrom: $name <www-data@danwin1210.de>\r\n";
	$message='';
	$ok=true;

	if(!empty($_POST['subject'])){
		$message .= _('You filled out the honeypot field :( Are you a human?').'<br>';
		$ok = false;
	}
	if(empty($_POST['msg'])){
		$message.= _('You haven\'t entered a message yet.').'<br>';
		$ok=false;
	}
	if(!empty($_POST['real_subj'])){
		$subject="$_POST[real_subj]";
	}
	$subject='=?utf-8?B?'.base64_encode($subject).'?=';
	if($ok){
		mail('daniel@danwin1210.de', $subject, base64_encode($_POST['msg']), $headers);
		echo '<p class="green" role="alert">'._('Message successfully sent!').'</p>';
	}else{
		echo '<p class="red" role="alert">'.htmlspecialchars($message).'</p>';
	}
}
?>
<p><?php printf(htmlspecialchars(_('If you want to encrypt your message, you can use %s.')), '<a href="/pgp.txt" target="_blank">'.htmlspecialchars(_('my public PGP key')).'</a>'); ?></p>
<p><?php printf(htmlspecialchars(_('If you prefer to directly get in contact with me, email me at %s.')), '<a href="mailto:daniel@danwin1210.de">daniel@danwin1210.de</a>'); ?></p>
</main>
</body></html>
