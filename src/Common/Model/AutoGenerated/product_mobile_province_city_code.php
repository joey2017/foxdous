<?php

// THIS FILE IS AUTO GENERATED FROM DATABASE TABLES
// DO NOT EDIT THIS FILE, OR YOUR MODIFICATIONS WILL BE LOST.
 
namespace App\Common\Model\AutoGenerated;

/**
 * @property int $id  default: (NULL), max length: 11, raw type: int
 * @property string $province_name  default: (NULL), max length: 50, raw type: varchar
 * @property string|null $city_name  default: (NULL), max length: 50, raw type: varchar
 * @property string $province_code  default: (1), max length: 50, raw type: varchar
 * @property string $city_code  default: (0), max length: 50, raw type: varchar
 * @property int|null $add_time  default: (NULL), max length: 11, raw type: int
 */
class product_mobile_province_city_code extends \App\Common\Model\BaseModel {
    static $table_name  = 'yzb_product_mobile_province_city_code';
    static $primary_key = 'id';
}
