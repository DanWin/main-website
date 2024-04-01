<?php
require_once('../../common.php');
global $language, $dir, $locale;
?>
<!DOCTYPE html><html lang="<?php echo $language; ?>" dir="<?php echo $dir; ?>"><head>
	<title><?php echo htmlspecialchars(_('Cluster setup')); ?></title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<meta name="author" content="Daniel Winzen">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="<?php echo htmlspecialchars(_('Seting up a linux server cluster using Ceph and MariaDB Galera')); ?>">
	<link rel="canonical" href="https://danwin1210.de/blog/cluster/">
	<link rel="alternate" href="https://danwin1210.de/blog/cluster/" hreflang="x-default">
	<?php alt_links(); ?>
	<meta property="og:type" content="article">
	<meta property="article:published_time" content="2024-04-01">
	<meta property="article:modified_time" content="2024-04-01">
	<meta property="article:tag" content="Ceph">
	<meta property="article:tag" content="network">
	<meta property="article:tag" content="storage">
	<meta property="article:section" content="Technology">
	<meta property="og:title" content="<?php echo htmlspecialchars(_('Cluster setup')); ?>">
	<meta property="og:description" content="<?php echo htmlspecialchars(_('Seting up a linux server cluster using Ceph and MariaDB Galera')); ?>">
	<meta property="og:image" content="https://danwin1210.de/assets/daniel.jpg">
	<meta property="og:image:type" content="image/jpeg">
	<meta property="og:image:height" content="1000">
	<meta property="og:image:width" content="1000">
	<meta property="og:image:alt" content="<?php echo htmlspecialchars(_('An avatar representing Daniel Winzen')); ?>">
	<meta property="og:url" content="https://danwin1210.de/blog/cluster/">
	<meta property="og:locale" content="<?php echo $locale; ?>">
	<meta property="og:site_name" content="<?php echo htmlspecialchars(_('Daniel')); ?>">
	<script type="application/ld+json">{"@context":"https://schema.org","@type":"Article","name":"<?php echo htmlspecialchars(_('Cluster setup')); ?>", "datePublished": "2024-04-01", "author":{"@type":"Person", "image": "/assets/daniel.jpg", "name": "Daniel Winzen", "email": "daniel@danwin1210.de", "telephone": "+4917698819809", "url": "https://danwin1210.de"}}</script>
