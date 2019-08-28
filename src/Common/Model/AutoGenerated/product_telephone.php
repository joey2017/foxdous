<?php

// THIS FILE IS AUTO GENERATED FROM DATABASE TABLES
// DO NOT EDIT THIS FILE, OR YOUR MODIFICATIONS WILL BE LOST.
 
namespace App\Common\Model\AutoGenerated;

/**
 * @property int $id  default: (NULL), max length: 11, raw type: int
 * @property int|null $platform_id  default: (NULL), max length: 11, raw type: int
 * @property int|null $operator_id  default: (NULL), max length: 1, raw type: int
 * @property int $speed  default: (1), max length: 1, raw type: tinyint
 * @property string $name  default: (NULL), max length: 50, raw type: varchar
 * @property float $face_value  default: (NULL), max length: 10, raw type: decimal
 * @property string $num  default: (1), max length: 100, raw type: varchar
 * @property int $face_value_type  default: (1), max length: 1, raw type: tinyint
 * @property string|null $buy_acc  default: (NULL), max length: 50, raw type: varchar
 * @property float $price  default: (NULL), max length: 12, raw type: decimal
 * @property float|null $profit  default: (NULL), max length: 12, raw type: decimal
 * @property int|null $price_limit  default: (0), max length: 1, raw type: tinyint
 * @property int|null $status  default: (1), max length: 1, raw type: tinyint
 * @property int $price_set_status  default: (0), max length: 1, raw type: tinyint
 * @property int $strategy  default: (1), max length: 1, raw type: tinyint
 * @property int|null $area_priority  default: (NULL), max length: 11, raw type: int
 * @property int $province_code  default: (0), max length: 11, raw type: int
 * @property int|null $city_code  default: (0), max length: 11, raw type: int
 * @property int|null $isp_id  default: (NULL), max length: 11, raw type: int
 * @property string|null $operator_name  default: (NULL), max length: 20, raw type: varchar
 * @property int $is_mvno  default: (0), max length: 1, raw type: tinyint
 * @property int|null $mvno  default: (0), max length: 11, raw type: int
 * @property int|null $edit_time  default: (0), max length: 11, raw type: int
 * @property int|null $add_time  default: (0), max length: 11, raw type: int
 * @property float|null $rebate  default: (NULL), max length: 12, raw type: decimal
 * @property int|null $auto_refund  default: (NULL), max length: 4, raw type: tinyint
 * @property string|null $note  default: (NULL), max length: 100, raw type: varchar
 * @property \SimpleRecord\DateTime|null $created_at  default: (NULL), max length: 19, raw type: datetime
 * @property \SimpleRecord\DateTime|null $updated_at  default: (NULL), max length: 19, raw type: datetime
 */
class product_telephone extends \App\Common\Model\BaseModel {
    static $table_name  = 'yzb_product_telephone';
    static $primary_key = 'id';
}
