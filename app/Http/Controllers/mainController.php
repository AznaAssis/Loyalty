<?php

namespace App\Http\Controllers;
use Auth;
use Illuminate\Http\Request;
use App\models\admin;
use App\models\about;
use App\models\contact;
use App\models\Product;
class mainController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['result']=contact::get();
        $data['res']=product::where('status',"Approve")->get();
        return view("user.index",$data);
    }
    public function about()
    {
        $data['res']=about::get();
        $data['result']=contact::get();
        return view('user.about',$data);
    }
    public function logout(Request $req) {
        Auth::logout();
        $data['res']=product::where('status',"Approve")->get();
        $data['result']=contact::get();
        return view('user.index',$data);
    }
    public function contact() 
    {
        $data['res']=contact::get();
        $data['result']=contact::get();
        return view('user.contact1',$data);
      }
}
