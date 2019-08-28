<?php

// THIS FILE IS AUTO GENERATED FROM DATABASE TABLES
// DO NOT EDIT THIS FILE, OR YOUR MODIFICATIONS WILL BE LOST.
 
namespace App\Common\Model\AutoGenerated;

/**
 * @property int $id  default: (NULL), max length: 11, raw type: int
 * @property int $platform_id  default: (NULL), max length: 1, raw type: int
 * @property int|null $product_id  default: (NULL), max length: 11, raw type: int
 * @property int|null $user_level  default: (NULL), max length: 11, raw type: int
 * @property string|null $buy_acc  default: (NULL), max length: 255, raw type: varchar
 * @property float $price  default: (NULL), max length: 12, raw type: decimal
 * @property float|null $profit  default: (NULL), max length: 12, raw type: decimal
 * @property int $price_limit  default: (0), max length: 1, raw type: tinyint
 * @property int $status  default: (1), max length: 1, raw type: tinyint
 * @property int $price_set_status  default: (0), max length: 1, raw type: tinyint
 * @property int $area_priority  default: (2), max length: 1, raw type: tinyint
 * @property int $strategy  default: (1), max length: 1, raw type: tinyint
 * @property int|null $edit_time  default: (0), max length: 11, raw type: int
 * @property int|null $add_time  default: (0), max length: 11, raw type: int
 * @property float $rebate  default: (0), max length: 12, raw type: decimal
 */
class product_mobile_level extends \App\Common\Model\BaseModel {
    static $table_name  = 'yzb_product_mobile_level';
    static $primary_key = 'id';
}
