<?php

// THIS FILE IS AUTO GENERATED FROM DATABASE TABLES
// DO NOT EDIT THIS FILE, OR YOUR MODIFICATIONS WILL BE LOST.
 
namespace App\Common\Model\AutoGenerated;

/**
 * @property int $id  default: (NULL), max length: 11, raw type: int
 * @property int|null $level  default: (NULL), max length: 11, raw type: int
 * @property int $pintai  default: (NULL), max length: 1, raw type: tinyint
 * @property int|null $user_id  default: (NULL), max length: 11, raw type: int
 * @property int|null $ratio  default: (NULL), max length: 11, raw type: int
 * @property int|null $product_id  default: (NULL), max length: 11, raw type: int
 * @property int|null $source_id  default: (NULL), max length: 11, raw type: int
 * @property int $status  default: (1), max length: 1, raw type: tinyint
 */
class product_flow_source_celue_user extends \App\Common\Model\BaseModel {
    static $table_name  = 'yzb_product_flow_source_celue_user';
    static $primary_key = 'id';
}
