<?php

// THIS FILE IS AUTO GENERATED FROM DATABASE TABLES
// DO NOT EDIT THIS FILE, OR YOUR MODIFICATIONS WILL BE LOST.
 
namespace App\Common\Model\AutoGenerated;

/**
 * @property int $id  default: (NULL), max length: 11, raw type: int
 * @property string $template_id  default: (0), max length: 32, raw type: varchar
 * @property int $product_id  default: (0), max length: 11, raw type: int
 * @property int $sell_user_id  default: (0), max length: 11, raw type: int
 * @property float $source_price  default: (NULL), max length: 12, raw type: decimal
 * @property float|null $source_cost  default: (NULL), max length: 12, raw type: decimal
 * @property string|null $num  default: (1), max length: 100, raw type: varchar
 * @property int $status  default: (1), max length: 1, raw type: tinyint
 * @property int $sell_status  default: (1), max length: 1, raw type: tinyint
 * @property int|null $review_status  default: (1), max length: 1, raw type: tinyint
 * @property int|null $add_time  default: (0), max length: 11, raw type: int
 * @property int|null $edit_time  default: (0), max length: 11, raw type: int
 * @property float $face_value  default: (NULL), max length: 10, raw type: decimal
 */
class product_common_template_relation extends \App\Common\Model\BaseModel {
    static $table_name  = 'yzb_product_common_template_relation';
    static $primary_key = 'id';
}
