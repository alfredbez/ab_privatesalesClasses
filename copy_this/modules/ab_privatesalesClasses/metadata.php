<?php

/**
 * Version:    1.0
 * Author:     Alfred Bez <alfred.bez@googlemail.com>
 * Author URI: http://www.alfredbez.de
 */

/**
 * Metadata version
 */
$sMetadataVersion = '1.1';

/**
 * Module information
 */
$aModule = array(
    'id'           => 'ab_privatesalesClasses',
    'title'        => 'Private Sales :: erlaubte Klassen',
    'description'  => 'Mit diesem Modul ist es möglich, erlaubte Klassen für Private Sales zu definieren',
    'version'      => '1.0',
    'author'       => 'Alfred Bez',
    'url'          => 'http://www.alfredbez.de',
    'email'        => 'alfred.bez@googlemail.com',
    'extend'       => array(
        'oxcmp_user'  => 'ab_privatesalesClasses/ab_privatesalesClasses_oxcmp_user'
    )
);
