<?php

/**
 * @license LGPLv3, https://opensource.org/licenses/LGPL-3.0
 * @copyright Aimeos (aimeos.org), 2016-2023
 */


return array(
    'table' => array(
        'mshop_media' => function (\Aimeos\Upscheme\Schema\Table $table) {
            $table->string('blur_hash', 255)->null( true )->default( null );
        }
    ),
);
