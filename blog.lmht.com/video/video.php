<!DOCTYPE html>
<html lang="en">
<head>
	<script type="text/javascript" src="../jquery/jquery.js"></script>
<script language="javascript">
var bForceClientView = false;
</script>
<meta charset="UTF-8" />
<title>Lengend of Lengend</title>
<link rel="stylesheet" type="text/css" media="all" href="../thêm/style.css" />
<link rel="stylesheet" type="text/css" href="../style.css">
<link rel="stylesheet" type="text/css" href="video.css">
</head>

<body class="home blog">


<div id="navBarShadowOnly"></div>

<div id="navBarBGRepeat" style="display:none;">
	<div id="navBarBGRepeat" class="DotaFont">
		<div id="navBarShadow"></div>
		<div id="navBarBG">
			<div id="navBar">
				<div id="navLoginAndLanguage">
				<a href="../LoginForm (Ajax)/index.php"><button id ="idlogin">login</button></a>
				</div>
				<span class="navItem navItemLMLogo">
					<a class="navBarItem DotaFont" href="../main.php">
						<img border="0" class="DotaLogo" src="../public/logo.png"/>
					</a>
				</span>

				<span class="navItem">
					<a class="navBarItem DotaFont" href="?">Watch<sup>BETA</sup></a>
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
					<img class="dn_arrow" src="../public/arrow.png"/>
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
	jQuery(target).find('.dn_arrow').attr( "src", "../public/arrow.png" );
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
<div id="calloutHeader" style="background-image:url('../public/ioin.jpg');">
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
	<!-- Main chính cho video -->


	<hr>
		<div class="canchinhvideo">
				<?php
				$link =mysqli_connect('localhost','root','','bloglmht');
				mysqli_set_charset($link,'UTF8');
				$sql= "select * from video ORDER BY id_video DESC";
				$result= mysqli_query($link, $sql);
				while ($row = mysqli_fetch_assoc($result)) { //cps thể dùng mysqli_fetch_assoc
				echo "<div id='post-11342' class='post-11342 post type-post status-publish format-standard hentry category-uncategorized'>
					<h2 class='entry-title'>$row[title]</a></h2>";
					echo "<div>$row[tomtat]</div>";
					echo "$row[ngaydang].'-LOL Team'";
					echo "</p>";
					echo "<video width='640px' height='auto' controls><source src='$row[duongdan]'/>trình duyệt méo hỗ trợ html5</video>";
					echo "</div>";
					echo "<img src='../public/anhngan.jpg'>";
				}
				//đóng kết nối
				//mysql_close($link);
				?>
				<span>
				<p>
					Xin phép được lấy cấc tư liệu cửa các trang khác để làm tài liệu học tập.
				</p>
				</span>
				</p>
					<div id="nav-below" class="navigation">
				<div class="nav-previous"><a href="main/page/2.html" ><span class="meta-nav">&larr;</span> Older posts</a></div>
				<div class="nav-next"></div>
		</div>
	</body>
</html>