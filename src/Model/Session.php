<?php

namespace Emri99\Gitlab\Model;

/**
 * @property int $id
 * @property string $email
 * @property string $name
 * @property string $private_token
 * @property string $created_at
 * @property bool $blocked
 */
class Session
{
    /**
     * @var array
     */
    protected static $properties = array(
        'id',
        'email',
        'name',
        'private_token',
        'created_at',
        'blocked'
    );
}
