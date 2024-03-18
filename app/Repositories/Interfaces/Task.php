<?php

namespace App\Repositories\Interfaces;

interface Task
{
    public static function getAllTasks();
    public function getTaskById($taskId);
    public function deleteTask($taskId);
    public function createTask(array $task);
    public function updateTask($taskId, array $task);
}