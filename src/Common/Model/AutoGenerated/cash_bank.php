<?php

// THIS FILE IS AUTO GENERATED FROM DATABASE TABLES
// DO NOT EDIT THIS FILE, OR YOUR MODIFICATIONS WILL BE LOST.
 
namespace App\Common\Model\AutoGenerated;

/**
 * @property int $id  default: (NULL), max length: 10, raw type: int
 * @property string|null $name  default: (NULL), max length: 50, raw type: varchar
 * @property int|null $interface_type  default: (NULL), max length: 4, raw type: tinyint
 * @property float|null $transfer_cash_max  default: (NULL), max length: 10, raw type: decimal
 * @property float|null $transfer_cash_min  default: (NULL), max length: 10, raw type: decimal
 * @property int|null $transfer_count  default: (NULL), max length: 4, raw type: tinyint
 * @property int|null $shouxu_id  default: (NULL), max length: 11, raw type: int
 * @property int|null $available_status  default: (0), max length: 4, raw type: tinyint
 * @property int|null $add_time  default: (NULL), max length: 11, raw type: int
 * @property int|null $edit_time  default: (NULL), max length: 11, raw type: int
 * @property float|null $min_price  default: (0), max length: 10, raw type: decimal
 * @property int|null $accumulate_type  default: (0), max length: 4, raw type: tinyint
 */
class cash_bank extends \App\Common\Model\BaseModel {
    static $table_name  = 'yzb_cash_bank';
    static $primary_key = 'id';
}
