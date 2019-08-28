<?php

// THIS FILE IS AUTO GENERATED FROM DATABASE TABLES
// DO NOT EDIT THIS FILE, OR YOUR MODIFICATIONS WILL BE LOST.
 
namespace App\Common\Model\AutoGenerated;

/**
 * @property int $id  default: (NULL), max length: 11, raw type: int
 * @property int $product_id  default: (NULL), max length: 11, raw type: int
 * @property string $num  default: (1), max length: 100, raw type: varchar
 * @property int $user_level  default: (NULL), max length: 11, raw type: int
 * @property float $sell_price  default: (NULL), max length: 12, raw type: decimal
 * @property float|null $lirun  default: (NULL), max length: 12, raw type: decimal
 * @property float $rebate  default: (0), max length: 12, raw type: decimal
 * @property int $xiejia  default: (0), max length: 1, raw type: tinyint
 * @property int $price_set_status  default: (0), max length: 1, raw type: tinyint
 * @property int $status  default: (1), max length: 1, raw type: tinyint
 * @property int $celue_type  default: (1), max length: 1, raw type: tinyint
 * @property int|null $pintai  default: (NULL), max length: 1, raw type: tinyint
 * @property int|null $add_time  default: (NULL), max length: 11, raw type: int
 * @property int|null $edit_time  default: (NULL), max length: 11, raw type: int
 */
class product_common_level extends \App\Common\Model\BaseModel {
    static $table_name  = 'yzb_product_common_level';
    static $primary_key = 'id';
}
