<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\SoftDeletes;
use Carbon;
use Hash;

class User extends Authenticatable
{
    use Notifiable, SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $guarded = [];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = ['deleted_at'];

    public function createUser($request)
    {
        // Employee Details

        $this->employee_id = $request->employee_id;
        $this->position_id = $request->position_id;
        $this->department_id = $request->department_id;
        $this->team_id = $request->team_id;
        $this->base_salary = floatval(str_replace(',', '', $request->base_salary));
        $this->tax_status = $request->tax_status;
        $this->payment_frequency = $request->payment_frequency;
        $this->hire_date = Carbon::parse($request->hire_date);
        $this->direct_manager_id = $request->direct_manager_id;
        $this->workshift_id = $request->workshift_id;

        // Personal Information

        $this->first_name = $request->first_name;
        $this->middle_name = $request->middle_name;
        $this->last_name = $request->last_name;
        $this->birth_date = Carbon::parse($request->birth_date);
        $this->gender_id = $request->gender_id;
        $this->nationality = $request->nationality;
        $this->religion = $request->religion;

        // Contact Details

        $this->present_unit_number = $request->present_unit_number;
        $this->present_building_number = $request->present_building_number;
        $this->present_street_name = $request->present_street_name;
        $this->present_subdivision = $request->present_subdivision;
        $this->present_barangay_id = $request->present_barangay_id;
        $this->present_city_id = $request->present_city_id;
        $this->present_province_id = $request->present_province_id;
        $this->present_country_id = $request->present_country_id;
        $this->present_zip_code_id = $request->present_zip_code_id;

        $this->permanent_unit_number = $request->permanent_unit_number;
        $this->permanent_building_number = $request->permanent_building_number;
        $this->permanent_street_name = $request->permanent_street_name;
        $this->permanent_subdivision = $request->permanent_subdivision;
        $this->permanent_barangay_id = $request->permanent_barangay_id;
        $this->permanent_city_id = $request->permanent_city_id;
        $this->permanent_province_id = $request->permanent_province_id;
        $this->permanent_country_id = $request->permanent_country_id;
        $this->permanent_zip_code_id = $request->permanent_zip_code_id;

        // Other Contact Details

        $this->email = $request->email;
        $this->mobile_number = $request->mobile_number;
        $this->landline = $request->landline;

        // Government Details

        $this->tin_number = $request->tin_number;
        $this->sss_number = $request->sss_number;
        $this->philhealth_number = $request->philhealth_number;
        $this->pagibig_number = $request->pagibig_number;

        // Other Fields

        $this->name = $request->last_name . ', ' . $request->first_name . ' ' . $request->middle_name;
        $this->password = Hash::make($request->employee_id);

        $this->save();
    }

    public function updateUser($request, $user)
    {
        // Employee Details

        $this->employee_id = $request->employee_id;
        $this->position_id = $request->position_id;
        $this->department_id = $request->department_id;
        $this->team_id = $request->team_id;
        $this->base_salary = floatval(str_replace(',', '', $request->base_salary));
        $this->tax_status = $request->tax_status;
        $this->payment_frequency = $request->payment_frequency;
        $this->hire_date = Carbon::parse($request->hire_date);
        $this->direct_manager_id = $request->direct_manager_id;
        $this->workshift_id = $request->workshift_id;

        // Personal Information

        $this->first_name = $request->first_name;
        $this->middle_name = $request->middle_name;
        $this->last_name = $request->last_name;
        $this->birth_date = Carbon::parse($request->birth_date);
        $this->gender_id = $request->gender_id;
        $this->nationality = $request->nationality;
        $this->religion = $request->religion;

        // Contact Details

        $this->present_unit_number = $request->present_unit_number;
        $this->present_building_number = $request->present_building_number;
        $this->present_street_name = $request->present_street_name;
        $this->present_subdivision = $request->present_subdivision;
        $this->present_barangay_id = $request->present_barangay_id;
        $this->present_city_id = $request->present_city_id;
        $this->present_province_id = $request->present_province_id;
        $this->present_country_id = $request->present_country_id;
        $this->present_zip_code_id = $request->present_zip_code_id;

        $this->permanent_unit_number = $request->permanent_unit_number;
        $this->permanent_building_number = $request->permanent_building_number;
        $this->permanent_street_name = $request->permanent_street_name;
        $this->permanent_subdivision = $request->permanent_subdivision;
        $this->permanent_barangay_id = $request->permanent_barangay_id;
        $this->permanent_city_id = $request->permanent_city_id;
        $this->permanent_province_id = $request->permanent_province_id;
        $this->permanent_country_id = $request->permanent_country_id;
        $this->permanent_zip_code_id = $request->permanent_zip_code_id;

        // Other Contact Details

        $this->email = $request->email;
        $this->mobile_number = $request->mobile_number;
        $this->landline = $request->landline;

        // Government Details

        $this->tin_number = $request->tin_number;
        $this->sss_number = $request->sss_number;
        $this->philhealth_number = $request->philhealth_number;
        $this->pagibig_number = $request->pagibig_number;

        // Other Fields

        $this->name = $request->last_name . ', ' . $request->first_name . ' ' . $request->middle_name;
        $this->password = Hash::make($request->employee_id);

        $this->save();
    }

    // Helper functions for 'Gender'
    public function gender()
    {
        return $this->hasOne('App\Gender', 'id', 'gender_id');
    }

    public function getGender()
    {
        return $this->gender->name;
    }

    public function position()
    {
        return $this->hasOne('App\Position', 'id', 'position_id');
    }

    public function getPosition()
    {
        return $this->position->name;
    }

    public function team()
    {
        return $this->hasOne('App\Team', 'id', 'team_id');
    }

    public function getTeam()
    {
        return $this->team->name;
    }

    public function department()
    {
        return $this->hasOne('App\Department', 'id', 'department_id');
    }

    public function getDepartment()
    {
        return $this->department->name;
    }

    public function workshift()
    {
        return $this->hasOne('App\Workshift', 'id', 'workshift_id');
    }

    public function getWorkshiftCode()
    {
        return $this->workshift->code;
    }

    public function getWorkshiftName()
    {
        return $this->workshift->name;
    }
}
