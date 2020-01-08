<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class subAdminController extends Controller
{
    public function __construct()
    {
        $this->middleware(['role:super_admin']);
    }
}
