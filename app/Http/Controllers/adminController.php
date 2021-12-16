<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\admin;
use App\models\about;
use App\models\contact;
use App\models\product;
use App\models\manager;
use App\models\customer;
class adminController extends Controller
{
    public function ahome()
    {
        return view("admin.adminhome");
    }
    public function alogin()
    {
        return view("admin.adminlogin");
    }
    public function about()
    {
        return view("admin.addabout");
    }
    public function viewusers()
    {
        $data['res']=customer::get();
        return view("admin.viewusers",$data);
    }
    public function vabout()
    {
        $data['res']=about::get();
        return view("admin.vabout",$data);
    }
    public function shop()
    {
        return view("admin.addshops");
    }
    public function contact()
    {
        return view("admin.addcontact");
    }
    public function product()
    {
        $data['res']=product::get();
        return view("admin.appproduct",$data);
    }
    public function edabout($id)
    {
        $data['res']=about::where('id', $id)->get();
        return view("admin.editabout",$data);
    }
    public function vmanager()
    {
        $data['result']=manager::get();
        return view("admin.vmanagers",$data);
    }
    public function adlog(request $req)
     {
        $uname=$req->input('uname');
        $password=$req->input('password');
        $data=admin::adlog('admins',$uname,$password);
        if(isset($data))
        {
                $req->session()->put(array('sess'=>$data->id));
                return redirect('/adminhome');
        }
        else{
            return redirect('/adminlogin')->with('error','invalid Email id or Password');
        }
    }
    
    public function addabt(request $req)
    {
        $about=$req->input('about');
        $data=['abouts'=>$about];
       $res=about::insert($data);
    return redirect('/vabout');
    }
    public function addcntct(request $req)
    {
        $address=$req->input('address');
        $email=$req->input('email');
        $phno=$req->input('phno');
        $data=['address'=>$address,
        'email'=>$email,
        'phno'=>$phno
    ];
       $res=contact::insert($data);
    return redirect('/vabout');
    }
    public function editabt(request $req,$id)
    {
        $about=$req->input('about');
        $data=['abouts'=>$about];
       $res=about::where('id', $id)->update($data);
    return redirect('/vabout');
    }
    
    public function approve($id)
    {
        $data=['status'=>'Approve'];
        $result=manager::where('id',$id)->update($data);
        return redirect('/vmanagers');
    } 
    public function decline($id)
    {
        $data=['status'=>'Decline'];
        $result=manager::where('id',$id)->update($data);
        return redirect('/vmanagers');
    } 
    public function approvep($id)
    {
        $data=['status'=>'Approve'];
        $result=product::where('id',$id)->update($data);
        return redirect('/appproduct');
    } 
    public function declinep($id)
    {
        $data=['status'=>'Decline'];
        $result=product::where('id',$id)->update($data);
        return redirect('/appproduct');
    } 
}
