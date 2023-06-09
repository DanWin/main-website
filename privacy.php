<?php
require_once('common.php');
global $language, $dir, $locale;
?>
<!DOCTYPE html><html lang="<?php echo $language; ?>" dir="<?php echo $dir; ?>"><head>
<title><?php echo _('Daniel - Privacy policy'); ?></title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="author" content="Daniel Winzen">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="<?php echo _('Privacy policy of Daniel Winzen'); ?>'">
<link rel="canonical" href="https://danwin1210.de/privacy.php">
<link rel="alternate" href="https://danwin1210.de/privacy.php" hreflang="x-default">
<?php alt_links(); ?>
<meta property="og:type" content="website">
<meta property="og:title" content="<?php echo _('Daniel - Privacy policy'); ?>">
<meta property="og:description" content="<?php echo _('Privacy policy of Daniel Winzen'); ?>">
<meta property="og:image" content="https://danwin1210.de/daniel.jpg">
<meta property="og:image:type" content="image/jpeg">
<meta property="og:image:height" content="1000">
<meta property="og:image:width" content="1000">
<meta property="og:image:alt" content="<?php echo _('An avatar representing Daniel Winzen'); ?>">
<meta property="og:url" content="https://danwin1210.de/privacy.php">
<meta property="og:locale" content="<?php echo $locale; ?>">
<meta property="og:site_name" content="<?php echo _('Daniel'); ?>">
<script type="application/ld+json">{"@context":"https://schema.org","@type":"WebPage","name":"<?php echo _('Daniel - Privacy policy'); ?>", "author":{"@type":"Person", "image": "/daniel.jpg", "name": "Daniel Winzen", "email": "daniel@danwin1210.de", "telephone": "+4917698819809", "url": "https://danwin1210.de"}}</script>
</head><body>
<?php menu(_('Privacy policy')); ?>
<h2><?php echo _('1. Name and Address of the controller'); ?></h2>
<p><?php echo _('Controller for the purposes of the General Data Protection Regulation (GDPR), other data protection laws applicable in Member states of the European Union and other provisions related to data protection is:'); ?></p>
<p><?php echo CONTACT_NAME; ?><br>
<?php echo CONTACT_STREET; ?><br>
<?php echo CONTACT_ZIP . ' ' . CONTACT_CITY; ?><br>
<?php echo CONTACT_COUNTRY; ?><br>
<?php printf(_('Phone: %s'), '+4917698819809'); ?><br>
<?php printf(_('Email: %s'), 'daniel@danwin1210.de'); ?><br>
<?php printf(_('Website: %s'), 'https://danwin1210.de'); ?><br>
<?php printf(_('VAT ID number: %s'), CONTACT_VAT_ID_NUMBER); ?></p>
<h2><?php echo _('2. Cookies'); ?></h2>
<p><?php echo _('The Internet pages of Daniel Winzen use cookies. Cookies are text files that are stored in a computer system via an Internet browser.'); ?></p>
<p><?php echo _('Many Internet sites and servers use cookies. Many cookies contain a so-called cookie ID. A cookie ID is a unique identifier of the cookie. It consists of a character string through which Internet pages and servers can be assigned to the specific Internet browser in which the cookie was stored. This allows visited Internet sites and servers to differentiate the individual browser of the data subject from other Internet browsers that contain other cookies. A specific Internet browser can be recognized and identified using the unique cookie ID.'); ?></p>
<p><?php echo _('Through the use of cookies, Daniel Winzen can provide the users of this website with more user-friendly services that would not be possible without the cookie setting.'); ?></p>
<p><?php echo _('By means of a cookie, the information and offers on my website can be optimized with the user in mind. Cookies allow me, as previously mentioned, to recognize my website users. The purpose of this recognition is to make it easier for users to utilize my website. An example for the use of a cookie is when you log in to the mail client, the cookie assures that you stay logged in with your account until closing your browser or logging out.'); ?></p>
<p><?php echo _('This site makes only use of technically necessary session cookies and does not use any form of tracking cookies.'); ?></p>
<p><?php echo _('The data subject may, at any time, prevent the setting of cookies through my website by means of a corresponding setting of the Internet browser used, and may thus permanently deny the setting of cookies. Furthermore, already set cookies may be deleted at any time via an Internet browser or other software programs. This is possible in all popular Internet browsers. If the data subject deactivates the setting of cookies in the Internet browser used, not all functions of my website may be entirely usable.'); ?></p>
<h2><?php echo _('3. Collection of general data and information'); ?></h2>
<p><?php echo _('The server of Daniel Winzen collects a series of general data and information when a data subject or automated system calls up the website or other provided services. This general data and information is stored in the server log files. Collected may be (1) the browser types and versions used, (2) the operating system used by the accessing system, (3) the website from which an accessing system reaches my website (so-called referrers), (4) the sub-websites, (5) the date and time of access to the Internet site / email transmission, (6) sender and recipient of an email, and (7) any other similar data and information that may be used in the event of attacks on my information technology systems.'); ?></p>
<p><?php echo _('When using these general data and information, Daniel Winzen does not draw any conclusions about the data subject. Rather, this information is needed to (1) deliver the content of my website and services correctly, (2) optimize my services, (3) ensure the long-term viability of my information technology systems and website technology. Therefore, I may analyze anonymously collected data and information statistically, with the aim of increasing the data protection and data security of my services, and to ensure an optimal level of protection for the personal data I process. The general data of the server log files are stored separately from all personal data provided by a data subject for up to 48 hours and are then permanently deleted.'); ?></p>
<h2><?php echo _('4. Routine erasure and blocking of personal data'); ?></h2>
<p><?php echo _('The data controller shall process and store the personal data of the data subject only for the period necessary to achieve the purpose of storage, or as far as this is granted by the European legislator or other legislators in laws or regulations to which the controller is subject to.'); ?></p>
<p><?php echo _('If the storage purpose is not applicable, or if a storage period prescribed by the European legislator or another competent legislator expires, the personal data are routinely erased in accordance with legal requirements.'); ?></p>
<h2><?php echo _('5. Rights of the data subject'); ?></h2>
<p><?php echo _('Each data subject shall have the right of confirmation and access according to Article 15 GDPR, Right to rectification according to Article 16 GDPR, Right to erasure (Right to be forgotten) according to Article 17 GDPR, Right of restriction of processing according to Article 18 GDPR, Right to data portability according to GDPR article 20, Right to object according to Article 21 GDPR'); ?></p>
<h2><?php echo _('6. Legal basis for the processing'); ?></h2>
<p><?php echo _('Art. 6(1) lit. a GDPR serves as the legal basis for processing operations for which I obtain consent for a specific processing purpose. If the processing of personal data is necessary for the performance of a contract to which the data subject is party, as is the case, for example, when processing operations are necessary to provide services, the processing is based on Article 6(1) lit. b GDPR. The same applies to such processing operations which are necessary for carrying out pre-contractual measures, for example in the case of inquiries concerning my services. If I am subject to a legal obligation by which processing of personal data is required, such as for the fulfillment of tax obligations, the processing is based on Art. 6(1) lit. c GDPR.'); ?>
<br><?php echo _('Finally, processing operations could be based on Article 6(1) lit. f GDPR. This legal basis is used for processing operations which are not covered by any of the above-mentioned legal grounds, if processing is necessary for the purposes of the legitimate interests pursued by me or by a third party, except where such interests are overridden by the interests or fundamental rights and freedoms of the data subject which require protection of personal data. Such processing operations are particularly permissible because they have been specifically mentioned by the European legislator. He considered that a legitimate interest could be assumed if the data subject is a client of the controller (Recital 47 Sentence 2 GDPR).'); ?></p>
<h2><?php echo _('7. Legally binding translation'); ?></h2>
<p><?php echo _('Legally binding is only the English version of this privacy policy'); ?></p>
<h2><?php echo _('8. List of sub-processors'); ?></h2>
<table>
    <tr><th><?php echo _('Vendor'); ?></th><th><?php echo _('Purpose'); ?></th></tr>
    <tr><td><a href="https://www.hetzner.com/legal/privacy-policy" target="_blank" rel="noopener noreferrer">Hetzner</a></td><td><?php echo _('VPS provider to relay outgoing mails, proxy clearnet requests and provider for backup space'); ?></td></tr>
    <tr><td><a href="https://www.hosting.de/ueber-uns/datenschutz/" target="_blank" rel="noopener noreferrer">hosting.de GmbH</a></td><td><?php echo _('VPS provider to relay outgoing mails and proxy clearnet requests'); ?></td></tr>
</table>
</main>
</body></html>
