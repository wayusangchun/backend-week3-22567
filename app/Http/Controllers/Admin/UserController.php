<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserController extends Controller
{
   public function userHome() {
    return view('home');
   }

   public function userAbout() {
    return view('About');
   }

   public function adminLogin(){
    return view('admin.login');
   }
}
