<script language="javascript">
function closeSubMenu( target ) {
	jQuery(target).find('.dn_arrow').attr( "src", "http://cdn.dota2.com/apps/dota2/images/nav/arrow.png" );
	jQuery(target).find('.menuSubItemList').hide();
}

function closeAllSubMenus() {
	jQuery('.navItem').each( function() {
		closeSubMenu( jQuery(this) );
	});
}

function openSubMenu( target ) {
	closeAllSubMenus();

	jQuery(target).find('.dn_arrow').attr( "src", "http://cdn.dota2.com/apps/dota2/images/nav/arrow_over.png" );

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
		//hàm hiện thị khi chuyển chuột vô
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