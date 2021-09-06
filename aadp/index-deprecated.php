<?php
$version = '0.3';
$modified = '2016-03-02';
$title_en = 'Ada apa dengan parlimen?: A tale of two democracies (infographic)';
$title_ms = 'Ada apa dengan parlimen?: Kisah dua demokrasi (infografik)';
$description_en = "Parliament is one of the pillars of democracy in Malaysia. It is made up of the House of Representatives (or Dewan Rakyat), the Senate (Dewan Negara) and the King (Yang di-Pertuan Agong). Parliamentarians are elected to represent the people in making and changing laws, regulating the country's finances, overseeing the federal administration, and discussing the people's concerns. This infographic shows how two kinds of democracy make laws.";
$description_ms = "Parlimen adalah salah satu tonggak demokrasi di Malaysia. Ia terdiri daripada Dewan Rakyat, Dewan Negara dan Yang di-Pertuan Agong. Ahli-ahli parlimen dipilih untuk mewakili rakyat dalam membuat dan menukar undang-undang, mengawalselia perbelanjaan negara, mengawasi pentadbiran persekutuan, dan membincangkan kebimbangan rakyat. Infografik ini menunjukkan bagaimana dua jenis demokrasi membuat undang-undang.";

function strtoentity($input) { 
    foreach (str_split($input) as $obj) { $output .= '&#' . ord($obj) . ';'; }
    return $output;
}


if(isset($_COOKIE['lang']) && $_COOKIE['lang'] == 'en') {
    setcookie('lang', 'en', 2628000, '/');
    $lang = 'en';
} else {
    if(isset($_REQUEST['lang']) && $_REQUEST['lang'] == 'en' || isset($_REQUEST['en'])) {
        setcookie('lang', 'en', 2628000, '/');
        $lang = 'en';
    } else {
        setcookie('lang', 'ms', 2628000, '/');
        $lang = 'ms';   
    }
}

?>
<?php if($lang == 'en') { ?>
<?php } else { ?>
<?php } ?>
<!DOCTYPE html>
<html lang="<?php echo $lang ?>" prefix="og: http://ogp.me/ns#">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, user-scalable=no" />
    <meta name="copyright" content="© MCCHR 2016" />
    <meta http-equiv="last-modified" content="<?php echo date('c', filemtime('index.php')) ?>" />
    <meta http-equiv="content-language" content="<?php echo $lang ?>" />
    <meta name="author" content="UndiMsia!">
    <meta property="og:type" content="article" />
    <meta property="og:url" content="<?php echo 'http://' . $_SERVER['SERVER_NAME'] . '/aadp/?' . $lang ?>">
    <meta property="og:image" content="<?php echo 'http://' . $_SERVER['SERVER_NAME'] . '/aadp/images/screenshot-' . $lang . '.png' ?><?php echo '?' . filemtime('index.php') ?>">
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:site" content="@undimsia" />
    <meta name="twitter:url" content="<?php echo 'http://' . $_SERVER['SERVER_NAME'] . '/aadp/?' . $lang ?>">
    <meta name="twitter:image" content="<?php echo 'http://' . $_SERVER['SERVER_NAME'] . '/aadp/images/screenshot-' . $lang . '.png' ?><?php echo '?' . filemtime('index.php') ?>">
    <meta name="google" content="notranslate">
<?php if($lang == 'en') { ?>
    <title><?php echo $title_en ?></title>
    <meta name="description" content="<?php echo $description_en ?>">
    <meta name="keywords" content="parliament, legislation, democracy, Malaysia, civic education">
    <meta property="og:title" content="<?php echo $title_en ?>">
    <meta property="og:description" content="<?php echo $description_en ?>">
    <meta name="twitter:title" content="<?php echo $title_en ?>" />
    <meta name="twitter:description" content="<?php echo $description_en ?>" />
<?php } else { ?>
    <title><?php echo $title_ms ?></title>
    <meta name="description" content="<?php echo $description_ms ?>">
    <meta name="keywords" content="parlimen, perundangan, demokrasi, Malaysia, pendidikan sivik">
    <meta property="og:title" content="<?php echo $title_ms ?>">
    <meta property="og:description" content="<?php echo $description_ms ?>">
    <meta name="twitter:title" content="<?php echo $title_ms ?>" />
    <meta name="twitter:description" content="<?php echo $description_ms ?>" />
<?php } ?>   
    <link rel="stylesheet" href="//fonts.googleapis.com/css?family=Noto+Serif:400,400italic,700,700italic%7CNoto+Sans:400,400italic,700,700italic">    
    <link rel="stylesheet" href="styles/reset.css<?php echo '?' . filemtime('index.php') ?>" />
    <link rel="stylesheet" href="styles/core.css<?php echo '?' . filemtime('index.php') ?>" />
    <link rel="stylesheet" href="styles/elements.css<?php echo '?' . filemtime('index.php') ?>" />
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/fullPage.js/2.7.8/jquery.fullPage.min.css" />
<?php if(isset($_REQUEST['grid'])) { ?>    
    <link rel="stylesheet" href="styles/grid.css<?php echo '?' . filemtime('index.php') ?>" />
<?php } ?>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/fullPage.js/2.7.8/jquery.fullPage.min.js"></script>    
    <script src="//cdnjs.cloudflare.com/ajax/libs/fullPage.js/2.7.8/vendors/jquery.easings.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/fullPage.js/2.7.8/vendors/jquery.slimscroll.min.js"></script>
    <script>
$(document).ready(function() {
    $('#fullpage').fullpage({
        loopBottom: true,
        normalScrollElements: '.modal-body'
    });
    $('.left').click(function(){
        $('.modal').hide(0);
    });
    $('.right').click(function(){
        $('.modal').hide(0);
    });
    $('.text-title').click(function(){
        $('.modal').hide(0);
    });
});
function popup(target) {
    $('.modal').hide(0);
    $(target).show(0);
}
function popdown(target) {
    $('.modal').hide(0);
}
    </script>
</head>
    
<body>
<div id="fullpage">
    <div class="section" data-anchor="s1" id="cover">
        <div class="spread">            
            <div class="bg bg-flag">
                <div class="bg bg-hill-1">
                    <div class="bg bg-hill-2">
                        <div class="bg bg-parliamenthouse">
                            <div class="bg bg-duriantree">
                                <div class="bg bg-hill-3">
                                    <div class="bg bg-hill-4">
                                        <div class="bg bg-papayatree">
                                            <div class="bg bg-cloud bg-cloud-1">
                                                <div class="bg bg-cloud bg-cloud-2">
                                                    <div class="bg bg-cloud bg-cloud-3">
                                                        <div class="bg bg-cloud bg-cloud-4">
                                                            <div class="bg bg-cloud bg-cloud-5">
                                                                <div class="bg bg-cloud bg-cloud-6">
                                                                </div>            
                                                            </div>            
                                                        </div>            
                                                    </div>            
                                                </div>            
                                            </div>            
                                        </div>          
                                    </div>
                                </div>  
                            </div>            
                        </div>
                    </div>
                </div>
            </div>            
        </div>
        <div class="left">
            <div class="text text-serif">
                <h1>Ada apa<br>dengan<br>parlimen?</h1>
