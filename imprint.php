<?php
require_once('common.php');
global $language, $dir, $locale;
?>
<!DOCTYPE html><html lang="<?php echo $language; ?>" dir="<?php echo $dir; ?>"><head>
<title><?php echo _('Daniel - Imprint'); ?></title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="author" content="Daniel Winzen">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="<?php echo _('Imprint of Daniel Winzen'); ?>">
<link rel="canonical" href="https://danwin1210.de/imprint.php">
<link rel="alternate" href="https://danwin1210.de/imprint.php" hreflang="x-default">
<?php alt_links(); ?>
<meta property="og:type" content="website">
<meta property="og:title" content="<?php echo _('Daniel - Imprint'); ?>">
<meta property="og:description" content="<?php echo _('Imprint of Daniel Winzen'); ?>">
<meta property="og:image" content="https://danwin1210.de/daniel.jpg">
<meta property="og:image:type" content="image/jpeg">
<meta property="og:image:height" content="1000">
<meta property="og:image:width" content="1000">
<meta property="og:image:alt" content="<?php echo _('An avatar representing Daniel Winzen'); ?>">
<meta property="og:url" content="https://danwin1210.de/contact.php">
<meta property="og:locale" content="<?php echo $locale; ?>">
<meta property="og:site_name" content="<?php echo _('Daniel'); ?>">
<script type="application/ld+json">{"@context":"https://schema.org","@type":"WebPage","mainEntity":{"@type":"Person", "image": "/daniel.jpg", "name": "Daniel Winzen", "email": "daniel@danwin1210.de", "telephone": "+4917698819809", "url": "https://danwin1210.de"}}</script>
</head><body>
<?php menu(_('Imprint')); ?>
<p>
<b><?php echo CONTACT_NAME; ?></b><br>
<?php echo CONTACT_STREET; ?><br>
<?php echo CONTACT_ZIP . ' ' . CONTACT_CITY; ?><br>
<?php echo CONTACT_COUNTRY; ?><br>
<?php printf(_('Email: %s'), CONTACT_EMAIL); ?><br>
<?php printf(_('Phone: %s'), CONTACT_PHONE); ?><br>
<?php printf(_('VAT ID number: %s'), CONTACT_VAT_ID_NUMBER); ?>
</p>
<b><?php echo _('Disclaimer - External links'); ?></b>
<p><?php echo _('This website contains links to third party websites ("external links"). These websites are subject to the liability of the respective operator. When linking first time third-party content, the provider checked whether there are any legal violations. At the time there were none legal violations evident. The provider has no influence on the current and future design and the content of the linked pages. Setting external links does not mean that the provider claims ownership of the content behind the reference or link. Constant control of the external links are not reasonable for the provider without concrete evidence of legal violations. At knowledge of legal violations, however, such external links will be deleted immediately.'); ?></p>
</main>
</body></html>
