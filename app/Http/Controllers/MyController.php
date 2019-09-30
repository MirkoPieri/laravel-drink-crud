<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\DrinkModel;

class MyController extends Controller
{
    public function getDrink() {
      $title = 'ecommercedb';

      $values = DrinkModel::all();

      $max = DrinkModel::max('prezzo');
      $min = DrinkModel::min('prezzo');
      $avg = DrinkModel::avg('prezzo');
      
      return view('drink', compact('title', 'values', 'max', 'min', 'avg'));
    }
}
