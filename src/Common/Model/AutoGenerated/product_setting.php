<?php

// THIS FILE IS AUTO GENERATED FROM DATABASE TABLES
// DO NOT EDIT THIS FILE, OR YOUR MODIFICATIONS WILL BE LOST.
 
namespace App\Common\Model\AutoGenerated;

/**
 * @property int $id  default: (NULL), max length: 11, raw type: int
 * @property int|null $platform_id  default: (NULL), max length: 1, raw type: int
 * @property int|null $product_id  default: (NULL), max length: 11, raw type: int
 * @property string|null $subject_type  default: (NULL), max length: 10, raw type: varchar
 * @property int|null $subject_id  default: (NULL), max length: 11, raw type: int
 * @property float|null $price  default: (NULL), max length: 12, raw type: decimal
 * @property int|null $enabled  default: (NULL), max length: 11, raw type: int
 * @property string|null $sell_status  default: (1), max length: 8, raw type: varchar
 * @property string|null $auto_refund  default: (NULL), max length: 8, raw type: varchar
 * @property string|null $price_limit  default: (0), max length: 16, raw type: varchar
 * @property string|null $strategy  default: (1), max length: 16, raw type: varchar
 * @property string|null $area_priority  default: (2), max length: 16, raw type: varchar
 * @property string|null $provider_id  default: (NULL), max length: 16, raw type: varchar
 * @property float|null $rebate  default: (0), max length: 12, raw type: decimal
 * @property float|null $profit  default: (NULL), max length: 12, raw type: decimal
 * @property int|null $edit_time  default: (0), max length: 11, raw type: int
 * @property int|null $add_time  default: (0), max length: 11, raw type: int
 * @property int|null $reserved_0  default: (NULL), max length: 11, raw type: int
 * @property int|null $reserved_1  default: (NULL), max length: 11, raw type: int
 * @property int|null $reserved_2  default: (NULL), max length: 11, raw type: int
 * @property int|null $reserved_3  default: (NULL), max length: 11, raw type: int
 * @property string|null $reserved_4  default: (NULL), max length: 32, raw type: varchar
 * @property string|null $reserved_5  default: (NULL), max length: 32, raw type: varchar
 */
class product_setting extends \App\Common\Model\BaseModel {
    static $table_name  = 'product_setting';
    static $primary_key = 'id';
}