</head><body>
<?php menu(_('Cluster setup')); ?>
<p><?php echo htmlspecialchars(_('A cluster is a group of servers and other resources that act as a single system. Utilizing a cluster can increase data reliability, availability, and scalability. In this article, we will focus on Ceph, a distributed object storage and file system, and MariaDB Galera, a multi-master database solution, to achieve high availability and performance. This cluster setup is the basis for the website that you are currently reading.')); ?></p>
<h2><?php echo htmlspecialchars(_('Prerequisites')); ?></h2>
<p><?php echo htmlspecialchars(_('You will need a minimum of 3 servers set up running on a Linux OS. Having less than 3 servers is not recommended as it can break the cluster and could lead to split-brain issues.')); ?></p>
<h2><?php echo htmlspecialchars(_('Ceph')); ?></h2>
<p><?php echo htmlspecialchars(_('Ceph is a highly scalable, fault-tolerant, and highly available storage system.')); ?></p>
<h3><?php echo htmlspecialchars(_('How Ceph works')); ?></h3>
<p><?php echo htmlspecialchars(_('A Ceph Storage Cluster is based on several types of daemons:')); ?></p>
<ul>
<li><?php echo htmlspecialchars(_('Ceph OSD (Object Storage Daemon): These are the heart of Ceph because they handle data storage, data replication, recovery, rebalancing, and provide some monitoring statistics to Ceph monitors.')); ?></li>
<li><?php echo htmlspecialchars(_('Ceph MON (Monitor): They maintain the master copy of the cluster map. A cluster usually has an odd number of monitors running (e.g., 3, 5, 7).')); ?></li>
<li><?php echo htmlspecialchars(_('Ceph MDS (Metadata Server): These servers are optional and store metadata for the Ceph File System (not block devices or objects).')); ?></li>
<li><?php echo htmlspecialchars(_('Ceph MGR (Manager): This daemon is responsible for keeping track of runtime metrics, managing the cluster\'s state, and providing additional interfaces to external monitoring and management systems.')); ?></li>
</ul>
<p><?php echo htmlspecialchars(_('All these daemons are installed on multiple servers and interact with each other to form the cluster.')); ?></p>
<h3><?php echo htmlspecialchars(_('Use Cases of Ceph')); ?></h3>
<p><?php echo htmlspecialchars(_('Ceph is commonly used in clouds of all sizes and types due to its versatility, massive scalability, and robust data protection.')); ?></p>
<ul>
<li><?php echo htmlspecialchars(_('Object Storage: Ceph provides features such as replication and erasure coding, tiering, and the ability to set up watch/notify and object-level key-value mappings.')); ?></li>
<li><?php echo htmlspecialchars(_('Block Storage: Ceph\'s RADOS Block Device (RBD) supports snapshots, and replication, and can significantly improve read performance by utilizing the cache of the client and the Ceph OSD.')); ?></li>
<li><?php echo htmlspecialchars(_('File System: Ceph\'s file system (CephFS) ensures highly available and reliable storage, where all data gets written and read in/from the object store.')); ?></li>
</ul>
<h3><?php echo htmlspecialchars(_('Performance optimizations')); ?></h3>
<p><?php echo htmlspecialchars(_('The following optimizations resulted in 10 times faster read times of data stored on my cluster, which contains mostly websites and emails.')); ?></p>
<h4><?php echo htmlspecialchars(_('Tuning encrypted OSDs on SSDs')); ?></h5>
<p><?php echo htmlspecialchars(_('SSDs are typically faster than HDDs and have much lower latency. For historical reasons, the Linux kernel uses work queues in dm-crypt, which offloads encryption and disk read/write work to different threads in the kernel. This makes sense for slower HDDs, but for SSDs, it can harm performance due to the overhead of context switches.')); ?></p>
<p><?php printf(htmlspecialchars(_('To disable this behaviour, we first have to find the relevant device with the command %1$s. If you have an OSD running, the underlying device will show up in the list printed by dmsetup. To get only the relevant UUID of the ceph device, we can use %2$s. Now as a final step we can set persistent options for the device using %3$s.')), '<code>dmsetup ls --tree</code>', "<code>dmsetup ls | grep ceph | sed 's/.*osd--block--//' | sed 's/--/-/g' | awk '{print $1;}'</code>", '<code>cryptsetup --perf-no_read_workqueue --perf-no_write_workqueue --persistent refresh {$PARENT_DEVICE} -d <(ceph tell mon config-key get dm-crypt/osd/{$DEVICE_UUID}/luks)</code>'); ?></p>
<h4><?php echo htmlspecialchars(_('Tuning CephFS for many files in one directory')); ?></h5>
<p><?php printf(htmlspecialchars(_('CephFS performance suffers when many files are stored in the same directory, just like with every file system. Using the option %1$s it is however possible to split directory indexes in multiple parts to increase performance when operating in directories with many files. I have set this down to a value of %2$s.')), '<code>mds_bal_split_size</code>', '<code>5000</code>'); ?></p>
<h2><?php echo htmlspecialchars(_('MariaDB Galera Cluster')); ?></h2>
<p><?php echo htmlspecialchars(_('MariaDB Galera Cluster is an open-source database system focusing on high availability, failing over between servers seamlessly, and ensuring data consistency between those servers. It is a multi-master cluster that uses synchronous replication.')); ?></p>
<h3><?php echo htmlspecialchars(_('How Galera Works')); ?></h3>
<p><?php echo htmlspecialchars(_('In a Galera Cluster, every database instance (or "node") is a master, meaning data can be written or read from any node, with changes automatically replicated across all nodes. Using synchronous replication MariaDB Galera Cluster ensures all nodes have the same data simultaneously.')); ?></p>
<h3><?php echo htmlspecialchars(_('Use Cases for MariaDB Galera Cluster')); ?></h3>
<p><?php echo htmlspecialchars(_('MariaDB Galera Cluster is best suited for applications where data availability, consistency, and durability are critical across multiple nodes, such as when deploying a web application with multiple database servers to scale up a busy service, or when deploying a high-availability database with multiple nodes.')); ?></p>
<h2><?php echo htmlspecialchars(_('Hire an expert')); ?></h2>
<p><?php printf(htmlspecialchars(_('If you\'re considering implementing this for your business, don\'t hesitate to seek help from an expert. Please %s for assistance and consultation with your implementation.')), '<a href="/contact.php">'.htmlspecialchars(_('contact me')).'</a>'); ?></p>
</main>
</body></html>
