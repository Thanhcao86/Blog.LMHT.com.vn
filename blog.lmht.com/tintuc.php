<html lang="en-US">
<head Content-Type: text/html; charset=utf-8>

<script type="text/javascript" src="jquery/jquery.js"></script>
<script language="javascript">
var bForceClientView = false;
var languageMap = {
	'english': 'blog',
	'russian': 'ru',
	'spanish': 'es',
	'french': 'fr',
	'german': 'de',
	'chinese': 'cn',
	'schinese': 'cn',
	'tchinese': 'cn',
	'portuguese': 'br',
	'brazilian': 'br',
	'korean': 'kr',
	'koreana': 'kr'
};
</script>
<meta charset="UTF-8" />
<title>Lengend of Lengend</title>
<link rel="stylesheet" type="text/css" media="all" href="thêm/style.css" />



<script language=JavaScript>
var message="";function clickIE() {if (document.all) {(message);return false;}}function clickNS(e) {if (document.layers||(document.getElementById&&!document.all)) {if (e.which==2||e.which==3) {(message);return false;}}}if (document.layers) {document.captureEvents(Event.MOUSEDOWN);document.onmousedown=clickNS;}else{document.onmouseup=clickNS;document.oncontextmenu=clickIE;document.onselectstart=clickIE}document.oncontextmenu=new Function("return false")
</script>
<script language=JavaScript>
var message="";function clickIE() {if (document.all) {(message);return false;}}function clickNS(e) {if (document.layers||(document.getElementById&&!document.all)) {if (e.which==2||e.which==3) {(message);return false;}}}if (document.layers) {document.captureEvents(Event.MOUSEDOWN);document.onmousedown=clickNS;}else{document.onmouseup=clickNS;document.oncontextmenu=clickIE;document.onselectstart=clickIE}document.oncontextmenu=new Function("return false")
</script>


</head>



<body class="home blog" >


<div id="navBarShadowOnly"></div>

<div id="navBarBGRepeat" style="display:none;">
	<div id="navBarBGRepeat" class="DotaFont">
		<div id="navBarShadow"></div>
		<div id="navBarBG">
			<div id="navBar">
				<div id="navLoginAndLanguage">
				<a href="LoginForm (Ajax)/index.php"><button id ="idlogin">login</button></a>
					

						<h4>
				 	<?php
				 	echo "Now:";
				 	date_default_timezone_set('Asia/Ho_Chi_Minh');
				 	echo date('d/m/Y - H:i:s');
				 	?>
				 	</h4>
				</div>
				<span class="navItem navItemLMLogo">
					<a class="navBarItem DotaFont" href="#">
						<img border="0" class="DotaLogo" src="public/logo.png"/>
					</a>
				</span>

				<span class="navItem">
					<a class="navBarItem DotaFont" href="video/video.php">Watch<sup>BETA</sup></a>
				</span>

				<span class="navItem">
					<a class="navBarItem DotaFont" href="#">Store</a>
				</span>

				<span class="navItem">
					<a class="navBarItem DotaFont" href="javascript:void(0)">Heropedia</a>
					<div style="display:none;" class="menuSubItemList">
						<a class="DotaFont" href="#">Heroes</a>
						<a class="DotaFont" href="#">Item Explorer</a>
						<a class="DotaFont" href="#">Builds</a>
						<a class="DotaFont" href="#" target="_blank">Giai Dau</a>
						<a class="DotaFont" href="#">Tieu Diem Tuong</a>
					</div>
					<img class="dn_arrow" src="public/arrow.png"/>
				</span>

				<span class="navItem">
					<a class="navBarItem DotaFont" href="#">Workshop</a>
				</span>
			</div>
		</div>
	</div>
</div>


<script language="javascript">
function closeSubMenu( target ) {
	jQuery(target).find('.dn_arrow').attr( "src", "public/arrow.png" );
	jQuery(target).find('.menuSubItemList').hide();
}

function closeAllSubMenus() {
	jQuery('.navItem').each( function() {
		closeSubMenu( jQuery(this) );
	});
}

function openSubMenu( target ) {
	closeAllSubMenus();

	jQuery(target).find('.dn_arrow').attr( "src", "#" );

	// Show the sub-menu
	var subItemList = jQuery(target).find('.menuSubItemList');
	if ( subItemList.length ) {
		var itemTop = jQuery(target).position().top + jQuery(target).outerHeight() - 16;
		var itemLeft = jQuery(target).position().left;
		subItemList
			.css({
				"top": itemTop + 'px',
				"left": itemLeft + 'px'
			})
			.fadeIn( 'fast' );
	}
}

