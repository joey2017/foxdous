<?php

// THIS FILE IS AUTO GENERATED FROM DATABASE TABLES
// DO NOT EDIT THIS FILE, OR YOUR MODIFICATIONS WILL BE LOST.
 
namespace App\Common\Model\AutoGenerated;

/**
 * @property int $id  default: (NULL), max length: 11, raw type: int
 * @property int|null $product_id  default: (NULL), max length: 11, raw type: int
 * @property int|null $source_id  default: (NULL), max length: 11, raw type: int
 * @property int|null $sort  default: (NULL), max length: 11, raw type: int
 * @property int|null $weight  default: (NULL), max length: 11, raw type: int
 * @property int|null $enabled  default: (1), max length: 11, raw type: int
 */
class product_telephone_source_settings extends \App\Common\Model\BaseModel {
    static $table_name  = 'yzb_product_telephone_source_settings';
    static $primary_key = 'id';
}
