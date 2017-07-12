<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
require_once( plugin_dir_path(__FILE__).'/inc.php');

$link_sidebar = $ns_url_plugin_premium.'?utm_source='.$ns_menu_label.'%20Sidebar&utm_medium=Sidebar%20dentro%20settings&utm_campaign='.$ns_menu_label.'%20Sidebar%20premium';
$link_bannerino = $ns_url_plugin_premium.'?utm_source='.$ns_menu_label.'%20Bannerino&utm_medium=Bannerino%20dentro%20settings&utm_campaign='.$ns_menu_label.'%20Bannerino%20premium'; 
$link_bannerone = $ns_url_plugin_premium.'?utm_source='.$ns_menu_label.'%20Bannerone&utm_medium=Bannerone%20dashboard&utm_campaign='.$ns_menu_label.'%20Bannerone%20premium'; 
$link_promo_theme = $ns_url_theme_promo.'?utm_source='.$ns_theme_promo_slug.'%20'.$ns_menu_label.'%20Sidebar&utm_medium=Sidebar%20'.$ns_theme_promo_slug.'%20dentro%20settings&utm_campaign='.$ns_theme_promo_slug.'%20'.$ns_menu_label.'%20Sidebar%20premium';
?>
		<div class="notice notice-success is-dismissible">
		   <p class="nscenterbannerone"><?php echo '<a href="'.$link_bannerone.'"><img src="'.plugin_dir_url( __FILE__ ).'img/'.$ns_slug.'-bannerone.png"></a>'; ?></p>
		</div>
	    <div class="verynsbigbox">
	    	<?php 
	    		/* *** BOX PREMIUM VERSION *** */
				require_once( plugin_dir_path(__FILE__).'/ns_settings_box_pro_version.php');

	    		/* *** BOX NEWSLETTER *** */
				require_once( plugin_dir_path(__FILE__).'/ns_settings_box_newsletter.php');

	    		/* *** BOX THEME PROMO *** */
				require_once( plugin_dir_path(__FILE__).'/ns_settings_box_theme_promo.php');
			?>			
		</div>
	   

		<div class="verynsbigboxcontainer">
			<div class="icon32" id="icon-options-general"><br /></div>
			<h2><?php echo $ns_full_name; ?> Settings</h2>
			<p>&nbsp;</p>
			<form method="post" action="options.php" enctype="multipart/form-data">
	    		<?php /* *** BOX OPTION *** */ ?>
				<?php require_once( plugin_dir_path(__FILE__).'/ns_settings_custom.php'); ?>				
				<p><input type="submit" class="button-primary" id="submit" name="submit" value="<?php _e('Save Changes') ?>" /></p>				
			</form>
		</div>
		<div><p><?php echo '<a href="'.$link_bannerino.'"><img src="'.plugin_dir_url( __FILE__ ).'img/'.$ns_slug.'-bannerino.png"></a>'; ?></p></div>






