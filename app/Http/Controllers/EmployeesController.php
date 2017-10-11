<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EmployeesController extends Controller
{
    public function employeesShow($part_name)
    {
    	switch ($part_name)
    	{
    		case "mu-test-score":
    		{
    			$scores = loadCSV('employees-mu-test-score');
    			return view('mu_scores',compact('scores'));
    		} 
    		break;
    		case "position":
    		{
    			$positions = loadCSV('employees-position');
                $scores = loadCSV('employees-mu-test-score');
    			return view('positions',compact('positions','scores'));
    		}
    		break;
    		default:
    			return "Error";
    	}

    }
}
