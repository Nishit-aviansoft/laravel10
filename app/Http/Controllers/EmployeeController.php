<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use Illuminate\Support\Facades\DB;
use App\Models\Employee;

class EmployeeController extends Controller
{
    // function getData()
    // {
    //     return DB::table('employee')
    //     ->join('company','employee.employee_id','=','company.company_id')
    //     ->select('company.*','employee.*')
    //     // ->where('employee.employee_id',2)
    //     // ->select('employee.name')
    //     ->get();
    // }

    // function index()
    // {
    //     return Employee::find(1)->getCompany;  
    // }
}
