<?php

// THIS FILE IS AUTO GENERATED FROM DATABASE TABLES
// DO NOT EDIT THIS FILE, OR YOUR MODIFICATIONS WILL BE LOST.
 
namespace App\Common\Model\AutoGenerated;

/**
 * @property int $id  default: (NULL), max length: 11, raw type: int
 * @property int|null $scene_id  default: (NULL), max length: 11, raw type: int
 * @property int|null $cate_id  default: (NULL), max length: 11, raw type: int
 * @property string|null $label_id  default: (NULL), max length: 50, raw type: varchar
 * @property string|null $title  default: (NULL), max length: 50, raw type: varchar
 * @property string|null $abstracte  default: (NULL), max length: 255, raw type: varchar
 * @property string|null $keywords  default: (NULL), max length: 255, raw type: varchar
 * @property string|null $images  default: (NULL), max length: 255, raw type: varchar
 * @property string|null $content  default: (NULL), raw type: text
 * @property string|null $author  default: (NULL), max length: 255, raw type: varchar
 * @property string|null $add_user  default: (NULL), max length: 255, raw type: varchar
 * @property int|null $publish  default: (NULL), max length: 5, raw type: tinyint
 * @property string|null $view_count  default: (NULL), max length: 255, raw type: varchar
 * @property int|null $add_time  default: (NULL), max length: 11, raw type: int
 * @property int|null $edit_time  default: (NULL), max length: 11, raw type: int
 * @property int|null $publish_time  default: (NULL), max length: 11, raw type: int
 */
class site_sup_article extends \App\Common\Model\BaseModel {
    static $table_name  = 'yzb_site_sup_article';
    static $primary_key = 'id';
}