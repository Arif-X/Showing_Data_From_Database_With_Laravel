<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ScrappedController extends Controller
{
    public function jurnalDataIndex()
    {
        $data = DB::table('jurnal_data')->get();
        return view('jurnal-data', ['all' => $data]);
    }

    public function jurnalIndexIndex()
    {
        $data = DB::table('jurnal_index')->get();
        return view('jurnal-index', ['allindex' => $data]);
    }

    public function navIndex()
    {
        $data = DB::table('nav')->get();
        return view('nav', ['nav' => $data]);
    }

    public function sintaScoreIndex()
    {
        $data = DB::table('sinta_score')->get();
        return view('sinta-score', ['sinta' => $data]);
    }

    public function scopusScoreIndex()
    {
        $data = DB::table('scopus_score')->get();
        return view('scopus-score', ['scopus' => $data]);
    }

    public function websiteIndex()
    {
        $data = DB::table('website')->get();
        return view('website', ['title' => $data]);
    }
}
