<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AssesmentController extends Controller {
   

    public function insert_assessment(Request $request) {
        // This is a small documentation on how the assessment form works.
    
        // First, once the form is submitted, we have to insert in the database 
        // the value "completed" in the table "users" inside the "completed_assignment" role. 
        // The default value inside "completed_assignment" is "not_completed". 
        // Once the form is submitted the field is updated with the value "completed" 
        // so that the system will allow access to the full system.
        // The idea is that if a user has not completed the assessment, it will not allow them to see the content inside.
    
        // Collecting form data
        $completed = $request->completed;
        $name = $request->name_of_user; 
        $email = $request->email_of_user;
        $phone_number_of_user = $request->phone_number_of_user;
        $industry_knowledge = $request->industry_knowledge;
        $industry_experience = $request->industry_experience;
        $description = $request->description;
        $current_position = $request->current_position;
        $monthly_income = $request->montly_income;
        $accomplish_job = $request->accomplish_job; 
        $sixMonths = $request->six_months;
        $twelveMonths = $request->twelve_months;
        $hours_daily = $request->hours_daily;
        $priority = $request->priority;
        $occupation = $request->occupation;
        $are_you_ready = $request->are_you_ready;
    
        $money_useage = collect($request->money_useage)->filter()->implode(', ');
    
        DB::table('users')
            ->where('email', $email)
            ->update(['completed_assignment' => $completed]);
    
        DB::table('assesments')->insert([
            'name_of_user' => $name,
            'phone_number_of_user' => $phone_number_of_user,  
            'email_of_user' => $email,
            'industry_knowledge' => $industry_knowledge, 
            'industry_experience' =>  $industry_experience,
            'description' => $description, 
            'current_position' => $current_position,
            'montly_income' => $monthly_income, 
            'money_useage' => $money_useage, 
            'accomplish_job' =>  $accomplish_job, 
            'six_months' =>  $sixMonths, 
            'twelve_months' =>  $twelveMonths,
            'hours_daily' => $hours_daily,
            'priority' => $priority, 
            'occupation' => $occupation, 
            'are_you_ready' => $are_you_ready
        ]);
    
        return redirect('/dashboard')->with('message', 'Благодарим за информацията! Вие успешно отключихте');
    }


}