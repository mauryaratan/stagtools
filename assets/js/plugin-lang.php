<?php

$strings = 'tinyMCE.addI18n({' . _WP_Editors::$mce_locale . ':{
    stag:{
        alert: "' . esc_js( __( 'Alerts / Notification', 'stag' ) ) . '",
        button: "' . esc_js( __( 'Buttons', 'stag' ) ) . '",
        columns: "' . esc_js( __( 'Columns', 'stag' ) ) . '",
        divider: "' . esc_js( __( 'Divider / Horizontal Ruler', 'stag' ) ) . '",
        intro: "' . esc_js( __( 'Intro Text', 'stag' ) ) . '",
        tabs: "' . esc_js( __( 'Tabs', 'stag' ) ) . '",
        toggle: "' . esc_js( __( 'Toggle', 'stag' ) ) . '",
        dropcap: "' . esc_js( __( 'Dropcap', 'stag' ) ) . '",
        
        media_elements: "' . esc_js( __( 'Media Elements', 'stag' ) ) . '",
        image: "' . esc_js( __( 'Image', 'stag' ) ) . '",
        video: "' . esc_js( __( 'Video', 'stag' ) ) . '",
    }
}})';