jQuery(document).ready( function () {
	// Deal with the nav bars
	jQuery('.navItem').each( function() {
		jQuery(this).hover( function () {
			jQuery(this)
				.find('a.navBarItem img.top')
				.animate({
					"opacity": 1
				}, 100 );
			if ( jQuery(this).find('.menuSubItemList').length !== 0 ) {
				openSubMenu( this );
			}
		},
		function () {
			jQuery(this)
			.find('a.navBarItem img.top')
			.animate({
				"opacity": 0
			}, 100 );
			if ( jQuery(this).find('.menuSubItemList').length !== 0 ) {
				closeSubMenu(this);
			}
		}
		);
	});

	// Deal with header drop-downs
	var strMenus = '#languageSelector';
					strMenus += ',#adminSelector';
		strMenus += ',#supportSelector';		
	jQuery(strMenus).each( function() {
		jQuery(this).hover( function () {
			//show its submenu
			jQuery( this ).find( 'div' ).fadeIn( 'fast' );
		},
		function () {
			//hide its submenu
			jQuery( this ).find( 'div' ).hide();
		}
		);
	});
});
</script>
<script language="javascript">
</script>
<div id="calloutHeader" style="background-image:url('public/ioin.jpg');">
</div>
</div>
<div id="mainContentSideBG">
	<div id="mainContentBG">
		<div id="mainContent">
			
			<div id="noTabArea"></div>
			<div id="tabArea" style="display:none;">
				<div class = "xagan" style="margin-left:4px;">
					<a href="main.php">
						<div class="btn_left"></div>
						<div class="btn_right"></div><img src="public/anh3.jpg"></a>
						<div class="tab_split"></div>
					<a href="Update.html">
						<div class="btn_left"></div>
						<div class="btn_right"></div><img src="public/anh1.jpg"></a>
					<div class="tab_split"></div>
					<a href="Update/baidang.php">
						<div class="btn_left"></div>
						<div class="btn_right"></div><img src="public/anh2.jpg"></a>
					<div class="tab_split"></div>
				</div>
			</div>
				<script language="javascript">
				if ( navigator.userAgent.toLowerCase().indexOf('dota 2 client') == -1 && !bForceClientView )
				{
					document.getElementById('navBarShadowOnly').style.display = 'none';
					document.getElementById('navBarBGRepeat').style.display = 'block';
					document.getElementById('noTabArea').style.display = 'none';
					document.getElementById('tabArea').style.display = 'block';
				}
				</script>

	<div id="primary" >
			<div id="rightColGetDotaLink">
			<a href="#"><img src="public/rightcol_steam_button.jpg"></a></div>
			<div id="rightColPlayerCount">
			</div>
					<script language="javascript">
					if ( navigator.userAgent.toLowerCase().indexOf('dota 2 client') == -1 && !bForceClientView )
					{
						document.getElementById('rightColGetDotaLink').style.display = 'block';
					}
					jQuery( function()
						{
							if ( navigator.userAgent.toLowerCase().indexOf('dota 2 client') != -1 || bForceClientView )
							{
								jQuery('.rcbLink').each( function() { 
									if ( !jQuery(this).hasClass( 'noClientHide' ) )
										jQuery(this).hide(); 
								} );
							}
						}
					);
					</script>

		<div>
	
 	<div class="hoverBG rcbLink" href="#" target="_blank" style="background-image:url('public/rcb_700a.jpg');"><img width="256" height="164" border="0" alt=""/>
 	</div>
 	
 	</div>
			<!-- Main Ngang -->
			<div id="recentPostsTopBar"><img src="public/rightcol_recentposts_top.png" width="294" height="10" border="0" /></div>
			<div id="recentPostsSearchArea">
				<div id="rightColSearchArea">
					<form role="search" method="get" id="searchform">
					<input id="rightColSearchInput" type="text" value="Search">
					</form>
				</div>
				<div class="widget valve_widget_recent_entries">
				<div class="recent_entry">
				<a href="#" title="The Final in the world">Chung Kết Thế Giới</a>
				<div class="recent_entry_date">May. 4 2017</div>
			</div>
			<div class="recent_entry">
				<a href="#" title="The MSI in the future">MSI</a>
				<div class="recent_entry_date">May. 2 2017</div>
			</div>
			<div class="recent_entry">
				<a href="#" title="Lemetom the Champions">Giải Đấu Quả Chanh</a>
				<div class="recent_entry_date">Apr. 20 2017</div>
			</div>
			<div class="recent_entry">
				<a href="#" title="The Kiev Major and Beyond">Giải đấu solo</a>
				<div class="recent_entry_date">Apr. 19 2017</div>
			</div>
			<div class="recent_entry">
				<a href="#" title="hight light in the ASU">The HightLight</a>
				<div class="recent_entry_date">Apr. 14 2017</div>
			</div>
			<div class="recent_entry">
				<a href="#" title="Mid solo Season 2">Mid solo champange</a>
				<div class="recent_entry_date">Apr. 5 2017</div>
			</div>
			<div class="recent_entry">
				<a href="# title="International 2017">Final in the world 2017</a>
				<div class="recent_entry_date">Mar. 28 2017</div>
			</div>
			</div>
			</div>




			<!-- menu Trái -->
			<a class="hoverBG" id="lbLink" href="#" style="background-image:url('public/rcb_leaderboards.png');"><img width="262" height="48" border="0" /></a>

			<div>
				<a id="dotaLinkImgFacebook" class="rightColDotaLinkImg" href="#" target="_blank" title="truy xuất đến Facebook"><img src="public/link_icon_facebook.png" width="23" height="23" border="0" /></a>
				<a id="dotaLinkFacebook" class="rightColDotaLink" href="#" target="_blank">Facebook</a>

				<a id="dotaLinkImgTwitter" class="rightColDotaLinkImg" href="#" target="_blank"><img src="public/link_icon_twitter.png" width="24" height="24" border="0" /></a>
				<a id="dotaLinkTwitter" class="rightColDotaLink" href="#" target="_blank">Twitter</a>

				<a id="dotaLinkImgYoutube" class="rightColDotaLinkImg" href="#" target="_blank"><img src="public/link_icon_youtube.png" width="20" height="24" border="0" /></a>
				<a id="dotaLinkYoutube" class="rightColDotaLink" href="#" target="_blank">YouTube</a>
				<a id="dotaLinkImgSteam" class="rightColDotaLinkImg" href="#" target="_blank"><img src="public/link_icon_steam.png" width="24" height="24" border="0" /></a>
				<a id="dotaLinkSteam" class="rightColDotaLink" href="#" target="_blank">Steam</a>
			</div>


			<div id="rightColFeedback">
				<div id="feedbackForums">
					<a href="Hotro.html" target="_blank">Feedback Forums</a><br />
					Phản Hồi về game.</div>
				<div id="feedbackSupport">
					<a href="#" target="_blank">Steam Support</a><br />
					ghé thăm team trợ giúp bằng tài khoản của bạn để được hỗ trợ</div>
				<div id="feedbackContact">
					<a href="http://facebook.com/tranthanhcao.tran" target="_blank">Contact the Team</a><br />Để liên hệ trực tiếp với chúng tôi về các vấn đề cụ thể.</div>
					</div>
					</div>
					<div id="mainLoop">
					<div id="nav-above" class="navigation">
					<div class="nav-previous"><a href="main/page/2.html" ><span class="meta-nav">&larr;</span> Older posts</a></div>
					<div class="nav-next"></div>
		</div>
		</div>
		<?php
		 $id_bai = $_GET["id"];
		 $dbhost = 'localhost';
         $dbuser = 'root';
         $dbpass = '';
         $rec_limit = 10;
         $conn = mysql_connect($dbhost, $dbuser, $dbpass);
         
         if(! $conn )
         {
            die('Không thể lấy dữ liệu: ' . mysql_error());
         }
         mysql_select_db('bloglmht');

		 $sql = "SELECT * FROM tintuc where id_tintuc = '$id_bai'";
		 $retval = mysql_query( $sql, $conn );
		while($row = mysql_fetch_array($retval))
         {
         	
           			echo "<div class='post-11342 post type-post status-publish format-standard hentry category-uncategorized'>
					<h2 class='entry-title'>$row[title]</h2>";
					echo "<div>$row[tom_tat]</div>";
					echo "$row[ngay_dang]"."-LOL Team";
					echo "<img wight = '576px' height ='324px' src='$row[picture]'>";
					echo "</div>";
					echo "<div class='dota_rule'></br></div>";
         }
         ?>
</body>
</html>