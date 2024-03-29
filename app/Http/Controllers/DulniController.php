<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Dulni;
class DulniController extends Controller
{
    public function index()
    {

        return view('pages.dulni');
    }

    public function needy()
    {
      $allneedy = Dulni::latest()->paginate(9);
        return view('dashboard.needy.index')->with([
          'allneedy'=>$allneedy,
        ]);
    }

    public function show($id)
    {
      $data = Dulni::find($id);
        return view('dashboard.needy.show')->with([
          'data'=>$data,
        ]);
    }

    public function store(Request $request)
    {
      // return $request->all();
      $request->validate([
          'name'    => 'required',
          'address' => 'required',
          'needy'   => 'required',
          'details' => 'required',
          'phone'   => 'required|numeric',
      ]);

      $payees = new Dulni;

      $payees->name      = $request->input('name');
      $payees->phone     = $request->input('phone');
      $payees->needy     = $request->input('needy');
      $payees->address   = $request->input('address');
      $payees->details   = $request->input('details');
      $payees->save();
      return redirect()->route('dulni.index')->with('success','تم  تسجيل بيانات المحتاج بنجاح  ');
    }

   public function destroy($id)
  {
    // delete project by id
    if(intval($id)){
      \DB::table('dulnis')
      ->where('dulniId',$id)
      ->delete();
    }
    return redirect()->route('needy')->with('success','تم حذف   المحتاج بنجاح ');
  }
}
