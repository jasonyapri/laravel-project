<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;

class AdminController extends Controller
{
    public function fetchAdmins()
    {
        $admins = Admin::whereBetween('id', [33,44])->orderBy('id', 'DESC')->get();
        return $admins;
    }
    
}
