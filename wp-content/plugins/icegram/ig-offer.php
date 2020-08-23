<style type="text/css">
    .ig_offer {
        width: 60%;
        margin: 0 auto;
        text-align: center;
        padding-top: 1.2em;
    }

</style>
<?php

$timezone_format = _x( 'Y-m-d', 'timezone date format' );
$ig_current_date = strtotime( date_i18n( $timezone_format ) );

// Covid-19 Campaign
if ( ( get_option( 'ig_offer_covid_19_icegram' ) !== 'yes' ) && ( $ig_current_date >= strtotime( "2020-04-08" ) ) && ( $ig_current_date <= strtotime( "2020-04-30" ) ) ) { ?>
    <div class="ig_es_offer">
        <a target="_blank" href="?ig_dismiss_admin_notice=1&ig_option_name=ig_offer_covid_19"><img src="<?php echo $this->plugin_url; ?>/assets/images/covid-19.png"/></a>
    </div>
<?php } ?>