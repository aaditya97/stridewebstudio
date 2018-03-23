jQuery(document).ready(function(jQuery) {

    "use strict";

    jQuery(document).on( 'click', '.softpoint-intro-notice .notice-dismiss', function() {
        jQuery.ajax({
            url: ajaxurl,
            data: {
                action: 'softpoint-intro-dismissed'
            }
        });
    });

});
