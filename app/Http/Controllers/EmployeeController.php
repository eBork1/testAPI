<?php

namespace App\Http\Controllers;

use App\employee;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    public function index(Request $request)
    {
        $employeeCount = $request->count;
        if ($employeeCount == null) {
            return employee::All();
        }else{
            return employee::All()->take($employeeCount);
        }

    }

    public function getByID($id)
    {
        return employee::where('id', $id)->get();
    }
}
