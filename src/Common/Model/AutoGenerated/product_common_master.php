<?php

// THIS FILE IS AUTO GENERATED FROM DATABASE TABLES
// DO NOT EDIT THIS FILE, OR YOUR MODIFICATIONS WILL BE LOST.
 
namespace App\Common\Model\AutoGenerated;

/**
 * @property int $id  default: (NULL), max length: 11, raw type: int
 * @property string $name  default: (NULL), max length: 255, raw type: varchar
 * @property int $cate_id  default: (NULL), max length: 11, raw type: int
 * @property int $unit  default: (1), max length: 1, raw type: tinyint
 * @property int|null $sort  default: (0), max length: 1, raw type: tinyint
 * @property int|null $add_time  default: (NULL), max length: 11, raw type: int
 * @property int|null $edit_time  default: (NULL), max length: 11, raw type: int
 */
class product_common_master extends \App\Common\Model\BaseModel {
    static $table_name  = 'yzb_product_common_master';
    static $primary_key = 'id';
}
