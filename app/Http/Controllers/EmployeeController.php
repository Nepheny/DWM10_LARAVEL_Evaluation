<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Employee as Employee;
use \App\Workplace;

class EmployeeController extends Controller
{
    public function display()
    {
        $employees = Employee::all();
        return view('employee.show', ['employees' => $employees]);
    }

    public function insertForm()
    {
        $workplaces = Workplace::all();
        return view('employee.insert', ['workplaces' => $workplaces]);
    }

    public function insertAction(Request $request)
    {
        $form = $request->input();
        unset($form['_token']);
        $employee = new Employee;
        $employee->name = $form['name'];
        $employee->email = $form['email'];
        $employee->seniority = $form['seniority'];
        $employee->workplace_id = $form['workplace'];
        $employee->save();
        return redirect('/employees');
    }

    public function deleteAction(Request $request)
    {
        Employee::destroy($request->input('id'));
        return redirect('/employees');
    }

    public function updateForm(Request $request)
    {
        $workplaces = Workplace::all();
        $employee = Employee::find($request->input('id'));
        return view('/employee.update', ['employee' => $employee, 'workplaces' => $workplaces]);
    }

    public function updateAction(Request $request)
    {
        $form = $request->input();
        unset($form['_token']);
        $employee = Employee::find($request->input('id'));
        $employee->name = $form['name'];
        $employee->email = $form['email'];
        $employee->seniority = $form['seniority'];
        $employee->workplace_id = $form['workplace'];
        $employee->save();
        return redirect('/employees');
    }
}
