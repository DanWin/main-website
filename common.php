<?php
const DONATE_XMR = '8AJ7wCCshe6Vni5VxQqDgR9VyghZx1ZTJP2gmpEBpi8S4ZbX91eBnGkdZbR1HBgS5pNSE2D7hKyYmDFcNRv26dA71wq7wqE';
const DONATE_BTC = '1Ba8AV59YtqbKBe7YMopjY9kd1e5QqKdsv';
const CONTACT_NAME = 'Daniel Winzen';
const CONTACT_STREET = 'Steinkaulstraße 47';
const CONTACT_ZIP = '52070';
const CONTACT_CITY = 'Aachen';
const CONTACT_COUNTRY = 'Germany';
const CONTACT_PHONE = '+4917698819809';
const CONTACT_EMAIL = 'daniel@danwin1210.de';
const CONTACT_VAT_ID_NUMBER = 'DE358256290';
global $global_style, $language, $dir;
$global_style = 'body{margin:0;font-size:18px}';
$global_style .= 'header{padding:0 50px;background:#00F;min-height:61px;display:flex;align-items:center}';
//$global_style .= 'header.notice{background:#F00;height:25px;display:flex;align-items:center} header.notice a{color:white} header.notice span{margin:auto}';
$global_style .= 'header h1{font-size:24px;color:#fff;margin:auto}';
$global_style .= 'main{margin-bottom:30px;padding:1em;word-wrap:break-word}';
$global_style .= 'nav{padding:0;background-color:#FFF;width:100%;z-index:1;display:block;position:absolute}';
$global_style .= 'nav a{display:block;font-weight:bold;margin:10px;margin-bottom:20px}';
$global_style .= 'nav a:link{color:#000;background-color:#eee}';
$global_style .= 'nav a:visited{color:#666;background-color:#eee}';
$global_style .= 'nav a:hover{color:#000;background-color:#fff}';
$global_style .= 'nav a:active{color:#fff;background-color:#888}';
$global_style .= '#menu summary{top:11px;left:2px;position:absolute}#menu summary,#language summary{display:block;width:50px;cursor:pointer}#menu summary::-webkit-details-marker,#language summary::-webkit-details-marker{display: none}';
$global_style .= '#language{top:11px;right:0;position:absolute;font-size:2em}#language a{text-decoration:none}';
$global_style .= '.row{display:flex;flex-wrap:wrap}.cell{border: 1px solid #999999;flex:1;padding:3px 3px}.headerrow{display:flex;font-weight:bold}.col{display:flex;flex:1;padding:3px 3px;flex-direction:column;min-width:5em}';
$global_style .= '.form_limit{max-width:1024px}.red{color:red}.green{color:green}';
$global_style .= '.burger_nav .bar1,.burger_nav .bar2,.burger_nav .bar3{display:block;width:35px;height:5px;background-color:#fff;margin:6px 6px}';
$global_style .= '@media (min-width: 769px){nav{width:auto;border-right:1px solid silver;border-bottom:1px solid silver}}';
$global_style .= 'button,input,select,textarea{padding:0.3em;margin:0.3em;font-size:1em}input[type=checkbox],input[type=radio]{width:1.5em;height:1.5em}';
$global_style .= 'img{max-width:100%;height:auto}img.float-left{float: left;margin: 0 15px 0 0;}';
$global_style .= '@media (prefers-color-scheme: dark){';
$global_style .= 'body,button,input,select,textarea{background-color:#000;color:#fff}';
$global_style .= 'a:visited{color:#B33CB4} a:link{color:#00A2D4} a:active{color:#55A2D4}';
$global_style .= 'header{background:#008} nav{background-color:#000}';
$global_style .= 'nav a:link{color:#fff;background-color:#333}';
$global_style .= 'nav a:visited{color:#ccc;background-color:#333}';
$global_style .= 'nav a:hover{color:#fff;background-color:#000}';
$global_style .= 'nav a:active{color:#fff;background-color:#555}';
$global_style .= '}';
$global_style .= '[dir="rtl"] #menu summary{right:2px;left:unset}';
$global_style .= '[dir="rtl"] #language{left:2px;right:unset}';
$global_style .= '@media (min-width: 769px){[dir="rtl"] nav{border-right:unset;border-left:1px solid silver;}}';
header("Content-Security-Policy: base-uri 'self'; default-src 'none'; img-src 'self' data:; style-src 'self' 'sha256-DXBEMP36VCfgXuraJi2UnvYIOsGysSts59C82uw58v8=' 'sha256-".base64_encode(hash('sha256', $global_style, true))."'; frame-ancestors 'self'; form-action 'self'; require-trusted-types-for 'script'");
header('X-Content-Type-Options: nosniff');
header('X-Frame-Options: sameorigin');
header('X-XSS-Protection: 0');
header('Content-Type: text/html; charset=UTF-8');
header('Referrer-Policy: no-referrer');
header("Permissions-Policy: accelerometer=(), ambient-light-sensor=(), autoplay=(), battery=(), camera=(), cross-origin-isolated=(), display-capture=(), document-domain=(), encrypted-media=(), geolocation=(), fullscreen=(), execution-while-not-rendered=(), execution-while-out-of-viewport=(), gyroscope=(), magnetometer=(), microphone=(), midi=(), navigation-override=(), payment=(), picture-in-picture=(), publickey-credentials-get=(), screen-wake-lock=(), sync-xhr=(), usb=(), web-share=(), xr-spatial-tracking=(), clipboard-read=(), clipboard-write=(), gamepad=(), speaker-selection=(), conversion-measurement=(), focus-without-user-activation=(), hid=(), idle-detection=(), sync-script=(), vertical-scroll=(), serial=(), trust-token-redemption=(), interest-cohort=(), otp-credentials=()");
header("Cross-Origin-Embedder-Policy: require-corp");
header("Cross-Origin-Opener-Policy: same-origin");
header("Cross-Origin-Resource-Policy: same-origin");

