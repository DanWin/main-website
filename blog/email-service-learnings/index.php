<?php
require_once('../../common.php');
global $language, $dir, $locale;
?>
<!DOCTYPE html><html lang="<?php echo $language; ?>" dir="<?php echo $dir; ?>"><head>
<title><?php echo htmlspecialchars(_('Learnings from running an email service')); ?></title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="author" content="Daniel Winzen">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="<?php echo htmlspecialchars(_('My learnings from running a free, anonymous email servcie and what to expect when you run a service like mine')); ?>">
<link rel="canonical" href="https://danwin1210.de/blog/email-service-learnings/">
<link rel="alternate" href="https://danwin1210.de/blog/email-service-learnings/" hreflang="x-default">
<?php alt_links(); ?>
<meta property="og:type" content="article">
<meta property="og:title" content="<?php echo htmlspecialchars(_('Learnings from running an email service')); ?>">
<meta property="og:description" content="<?php echo htmlspecialchars(_('My learnings from running a free, anonymous email servcie and what to expect when you run a service like mine')); ?>">
<meta property="og:image" content="https://danwin1210.de/assets/daniel.jpg">
<meta property="og:image:type" content="image/jpeg">
<meta property="og:image:height" content="1000">
<meta property="og:image:width" content="1000">
<meta property="og:image:alt" content="<?php echo htmlspecialchars(_('An avatar representing Daniel Winzen')); ?>">
<meta property="og:url" content="https://danwin1210.de/blog/email-service-learnings/">
<meta property="og:locale" content="<?php echo $locale; ?>">
<meta property="og:site_name" content="<?php echo htmlspecialchars(_('Daniel')); ?>">
<script type="application/ld+json">{"@context":"https://schema.org","@type":"Article","name":"<?php echo htmlspecialchars(_('Learnings from running an email service')); ?>", "author":{"@type":"Person", "image": "/assets/daniel.jpg", "name": "Daniel Winzen", "email": "daniel@danwin1210.de", "telephone": "+4917698819809", "url": "https://danwin1210.de"}}</script>
</head><body>
<?php menu(_('Learnings from running an email service')); ?>
<p><?php echo htmlspecialchars(_('Running a public email service can be challenging and frustrating at times. Nonetheless, I learned a lot from offering a free email service for the past few years. Here are some of the challenges I had to face and what I learned from them:')); ?></p>
<h2><?php echo htmlspecialchars(_('Spam and countermeasures')); ?></h2>
<p><?php echo htmlspecialchars(_('Spam is one of the most common issues when dealing with email. Making an email service completely spam-free is almost impossible. While many spam filters can filter out the majority of spam we receive daily, they aren\'t perfect either. The worst kind of spam is the outgoing kind because it will damage the reputation of the service and can have a significant long-term impact. Thus I have taken many steps to reduce the amount of spam my service will send out by using rate limiting, spam filters, blacklisting of specific addresses and manually shutting down sending for a couple of hours whenever a spam wave starts.')); ?></p>
<h2><?php echo htmlspecialchars(_('Reputational damages')); ?></h2>
<p><?php printf(htmlspecialchars(_('No matter how much you invest in anti-spam measures, at some point, there will be spam going out. Just five spam emails a day could be enough to get your service blacklisted if there aren\'t enough good emails to make up for them. For example, %s considers 0.1%% of spam already too much. At a rate of 0.3%%, you can say goodbye to reaching inboxes since all your emails will get marked as spam. Once your service reputation goes down, it can take several months to recover.')), '<a href="https://support.google.com/a/answer/81126?sjid=5222533572318461356-EU&visit_id=638417784910430941-259877275&rd=1#spam-rate" target="_blank" rel="noopener noreferrer">Google</a>'); ?></p>
<h2><?php echo htmlspecialchars(_('Hate and death threads')); ?></h2>
<p><?php printf(htmlspecialchars(_('Unlike some big providers, I never asked for personal details such as phone numbers or payment details, and it\'s also possible to use my service from a Tor hidden service. Unfortunately, this anonymity also attracts some people who are going to abuse the email service to send hate and death threads. This trend has been on the rise for the past few years, and there were times when I had to deal with such threats and their aftermath almost every month. That includes talking to scared victims, giving statements to the police and disabling abusive accounts. One of the cases I had to deal with was about violent death threads sent to %s and her employees. There were several similar cases, which didn\'t go public. Although it is unlikely that any of these threats would have been carried out, they can still have devastating and traumatic effects on the people who receive them.')), '<a href="https://en.wikipedia.org/wiki/Lisa-Maria_Kellermayr" target="_blank" rel="noopener noreferrer">Lisa-Maria Kellermayr</a>'); ?></p>
<h2><?php echo htmlspecialchars(_('Law enforcement visits')); ?></h2>
<p><?php echo htmlspecialchars(_('Internet crimes may be hard to combat, but law enforcement is trying to track down these kinds of crimes as well. That means whenever someone reports an incident to the police, they will investigate and reach out to the email provider to ask for information. While I don\'t have much data at hand, given that my service is anonymous, I still get contacted by law enforcement regularly, which includes being woken up in the middle of the night to answer some questions, or having my home searched.')); ?></p>
<h2><?php echo htmlspecialchars(_('Time consuming tasks')); ?></h2>
<p><?php echo htmlspecialchars(_('Time is one of the most valuable assets. We all have a limited quantity of it. You can\'t get back time you\'ve spent on something less enjoyable. While I understand that many people prefer wasting their time in front of the TV, instead of doing something productive with their life, I am building my own business and often have a busy schedule. That is why I no longer want to spend so much time running this public email service. It can ruin my entire day planning when I have to spend some hours dealing with spam before I can send an urgent email myself. In mid 2023 some very persistent spammers started abusing my service. I\'ve spent countless hours deleting accounts, and disabled registration for several months, but still couldn\'t find a solution to this problem. It\'s now 2024 and I still see an abnormal rate of abuse. Cleaning up after a spam wave can take hours and means halting outgoing mail for several hours until I have time to deal with it.')); ?></p>
<h2><?php echo htmlspecialchars(_('Closing registration for good')); ?></h2>
<p><?php echo htmlspecialchars(_('While I strongly believe in freedom of speech and want to continue offering the email service, it has become too much of a burden to keep this service clean. I\'m not earning money from it, and it\'s not worth continuing with the amount of abuse that I have seen in recent months. I\'ve closed registration temporarily several times in the past few months, but now I will close it for good. Existing accounts will continue working, and I do not intend to shut down this service. I use this email service myself and depend on it. That is why I also need to take these steps since I am potentially losing clients whenever my emails land in spam because someone else ruined my email service reputation (again).')); ?></p>
<h2><?php echo htmlspecialchars(_('Making use of my experience')); ?></h2>
<p><?php printf(htmlspecialchars(_('With many years of experience running email services, I can also help you fix any problems you might encounter with your email service, such as restoring your sending reputation, authentication issues with DKIM, SPF and DMARC, or email security issues. If you are interested, you can %s. ')), '<a href="/contact.php">'.htmlspecialchars(_('hire me')).'</a>'); ?></p>
</main>
</body></html>
