<?php

namespace Emri99\Gitlab\Model;

/**
 * @property int $id
 * @property int $iid
 * @property string $target_branch
 * @property string $source_branch
 * @property int $project_id
 * @property string $title
 * @property string $description
 * @property bool $closed
 * @property bool $merged
 * @property string $state
 * @property int $source_project_id
 * @property int $target_project_id
 * @property int $upvotes
 * @property int $downvotes
 * @property array $labels
 * @property User $author
 * @property User $assignee
 * @property Project $project
 * @property Milestone $milestone
 * @property File[] $files
 */
class MergeRequest
{
}
