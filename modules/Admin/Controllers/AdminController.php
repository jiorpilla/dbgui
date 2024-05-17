<?php

namespace Modules\Admin\Controllers;

use App\Http\Controllers\Controller;

class AdminController extends Controller
{
    public function index()
    {
        return view('admin::admin.index');
    }

    public function create()
    {
        return view('admin::admin.create');
    }
}
