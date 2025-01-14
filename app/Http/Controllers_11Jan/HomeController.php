<?php

namespace App\Http\Controllers;

use App\Models\SectionWiseData;


class HomeController extends Controller
{
    public function index()
    {

        $get_data_section_1 = SectionWiseData::where('section', 1)->first();
    $get_data_section_2 = SectionWiseData::where('section', 2)->first();
    // dd($get_data_section_2);




        return view('welcome', compact( 'get_data_section_1', 'get_data_section_2'));
    }
}
