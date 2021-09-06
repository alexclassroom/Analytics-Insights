<?php
/**
 * Author: Alin Marcu
 * Copyright 2017 Alin Marcu
 * Author URI: https://deconf.com
 * License: GPLv2 or later
 * License URI: http://www.gnu.org/licenses/gpl-2.0.html
 */
?>

<?php if ( 0 == $data['ga_with_gtag'] ):?>
<!-- BEGIN AIWP v<?php echo AIWP_CURRENT_VERSION; ?> Universal Analytics - https://deconf.com/analytics-insights/ -->
<script>
(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
})(window,document,'script','<?php echo esc_url( $data['tracking_script_path'] )?>','ga');
<?php echo wp_kses( $data['trackingcode'], array() )?>
</script>
<!-- END AIWP Universal Analytics -->
<?php else:?>
<!-- BEGIN AIWP v<?php echo AIWP_CURRENT_VERSION; ?> Global Site Tag - https://deconf.com/analytics-insights/ -->
<script async src="<?php echo esc_url( $data['tracking_script_path'] )?>?id=<?php echo esc_js( $data['uaid'] )?>"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());
<?php echo wp_kses( $data['trackingcode'], array() )?>

  if (window.performance) {
    var timeSincePageLoad = Math.round(performance.now());
    gtag('event', 'timing_complete', {
      'name': 'load',
      'value': timeSincePageLoad,
      'event_category': 'JS Dependencies'
    });
  }
</script>
<!-- END AIWP Global Site Tag -->
<?php endif;?>