<?php

namespace Emri99\Gitlab\Model;

/**
 * @property int $id
 * @property string $name
 * @property string $path
 * @property string $kind
 * @property int $owner_id
 * @property string $created_at
 * @property string $updated_at
 * @property string $description
 * @property string $full_path
 */
class ProjectNamespace
{
    /**
     * @var array
     */
    protected static $properties = [
        'id',
        'name',
        'path',
        'kind',
        'owner_id',
        'created_at',
        'updated_at',
        'description'
    ];
}
