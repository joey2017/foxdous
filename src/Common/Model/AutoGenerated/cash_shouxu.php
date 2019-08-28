<?php

// THIS FILE IS AUTO GENERATED FROM DATABASE TABLES
// DO NOT EDIT THIS FILE, OR YOUR MODIFICATIONS WILL BE LOST.
 
namespace App\Common\Model\AutoGenerated;

/**
 * @property int $id  default: (NULL), max length: 11, raw type: int
 * @property string|null $name  default: (NULL), max length: 50, raw type: varchar
 * @property float|null $start_price  default: (NULL), max length: 15, raw type: decimal
 * @property float|null $start_num  default: (NULL), max length: 15, raw type: decimal
 * @property int|null $start_plug  default: (1), max length: 4, raw type: tinyint
 * @property string|null $middle_price  default: (NULL), max length: 50, raw type: varchar
 * @property string|null $middle_range  default: (NULL), max length: 255, raw type: varchar
 * @property float|null $end_price  default: (NULL), max length: 15, raw type: decimal
 * @property float|null $end_num  default: (NULL), max length: 15, raw type: decimal
 * @property float|null $min_price  default: (0), max length: 10, raw type: decimal
 * @property int|null $accumulate_type  default: (NULL), max length: 4, raw type: tinyint
 * @property int|null $add_time  default: (NULL), max length: 11, raw type: int
 * @property int|null $edit_time  default: (NULL), max length: 11, raw type: int
 */
class cash_shouxu extends \App\Common\Model\BaseModel {
    static $table_name  = 'yzb_cash_shouxu';
    static $primary_key = 'id';
}