<?php if($lang == 'en') { ?>
                <h2>A tale of two democracies</h2>
<?php } else { ?>
                <h2>Kisah dua demokrasi</h2>
<?php } ?>
            </div>
        </div>
        <div class="right">
            <div class="text">
                <p class="text-switch"><small><a hreflang="en" href="?en"<?php if($lang == 'en') { echo ' class="active"'; } ?>>English</a> &middot; <a hreflang="ms" href="?ms"<?php if($lang == 'ms') { echo ' class="active"'; } ?>>Bahasa</a></small></p>
<?php if($lang == 'en') { ?>
                <p><strong>Parliament is one of the pillars</strong> of democracy in Malaysia. It is made up of the House of Representatives (or Dewan Rakyat), the Senate (Dewan Negara) and the King (Yang di-Pertuan Agong). Parliamentarians are elected to represent the people in:</p>
                <ul>
                    <li>making and changing laws,</li>
                    <li>regulating the country's finances,</li>
                    <li>debating central government policies, and</li>
                    <li>discussing the people's concerns.</li>
                </ul>
                <p>This infographic shows how two kinds of democracy make laws.</p>
<?php } else { ?>
                <p><strong>Parlimen adalah salah satu tonggak</strong> demokrasi di Malaysia. Ia terdiri daripada Dewan Rakyat, Dewan Negara dan Yang di-Pertuan Agong. Ahli-ahli parlimen dipilih untuk mewakili rakyat dalam:</p>
                <ul>
                    <li>membuat dan menukar undang-undang,</li>
                    <li>mengawalselia perbelanjaan negara,</li>
                    <li>membahas dasar-dasar kerajaan pusat, dan</li>
                    <li>membincangkan kebimbangan rakyat.</li>
                </ul>
                <p>Infografik ini menunjukkan bagaimana dua jenis demokrasi membuat undang-undang.</p>
<?php } ?>
            </div>
        </div>
        <div class="midline">
            <a class="touch touch-down" data-menuanchor="s2" href="#s2"></a>
        </div>
    </div>
    
    <div class="section" data-anchor="s2" id="intro">
        <div class="left">
            <div class="bg bg-duriantree-lg">
                <div class="bg bg-durianhalo bg-durianhalo-<?php echo $lang ?>">
                </div>
            </div>
        </div>
        <div class="right">
            <div class="bg bg-papayatree-lg">
                <div class="bg bg-papayahalo bg-papayahalo-<?php echo $lang ?>">
                </div>
            </div>
        </div>
        <div class="midline">
            <a class="touch touch-down" data-menuanchor="s3" href="#s3"></a>
            <div class="text text-blurb">
                <div class="bg bg-blurb">
<?php if($lang == 'en') { ?>
                    <p style="padding: 15px 60px">
                        Meet Durian Democracy and Papaya Democracy.
                        Each of them symbolizes an actual form of parliamentary democracy practised in the world.
                        Click or tap on <strong style="display: inline-block; text-align: center; border-radius: 100%; height: 20px; width: 20px; color: #fff; background: #1b1464;">?</strong> for more information.
                        <strong>Which democracy would be better for us?</strong>
                    </p>
<?php } else { ?>
                    <p>
                        Temui Demokrasi Durian dan Demokrasi Papaya.
                        Masing-masing melambangkan suatu bentuk demokrasi berparlimen sebenar yang diamalkan di dunia.
                        Klik atau tap <strong style="display: inline-block; text-align: center; border-radius: 100%; height: 20px; width: 20px; color: #fff; background: #1b1464;">?</strong> untuk penerangan lanjut.
                        <strong>Demokrasi yang mana lebih baik untuk kita?</strong>
                    </p>
<?php } ?>
                </div>
            </div>
            <div class="bg bg-overlay bg-duriantree"></div>
            <div class="bg bg-overlay bg-papayatree"></div>
            <div class="bg bg-overlay bg-duriantree-lg"></div>
            <div class="bg bg-overlay bg-papayatree-lg"></div>
        </div>
    </div>
    
    <div class="section stage" data-anchor="s3" id="drafting">
        <div class="left">
            <div class="bg bg-leftlower">
                <div class="container">
                    <div class="bg bg-left-1 text-serif">
                        <div style="top: 127px; right: 71px;" class="label labelpos label-info label-info-switch"><a href="javascript:popup('#durian1')">?</a></div>
<?php if($lang == 'en') { ?>
                        <div style="top: 193.25px; right: 319.5px;" class="label labelpos label-info label-odd"><a href="javascript:popup('#durian1')"><span>Minstry<br>or Gov't<br>Agency</span></a></div>
                        <div style="top: 306px; right: 319.5px;" class="label labelpos label-info label-odd"><a href="javascript:popup('#durian1')"><span>Drafting<br>Division<br>of AGC</span></a></div>
                        <div style="top: 418.33px; right: 319.5px;" class="label labelpos label-odd"><a href="javascript:popup('#durian1')"><span>Minister<br>or Deputy<br>Minister</span></a></div>
                        <div style="top: 418.33px; right: 100.25px;" class="label labelpos label-info"><a href="javascript:popup('#durian1')"><span><br>Private<br>Member</span></a></div>
<?php } else { ?>
                        <div style="top: 193.25px; right: 319.5px;" class="label labelpos label-info"><a href="javascript:popup('#durian1')"><span>Kemente-<br>rian atau<br>Agensi Ke-<br>rajaan</span></a></div>
                        <div style="top: 306px; right: 319.5px;" class="label labelpos label-info label-odd"><a href="javascript:popup('#durian1')"><span>Bahagian<br>Gubalan<br>JPN</span></a></div>
                        <div style="top: 418.33px; right: 319.5px;" class="label labelpos label-info label-odd"><a href="javascript:popup('#durian1')"><span>Menteri<br>atau Timb.<br>Menteri</span></a></div>
                        <div style="top: 418.33px; right: 100.25px;" class="label labelpos label-info label-odd"><a href="javascript:popup('#durian1')"><span>Ahli<br>Persendi-<br>rian</span></a></div>
<?php } ?>
                        <div style="top: 535px; right: 67px;" class="sign sign-denied"><a href="javascript:popup('#durian1')"></a></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="right">
            <div class="bg bg-rightlower">
                <div class="container">
                    <div class="bg bg-right-1">
                        <div style="top: 127px; left: 71px;" class="label labelpos label-info label-info-switch"><a href="javascript:popup('#papaya1')">?</a></div>
