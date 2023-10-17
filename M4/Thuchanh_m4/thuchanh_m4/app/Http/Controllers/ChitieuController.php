<?php

namespace App\Http\Controllers;
use App\Models\Chitieu;
use Illuminate\Http\Request;

class ChitieuController extends Controller
{
    public function index() {
        $chitieu = Chitieu::get();
        return view('index', compact(['chitieu']));
    }
    public function show($id) {
        $chitieu = Chitieu::find($id);
        return view('show', compact(['chitieu']));
    }
    public function create() {
        return view('create');
    }
    public function store(Request $request) {
        $validated = $request->validate(
            [
                'PRICE' => 'numeric',
            ],
            [
                'PRICE.numeric' => 'Bắt buộc nhập số',
            ]
        );
        if ($validated) {
            $chitieu = new Chitieu();
            $chitieu->DANHMUC = $request->DANHMUC;
            $chitieu->DATE = $request->DATE;
            $chitieu->PRICE = $request->PRICE;
            $chitieu->GHICHU = $request->GHICHU;
            $chitieu->save();
            return redirect()->route('chitieu.index');
        }
    }
    public function edit($id) {
        $chitieu = Chitieu::find($id);
        return view('edit', compact(['chitieu']));
    }
    public function update(Request $request, $id) {
        $validated = $request->validate(
            [
                'PRICE' => 'numeric',
            ],
            [
                'PRICE.numeric' => 'Bắt buộc nhập số',
            ]
        );
        
            $chitieu = Chitieu::find($id);
            $chitieu->DANHMUC = $request->DANHMUC;
            $chitieu->DATE = $request->DATE;
            $chitieu->PRICE = $request->PRICE;
            $chitieu->GHICHU = $request->GHICHU;
            $chitieu->save();
            return redirect()->route('chitieu.index');
        
    }
    public function destroy($id) {
        $chitieu = Chitieu::destroy($id);
        return redirect()->route('chitieu.index');
    }
}
