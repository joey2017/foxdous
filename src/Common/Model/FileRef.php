<?php
namespace App\Common\Model;

use App\Common\Model\AutoGenerated\file_refs;

class FileRef extends file_refs {
    public static function createRef($fileId, $objectId, $objectType) {
        return self::create(['file_id' => $fileId, 'object_id' => $objectId, 'object_type' => $objectType]);
    }
}
