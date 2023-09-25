<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Pagination\Paginator;
use App\Models\User;

class UserController extends Controller
{
    public function index(Request $request) {
        $users = User::paginate(3);
        if(isset($request->keyword)){
            $keyword = $request->keyword;
            $users = User::where('name', 'like', "%$keyword%")
                ->orWhere('email', 'like', "%$keyword%")
                ->paginate();
        }
        return view('bai3.user.index',compact(['users']));
    }
    public function create() {
        return view('bai3.user.create');
    }
    public function store(Request $request) {
        $user = new User();
        $user->name=$request->name;
        $user->email=$request->email;
        $fieldName = 'image';
        if ($request->hasFile($fieldName)) {
            $fullFileNameOrigin = $request->file($fieldName)->getClientOriginalName();
            $fileNameOrigin = pathinfo($fullFileNameOrigin, PATHINFO_FILENAME);
            $extenshion = $request->file($fieldName)->getClientOriginalExtension();
            $fileName = $fileNameOrigin . '-' . rand() . '_' . time() . '.' . $extenshion;
            $path = 'storage/' . $request->file($fieldName)->storeAs('public/images', $fileName);
            $path = str_replace('public/', '', $path);
            $user->image = $path;
        }
        $user->password=$request->password;
        $user->save();
        return redirect()->route('user.index');
    }
    public function edit($id) {
        $user = User::find($id);
        return view('bai3.user.edit',compact(['user']));
    }
    public function update(Request $request,$id){
        $user = User::find($id);
        $user->name=$request->name;
        $user->email=$request->email;
        $user->password=$request->password;
        $fieldName = 'image';
        if ($request->hasFile($fieldName)) {
            $fullFileNameOrigin = $request->file($fieldName)->getClientOriginalName();
            $fileNameOrigin = pathinfo($fullFileNameOrigin, PATHINFO_FILENAME);
            $extenshion = $request->file($fieldName)->getClientOriginalExtension();
            $fileName = $fileNameOrigin . '-' . rand() . '_' . time() . '.' . $extenshion;
            $path = 'storage/' . $request->file($fieldName)->storeAs('public/images', $fileName);
            $path = str_replace('public/', '', $path);
            $user->image = $path;
        }
        $user->save();
        return redirect()->route('user.index');
    }
    public function delete($id) {
        $user = User::destroy($id);
        return redirect()->route('user.index');
    }
    public function show($id) {
        $user = User::find($id);
        return view('bai3.user.show',compact(['user']));
    }
}
