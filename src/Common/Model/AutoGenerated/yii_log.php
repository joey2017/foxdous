<?php

// THIS FILE IS AUTO GENERATED FROM DATABASE TABLES
// DO NOT EDIT THIS FILE, OR YOUR MODIFICATIONS WILL BE LOST.
 
namespace App\Common\Model\AutoGenerated;

/**
 * @property int $id  default: (NULL), max length: 20, raw type: bigint
 * @property int|null $level  default: (NULL), max length: 11, raw type: int
 * @property string|null $category  default: (NULL), max length: 255, raw type: varchar
 * @property float|null $log_time  default: (NULL), raw type: double
 * @property string|null $prefix  default: (NULL), raw type: text
 * @property string|null $message  default: (NULL), raw type: text
 */
class yii_log extends \App\Common\Model\BaseModel {
    static $table_name  = 'yzb_yii_log';
    static $primary_key = 'id';
}
