<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
 public function index(){
     $title='Welcome to Laravel';
     return view('index', compact('title'));
 }
 public function About(){
     $title='About us';
    return view('About',compact('title'));
}
public function Services(){
    $title='Our Services';
    return view('Services',compact('title'));
}
}