<?php if($lang == 'en') { ?>
                        <div style="top: 137px; left: 192.5px;" class="label labelpos label-info label-odd"><a href="javascript:popup('#papaya1')"><span>Ministry<br>Drafting<br>Unit</span></a></div>
                        <div style="top: 137px; left: 302.5px;" class="label labelpos label-info"><a href="javascript:popup('#papaya1')"><span>Commu-<br>nity &amp; Civil<br>Society<br>Groups</span></a></div>
                        <div style="top: 306px; left: 247px;" class="label labelpos label-info"><a href="javascript:popup('#papaya1')"><span>Stake-<br>holder<br>Consul-<br>tation</span></a></div>
                        <div style="top: 475px; left: 137px;" class="label labelpos label-info label-odd"><a href="javascript:popup('#papaya1')"><span>Minister<br>or Deputy<br>Minister</span></a></div>
                        <div style="top: 475px; left: 356.25px;" class="label labelpos label-info"><a href="javascript:popup('#papaya1')"><span><br>Private<br>Member</span></a></div>
<?php } else { ?>
                        <div style="top: 137px; left: 192.5px;" class="label labelpos label-info"><a href="javascript:popup('#papaya1')"><span>Unit<br>Gubalan<br>Kemente-<br>rian</span></a></div>
                        <div style="top: 137px; left: 302.5px;" class="label labelpos label-info"><a href="javascript:popup('#papaya1')"><span>Kum.<br>Komuniti &amp;<br>Masyarakat<br>Madani</span></a></div>
                        <div style="top: 306px; left: 247px;" class="label labelpos label-info"><a href="javascript:popup('#papaya1')"><span>Rundi-<br>ngan pihak<br>berkepen-<br>tingan</span></a></div>
                        <div style="top: 475px; left: 137px;" class="label labelpos label-info label-odd"><a href="javascript:popup('#papaya1')"><span>Menteri<br>atau Timb.<br>Menteri</span></a></div>
                        <div style="top: 475px; left: 356.25px;" class="label labelpos label-info label-odd"><a href="javascript:popup('#papaya1')"><span>Ahli<br>Persendi-<br>rian</span></a></div>
<?php } ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="midline">
            <a class="touch touch-down" data-menuanchor="s4" href="#s4"></a>
            <div class="text text-title">
                <div class="bg bg-title bg-title-1">
                    <h2>
                        <span class="numero">1</span>
                        <span class="title">
<?php if($lang == 'en') { ?>
                        Drafting
<?php } else { ?>
                        Penggubalan
<?php } ?>
                        </span>
                    </h2>
                </div>
            </div>
            <div class="modal modal-right inactive" id="durian1">
                <div class="modal-container text-serif">
                    <a href="javascript:popdown()" class="modal-close"></a>
                    <div class="modal-header text-serif">
                        <h3>
<?php if($lang == 'en') { ?>
                            Durian Democracy
<?php } else { ?>
                            Demokrasi Durian
<?php } ?>
                        </h3>
                    </div>
                    <div class="modal-body">
<?php if($lang == 'en') { ?>
                        <p>Any proposal to make or change a law is usually initiated by the relevant <strong>ministry or government agency</strong>.</p>
                        <p>The <strong>Drafting Division of the Attorney-General Chambers (AGC)</strong> then reviews the proposal to prepare the text of the proposed law (draft bill).</p>
                        <p>After approval by the cabinet, the draft bill is tabled in parliament by the relevant <strong>minister or deputy minister</strong>.</p>
                        <p>The standing orders, which governs the House of Representatives, provide for any <strong>private member</strong> (ie opposition or government backbencher member of parliament) to introduce a bill in parliament. However, they are often not allowed to do so by the house speaker.</p>
<?php } else { ?>
                        <p>Sebarang cadangan membuat atau menukar sesuatu undang-undang biasanya dimulakan oleh <strong>kementerian atau agensi kerajaan</strong> yang berkaitan.</p>
                        <p><strong>Bahagian Gubalan Jabatan Peguam Negara (JPN)</strong> kemudian meneliti cadangan ini untuk menyediakan teks undang-undang yang dicadangkan (draf rang undang-undang).</p>
                        <p>Setelah diluluskan oleh kabinet, draf rang undang-undang ini dibentangkan di parlimen oleh <strong>menteri atau timbalan menteri</strong> berkaitan.</p>
                        <p>Peraturan majlis mesyuarat, yang mentadbir Dewan Rakyat, memperuntukkan bagi mana-mana <strong>ahli persendirian</strong> (iaitu ahli parlimen pembangkang atau penyokong kerajaan) untuk meperkenalkan sesuatu rang undang-undang di parlimen. Tetapi, mereka selalunya tidak dibenarkan berbuat demikian oleh speaker dewan.</p>
<?php } ?>
                    </div>
                </div>
            </div>
            <div class="modal modal-left inactive" id="papaya1">
                <div class="modal-container">
                    <a href="javascript:popdown()" class="modal-close"></a>
                    <div class="modal-header">
                        <h3>
<?php if($lang == 'en') { ?>
                            Papaya Democracy
<?php } else { ?>
                            Demokrasi Papaya
<?php } ?>
                        </h3>
                    </div>
                    <div class="modal-body">