const LANGUAGES = [
	'cs' => ['name' => 'čeština', 'locale' => 'cs_CZ', 'flag' => '🇨🇿', 'show_in_menu' => true, 'dir' => 'ltr'],
	'de' => ['name' => 'Deutsch', 'locale' => 'de_DE', 'flag' => '🇩🇪', 'show_in_menu' => true, 'dir' => 'ltr'],
	'en' => ['name' => 'English', 'locale' => 'en_GB', 'flag' => '🇬🇧', 'show_in_menu' => true, 'dir' => 'ltr'],
	'pt-BR' => ['name' => 'Brazilian Portuguese', 'locale' => 'pt_BR', 'flag' => '🇧🇷', 'show_in_menu' => true, 'dir' => 'ltr'],
	'ru' => ['name' => 'Русский', 'locale' => 'ru_RU', 'flag' => '🇷🇺', 'show_in_menu' => true, 'dir' => 'ltr'],
	'tr' => ['name' => 'Türkçe', 'locale' => 'tr_TR', 'flag' => '🇹🇷', 'show_in_menu' => true, 'dir' => 'ltr'],
	'zh-Hans' => ['name' => '简体中文', 'locale' => 'zh_CN', 'flag' => '🇨🇳', 'show_in_menu' => true, 'dir' => 'ltr'],
];
$language = 'en';
$locale = 'en_GB';
$dir = 'ltr';

if(isset($_REQUEST['lang']) && isset(LANGUAGES[$_REQUEST['lang']])){
	$locale = LANGUAGES[$_REQUEST['lang']]['locale'];
	$language = $_REQUEST['lang'];
	$dir = LANGUAGES[$_REQUEST['lang']]['dir'];
	setcookie('language', $_REQUEST['lang'], ['expires' => 0, 'path' => '/', 'domain' => '', 'secure' => ($_SERVER['HTTPS'] ?? '' === 'on'), 'httponly' => true, 'samesite' => 'Strict']);
}elseif(isset($_COOKIE['language']) && isset(LANGUAGES[$_COOKIE['language']])){
	$locale = LANGUAGES[$_COOKIE['language']]['locale'];
	$language = $_COOKIE['language'];
	$dir = LANGUAGES[$_COOKIE['language']]['dir'];
}elseif(!empty($_SERVER['HTTP_ACCEPT_LANGUAGE'])){
	$prefLocales = array_reduce(
		explode(',', $_SERVER['HTTP_ACCEPT_LANGUAGE']),
		function (array $res, string $el) {
			list($l, $q) = array_merge(explode(';q=', $el), [1]);
			$res[$l] = (float) $q;
			return $res;
		}, []);
	arsort($prefLocales);
	foreach($prefLocales as $l => $q){
		$lang = locale_lookup(array_keys(LANGUAGES), $l);
		if(!empty($lang)){
			$locale = LANGUAGES[$lang]['locale'];
			$language = $lang;
			$dir = LANGUAGES[$lang]['dir'];
			setcookie('language', $lang, ['expires' => 0, 'path' => '/', 'domain' => '', 'secure' => ($_SERVER['HTTPS'] ?? '' === 'on'), 'httponly' => true, 'samesite' => 'Strict']);
			break;
		}
	}
}
putenv('LC_ALL='.$locale);
setlocale(LC_ALL, $locale);

