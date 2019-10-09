<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ScrappedController extends Controller
{
    public function jurnalDataIndex()
    {
        $pegawai = DB::table('jurnal_data')->get();
        return view('jurnal-data', ['all' => $pegawai]);
    }

    public function jurnalIndexIndex()
    {
        $pegawai = DB::table('jurnal_index')->get();
        return view('jurnal-index', ['allindex' => $pegawai]);
    }

    public function navIndex()
    {
        $pegawai = DB::table('nav')->get();
        return view('nav', ['nav' => $pegawai]);
    }

    public function sintaScoreIndex()
    {
        $pegawai = DB::table('sinta_score')->get();
        return view('sinta-score', ['sinta' => $pegawai]);
    }

    public function scopusScoreIndex()
    {
        $pegawai = DB::table('scopus_score')->get();
        return view('scopus-score', ['scopus' => $pegawai]);
    }

    public function websiteIndex()
    {
        $pegawai = DB::table('website')->get();
        return view('website', ['title' => $pegawai]);
    }
}
