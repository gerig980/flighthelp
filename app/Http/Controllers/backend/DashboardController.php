<?php

namespace App\Http\Controllers\backend;

use Carbon\Carbon;
use App\Models\Application;
use Illuminate\Http\Request;
use App\Models\AskAppointment;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Notification;


class DashboardController extends Controller
{
    public function index(Request $request){

        $applications = Application::all();
        $year = Carbon::now()->format('Y');
        $jan = Application::whereYear('created_at', '=', $year)->whereMonth('created_at', '=', '01')->get();
        $feb = Application::whereYear('created_at', '=', $year)->whereMonth('created_at', '=', '02')->get();
        $march = Application::whereYear('created_at', '=', $year)->whereMonth('created_at', '=', '03')->get();
        $apr = Application::whereYear('created_at', '=', $year)->whereMonth('created_at', '=', '04')->get();
        $may = Application::whereYear('created_at', '=', $year)->whereMonth('created_at', '=', '05')->get();
        $june = Application::whereYear('created_at', '=', $year)->whereMonth('created_at', '=', '06')->get();
        $july = Application::whereYear('created_at', '=', $year)->whereMonth('created_at', '=', '07')->get();
        $aug = Application::whereYear('created_at', '=', $year)->whereMonth('created_at', '=', '08')->get();
        $sept = Application::whereYear('created_at', '=', $year)->whereMonth('created_at', '=', '09')->get();
        $oct = Application::whereYear('created_at', '=', $year)->whereMonth('created_at', '=', '10')->get();
        $nov = Application::whereYear('created_at', '=', $year)->whereMonth('created_at', '=', '11')->get();
        $dec = Application::whereYear('created_at', '=', $year)->whereMonth('created_at', '=', '12')->get();
        return view('dashboard',compact('applications','jan','feb','march','apr','may','june','july','aug','sept','oct','nov','dec'));
    }
    
}