bindtextdomain('main-website', __DIR__.'/locale');
bind_textdomain_codeset('main-website', 'UTF-8');
textdomain('main-website');

function menu(string $title = ''): void
{
	global $global_style, $language;
	echo "<style>$global_style</style>";
	echo "<header><h1>$title</h1></header>";
	echo '<details id="menu">';
	echo '<summary class="burger_nav" aria-label="Toggle navigation" tabindex="0"><span class="bar1"></span><span class="bar2"></span><span class="bar3"></span></summary>';
	echo '<nav>';
	if(isset($_SERVER['HTTP_HOST']) && preg_match('/danwin1210\.de$/', $_SERVER['HTTP_HOST'])){
		$host='https://danwin1210.de';
	}elseif(isset($_SERVER['HTTP_HOST']) && preg_match('/\.onion$/', $_SERVER['HTTP_HOST'])){
		$host='http://danielas3rtn54uwmofdo3x2bsdifr47huasnmbgqzfrec5ubupvtpid.onion';
	}elseif(isset($_SERVER['HTTP_HOST']) && preg_match('/danwin1210\.i2p$/', $_SERVER['HTTP_HOST'])){
		$host='http://danwin1210.i2p';
	}else{
		$host='http://edk3pz64esvpy6bqpjtlqat3h7unwzxmvrrhjeg2ab43d6zfkzpa.b32.i2p';
	}
	echo "<a href=\"$host/\">"._('Home').'</a>';
	echo "<a href=\"$host/blog/\">"._('Blog and news').'</a>';
	echo "<a href=\"$host/mail/\">"._('E-Mail + XMPP').'</a>';
	echo "<a href=\"$host/tutorials/\">"._('Tutorials').'</a>';
	echo "<a href=\"$host/github-ipv6-proxy.php\">"._('GitHub IPv6 proxy').'</a>';
	echo "<a href=\"$host/faq.php\">"._('FAQ').'</a>';
	echo "<a href=\"$host/about.php\">"._('About').'</a>';
	echo "<a href=\"$host/contact.php\">"._('Contact').'</a>';
	echo "<a href=\"$host/privacy.php\">"._('Privacy').'</a>';
	echo "<a href=\"$host/imprint.php\">"._('Imprint').'</a>';
	echo '</nav>';
	echo '</details>';
	echo '<details id="language">';
	echo '<summary title="'.LANGUAGES[$language]['name'].'">'.LANGUAGES[$language]['flag'].'</summary>';
	foreach(LANGUAGES as $lang => $data) {
		if($lang === $language || !$data['show_in_menu']){
			continue;
		}
		echo '<div><a href="?lang='.$lang.'" title="'.$data['name'].'">'.$data['flag'].'</a></div>';
	}
	echo '<div><a target="_blank" rel="noopener noreferrer" href="https://github.com/DanWin/main-website/#translation" title="'._('Add translation').'">+</a></div>';
	echo '</details>';
	echo '<main>';
}

function alt_links(): void
{
	global $language;
	foreach(LANGUAGES as $lang => $data) {
		if($lang === $language){
			continue;
		}
		echo '<link rel="alternate" href="?lang='.$lang.'" hreflang="'.$lang.'" />';
		echo '<meta property="og:locale:alternate" content="'.$data['locale'].'">';
	}
}
