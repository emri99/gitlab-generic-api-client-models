<?php

namespace Emri99\Gitlab\Model;

/**
 * @property User $author
 * @property string $body
 * @property string $created_at
 * @property string $updated_at
 * @property string $parent_type
 * @property Issue|MergeRequest $parent
 * @property string $attachment
 * @property bool $system
 */
class Note
{
    /**
     * @var array
     */
    protected static $properties = array(
        'id',
        'author',
        'body',
        'created_at',
        'updated_at',
        'parent_type',
        'parent',
        'attachment',
        'system'
    );

    /**
     * @param array $data
     * @return mixed
     */
    public static function fromArray(array $data)
    {
        $comment = new static();

        if (isset($data['author'])) {
            $data['author'] = User::fromArray($data['author']);
        }

        return $comment->hydrate($data);
    }
}
