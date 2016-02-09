<?php

namespace Croogo\Comments\Config\Schema;

class CommentsSchema extends CakeSchema
{

    public function before($event = [])
    {
        return true;
    }

    public function after($event = [])
    {
    }

    public $comments = [
        'id' => ['type' => 'integer', 'null' => false, 'default' => null, 'length' => 20, 'key' => 'primary'],
        'parent_id' => ['type' => 'integer', 'null' => true, 'default' => null, 'length' => 20],
        'node_id' => ['type' => 'integer', 'null' => false, 'default' => null, 'length' => 20],
        'user_id' => ['type' => 'integer', 'null' => false, 'default' => '0', 'length' => 20],
        'name' => ['type' => 'string', 'null' => true, 'default' => null, 'length' => 50, 'collate' => 'utf8_unicode_ci', 'charset' => 'utf8'],
        'email' => ['type' => 'string', 'null' => true, 'default' => null, 'length' => 100, 'collate' => 'utf8_unicode_ci', 'charset' => 'utf8'],
        'website' => ['type' => 'string', 'null' => true, 'default' => null, 'length' => 200, 'collate' => 'utf8_unicode_ci', 'charset' => 'utf8'],
        'ip' => ['type' => 'string', 'null' => true, 'default' => null, 'length' => 100, 'collate' => 'utf8_unicode_ci', 'charset' => 'utf8'],
        'title' => ['type' => 'string', 'null' => true, 'default' => null, 'collate' => 'utf8_unicode_ci', 'charset' => 'utf8'],
        'body' => ['type' => 'text', 'null' => false, 'default' => null, 'collate' => 'utf8_unicode_ci', 'charset' => 'utf8'],
        'rating' => ['type' => 'integer', 'null' => true, 'default' => null],
        'status' => ['type' => 'boolean', 'null' => false, 'default' => '0'],
        'notify' => ['type' => 'boolean', 'null' => false, 'default' => '0'],
        'type' => ['type' => 'string', 'null' => false, 'default' => null, 'length' => 100, 'collate' => 'utf8_unicode_ci', 'charset' => 'utf8'],
        'comment_type' => ['type' => 'string', 'null' => false, 'default' => 'comment', 'length' => 100, 'collate' => 'utf8_unicode_ci', 'charset' => 'utf8'],
        'lft' => ['type' => 'integer', 'null' => true, 'default' => null],
        'rght' => ['type' => 'integer', 'null' => true, 'default' => null],
        'updated' => ['type' => 'datetime', 'null' => false, 'default' => null],
        'created' => ['type' => 'datetime', 'null' => false, 'default' => null],
        'indexes' => [
            'PRIMARY' => ['column' => 'id', 'unique' => 1]
        ],
        'tableParameters' => ['charset' => 'utf8', 'collate' => 'utf8_unicode_ci', 'engine' => 'InnoDB']
    ];
}