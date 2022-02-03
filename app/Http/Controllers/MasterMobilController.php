<?php

namespace App\Http\Controllers;

use App\Models\MasterMobil;
use Illuminate\Http\Request;

class MasterMobilController extends Controller
{
    public function index(Request $request)
    {
        $masterMobil = MasterMobil::latest()->paginate(10);
        return view("pages.master-mobil.index", compact("masterMobil"));
    }

    public function create(Request $request)
    {
        return view("pages.master-mobil.create");
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            "merk" => "required",
            "type" => "required",
            "harga" => "required",
        ]);
        MasterMobil::insert($data);
        return redirect()->route("master_mobil.index")->with("success", "Berhasil tambah data baru");
    }
    public function edit($id)
    {
        $masterMobil = MasterMobil::find($id);
        return view("pages.master-mobil.edit", compact("masterMobil"));
    }

    public function update(Request $request, $id)
    {
        $data = $request->validate([
            "merk" => "required",
            "type" => "required",
            "harga" => "required",
        ]);
        MasterMobil::find($id)->update($data);
        return redirect()->route("master_mobil.index")->with("success", "Berhasil ubah data");
    }
    public function destroy($id)
    {
        try {
            MasterMobil::find($id)->delete();
            $msg = "berhasil hapus data";
        } catch (\Throwable $th) {
            $msg = "Gagal hapus data, data sedang berelasi";
        }
        return redirect()->route("master_mobil.index")->with("success", $msg);
    }
}
