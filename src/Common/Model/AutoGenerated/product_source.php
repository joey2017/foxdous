<?php

// THIS FILE IS AUTO GENERATED FROM DATABASE TABLES
// DO NOT EDIT THIS FILE, OR YOUR MODIFICATIONS WILL BE LOST.
 
namespace App\Common\Model\AutoGenerated;

/**
 * @property int $id  default: (NULL), max length: 11, raw type: int
 * @property string $template_id  default: (0), max length: 32, raw type: varchar
 * @property int $product_id  default: (0), max length: 11, raw type: int
 * @property int $operator_id  default: (0), max length: 1, raw type: int
 * @property string|null $operator_name  default: (NULL), max length: 20, raw type: varchar
 * @property int $province_code  default: (0), max length: 11, raw type: int
 * @property string $province_name  default: (), max length: 50, raw type: varchar
 * @property int $city_code  default: (0), max length: 11, raw type: int
 * @property string $city_name  default: (), max length: 50, raw type: varchar
 * @property int $sell_user_id  default: (0), max length: 11, raw type: int
 * @property int $face_value_type  default: (1), max length: 1, raw type: tinyint
 * @property float $face_value  default: (NULL), max length: 10, raw type: decimal
 * @property int $speed  default: (NULL), max length: 1, raw type: tinyint
 * @property string $num  default: (1), max length: 100, raw type: varchar
 * @property float $source_price  default: (NULL), max length: 12, raw type: decimal
 * @property float|null $source_cost  default: (NULL), max length: 12, raw type: decimal
 * @property float|null $discount  default: (NULL), max length: 255, raw type: float
 * @property string|null $info  default: (NULL), max length: 255, raw type: varchar
 * @property int $sell_status  default: (1), max length: 1, raw type: tinyint
 * @property int $status  default: (1), max length: 1, raw type: tinyint
 * @property int|null $review_status  default: (1), max length: 1, raw type: tinyint
 * @property int $is_mvno  default: (0), max length: 1, raw type: tinyint
 * @property int|null $mvno  default: (0), max length: 11, raw type: int
 * @property int|null $add_time  default: (NULL), max length: 11, raw type: int
 * @property int|null $edit_time  default: (NULL), max length: 11, raw type: int
 */
class product_source extends \App\Common\Model\BaseModel {
    static $table_name  = 'product_source';
    static $primary_key = 'id';
}
