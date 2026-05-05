<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function index()
    {
        $data = [
            'totalUsers' => User::count(),
            'newUsersThisMonth' => User::whereMonth('created_at', now()->month)->count(),
            'recentUsers' => User::latest()->take(5)->get(),
            'totalAdmins' => User::where('is_admin', 1)->count(),
        ];
        
        return view('admin.dashboard', $data);
    }
    
    public function apiStats()
    {
        $stats = [
            'total_users' => User::count(),
            'new_users_this_month' => User::whereMonth('created_at', now()->month)->count(),
            'total_admins' => User::where('is_admin', 1)->count(),
            'recent_users' => User::latest()->take(10)->get(),
        ];
        
        return response()->json($stats);
    }
}