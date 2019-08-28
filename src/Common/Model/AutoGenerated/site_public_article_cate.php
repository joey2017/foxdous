<?php

// THIS FILE IS AUTO GENERATED FROM DATABASE TABLES
// DO NOT EDIT THIS FILE, OR YOUR MODIFICATIONS WILL BE LOST.
 
namespace App\Common\Model\AutoGenerated;

/**
 * @property int $id  default: (NULL), max length: 11, raw type: int
 * @property string|null $name  default: (NULL), max length: 50, raw type: varchar
 * @property int|null $level  default: (1), max length: 11, raw type: int
 * @property int|null $parent_id  default: (0), max length: 11, raw type: int
 * @property int|null $user_type  default: (0), max length: 255, raw type: tinyint
 * @property int|null $add_time  default: (NULL), max length: 11, raw type: int
 * @property int|null $edit_time  default: (NULL), max length: 11, raw type: int
 * @property int|null $publish_only  default: (0), max length: 4, raw type: tinyint
 */
class site_public_article_cate extends \App\Common\Model\BaseModel {
    static $table_name  = 'yzb_site_public_article_cate';
    static $primary_key = 'id';
}
