<?php

event_bind('mw.front', function () {

    $widgetCode = get_option('widget_code', 'tidio');

    if (!empty($widgetCode)) {
        mw()->template->foot($widgetCode);
    }

});
