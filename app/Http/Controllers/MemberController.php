<?php

namespace App\Http\Controllers;
use App\Models\Member;
use App\Models\Company;


use Illuminate\Http\Request;

class MemberController extends Controller
{
   function index()
   {
       return Member::find(1)->getCompany;
   }
}
