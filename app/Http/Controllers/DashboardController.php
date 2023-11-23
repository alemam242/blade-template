<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    function home(){
        return view("pages.home");
    }

    function task_list(){
        $tasks=[
            ["name"=>"Task 1", "task_count"=>12],
            ["name"=>"Task 2", "task_count"=>15],
            ["name"=>"Task 3", "task_count"=>24],
            ["name"=>"Task 4", "task_count"=>19],
        ];
        return view("pages.task_list",compact("tasks"));
    }
}
