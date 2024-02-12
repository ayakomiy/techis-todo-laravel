<?php

namespace App\Policies;

use App\Models\User;
use App\Models\Task;
use League\Flysystem\UnixVisibility\PortableVisibilityConverterTest;

class TaskPolicy 
{
    /**
     * Create a new policy instance.
     */
    public function __construct()
    {
        //
    }

    /**
     * 指定されたユーザーのタスクの時のみ削除可能に
     * @param User $user
     * @param Task $task
     * @return bool
     */
    public function destroy(User $user, Task $task){
        return $user->id === $task->user_id;
    }
}
