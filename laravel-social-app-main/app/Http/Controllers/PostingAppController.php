<?php

namespace App\Http\Controllers;
use App\Models\postingApp;
use Illuminate\Http\Request;

class PostingAppController extends Controller
{
        public function forDashboard()
        {
            return view('dashboard');
        }
        public function forLoginIn()
        {
            return view('loginPage');
        }
        public function forSignIn()
        {
            return view('signUp');
        }
    }
