<?php

// THIS FILE IS AUTO GENERATED FROM DATABASE TABLES
// DO NOT EDIT THIS FILE, OR YOUR MODIFICATIONS WILL BE LOST.
 
namespace App\Common\Model\AutoGenerated;

/**
 * @property int $id  default: (NULL), max length: 11, raw type: int
 * @property int|null $user_level  default: (NULL), max length: 11, raw type: int
 * @property int|null $ratio  default: (NULL), max length: 11, raw type: int
 * @property int|null $level  default: (NULL), max length: 11, raw type: int
 * @property int|null $relation_id  default: (NULL), max length: 11, raw type: int
 * @property int|null $pintai  default: (NULL), max length: 1, raw type: tinyint
 * @property int $status  default: (1), max length: 1, raw type: tinyint
 */
class product_common_celue_level extends \App\Common\Model\BaseModel {
    static $table_name  = 'yzb_product_common_celue_level';
    static $primary_key = 'id';
}