<?php if($lang == 'en') { ?>
                        <p>When the government intends to make or change a law, the relevant <strong>ministry drafting unit</strong> prepares the text of the proposed law (draft bill). </p>
                        <p>Sometimes, <strong>community and civil society groups</strong> come up with their own proposal and prepares the draft bill.</p>
                        <p>Then, the draft bill is taken through a <strong>stakeholder consultation</strong> process, where individuals and groups who are directly affected by the proposed law provide their feedback. Based on the outcome of the consultation, the proposed law may be returned for redrafting, or may be tabled in parliament.</p>
                        <p>A draft bill can be tabled in parliament by either a <strong>minister or deputy minister</strong>, or <strong>private member</strong> (ie opposition or government backbencher member of parliament).</p>
<?php } else { ?>
                        <p>Apabila kerajaan ingin membuat atau menukar undang-undang, <strong>unit gubalan kementerian</strong> yang berkaitan menyediakan teks undang-undang yang dicadangkan (draf rang undang-undang).</p>
                        <p>Kadang-kadang, <strong>kumpulan komuniti dan masyarakat madani</strong> mengemukakan cadangan mereka sendiri dan menyediakan draf rang undang-undang.</p>
                        <p>Kemudian, draf rang undang-undang ini dibawa melalui proses <strong>rundingan pihak berkepentingan</strong>, di mana individu dan kumpulan yang terkesan secara langsung dengan undang-undang yang dicadangkan memberikan maklum balas mereka. Berdasarkan hasil rundingan ini, undang-undang yang dicadangkan boleh dikembalikan untuk digubal semula, atau boleh dibentangkan di parlimen.</p>
                        <p>Draf rang undang-undang boleh dibentangkan di parlimen oleh <strong>menteri atau timbalan menteri</strong>, atau <strong>ahli persendirian</strong> (iaitu ahli parlimen pembangkang atau penyokong kerajaan).</p>
<?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="section stage" data-anchor="s4" id="lowerhouse">
        <div class="left">
            <div class="bg bg-leftlower">
                <div class="container">
                    <div class="bg bg-left-2 text-serif">
                        <div style="top: 127px; right: 71px;" class="label labelpos label-info label-info-switch"><a href="javascript:popup('#durian2')">?</a></div>
<?php if($lang == 'en') { ?>
                        <div style="top: 306px; right: 322.25px;" class="label labelpos label-info"><a href="javascript:popup('#durian2')"><span><br>First<br>Reading</span></a></div>
                        <div style="top: 306px; right: 210px;" class="label labelpos label-info"><a href="javascript:popup('#durian2')"><span><br>Second<br>Reading</span></a></div>
                        <div style="top: 306px; right: 97.75px;" class="label labelpos label-info"><a href="javascript:popup('#durian2')"><span><br>Third<br>Reading</span></a></div>
<?php } else { ?>
                        <div style="top: 306px; right: 322.25px;" class="label labelpos label-info"><a href="javascript:popup('#durian2')"><span><br>Bacaan<br>Pertama</span></a></div>
                        <div style="top: 306px; right: 210px;" class="label labelpos label-info"><a href="javascript:popup('#durian2')"><span><br>Bacaan<br>Kedua</span></a></div>
                        <div style="top: 306px; right: 97.75px;" class="label labelpos label-info"><a href="javascript:popup('#durian2')"><span><br>Bacaan<br>Ketiga</span></a></div>
<?php } ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="right">
            <div class="bg bg-rightlower">
                <div class="container">
                    <div class="bg bg-right-2">
                        <div style="top: 127px; left: 71px;" class="label labelpos label-info label-info-switch"><a href="javascript:popup('#papaya2')">?</a></div>
<?php if($lang == 'en') { ?>
                        <div style="top: 80.5px; left: 320px;" class="label labelpos label-info"><a href="javascript:popup('#papaya2')"><span><br>First<br>Reading</span></a></div>
                        <div style="top: 193.33px; left: 320px;" class="label labelpos label-info"><a href="javascript:popup('#papaya2')"><span><br>Second<br>Reading</span></a></div>
                        <div style="top: 306px; left: 320px;" class="label labelpos label-info label-odd"><a href="javascript:popup('#papaya2')"><span><br>Committee</span></a></div>
                        <div style="top: 306px; left: 100.5px;" class="label labelpos label-info label-odd"><a href="javascript:popup('#papaya2')"><span><br>Report</span></a></div>
                        <div style="top: 418.75px; left: 100.5px;" class="label labelpos label-info"><a href="javascript:popup('#papaya2')"><span><br>Third<br>Reading</span></a></div>
<?php } else { ?>
                        <div style="top: 80.5px; left: 320px;" class="label labelpos label-info"><a href="javascript:popup('#papaya2')"><span><br>Bacaan<br>Pertama</span></a></div>
                        <div style="top: 193.33px; left: 320px;" class="label labelpos label-info"><a href="javascript:popup('#papaya2')"><span><br>Bacaan<br>Kedua</span></a></div>
                        <div style="top: 306px; left: 320px;" class="label labelpos label-info"><a href="javascript:popup('#papaya2')"><span><br>Jawatan-<br>kuasa</span></a></div>
                        <div style="top: 306px; left: 100.5px;" class="label labelpos label-info label-odd"><a href="javascript:popup('#papaya2')"><span><br>Laporan</span></a></div>
                        <div style="top: 418.75px; left: 100.5px;" class="label labelpos label-info"><a href="javascript:popup('#papaya2')"><span><br>Bacaan<br>Ketiga</span></a></div>
<?php } ?>
                        <div style="top: 434px; left: 321px;" class="sign sign-stopped"><a href="javascript:popup('#papaya2')"></a></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="midline">
            <a class="touch touch-down" data-menuanchor="s5" href="#s5"></a>
            <div class="text text-title">
                <div class="bg bg-title bg-title-2">
                    <h2>
                        <span class="numero">2</span>                        
<?php if($lang == 'en') { ?>
                        <span class="title" style="padding: 10px 0 20px 0;"><small>The House of</small><br>Representatives</span>
<?php } else { ?>
                        <span class="title">Dewan Rakyat</span>
<?php } ?>                        
                    </h2>
                </div>
            </div>
            <div class="modal modal-right inactive" id="durian2">
                <div class="modal-container text-serif">
                    <a href="javascript:popdown()" class="modal-close"></a>
                    <div class="modal-header text-serif">
                        <h3>
<?php if($lang == 'en') { ?>
                            Durian Democracy
<?php } else { ?>
                            Demokrasi Durian
<?php } ?>
                        </h3>
                    </div>
                    <div class="modal-body">
<?php if($lang == 'en') { ?>
                        <p>The proposed law is formally introduced in the House of Representatives by the relevant minister (or deputy minister) during the <strong>first reading</strong> of the bill. This is a formality and any debate is not allowed.</p>
                        <p>Then, in the <strong>second reading</strong>, members of the House of Representatives debate the contents of the bill at length and suggest suitable amendments to it. The bill may be referred to the ‘committee of the whole house’, where its technical details are deliberated. Any amendments can be proposed and voted at this stage.</p>
                        <p>The House of Representatives then decides on passing the bill in the <strong>third reading</strong>. This is usually done by the house speaker asking members of parliament who present to call out whether they agree or not (voice vote). If demanded by at least 15 members, the House of Representatives shall vote by division (ie precise count of agree or not).</p>
                        <p>A bill is often rushed through the three readings and passed without amendment, all in one day.</p>
<?php } else { ?>
                        <p>Undang-undang yang dicadangkan diperkenalkan secara rasmi oleh menteri (atau timbalan menteri) yang berkaitan semasa <strong>bacaan pertama</strong> rang undang-undang. Ini adalah satu formaliti dan sebarang perbahasan tidak dibenarkan.</p>
                        <p>Kemudian, dalam <strong>bacaan kedua</strong>, ahli-ahli Dewan Rakyat membahaskan kandungan rang undang-undang dengan panjang lebar dan mencadangkan pindaan-pindaan yang sesuai atasnya. Rang undang-undang ini boleh dirujuk kepada 'jawatankuasa seluruh majlis', di mana butir-butir teknikalnya dipertimbangkan. Sebarang pindaan boleh dicadangkan dan diundi di peringkat ini.</p>
                        <p>Dewan Rakyat kemudiannya memutuskan untuk meluluskan rang undang-undang dalam <strong>bacaan ketiga</strong>. Ini biasanya dilakukan dengan speaker dewan meminta ahli-ahli parlimen yang hadir untuk menyeru sama ada mereka bersetuju atau tidak (undi suara). Jika diminta oleh sekurang-kurangnya 15 orang ahli, Dewan Rakyat hendaklah mengundi secara belah bahagian (iaitu bilangan tepat setuju atau tidak). </p>
                        <p>Sesuatu rang undang-undang selalunya dikejarkan melalui ketiga-tiga bacaan dan diluluskan tanpa pindaan, semuanya dalam satu hari.</p>
<?php } ?>
                    </div>
                </div>
            </div>
            <div class="modal modal-left inactive" id="papaya2">
                <div class="modal-container">
                    <a href="javascript:popdown()" class="modal-close"></a>
                    <div class="modal-header">
                        <h3>
<?php if($lang == 'en') { ?>
                            Papaya Democracy
<?php } else { ?>
                            Demokrasi Papaya
<?php } ?>
                        </h3>
                    </div>
                    <div class="modal-body">
<?php if($lang == 'en') { ?>
                        <p>In the <strong>first reading</strong>, the proposed law is formally introduced in the House of Representatives by the member who sponsors the bill. Debate is not allowed and this stage is only a formality.</p>
                        <p>Then, in the <strong>second reading</strong>, members of the House of Representatives debate the contents of the bill at length, and suggest suitable amendments. After that, the bill is referred to a public bill committee, where its technical details are deliberated.</p>
                        <p>During the <strong>committee</strong> stage, the committee deliberates text of the bill line by line. For this purpose, the committee takes oral and written evidence from the relevant field experts and parties. The committee can also decide whether each provision of the bill should remain, and can incorporate amendments suggested other members of parliament in the earlier stage.</p>
                        <p>After the committee stage, the bill is brought back to the House of Representatives in the <strong>report</strong> stage and any amendments to the original text are discussed. Members of the House of Representatives may propose and vote on further amendments to the bill.</p>
                        <p>In the <strong>third reading</strong>, the House of Representatives decides on passing the bill. All members of the House of Representatives who present during this stage record their vote of agree or not (recorded vote or roll call vote). </p>
                        <p>If the House of Representatives reach the required number of agree votes, the bill is passed and can be tabled in the Senate. If not, the bill is not passed and ends here.</p>
<?php } else { ?>
                        <p>Dalam <strong>bacaan pertama</strong>, undang-undang yang dicadangkan diperkenalkan secara rasmi dalam Dewan Rakyat oleh ahli yang menaja rang undang-undang. Perbahasan tidak dibenarkan dan peringkat ini adalah hanya satu formaliti.</p>
                        <p>Kemudian, dalam <strong>bacaan kedua</strong>, ahli-ahli Dewan Rakyat membahaskan kandungan rang undang-undang dengan panjang lebar, dan menyarankan pindaan-pindaan yang bersesuaian. Selepas itu, rang undang-undang dirujuk kepada suatu jawatankuasa rang undang-undang awam, di mana butir-butir teknikalnya dipertimbangkan.</p>
                        <p>Semasa peringkat <strong>jawatankuasa</strong>, jawatankuasa mempertimbangkan teks rang undang-undang baris demi baris. Untuk tujuan ini, jawatankuasa mengambil keterangan lisan dan bertulis daripada pakar-pakar bidang dan pihak-pihak yang berkaitan. Jawatankuasa boleh juga memutuskan sama ada setiap peruntukan rang undang-undang patut dikekalkan, dan boleh menggabungkan pindaan-pindaan yang disarankan oleh ahli-ahli parlimen yang lain dalam peringkat sebelumnya.</p>
                        <p>Selepas peringkat jawatankuasa, rang undang-undang dibawa semula ke Dewan Rakyat dalam peringkat <strong>laporan</strong> dan sebarang pindaan kepada teks asal dibincangkan. Ahli-ahli Dewan Rakyat boleh mencadangkan dan mengundi pindaan-pindaan lanjut atas rang undang-undang.</p>
                        <p>Dalam <strong>bacaan ketiga</strong>, Dewan Rakyat membuat keputusan untuk meluluskan rang undang-undang ini. Semua ahli-ahli Dewan Rakyat yang hadir semasa peringkat ini merekodkan undi setuju atau tidak mereka (undi terakam atau undi panggil nama).</p>
                        <p>Jika Dewan Rakyat mencapai bilangan undi setuju yang diperlukan, rang undang-undang ini diluluskan dan boleh dibentangkan di Dewan Negara. Jika tidak, rang undang-undang ini tidak diluluskan dan berakhir di sini.</p>
<?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="section stage" data-anchor="s5" id="upperhouse">
        <div class="left">
            <div class="bg bg-leftlower">
                <div class="container">
                    <div class="bg bg-left-3 text-serif">
                        <div style="top: 127px; right: 71px;" class="label labelpos label-info label-info-switch"><a href="javascript:popup('#durian3')">?</a></div>
<?php if($lang == 'en') { ?>
                        <div style="top: 306px; right: 322.25px;" class="label labelpos label-info"><a href="javascript:popup('#durian3')"><span><br>First<br>Reading</span></a></div>
                        <div style="top: 306px; right: 210px;" class="label labelpo label-info"><a href="javascript:popup('#durian3')"><span><br>Second<br>Reading</span></a></div>
                        <div style="top: 306px; right: 97.75px;" class="label labelpos label-info"><a href="javascript:popup('#durian3')"><span><br>Third<br>Reading</span></a></div>
<?php } else { ?>
                        <div style="top: 306px; right: 322.25px;" class="label labelpos label-info"><a href="javascript:popup('#durian3')"><span><br>Bacaan<br>Pertama</span></a></div>
                        <div style="top: 306px; right: 210px;" class="label labelpos label-info"><a href="javascript:popup('#durian3')"><span><br>Bacaan<br>Kedua</span></a></div>
                        <div style="top: 306px; right: 97.75px;" class="label labelpos label-info"><a href="javascript:popup('#durian3')"><span><br>Bacaan<br>Ketiga</span></a></div>
<?php } ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="right">
            <div class="bg bg-rightlower">
                <div class="container">
                    <div class="bg bg-right-3">
                        <div style="top: 127px; left: 71px;" class="label labelpos label-info label-info-switch"><a href="javascript:popup('#papaya3')">?</a></div>
<?php if($lang == 'en') { ?>
                        <div style="top: 80.5px; left: 320px;" class="label labelpos label-info"><a href="javascript:popup('#papaya3')"><span><br>First<br>Reading</span></a></div>
                        <div style="top: 193.33px; left: 320px;" class="label labelpos label-info"><a href="javascript:popup('#papaya3')"><span><br>Second<br>Reading</span></a></div>
                        <div style="top: 306px; left: 320px;" class="label labelpos label-info label-odd"><a href="javascript:popup('#papaya3')"><span><br>Committee</span></a></div>
                        <div style="top: 306px; left: 100.5px;" class="label labelpos label-info label-odd"><a href="javascript:popup('#papaya3')"><span><br>Report</span></a></div>
                        <div style="top: 418.75px; left: 100.5px;" class="label labelpos label-info"><a href="javascript:popup('#papaya3')"><span><br>Third<br>Reading</span></a></div>
<?php } else { ?>
                        <div style="top: 80.5px; left: 320px;" class="label labelpos label-info"><a href="javascript:popup('#papaya3')"><span><br>Bacaan<br>Pertama</span></a></div>
                        <div style="top: 193.33px; left: 320px;" class="label labelpos label-info"><a href="javascript:popup('#papaya3')"><span><br>Bacaan<br>Kedua</span></a></div>
                        <div style="top: 306px; left: 320px;" class="label labelpos label-info"><a href="javascript:popup('#papaya3')"><span><br>Jawatan-<br>kuasa</span></a></div>
                        <div style="top: 306px; left: 100.5px;" class="label labelpos label-info label-odd"><a href="javascript:popup('#papaya3')"><span><br>Laporan</span></a></div>
                        <div style="top: 418.75px; left: 100.5px;" class="label labelpos label-info"><a href="javascript:popup('#papaya3')"><span><br>Bacaan<br>Ketiga</span></a></div>
<?php } ?>
                        <div style="top: 434px; left: 321px;" class="sign sign-returned"><a href="javascript:popup('#papaya3')"></a></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="midline">
            <a class="touch touch-down" data-menuanchor="s6" href="#s6"></a>
            <div class="text text-title">
                <div class="bg bg-title bg-title-3">
                    <h2>
                        <span class="numero">3</span>
                        <span class="title">
<?php if($lang == 'en') { ?>
                        The Senate
<?php } else { ?>
                        Dewan Negara
<?php } ?>
                        </span>
                    </h2>
                </div>
            </div>
            <div class="modal modal-right inactive" id="durian3">
                <div class="modal-container text-serif">
                    <a href="javascript:popdown()" class="modal-close"></a>
                    <div class="modal-header text-serif">
                        <h3>
<?php if($lang == 'en') { ?>
                            Durian Democracy
<?php } else { ?>
                            Demokrasi Durian
<?php } ?>
                        </h3>
                    </div>
                    <div class="modal-body">
<?php if($lang == 'en') { ?>
                        <p>Similar to the House of Representatives, the proposed law is formally introduced in the Senate by the relevant minister or deputy minister during the <strong>first reading</strong> in the Senate. This is a formality and no debate is allowed.</p>
                        <p>Then, in the <strong>second reading</strong>, members of the Senate debate the contents of the bill at length and give their suggestions of suitable amendments. The bill may be referred to the ‘committee of the whole house’, where the its technical details are deliberated. Any amendments can be proposed and voted during this stage.</p>
                        <p>The Senate then decides on passing the bill in the <strong>third reading</strong>. This is usually done by the senate president asking senators who present to call out whether they agree or not (voice vote). If demanded by at least eight members, the Senate shall vote by division (ie precise count of agree or not).</p>
                        <p>Members of the Senate typically pass any bill that has already been passed by the House of Representatives without any amendment.</p>
<?php } else { ?>
                        <p>Seperti di Dewan Rakyat, undang-undang yang dicadangkan diperkenalkan secara rasmi oleh menteri atau timbalan menteri yang berkaitan semasa <strong>bacaan pertama</strong> di Dewan Negara. Ini adalah satu formaliti dan perbahasan tidak dibenarkan.</p>
                        <p>Kemudian, dalam <strong>bacaan kedua</strong>, ahli-ahli Dewan Negara membahaskan kandungan rang undang-undang dengan panjang lebar dan memberikan saranan-saranan pindaan yang sesuai. Rang undang-undang ini boleh dirujuk kepada 'jawatankuasa seluruh majlis', di mana butir-butir teknikalnya dipertimbangkan. Sebarang pindaan boleh dicadangkan dan diundi semasa peringkat ini.</p>
                        <p>Dewan Negara kemudiannya memutuskan untuk meluluskan rang undang-undang dalam <strong>bacaan ketiga</strong>. Ini biasanya dilakukan dengan presiden senat meminta senator-senator yang hadir untuk menyeru sama ada mereka bersetuju atau tidak (undi suara). Jika diminta oleh sekurang-kurangnya lapan orang ahli, Dewan Negara hendaklah mengundi secara belah bahagian (iaitu bilangan tepat setuju atau tidak). </p>
                        <p>Ahli-ahli Dewan Negara biasanya meluluskan mana-mana undang-undang yang telah diluluskan oleh Dewan Rakyat tanpa sebarang pindaan.</p>
<?php } ?>
                    </div>
                </div>
            </div>
            <div class="modal modal-left inactive" id="papaya3">
                <div class="modal-container">
                    <a href="javascript:popdown()" class="modal-close"></a>
                    <div class="modal-header">
                        <h3>
<?php if($lang == 'en') { ?>
                            Papaya Democracy
<?php } else { ?>
                            Demokrasi Papaya
<?php } ?>
                        </h3>
                    </div>
                    <div class="modal-body">
<?php if($lang == 'en') { ?>
                        <p>In <strong>first reading</strong>, the proposed law is formally introduced in the Senate by the senator who co-sponsors the bill. Debate is not allowed and this stage is only a formality.</p>
                        <p>Then, members of the Senate debate the contents of the bill at length, and suggest suitable amendments to the bill in the <strong>second reading</strong>. After that, the bill is referred to a public bill committee, where its technical details are deliberated.</p>
                        <p>During the <strong>committee</strong> stage, the committee deliberates text of the bills line by line. For this purpose, the committee takes oral and written evidence from the relevant field experts and parties. The committee can decide whether each provision of the bill should remain, and can incorporate amendments proposed other senators in the earlier stage.</p>
                        <p>After the committee stage, the bill is brought back to the Senate in the <strong>report</strong> stage and any amendments to the original text are discussed. Members of the Senate may propose and vote on further amendments to the bill.</p>
                        <p>In the <strong>third reading</strong>, the Senate decides on passing the bill. All members of the Senate who present during this stage record their vote of agree or not (recorded vote or roll call vote). </p>
                        <p>If the Senate reach the required number of agree votes, the bill is passed and shall proceed to become law. If not, the bill is not passed and is returned to the House of Representatives to be tabled again.</p>
<?php } else { ?>
                        <p>Dalam <strong>bacaan pertama</strong>, undang-undang yang dicadangkan diperkenalkan secara rasmi dalam Dewan Negara oleh senator yang menaja bersama rang undang-undang. Perbahasan tidak dibenarkan dan peringkat ini adalah hanya satu formaliti.</p>
                        <p>Kemudian, ahli-ahli Dewan Negara membahaskan kandungan rang undang-undang dengan panjang lebar, dan menyarankan pindaan-pindaan yang sesuai atas rang undang-undang dalam <strong>bacaan kedua</strong>. Selepas itu, rang undang-undang dirujuk kepada suatu jawatankuasa rang undang-undang awam, di mana butir-butir teknikalnya dipertimbangkan.</p>
                        <p>Semasa peringkat <strong>jawatankuasa</strong>, jawatankuasa mempertimbangkan teks rang undang-undang baris demi baris. Untuk tujuan ini, jawatankuasa mengambil keterangan lisan dan bertulis daripada pakar-pakar bidang dan pihak-pihak yang berkaitan. Jawatankuasa boleh memutuskan sama ada setiap peruntukan rang undang-undang patut dikekalkan, dan boleh menggabungkan pindaan-pindaan yang disarankan oleh senator-senator yang lain dalam peringkat sebelumnya.</p>
                        <p>Selepas peringkat jawatankuasa, rang undang-undang dibawa semula ke Dewan Negara dalam peringkat <strong>laporan</strong> dan sebarang pindaan kepada teks asal dibincangkan. Ahli-ahli Dewan Negara boleh mencadangkan dan mengundi pindaan-pindaan lanjut atas rang undang-undang.</p>
                        <p>Dalam <strong>bacaan ketiga</strong>, Dewan Negara membuat keputusan untuk meluluskan rang undang-undang ini. Semua ahli-ahli Dewan Negara yang hadir semasa peringkat ini merekodkan undi setuju atau tidak mereka (undi panggil nama atau undi terakam).</p>
                        <p>Jika Dewan Negara mencapai bilangan undi setuju yang diperlukan, rang undang-undang diluluskan dan hendaklah dilanjutkan untuk menjadi undang-undang. Jika tidak, rang undang-undang tidak diluluskan dan dikembalikan ke Dewan Rakyat untuk dibentangkan semula.</p>
<?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="section stage" data-anchor="s6" id="implementation">
        <div class="left">
            <div class="bg">
                <div class="container">
                    <div class="bg bg-left-4 text-serif">
                        <div style="top: 127px; right: 71px;" class="label labelpos label-info label-info-switch"><a href="javascript:popup('#durian4')">?</a></div>
<?php if($lang == 'en') { ?>
                        <div style="top: 193.25px; right: 319.5px;" class="label labelpos label-info"><a href="javascript:popup('#durian4')"><span><br>Royal<br>Assent</span></a></div>
                        <div style="top: 306px; right: 319.5px;" class="label labelpos label-info label-odd"><a href="javascript:popup('#durian4')"><span><br>Gazette</span></a></div>
                        <div style="top: 531px; right: 136.5px;" class="label labelpos label-info"><a href="javascript:popup('#durian4')"><span><br>Commence-<br>ment</span></a></div>
<?php } else { ?>
                        <div style="top: 193.25px; right: 319.5px;" class="label labelpos label-info"><a href="javascript:popup('#durian4')"><span><br>Perkenan<br>Diraja</span></a></div>
                        <div style="top: 306px; right: 319.5px;" class="label labelpos label-info label-odd"><a href="javascript:popup('#durian4')"><span><br>Warta</span></a></div>
                        <div style="top: 531px; right: 136.5px;" class="label labelpos label-info"><a href="javascript:popup('#durian4')"><span><br>Permulaan<br>Kuatkuasa</span></a></div>
<?php } ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="right">
            <div class="bg">
                <div class="container">
                    <div class="bg bg-right-4">
                        <div style="top: 127px; left: 71px;" class="label labelpos label-info label-info-switch"><a href="javascript:popup('#papaya4')">?</a></div>
<?php if($lang == 'en') { ?>
                        <div style="top: 137px; left: 319.5px;" class="label labelpos label-info"><a href="javascript:popup('#papaya4')"><span><br>Royal<br>Assent</span></a></div>
                        <div style="top: 306px; left: 322.25px;" class="label labelpos label-info label-odd"><a href="javascript:popup('#papaya4')"><span><br>Gazette</span></a></div>
                        <div style="top: 306px; left: 210.5px;" class="label labelpos label-info"><a href="javascript:popup('#papaya4')"><span><br>Public<br>Education</span></a></div>
                        <div style="top: 531px; left: 284.5px;" class="label labelpos label-info"><a href="javascript:popup('#papaya4')"><span><br>Commence-<br>ment</span></a></div>
<?php } else { ?>
                        <div style="top: 137px; left: 319.5px;" class="label labelpos label-info"><a href="javascript:popup('#papaya4')"><span><br>Perkenan<br>Diraja</span></a></div>
                        <div style="top: 306px; left: 322.25px;" class="label labelpos label-info label-odd"><a href="javascript:popup('#papaya4')"><span><br>Warta</span></a></div>
                        <div style="top: 306px; left: 210.5px;" class="label labelpos label-info"><a href="javascript:popup('#papaya4')"><span><br>Pendidi-<br>kan Awam</span></a></div>
                        <div style="top: 531px; left: 284.5px;" class="label labelpos label-info"><a href="javascript:popup('#papaya4')"><span><br>Permulaan<br>Kuatkuasa</span></a></div>
<?php } ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="midline">
            <a class="touch touch-down" data-menuanchor="s7" href="#s7"></a>
            <div class="text text-title">
                <div class="bg bg-title bg-title-4">
                    <h2>
                        <span class="numero">4</span>
                        <span class="title">
<?php if($lang == 'en') { ?>
                        Implementation
<?php } else { ?>
                        Pelaksanaan
<?php } ?>
                        </span>
                    </h2>
                </div>
            </div>
            <div class="modal modal-right inactive" id="durian4">
                <div class="modal-container text-serif">
                    <a href="javascript:popdown()" class="modal-close"></a>
                    <div class="modal-header text-serif">
                        <h3>
<?php if($lang == 'en') { ?>
                            Durian Democracy
<?php } else { ?>
                            Demokrasi Durian
<?php } ?>
                        </h3>
                    </div>
                    <div class="modal-body">
<?php if($lang == 'en') { ?>
                        <p>After being passed by both houses, the King shall grant <strong>royal assent</strong>, which is a formality. At this point, the bill becomes law (or act of parliament).</p>
                        <p>The act is then entered into the federal government <strong>gazette</strong>, which is a set official records of federal legislation.</p>
                        <p><strong>Commencement</strong> of the act happens through subsidiary legislation made by the relevant ministry or government agency, as stipulated in the act. The subsidiary legislation can be made in the form of a proclamation, regulation, order, notification or bye-law that provides more technical details related to the act.</p>
<?php } else { ?>
                        <p>Setelah diluluskan oleh kedua-dua dewan, Yang di-Pertuan Agong hendaklah memberikan <strong>perkenan diraja</strong>, yang merupakan satu formaliti. Pada ketika ini, rang undang-undang menjadi undang-undang (atau akta parlimen).</p>
                        <p>Akta ini kemudiannya dimasukkan dalam <strong>warta</strong> kerajaan persekutuan, yang merupakan satu peranggu rekod-rekod rasmi perundangan persekutuan. </p>
                        <p><strong>Permulaan kuatkuasa</strong> akta berlaku dengan perundangan subsidiari yang dibuat oleh kementerian atau agensi kerajaan yang berkaitan, seperti yang ditetapkan dalam akta. Perundangan subsidiari boleh dibuat dalam bentuk proklamasi, peraturan, perintah, pemberitahuan atau undang-undang kecil yang memperuntukkan lebih banyak butiran teknikal yang berkaitan dengan akta.</p>
<?php } ?>
                    </div>
                </div>
            </div>
            <div class="modal modal-left inactive" id="papaya4">
                <div class="modal-container">
                    <a href="javascript:popdown()" class="modal-close"></a>
                    <div class="modal-header">
                        <h3>
<?php if($lang == 'en') { ?>
                            Papaya Democracy
<?php } else { ?>
                            Demokrasi Papaya
<?php } ?>
                        </h3>
                    </div>
                    <div class="modal-body">
<?php if($lang == 'en') { ?>
                        <p>After being passed by both houses, the King shall grant <strong>royal assent</strong> and the bill officially becomes law (or an act of parliament).</p>
                        <p>The act is then recorded into the federal government <strong>gazette</strong>.</p>
                        <p>The ministry or government agency responsible for executing the act shall carry out <strong>public education</strong> programme on the impact of the law, especially for groups who are directly affected by it.</p>
                        <p>After the public education period, <strong>commencement</strong> of the act happens through subsidiary legislation made by the relevant ministry or government agency, as stipulated in the act.</p>
<?php } else { ?>
                        <p>Selepas diluluskan oleh kedua-dua dewan, YDPA hendaklah memberikan <strong>perkenan diraja</strong> dan rang undang-undang menjadi undang-undang (atau akta parlimen).</p>
                        <p>Akta ini kemudiannya direkodkan dalam <strong>warta</strong> kerajaan persekutuan.</p>
                        <p>Kementerian atau agensi kerajaan yang betanggungjawab untuk melaksanakan akta hendaklah menjalankan program <strong>pendidikan awam</strong> tentang kesan undang-undang, terutamanya golongan yang terlibat secara langsung dengannya. </p>
                        <p>Selepas tempoh pendidikan awam, <strong>pemulaan kuatkuasa</strong> akta berlaku dengan perundangan subsidiari yang dibuat oleh kementerian atau agensi kerajaan yang berkaitan, seperti yang ditetapkan dalam akta.</p>
<?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="section" data-anchor="s7" id="call">
        <div class="spread">            
            <div class="bg bg-flag">
                <div class="bg bg-hill-1">
                    <div class="bg bg-hill-2">
                        <div class="bg bg-parliamenthouse">
                            <div class="bg bg-duriantree">
                                <div class="bg bg-hill-3">
                                    <div class="bg bg-hill-4">
                                        <div class="bg bg-papayatree">
                                            <div class="bg bg-cloud bg-cloud-1">
                                                <div class="bg bg-cloud bg-cloud-2">
                                                    <div class="bg bg-cloud bg-cloud-3">
                                                        <div class="bg bg-cloud bg-cloud-4">
                                                            <div class="bg bg-cloud bg-cloud-5">
                                                                <div class="bg bg-cloud bg-cloud-6">
                                                                </div>            
                                                            </div>            
                                                        </div>            
                                                    </div>            
                                                </div>            
                                            </div>            
                                        </div>          
                                    </div>
                                </div>  
                            </div>            
                        </div>
                    </div>
                </div>
            </div>            
        </div>
        <div class="left">
            <div class="text text-serif">
                <p><em>
<?php if($lang == 'en') { ?>
                    We hope you have learnt something about how parliament works.
                    This infographic will be updated from time to time and you can help improve it with your feedback.
                    Please send your comments and suggestions by email to <a href="http://mcchr.org/email/undimsia"><?php echo strtoentity('move@undimsia.com') ?></a>.
<?php } else { ?>
                    Kami berharap anda telah pelajari sesuatu tentang bagaimana parlimen berfungsi.
                    Infografik ini akan dikemaskini dari masa ke semasa dan anda boleh membantu memperbaikinya dengan maklum balas anda.
                    Sila hantarkan komen dan cadangan anda melalui emel kepada <a href="http://mcchr.org/email/undimsia"><?php echo strtoentity('move@undimsia.com') ?></a>.
<?php } ?>
                </em></p>
            </div>
        </div>
        <div class="right">
            <div class="text">
                <p>
<?php if($lang == 'en') { ?>
                    <strong>Join UndiMsia! on social media</strong> and share your ideas of how parliament can work better for the people.
<?php } else { ?>
                    <strong>Sertai UndiMsia! di media sosial</strong> dan kongsikan idea-idea anda bagaimana parlimen boleh berfungsi dengan lebih baik untuk rakyat.
<?php } ?>
                    <br>
                    <br>
                    <a href="http://twitter.com/undimsia" target="_blank" class="touch touch-social touch-twitter">Twitter</a>
                    <a href="http://facebook.com/undimsia" target="_blank" class="touch touch-social touch-facebook">Facebook</a>
                </p>
            </div>
        </div>
        <div class="midline">
            <a class="touch touch-down" data-menuanchor="s8" href="#s8"></a>
        </div>
    </div>
    <div class="section" data-anchor="s8" id="colophon">
        <div class="left">
            <div class="text text-serif">
                <p>
                    <img src="images/logo-undimsia-dark.png" alt="UndiMsia!" style="height: 99px;">
                    <br>
                    <br>
<?php if($lang == 'en') { ?>
                    UndiMsia! is a civic education programme aimed at strengthening the ownership, participation and representation of youth on their right to vote and civic responsibility.
                    Through this programme, Malaysian youth are engaged in developing their critical thinking by using effective forms of activism to solve their community issues.
                    Projects under UndiMsia! are designed based on four pillars: information, process, action and platform for a robust civil society.
                    <br>
                    <br>
                    For more information, visit <a href="http://undimsia.com" target="_blank" style="color: #FFF">undimsia.com</a> or email <a href="http://mcchr.org/email/undimsia" style="color: #FFF"><?php echo strtoentity('move@undimsia.com') ?></a>.
<?php } else { ?>
                    UndiMsia! adalah suatu program pendidikan sivik bertujuan untuk mengukuhkan pemilikan, penyertaan dan perwakilan belia tentang hak mengundi dan tanggungjawab sivik mereka.
                    Melalui program ini, belia Malaysia terlibat dalam membangunkan pemikiran kritis mereka dengan menggunakan bentuk-bentuk aktivisme yang berkesan untuk menyelesaikan isu-isu komuniti mereka.
                    Projek-projek UndiMsia! direka berdasarkan empat tonggak: maklumat, proses, tindakan dan platform untuk suatu masyarakat madani yang teguh.
                    <br>
                    <br>
                    Untuk maklumat lanjut, sila layari <a href="http://undimsia.com" target="_blank" style="color: #FFF">undimsia.com</a> atau emel <a href="http://mcchr.org/email/undimsia" style="color: #FFF"><?php echo strtoentity('move@undimsia.com') ?></a>.
<?php } ?>
                </p>
            </div>
        </div>
        <div class="right">
            <div class="text">
                <p style="padding-top: 122px;">
<?php if($lang == 'en') { ?>
                    <em><small>Art direction &amp; graphic design</small></em><br>Arthur Lee
                    <br>
                    <br>
                    <em><small>Concept &amp; web design</small></em><br>Khairil Zhafri
                    <br>
                    <br>
                    <em><small>Editing</small></em><br>Lim Ka Ea<br>Mazni Ibrahim
                    <br>
                    <br>
                    <em><small>A production of the</small></em><br>Malaysian Centre for<br>Constitutionalism and<br>Human Rights (MCCHR)
<?php } else { ?>
                    <em><small>Arahan seni &amp; reka grafik</small></em><br>Arthur Lee
                    <br>
                    <br>
                    <em><small>Konsep &amp; reka web</small></em><br>Khairil Zhafri
                    <br>
                    <br>
                    <em><small>Suntingan</small></em><br>Lim Ka Ea<br>Mazni Ibrahim
                    <br>
                    <br>
                    <em><small>Sebuah produksi</small></em><br>Malaysian Centre for<br>Constitutionalism and<br>Human Rights (MCCHR)
<?php } ?>
                    <br>
                    <br>
                    &copy; MCCHR 2016
                </p>
            </div>
        </div>
        <div class="midline"></div>
    </div>
</div>
<script>
(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
})(window,document,'script','//www.google-analytics.com/analytics.js','ga');
ga('create', 'UA-47573826-3', 'auto');
ga('send', 'pageview');
ga('send', 'pageview', {'dimension10': 'AADP'});
ga('send', 'pageview', {'dimension20': '<?php echo $lang ?>'});
</script>
</body>
</html>