<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Projects;
use App\Models\Services;
use App\Models\Agent;
use App\Models\ImageManagement;
use App\Models\Cart;
use App\Models\video;
use App\Models\Statistics;
use Session;
use App\Models\Money;
class MainController extends Controller
{
  public function index()
  {
      return view('index')->with([
      'reportFiles'   =>Money::latest()->take(10)->where('reportStatus',1)->get(),
      'services'      =>Services::latest()->take(5)->where('serviceStatus',1)->get(),
      'agents'        =>Agent::latest()->take(5)->where('agentStatus',1)->get(),
      'images'        =>ImageManagement::take(10)->where('imageStatus',1)->get(),
      'videos'        =>video::latest()->take(10)->where('videoStatus',1)->get(),
      'statistics'    =>Statistics::latest()->take(5)->where('sStatus',1)->get(),
    ]);
  }

  // Add To cart function

  public function addToCart(Request $request , $id)
  {
    $project = Projects::find($id);
    $oldcart = Session::has('cart') ?  Session::get('cart') : null;
    $cart = new Cart($oldcart);
    $cart->add($project,$project->projectId);
    $request->session()->put('cart',$cart);
    // dd(session()->get('cart'));

    return redirect()->route('/');
  }

  public function cart()   {
      return view('pages.cart');
    }


  // Our projects page
  public function ourproject()
  {
    return view('pages.ourproject');
  }

  public function urgentproject()
  {
    return view('pages.urgentproject');
  }

  //our zakat page
  public function zakat()
  {
    return view('pages.zakat');
  }
}
