<?php

namespace App\Repositories;

use App\Repositories\Interfaces\Task;
use App\Models\TaskModel;

class TaskRepository implements Task
{
  public static function getAllTasks()
  {
    return TaskModel::all();
  }
  public function getTaskById($taskId)
  {
    return TaskModel::find($taskId);
  }
  public function createTask(array $data){
    return TaskModel::create($data);
  }
  public function updateTask($taskId, array $data){
    throw new \Exception("Not Implemented");
  }
  public function deleteTask($taskId){
    throw new \Exception("Not Implemented");
  }
}
