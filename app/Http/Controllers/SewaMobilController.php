<?php

namespace App\Http\Controllers;

use App\Models\MasterMobil;
use Illuminate\Http\Request;

class SewaMobilController extends Controller
{
    public function index()
    {
        $masterMobil = MasterMobil::leftJoin("sewa_mobils", "sewa_mobils.master_mobil_id", "master_mobils.id")->whereNull("sewa_mobils.master_mobil_id")->paginate(10);
        return view("pages.sewa-mobil.index", compact("masterMobil"));
    }
}
