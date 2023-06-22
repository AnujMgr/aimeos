<?php

return [
    'media' => [
        'manager' => [
            'decorators' => [
                'local' => ['Standard'],
            ]
        ]
    ],
    'controller' => [
        'common' => [
            'media' => [
                'name' => 'Mymedia'
            ]
        ]
    ],
    // 'product' => [
    //     'manager' => [
    //         'name' => 'Myproject',
    //         'lists' => array(
    //             'type' => array(
    //                 'delete' => array(
    //                     'ansi' => '
    //                         DELETE FROM "mshop_product_list_type"
    //                         WHERE :cond AND "siteid" LIKE ?
    //                     '
    //                 ),
    //                 'insert' => array(
    //                     'ansi' => '
    //                         INSERT INTO "mshop_product_list_type" ( :names
    //                             "code", "domain", "label", "pos", "status",
    //                             "mtime", "editor", "siteid", "ctime"
    //                         ) VALUES ( :values
    //                             ?, ?, ?, ?, ?, ?, ?, ?, ?
    //                         )
    //                     '
    //                 ),
    //                 'update' => array(
    //                     'ansi' => '
    //                         UPDATE "mshop_product_list_type"
    //                         SET :names
    //                             "code" = ?, "domain" = ?, "label" = ?, "pos" = ?,
    //                             "status" = ?, "mtime" = ?, "editor" = ?
    //                         WHERE "siteid" LIKE ? AND "id" = ?
    //                     '
    //                 ),
    //                 'search' => array(
    //                     'ansi' => '
    //                         SELECT :columns
    //                             mprolity."id" AS "product.lists.type.id", mprolity."siteid" AS "product.lists.type.siteid",
    //                             mprolity."code" AS "product.lists.type.code", mprolity."domain" AS "product.lists.type.domain",
    //                             mprolity."label" AS "product.lists.type.label", mprolity."status" AS "product.lists.type.status",
    //                             mprolity."mtime" AS "product.lists.type.mtime", mprolity."editor" AS "product.lists.type.editor",
    //                             mprolity."ctime" AS "product.lists.type.ctime", mprolity."pos" AS "product.lists.type.position"
    //                         FROM "mshop_product_list_type" mprolity
    //                         :joins
    //                         WHERE :cond
    //                         ORDER BY :order
    //                         OFFSET :start ROWS FETCH NEXT :size ROWS ONLY
    //                     ',
    //                     'mysql' => '
    //                         SELECT :columns
    //                             mprolity."id" AS "product.lists.type.id", mprolity."siteid" AS "product.lists.type.siteid",
    //                             mprolity."code" AS "product.lists.type.code", mprolity."domain" AS "product.lists.type.domain",
    //                             mprolity."label" AS "product.lists.type.label", mprolity."status" AS "product.lists.type.status",
    //                             mprolity."mtime" AS "product.lists.type.mtime", mprolity."editor" AS "product.lists.type.editor",
    //                             mprolity."ctime" AS "product.lists.type.ctime", mprolity."pos" AS "product.lists.type.position"
    //                         FROM "mshop_product_list_type" mprolity
    //                         :joins
    //                         WHERE :cond
    //                         ORDER BY :order
    //                         LIMIT :size OFFSET :start
    //                     '
    //                 ),
    //                 'count' => array(
    //                     'ansi' => '
    //                         SELECT COUNT(*) AS "count"
    //                         FROM (
    //                             SELECT mprolity."id"
    //                             FROM "mshop_product_list_type" mprolity
    //                             :joins
    //                             WHERE :cond
    //                             ORDER BY mprolity."id"
    //                             OFFSET 0 ROWS FETCH NEXT 10000 ROWS ONLY
    //                         ) AS list
    //                     ',
    //                     'mysql' => '
    //                         SELECT COUNT(*) AS "count"
    //                         FROM (
    //                             SELECT mprolity."id"
    //                             FROM "mshop_product_list_type" mprolity
    //                             :joins
    //                             WHERE :cond
    //                             ORDER BY mprolity."id"
    //                             LIMIT 10000 OFFSET 0
    //                         ) AS list
    //                     '
    //                 ),
    //                 'newid' => array(
    //                     'db2' => 'SELECT IDENTITY_VAL_LOCAL()',
    //                     'mysql' => 'SELECT LAST_INSERT_ID()',
    //                     'oracle' => 'SELECT mshop_product_list_type_seq.CURRVAL FROM DUAL',
    //                     'pgsql' => 'SELECT lastval()',
    //                     'sqlite' => 'SELECT last_insert_rowid()',
    //                     'sqlsrv' => 'SELECT @@IDENTITY',
    //                     'sqlanywhere' => 'SELECT @@IDENTITY',
    //                 ),
    //             ),
    //             'aggregate' => array(
    //                 'ansi' => '
    //                     SELECT :keys, :type("val") AS "value"
    //                     FROM (
    //                         SELECT :acols, :val AS "val"
    //                         FROM "mshop_product_list" mproli
    //                         :joins
    //                         WHERE :cond
    //                         GROUP BY :cols, mproli."id"
    //                         ORDER BY :order
    //                         OFFSET :start ROWS FETCH NEXT :size ROWS ONLY
    //                     ) AS list
    //                     GROUP BY :keys
    //                 ',
    //                 'mysql' => '
    //                     SELECT :keys, :type("val") AS "value"
    //                     FROM (
    //                         SELECT :acols, :val AS "val"
    //                         FROM "mshop_product_list" mproli
    //                         :joins
    //                         WHERE :cond
    //                         GROUP BY :cols, mproli."id"
    //                         ORDER BY :order
    //                         LIMIT :size OFFSET :start
    //                     ) AS list
    //                     GROUP BY :keys
    //                 '
    //             ),
    //             'delete' => array(
    //                 'ansi' => '
    //                     DELETE FROM "mshop_product_list"
    //                     WHERE :cond AND "siteid" LIKE ?
    //                 '
    //             ),
    //             'insert' => array(
    //                 'ansi' => '
    //                     INSERT INTO "mshop_product_list" ( :names
    //                         "parentid", "key", "type", "domain", "refid", "start", "end",
    //                         "config", "pos", "status", "mtime", "editor", "siteid", "ctime"
    //                     ) VALUES ( :values
    //                         ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?
    //                     )
    //                 '
    //             ),
    //             'update' => array(
    //                 'ansi' => '
    //                     UPDATE "mshop_product_list"
    //                     SET :names
    //                         "parentid" = ?, "key" = ?, "type" = ?, "domain" = ?, "refid" = ?, "start" = ?,
    //                         "end" = ?, "config" = ?, "pos" = ?, "status" = ?, "mtime" = ?, "editor" = ?
    //                     WHERE "siteid" LIKE ? AND "id" = ?
    //                 '
    //             ),
    //             'search' => array(
    //                 'ansi' => '
    //                     SELECT :columns
    //                         mproli."id" AS "product.lists.id", mproli."parentid" AS "product.lists.parentid",
    //                         mproli."siteid" AS "product.lists.siteid", mproli."type" AS "product.lists.type",
    //                         mproli."domain" AS "product.lists.domain", mproli."refid" AS "product.lists.refid",
    //                         mproli."start" AS "product.lists.datestart", mproli."end" AS "product.lists.dateend",
    //                         mproli."config" AS "product.lists.config", mproli."pos" AS "product.lists.position",
    //                         mproli."status" AS "product.lists.status", mproli."mtime" AS "product.lists.mtime",
    //                         mproli."editor" AS "product.lists.editor", mproli."ctime" AS "product.lists.ctime"
    //                     FROM "mshop_product_list" mproli
    //                     :joins
    //                     WHERE :cond
    //                     ORDER BY :order
    //                     OFFSET :start ROWS FETCH NEXT :size ROWS ONLY
    //                 ',
    //                 'mysql' => '
    //                     SELECT :columns
    //                         mproli."id" AS "product.lists.id", mproli."parentid" AS "product.lists.parentid",
    //                         mproli."siteid" AS "product.lists.siteid", mproli."type" AS "product.lists.type",
    //                         mproli."domain" AS "product.lists.domain", mproli."refid" AS "product.lists.refid",
    //                         mproli."start" AS "product.lists.datestart", mproli."end" AS "product.lists.dateend",
    //                         mproli."config" AS "product.lists.config", mproli."pos" AS "product.lists.position",
    //                         mproli."status" AS "product.lists.status", mproli."mtime" AS "product.lists.mtime",
    //                         mproli."editor" AS "product.lists.editor", mproli."ctime" AS "product.lists.ctime"
    //                     FROM "mshop_product_list" mproli
    //                     :joins
    //                     WHERE :cond
    //                     ORDER BY :order
    //                     LIMIT :size OFFSET :start
    //                 '
    //             ),
    //             'count' => array(
    //                 'ansi' => '
    //                     SELECT COUNT(*) AS "count"
    //                     FROM (
    //                         SELECT mproli."id"
    //                         FROM "mshop_product_list" mproli
    //                         :joins
    //                         WHERE :cond
    //                         ORDER BY mproli."id"
    //                         OFFSET 0 ROWS FETCH NEXT 10000 ROWS ONLY
    //                     ) AS list
    //                 ',
    //                 'mysql' => '
    //                     SELECT COUNT(*) AS "count"
    //                     FROM (
    //                         SELECT mproli."id"
    //                         FROM "mshop_product_list" mproli
    //                         :joins
    //                         WHERE :cond
    //                         ORDER BY mproli."id"
    //                         LIMIT 10000 OFFSET 0
    //                     ) AS list
    //                 '
    //             ),
    //             'newid' => array(
    //                 'db2' => 'SELECT IDENTITY_VAL_LOCAL()',
    //                 'mysql' => 'SELECT LAST_INSERT_ID()',
    //                 'oracle' => 'SELECT mshop_product_list_seq.CURRVAL FROM DUAL',
    //                 'pgsql' => 'SELECT lastval()',
    //                 'sqlite' => 'SELECT last_insert_rowid()',
    //                 'sqlsrv' => 'SELECT @@IDENTITY',
    //                 'sqlanywhere' => 'SELECT @@IDENTITY',
    //             ),
    //         ),
    //         'property' => array(
    //             'type' => array(
    //                 'delete' => array(
    //                     'ansi' => '
    //                         DELETE FROM "mshop_product_property_type"
    //                         WHERE :cond AND "siteid" LIKE ?
    //                     '
    //                 ),
    //                 'insert' => array(
    //                     'ansi' => '
    //                         INSERT INTO "mshop_product_property_type" ( :names
    //                             "code", "domain", "label", "pos", "status",
    //                             "mtime", "editor", "siteid", "ctime"
    //                         ) VALUES ( :values
    //                             ?, ?, ?, ?, ?, ?, ?, ?, ?
    //                         )
    //                     '
    //                 ),
    //                 'update' => array(
    //                     'ansi' => '
    //                         UPDATE "mshop_product_property_type"
    //                         SET :names
    //                             "code" = ?, "domain" = ?, "label" = ?, "pos" = ?,
    //                             "status" = ?, "mtime" = ?, "editor" = ?
    //                         WHERE "siteid" LIKE ? AND "id" = ?
    //                     '
    //                 ),
    //                 'search' => array(
    //                     'ansi' => '
    //                         SELECT :columns
    //                             mproprty."id" AS "product.property.type.id", mproprty."siteid" AS "product.property.type.siteid",
    //                             mproprty."code" AS "product.property.type.code", mproprty."domain" AS "product.property.type.domain",
    //                             mproprty."label" AS "product.property.type.label", mproprty."status" AS "product.property.type.status",
    //                             mproprty."mtime" AS "product.property.type.mtime", mproprty."editor" AS "product.property.type.editor",
    //                             mproprty."ctime" AS "product.property.type.ctime", mproprty."pos" AS "product.property.type.position"
    //                         FROM "mshop_product_property_type" mproprty
    //                         :joins
    //                         WHERE :cond
    //                         ORDER BY :order
    //                         OFFSET :start ROWS FETCH NEXT :size ROWS ONLY
    //                     ',
    //                     'mysql' => '
    //                         SELECT :columns
    //                             mproprty."id" AS "product.property.type.id", mproprty."siteid" AS "product.property.type.siteid",
    //                             mproprty."code" AS "product.property.type.code", mproprty."domain" AS "product.property.type.domain",
    //                             mproprty."label" AS "product.property.type.label", mproprty."status" AS "product.property.type.status",
    //                             mproprty."mtime" AS "product.property.type.mtime", mproprty."editor" AS "product.property.type.editor",
    //                             mproprty."ctime" AS "product.property.type.ctime", mproprty."pos" AS "product.property.type.position"
    //                         FROM "mshop_product_property_type" mproprty
    //                         :joins
    //                         WHERE :cond
    //                         ORDER BY :order
    //                         LIMIT :size OFFSET :start
    //                     '
    //                 ),
    //                 'count' => array(
    //                     'ansi' => '
    //                         SELECT COUNT(*) AS "count"
    //                         FROM (
    //                             SELECT mproprty."id"
    //                             FROM "mshop_product_property_type" mproprty
    //                             :joins
    //                             WHERE :cond
    //                             ORDER BY mproprty."id"
    //                             OFFSET 0 ROWS FETCH NEXT 10000 ROWS ONLY
    //                         ) AS list
    //                     ',
    //                     'mysql' => '
    //                         SELECT COUNT(*) AS "count"
    //                         FROM (
    //                             SELECT mproprty."id"
    //                             FROM "mshop_product_property_type" mproprty
    //                             :joins
    //                             WHERE :cond
    //                             ORDER BY mproprty."id"
    //                             LIMIT 10000 OFFSET 0
    //                         ) AS list
    //                     '
    //                 ),
    //                 'newid' => array(
    //                     'db2' => 'SELECT IDENTITY_VAL_LOCAL()',
    //                     'mysql' => 'SELECT LAST_INSERT_ID()',
    //                     'oracle' => 'SELECT mshop_product_property_type_seq.CURRVAL FROM DUAL',
    //                     'pgsql' => 'SELECT lastval()',
    //                     'sqlite' => 'SELECT last_insert_rowid()',
    //                     'sqlsrv' => 'SELECT @@IDENTITY',
    //                     'sqlanywhere' => 'SELECT @@IDENTITY',
    //                 ),
    //             ),
    //             'delete' => array(
    //                 'ansi' => '
    //                     DELETE FROM "mshop_product_property"
    //                     WHERE :cond AND "siteid" LIKE ?
    //                 '
    //             ),
    //             'insert' => array(
    //                 'ansi' => '
    //                     INSERT INTO "mshop_product_property" ( :names
    //                         "parentid", "key", "type", "langid", "value",
    //                         "mtime", "editor", "siteid", "ctime"
    //                     ) VALUES ( :values
    //                         ?, ?, ?, ?, ?, ?, ?, ?, ?
    //                     )
    //                 '
    //             ),
    //             'update' => array(
    //                 'ansi' => '
    //                     UPDATE "mshop_product_property"
    //                     SET :names
    //                         "parentid" = ?, "key" = ?, "type" = ?, "langid" = ?,
    //                         "value" = ?, "mtime" = ?, "editor" = ?
    //                     WHERE "siteid" LIKE ? AND "id" = ?
    //                 '
    //             ),
    //             'search' => array(
    //                 'ansi' => '
    //                     SELECT :columns
    //                         mpropr."id" AS "product.property.id", mpropr."parentid" AS "product.property.parentid",
    //                         mpropr."siteid" AS "product.property.siteid", mpropr."type" AS "product.property.type",
    //                         mpropr."langid" AS "product.property.languageid", mpropr."value" AS "product.property.value",
    //                         mpropr."mtime" AS "product.property.mtime", mpropr."editor" AS "product.property.editor",
    //                         mpropr."ctime" AS "product.property.ctime"
    //                     FROM "mshop_product_property" mpropr
    //                     :joins
    //                     WHERE :cond
    //                     ORDER BY :order
    //                     OFFSET :start ROWS FETCH NEXT :size ROWS ONLY
    //                 ',
    //                 'mysql' => '
    //                     SELECT :columns
    //                         mpropr."id" AS "product.property.id", mpropr."parentid" AS "product.property.parentid",
    //                         mpropr."siteid" AS "product.property.siteid", mpropr."type" AS "product.property.type",
    //                         mpropr."langid" AS "product.property.languageid", mpropr."value" AS "product.property.value",
    //                         mpropr."mtime" AS "product.property.mtime", mpropr."editor" AS "product.property.editor",
    //                         mpropr."ctime" AS "product.property.ctime"
    //                     FROM "mshop_product_property" mpropr
    //                     :joins
    //                     WHERE :cond
    //                     ORDER BY :order
    //                     LIMIT :size OFFSET :start
    //                 '
    //             ),
    //             'count' => array(
    //                 'ansi' => '
    //                     SELECT COUNT(*) AS "count"
    //                     FROM (
    //                         SELECT mpropr."id"
    //                         FROM "mshop_product_property" mpropr
    //                         :joins
    //                         WHERE :cond
    //                         ORDER BY mpropr."id"
    //                         OFFSET 0 ROWS FETCH NEXT 10000 ROWS ONLY
    //                     ) AS list
    //                 ',
    //                 'mysql' => '
    //                     SELECT COUNT(*) AS "count"
    //                     FROM (
    //                         SELECT mpropr."id"
    //                         FROM "mshop_product_property" mpropr
    //                         :joins
    //                         WHERE :cond
    //                         ORDER BY mpropr."id"
    //                         LIMIT 10000 OFFSET 0
    //                     ) AS list
    //                 '
    //             ),
    //             'newid' => array(
    //                 'db2' => 'SELECT IDENTITY_VAL_LOCAL()',
    //                 'mysql' => 'SELECT LAST_INSERT_ID()',
    //                 'oracle' => 'SELECT mshop_product_property_seq.CURRVAL FROM DUAL',
    //                 'pgsql' => 'SELECT lastval()',
    //                 'sqlite' => 'SELECT last_insert_rowid()',
    //                 'sqlsrv' => 'SELECT @@IDENTITY',
    //                 'sqlanywhere' => 'SELECT @@IDENTITY',
    //             ),
    //         ),
    //     ],
    // ],
    'media' => [
        'manager' => [
            'name' => 'Custommanager',
            'lists' => array(
                'type' => array(
                    'delete' => array(
                        'ansi' => '
                                DELETE FROM "mshop_media_list_type"
                                WHERE :cond AND "siteid" LIKE ?
                            '
                    ),
                    'insert' => array(
                        'ansi' => '
                                INSERT INTO "mshop_media_list_type" ( :names
                                    "code", "domain", "label", "pos", "status",
                                    "mtime", "editor", "siteid", "ctime"
                                ) VALUES ( :values
                                    ?, ?, ?, ?, ?, ?, ?, ?, ?
                                )
                            '
                    ),
                    'update' => array(
                        'ansi' => '
                                UPDATE "mshop_media_list_type"
                                SET :names
                                    "code" = ?, "domain" = ?, "label" = ?, "pos" = ?,
                                    "status" = ?, "mtime" = ?, "editor" = ?
                                WHERE "siteid" LIKE ? AND "id" = ?
                            '
                    ),
                    'search' => array(
                        'ansi' => '
                                SELECT :columns
                                    mmedlity."id" AS "media.lists.type.id", mmedlity."siteid" AS "media.lists.type.siteid",
                                    mmedlity."code" AS "media.lists.type.code", mmedlity."domain" AS "media.lists.type.domain",
                                    mmedlity."label" AS "media.lists.type.label", mmedlity."status" AS "media.lists.type.status",
                                    mmedlity."mtime" AS "media.lists.type.mtime", mmedlity."editor" AS "media.lists.type.editor",
                                    mmedlity."ctime" AS "media.lists.type.ctime", mmedlity."pos" AS "media.lists.type.position",
                                    mmedlity."blur_hash" AS "media.lists.type.blur_hash"
                                FROM "mshop_media_list_type" mmedlity
                                :joins
                                WHERE :cond
                                ORDER BY :order
                                OFFSET :start ROWS FETCH NEXT :size ROWS ONLY
                            ',
                        'mysql' => '
                                SELECT :columns
                                    mmedlity."id" AS "media.lists.type.id", mmedlity."siteid" AS "media.lists.type.siteid",
                                    mmedlity."code" AS "media.lists.type.code", mmedlity."domain" AS "media.lists.type.domain",
                                    mmedlity."label" AS "media.lists.type.label", mmedlity."status" AS "media.lists.type.status",
                                    mmedlity."mtime" AS "media.lists.type.mtime", mmedlity."editor" AS "media.lists.type.editor",
                                    mmedlity."ctime" AS "media.lists.type.ctime", mmedlity."pos" AS "media.lists.type.position",
                                    mmedlity."blur_hash" AS "media.lists.type.blur_hash"
                                FROM "mshop_media_list_type" mmedlity
                                :joins
                                WHERE :cond
                                ORDER BY :order
                                LIMIT :size OFFSET :start
                            '
                    ),
                    'count' => array(
                        'ansi' => '
                                SELECT COUNT(*) AS "count"
                                FROM(
                                    SELECT mmedlity."id"
                                    FROM "mshop_media_list_type" mmedlity
                                    :joins
                                    WHERE :cond
                                    ORDER BY mmedlity."id"
                                    OFFSET 0 ROWS FETCH NEXT 10000 ROWS ONLY
                                ) AS list
                            ',
                        'mysql' => '
                                SELECT COUNT(*) AS "count"
                                FROM(
                                    SELECT mmedlity."id"
                                    FROM "mshop_media_list_type" mmedlity
                                    :joins
                                    WHERE :cond
                                    ORDER BY mmedlity."id"
                                    LIMIT 10000 OFFSET 0
                                ) AS list
                            '
                    ),
                    'newid' => array(
                        'db2' => 'SELECT IDENTITY_VAL_LOCAL()',
                        'mysql' => 'SELECT LAST_INSERT_ID()',
                        'oracle' => 'SELECT mshop_media_list_type_seq.CURRVAL FROM DUAL',
                        'pgsql' => 'SELECT lastval()',
                        'sqlite' => 'SELECT last_insert_rowid()',
                        'sqlsrv' => 'SELECT @@IDENTITY',
                        'sqlanywhere' => 'SELECT @@IDENTITY',
                    ),
                ),
                'aggregate' => array(
                    'ansi' => '
                            SELECT :keys, :type("val") AS "value"
                            FROM (
                                SELECT :acols, :val AS "val"
                                FROM "mshop_media_list" mmedli
                                :joins
                                WHERE :cond
                                GROUP BY :cols, mmedli."id"
                                ORDER BY :order
                                OFFSET :start ROWS FETCH NEXT :size ROWS ONLY
                            ) AS list
                            GROUP BY :keys
                        ',
                    'mysql' => '
                            SELECT :keys, :type("val") AS "value"
                            FROM (
                                SELECT :acols, :val AS "val"
                                FROM "mshop_media_list" mmedli
                                :joins
                                WHERE :cond
                                GROUP BY :cols, mmedli."id"
                                ORDER BY :order
                                LIMIT :size OFFSET :start
                            ) AS list
                            GROUP BY :keys
                        '
                ),
                'delete' => array(
                    'ansi' => '
                            DELETE FROM "mshop_media_list"
                            WHERE :cond AND "siteid" LIKE ?
                        '
                ),
                'insert' => array(
                    'ansi' => '
                            INSERT INTO "mshop_media_list" ( :names
                                "parentid", "key", "type", "domain", "refid", "start", "end",
                                "config", "pos", "status", "mtime", "editor", "siteid", "ctime"
                            ) VALUES ( :values
                                ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?
                            )
                        '
                ),
                'update' => array(
                    'ansi' => '
                            UPDATE "mshop_media_list"
                            SET :names
                                "parentid"=?, "key" = ?, "type" = ?, "domain" = ?, "refid" = ?, "start" = ?,
                                "end" = ?, "config" = ?, "pos" = ?, "status" = ?, "mtime" = ?, "editor" = ?
                            WHERE "siteid" LIKE ? AND "id" = ?
                        '
                ),
                'search' => array(
                    'ansi' => '
                            SELECT :columns
                                mmedli."id" AS "media.lists.id", mmedli."parentid" AS "media.lists.parentid",
                                mmedli."siteid" AS "media.lists.siteid", mmedli."type" AS "media.lists.type",
                                mmedli."domain" AS "media.lists.domain", mmedli."refid" AS "media.lists.refid",
                                mmedli."start" AS "media.lists.datestart", mmedli."end" AS "media.lists.dateend",
                                mmedli."config" AS "media.lists.config", mmedli."pos" AS "media.lists.position",
                                mmedli."status" AS "media.lists.status", mmedli."mtime" AS "media.lists.mtime",
                                mmedli."editor" AS "media.lists.editor", mmedli."ctime" AS "media.lists.ctime"
                            FROM "mshop_media_list" mmedli
                            :joins
                            WHERE :cond
                            ORDER BY :order
                            OFFSET :start ROWS FETCH NEXT :size ROWS ONLY
                        ',
                    'mysql' => '
                            SELECT :columns
                                mmedli."id" AS "media.lists.id", mmedli."parentid" AS "media.lists.parentid",
                                mmedli."siteid" AS "media.lists.siteid", mmedli."type" AS "media.lists.type",
                                mmedli."domain" AS "media.lists.domain", mmedli."refid" AS "media.lists.refid",
                                mmedli."start" AS "media.lists.datestart", mmedli."end" AS "media.lists.dateend",
                                mmedli."config" AS "media.lists.config", mmedli."pos" AS "media.lists.position",
                                mmedli."status" AS "media.lists.status", mmedli."mtime" AS "media.lists.mtime",
                                mmedli."editor" AS "media.lists.editor", mmedli."ctime" AS "media.lists.ctime"
                            FROM "mshop_media_list" mmedli
                            :joins
                            WHERE :cond
                            ORDER BY :order
                            LIMIT :size OFFSET :start
                        '
                ),
                'count' => array(
                    'ansi' => '
                            SELECT COUNT(*) AS "count"
                            FROM(
                                SELECT mmedli."id"
                                FROM "mshop_media_list" mmedli
                                :joins
                                WHERE :cond
                                ORDER BY mmedli."id"
                                OFFSET 0 ROWS FETCH NEXT 10000 ROWS ONLY
                            ) AS list
                        ',
                    'mysql' => '
                            SELECT COUNT(*) AS "count"
                            FROM(
                                SELECT mmedli."id"
                                FROM "mshop_media_list" mmedli
                                :joins
                                WHERE :cond
                                ORDER BY mmedli."id"
                                LIMIT 10000 OFFSET 0
                            ) AS list
                        '
                ),
                'newid' => array(
                    'db2' => 'SELECT IDENTITY_VAL_LOCAL()',
                    'mysql' => 'SELECT LAST_INSERT_ID()',
                    'oracle' => 'SELECT mshop_media_list_seq.CURRVAL FROM DUAL',
                    'pgsql' => 'SELECT lastval()',
                    'sqlite' => 'SELECT last_insert_rowid()',
                    'sqlsrv' => 'SELECT @@IDENTITY',
                    'sqlanywhere' => 'SELECT @@IDENTITY',
                ),
            ),
            'property' => array(
                'type' => array(
                    'delete' => array(
                        'ansi' => '
                                DELETE FROM "mshop_media_property_type"
                                WHERE :cond AND "siteid" LIKE ?
                            '
                    ),
                    'insert' => array(
                        'ansi' => '
                                INSERT INTO "mshop_media_property_type" ( :names
                                    "code", "domain", "label", "pos", "status",
                                    "mtime", "editor", "siteid", "ctime"
                                ) VALUES ( :values
                                    ?, ?, ?, ?, ?, ?, ?, ?, ?
                                )
                            '
                    ),
                    'update' => array(
                        'ansi' => '
                                UPDATE "mshop_media_property_type"
                                SET :names
                                    "code" = ?, "domain" = ?, "label" = ?, "pos" = ?,
                                    "status" = ?, "mtime" = ?, "editor" = ?
                                WHERE "siteid" LIKE ? AND "id" = ?
                            '
                    ),
                    'search' => array(
                        'ansi' => '
                                SELECT :columns
                                    mmedprty."id" AS "media.property.type.id", mmedprty."siteid" AS "media.property.type.siteid",
                                    mmedprty."code" AS "media.property.type.code", mmedprty."domain" AS "media.property.type.domain",
                                    mmedprty."label" AS "media.property.type.label", mmedprty."status" AS "media.property.type.status",
                                    mmedprty."mtime" AS "media.property.type.mtime", mmedprty."editor" AS "media.property.type.editor",
                                    mmedprty."ctime" AS "media.property.type.ctime", mmedprty."pos" AS "media.property.type.position"
                                FROM "mshop_media_property_type" mmedprty
                                :joins
                                WHERE :cond
                                ORDER BY :order
                                OFFSET :start ROWS FETCH NEXT :size ROWS ONLY
                            ',
                        'mysql' => '
                                SELECT :columns
                                    mmedprty."id" AS "media.property.type.id", mmedprty."siteid" AS "media.property.type.siteid",
                                    mmedprty."code" AS "media.property.type.code", mmedprty."domain" AS "media.property.type.domain",
                                    mmedprty."label" AS "media.property.type.label", mmedprty."status" AS "media.property.type.status",
                                    mmedprty."mtime" AS "media.property.type.mtime", mmedprty."editor" AS "media.property.type.editor",
                                    mmedprty."ctime" AS "media.property.type.ctime", mmedprty."pos" AS "media.property.type.position"
                                FROM "mshop_media_property_type" mmedprty
                                :joins
                                WHERE :cond
                                ORDER BY :order
                                LIMIT :size OFFSET :start
                            '
                    ),
                    'count' => array(
                        'ansi' => '
                                SELECT COUNT(*) AS "count"
                                FROM (
                                    SELECT mmedprty."id"
                                    FROM "mshop_media_property_type" mmedprty
                                    :joins
                                    WHERE :cond
                                    ORDER BY mmedprty."id"
                                    OFFSET 0 ROWS FETCH NEXT 10000 ROWS ONLY
                                ) AS list
                            ',
                        'mysql' => '
                                SELECT COUNT(*) AS "count"
                                FROM (
                                    SELECT mmedprty."id"
                                    FROM "mshop_media_property_type" mmedprty
                                    :joins
                                    WHERE :cond
                                    ORDER BY mmedprty."id"
                                    LIMIT 10000 OFFSET 0
                                ) AS list
                            '
                    ),
                    'newid' => array(
                        'db2' => 'SELECT IDENTITY_VAL_LOCAL()',
                        'mysql' => 'SELECT LAST_INSERT_ID()',
                        'oracle' => 'SELECT mshop_media_property_type_seq.CURRVAL FROM DUAL',
                        'pgsql' => 'SELECT lastval()',
                        'sqlite' => 'SELECT last_insert_rowid()',
                        'sqlsrv' => 'SELECT @@IDENTITY',
                        'sqlanywhere' => 'SELECT @@IDENTITY',
                    ),
                ),
                'delete' => array(
                    'ansi' => '
                            DELETE FROM "mshop_media_property"
                            WHERE :cond AND "siteid" LIKE ?
                        '
                ),
                'insert' => array(
                    'ansi' => '
                            INSERT INTO "mshop_media_property" ( :names
                                "parentid", "key", "type", "langid", "value",
                                "mtime", "editor", "siteid", "ctime"
                            ) VALUES ( :values
                                ?, ?, ?, ?, ?, ?, ?, ?, ?
                            )
                        '
                ),
                'update' => array(
                    'ansi' => '
                            UPDATE "mshop_media_property"
                            SET :names
                                "parentid" = ?, "key" = ?, "type" = ?, "langid" = ?,
                                "value" = ?, "mtime" = ?, "editor" = ?
                            WHERE "siteid" LIKE ? AND "id" = ?
                        '
                ),
                'search' => array(
                    'ansi' => '
                            SELECT :columns
                                mmedpr."id" AS "media.property.id", mmedpr."parentid" AS "media.property.parentid",
                                mmedpr."siteid" AS "media.property.siteid", mmedpr."type" AS "media.property.type",
                                mmedpr."langid" AS "media.property.languageid", mmedpr."value" AS "media.property.value",
                                mmedpr."mtime" AS "media.property.mtime", mmedpr."editor" AS "media.property.editor",
                                mmedpr."ctime" AS "media.property.ctime"
                            FROM "mshop_media_property" mmedpr
                            :joins
                            WHERE :cond
                            ORDER BY :order
                            OFFSET :start ROWS FETCH NEXT :size ROWS ONLY
                        ',
                    'mysql' => '
                            SELECT :columns
                                mmedpr."id" AS "media.property.id", mmedpr."parentid" AS "media.property.parentid",
                                mmedpr."siteid" AS "media.property.siteid", mmedpr."type" AS "media.property.type",
                                mmedpr."langid" AS "media.property.languageid", mmedpr."value" AS "media.property.value",
                                mmedpr."mtime" AS "media.property.mtime", mmedpr."editor" AS "media.property.editor",
                                mmedpr."ctime" AS "media.property.ctime"
                            FROM "mshop_media_property" mmedpr
                            :joins
                            WHERE :cond
                            ORDER BY :order
                            LIMIT :size OFFSET :start
                        '
                ),
                'count' => array(
                    'ansi' => '
                            SELECT COUNT(*) AS "count"
                            FROM (
                                SELECT mmedpr."id"
                                FROM "mshop_media_property" mmedpr
                                :joins
                                WHERE :cond
                                ORDER BY mmedpr."id"
                                OFFSET 0 ROWS FETCH NEXT 10000 ROWS ONLY
                            ) AS list
                        ',
                    'mysql' => '
                            SELECT COUNT(*) AS "count"
                            FROM (
                                SELECT mmedpr."id"
                                FROM "mshop_media_property" mmedpr
                                :joins
                                WHERE :cond
                                ORDER BY mmedpr."id"
                                LIMIT 10000 OFFSET 0
                            ) AS list
                        '
                ),
                'newid' => array(
                    'db2' => 'SELECT IDENTITY_VAL_LOCAL()',
                    'mysql' => 'SELECT LAST_INSERT_ID()',
                    'oracle' => 'SELECT mshop_media_property_seq.CURRVAL FROM DUAL',
                    'pgsql' => 'SELECT lastval()',
                    'sqlite' => 'SELECT last_insert_rowid()',
                    'sqlsrv' => 'SELECT @@IDENTITY',
                    'sqlanywhere' => 'SELECT @@IDENTITY',
                ),
            ),
            'type' => array(
                'delete' => array(
                    'ansi' => '
                            DELETE FROM "mshop_media_type"
                            WHERE :cond AND "siteid" LIKE ?
                        '
                ),
                'insert' => array(
                    'ansi' => '
                            INSERT INTO "mshop_media_type" ( :names
                                "code", "domain", "label", "pos", "status",
                                "mtime", "editor", "siteid", "ctime"
                            ) VALUES ( :values
                                ?, ?, ?, ?, ?, ?, ?, ?, ?
                            )
                        '
                ),
                'update' => array(
                    'ansi' => '
                            UPDATE "mshop_media_type"
                            SET :names
                                "code" = ?, "domain" = ?, "label" = ?, "pos" = ?,
                                "status" = ?, "mtime" = ?, "editor" = ?
                            WHERE "siteid" LIKE ? AND "id" = ?
                        '
                ),
                'search' => array(
                    'ansi' => '
                            SELECT :columns
                                mmedty."id" AS "media.type.id", mmedty."siteid" AS "media.type.siteid",
                                mmedty."code" AS "media.type.code", mmedty."domain" AS "media.type.domain",
                                mmedty."label" AS "media.type.label", mmedty."status" AS "media.type.status",
                                mmedty."mtime" AS "media.type.mtime", mmedty."editor" AS "media.type.editor",
                                mmedty."ctime" AS "media.type.ctime", mmedty."pos" AS "media.type.position"
                            FROM "mshop_media_type" mmedty
                            :joins
                            WHERE :cond
                            ORDER BY :order
                            OFFSET :start ROWS FETCH NEXT :size ROWS ONLY
                        ',
                    'mysql' => '
                            SELECT :columns
                                mmedty."id" AS "media.type.id", mmedty."siteid" AS "media.type.siteid",
                                mmedty."code" AS "media.type.code", mmedty."domain" AS "media.type.domain",
                                mmedty."label" AS "media.type.label", mmedty."status" AS "media.type.status",
                                mmedty."mtime" AS "media.type.mtime", mmedty."editor" AS "media.type.editor",
                                mmedty."ctime" AS "media.type.ctime", mmedty."pos" AS "media.type.position"
                            FROM "mshop_media_type" mmedty
                            :joins
                            WHERE :cond
                            ORDER BY :order
                            LIMIT :size OFFSET :start
                        '
                ),
                'count' => array(
                    'ansi' => '
                            SELECT COUNT(*) AS "count"
                            FROM(
                                SELECT mmedty."id"
                                FROM "mshop_media_type" mmedty
                                :joins
                                WHERE :cond
                                ORDER BY mmedty."id"
                                OFFSET 0 ROWS FETCH NEXT 10000 ROWS ONLY
                            ) AS list
                        ',
                    'mysql' => '
                            SELECT COUNT(*) AS "count"
                            FROM(
                                SELECT mmedty."id"
                                FROM "mshop_media_type" mmedty
                                :joins
                                WHERE :cond
                                ORDER BY mmedty."id"
                                LIMIT 10000 OFFSET 0
                            ) AS list
                        '
                ),
                'newid' => array(
                    'db2' => 'SELECT IDENTITY_VAL_LOCAL()',
                    'mysql' => 'SELECT LAST_INSERT_ID()',
                    'oracle' => 'SELECT mshop_media_type_seq.CURRVAL FROM DUAL',
                    'pgsql' => 'SELECT lastval()',
                    'sqlite' => 'SELECT last_insert_rowid()',
                    'sqlsrv' => 'SELECT @@IDENTITY',
                    'sqlanywhere' => 'SELECT @@IDENTITY',
                ),
            ),
            'delete' => array(
                'ansi' => '
                        DELETE FROM "mshop_media"
                        WHERE :cond AND "siteid" LIKE ?
                    '
            ),
            'insert' => array(
                'ansi' => '
                    INSERT INTO "mshop_media" (
                        "langid", "type", "label", "mimetype", "link", "status", "fsname",
                        "domain", "preview", "mtime", "editor", "siteid", "ctime", "blur_hash"
                    ) VALUES (
                        ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?
                    )
                '
            ),
            'update' => array(
                'ansi' => '
                        UPDATE "mshop_media"
                        SET :names
                            "langid" = ?, "type" = ?, "label" = ?, "mimetype" = ?, "link" = ?, "status" = ?,
                            "fsname" = ?, "domain" = ?, "preview" = ?, "mtime" = ?, "editor" = ?, "blur_hash" = ?
                        WHERE "siteid" LIKE ? AND "id" = ?
                    '
            ),
            'search' => array(
                'ansi' => '
                        SELECT :columns
                            mmed."id" AS "media.id", mmed."siteid" AS "media.siteid",
                            mmed."langid" AS "media.languageid", mmed."type" AS "media.type",
                            mmed."link" AS "media.url", mmed."label" AS "media.label",
                            mmed."status" AS "media.status", mmed."mimetype" AS "media.mimetype",
                            mmed."domain" AS "media.domain", mmed."preview" AS "media.previews",
                            mmed."fsname" AS "media.filesystem", mmed."mtime" AS "media.mtime",
                            mmed."ctime" AS "media.ctime", mmed."editor" AS "media.editor",
                            mmed."blur_hash" AS "media.blur_hash"
                        FROM "mshop_media" mmed
                        :joins
                        WHERE :cond
                        GROUP BY :columns :group
                            mmed."id", mmed."siteid", mmed."langid", mmed."type", mmed."link",
                            mmed."label", mmed."status", mmed."mimetype", mmed."domain", mmed."preview",
                            mmed."fsname", mmed."mtime", mmed."editor", mmed."ctime"
                        ORDER BY :order
                        OFFSET :start ROWS FETCH NEXT :size ROWS ONLY
                    ',
                'mysql' => '
                        SELECT :columns
                            mmed."id" AS "media.id", mmed."siteid" AS "media.siteid",
                            mmed."langid" AS "media.languageid", mmed."type" AS "media.type",
                            mmed."link" AS "media.url", mmed."label" AS "media.label",
                            mmed."status" AS "media.status", mmed."mimetype" AS "media.mimetype",
                            mmed."domain" AS "media.domain", mmed."preview" AS "media.previews",
                            mmed."fsname" AS "media.filesystem", mmed."mtime" AS "media.mtime",
                            mmed."ctime" AS "media.ctime", mmed."editor" AS "media.editor",
                            mmed."blur_hash" AS "media.blur_hash"
                        FROM "mshop_media" mmed
                        :joins
                        WHERE :cond
                        GROUP BY :group mmed."id"
                        ORDER BY :order
                        LIMIT :size OFFSET :start
                    '
            ),
            'count' => array(
                'ansi' => '
                        SELECT COUNT(*) AS "count"
                        FROM (
                            SELECT mmed."id"
                            FROM "mshop_media" mmed
                            :joins
                            WHERE :cond
                            GROUP BY mmed."id"
                            ORDER BY mmed."id"
                            OFFSET 0 ROWS FETCH NEXT 10000 ROWS ONLY
                        ) AS list
                    ',
                'mysql' => '
                        SELECT COUNT(*) AS "count"
                        FROM (
                            SELECT mmed."id"
                            FROM "mshop_media" mmed
                            :joins
                            WHERE :cond
                            GROUP BY mmed."id"
                            ORDER BY mmed."id"
                            LIMIT 10000 OFFSET 0
                        ) AS list
                    '
            ),
            'newid' => array(
                'db2' => 'SELECT IDENTITY_VAL_LOCAL()',
                'mysql' => 'SELECT LAST_INSERT_ID()',
                'oracle' => 'SELECT mshop_media_seq.CURRVAL FROM DUAL',
                'pgsql' => 'SELECT lastval()',
                'sqlite' => 'SELECT last_insert_rowid()',
                'sqlsrv' => 'SELECT @@IDENTITY',
                'sqlanywhere' => 'SELECT @@IDENTITY',
            ),
        ]
    ]
];
