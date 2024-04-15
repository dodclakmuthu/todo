<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\TaskRepository;

class TaskController extends Controller
{
  public function getTasks(Request $request)
  {
    $tasks = TaskRepository::getAllTasks();
    $data = ['success' => true,'tasks'=> $tasks];
    return response()->json($data, 200);
  }
}
