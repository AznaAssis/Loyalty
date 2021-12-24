<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\manager;
use App\models\product;
use App\models\customer;
use App\models\contact;
use App\models\booking;
class mController extends Controller
{
    public function mreg()
    {
        $data['result']=contact::get();
        return view('manager.mreg',$data);
    }
    public function mlog()
    {
        $data['result']=contact::get();
        return view('manager.mlog',$data);
    }
    public function home()
    {
        $id=session('sess');
        $data['res']=manager::where('id',$id)->get();
        return view('manager.mhome',$data);
    }
    public function updatemanager()
    {
        $id=session('sess');
        
        $data['res']=manager::where('id',$id)->get();
        return view('manager.updatemanager',$data);
    }
    public function viewcust()
    {
        $id=session('sess');
        $sname=manager::where('id',$id)->value('sname');
        $data['res']=customer::join('orders','orders.cid','=','customers.id')
        ->join('bookings','bookings.c_id','=','customers.id')
        ->join('products','products.id','=','bookings.p_id')
        ->join('managers','managers.sname','=','products.shop_name')
        ->distinct()
        ->where('managers.sname',$sname)
        ->where('managers.id',$id)
        ->select(['customers.name','customers.phno','customers.email','customers.creditpoints', 'customers.id', 'customers.id', 'customers.address','customers.city','customers.pincode'])
        ->get();
        // print $data;
        // exit();$sname=manager::where('id',$id)->value('sname');
        return view('manager.viewcust',$data);
    }
    public function view()
    {
        $id=session('sess');
        $sname=manager::where('id',$id)->value('sname');
        $data['res']=product::where('shop_name',$sname)->get();
        return view('manager.viewproduct',$data);
    }
    public function editp($id)
    {
        $data['res']=product::where('id',$id)->get();
        return view('manager.editp',$data);
    }
    public function add()
    {
        $id=session('sess');
        $data['res']=manager::where('id',$id)->get();
        return view('manager.addproducts',$data);
    }
    public function mregaction(request $req)
    {
        $name=$req->input('name');
        $sname=$req->input('sname');
        $email=$req->input('email');
        $phno=$req->input('phno');
        $city=$req->input('city');
        $pincode=$req->input('pincode');
        $uname=$req->input('uname');
        $password=$req->input('password');
        $data=[
        'name'=>$name,
        'sname'=>$sname,
        'email'=>$email,
        'city'=>$city,
        'phno'=>$phno,
        'pincode'=>$pincode,
        'username'=>$uname,
        'password'=>$password,
        'status'=>'Not Defined'
    ];
        $res=manager::insert($data);
    return redirect('/mlog');
    }
    public function upm(request $req)
    {
        $id=session('sess');
        $name=$req->input('name');
        $sname=$req->input('sname');
        $email=$req->input('email');
        $phno=$req->input('phno');
        $city=$req->input('city');
        $pincode=$req->input('pincode');
        $uname=$req->input('uname');
        $password=$req->input('password');
        $data=[
        'name'=>$name,
        'sname'=>$sname,
        'email'=>$email,
        'city'=>$city,
        'phno'=>$phno,
        'pincode'=>$pincode,
        'username'=>$uname,
        'password'=>$password,
        'status'=>'Approve'
    ];
        $res=manager::where('id',$id)->update($data);
    return redirect('/mhome');
    }
    public function login(request $req)
    {
        $uname=$req->input('uname');
        $password=$req->input('password');
        $data=manager::where('username',$uname)->where('password',$password)->first();
        if(isset($data))
        {
            if($data->status=='Approve')
            {
                $req->session()->put(array('sess'=>$data->id));
                return redirect('/mhome');
            }
            else
            {
                return redirect('/mlog');
            }
        }
        else{
            return redirect('/mlog')->with('error','invalid Email id or Password');
        }
    }
    public function adpaction(request $req)
    {
        $sname=$req->input('sname');
        $pname=$req->input('pname');
        $qnty=$req->input('qnty');
        $prize=$req->input('prize');
        $pdate=$req->input('pdate');
        $pimage=$req->file('pimage');
        // echo $pimage;
        // exit();
        $filename=$pimage->getClientOriginalName();
        $pimage->move(public_path().'/pimage/',$filename);
        $ptype=$req->input('ptype');
        $status=$req->input('status');
        $data=[
        'pname'=>$pname,
        'shop_name'=>$sname,
        'avail_qnty'=>$qnty,
        'Prize'=>$prize,
        'pdate'=>$pdate,
        'pimg'=>$filename,
        'product_type'=>$ptype,
        'status'=>$status
    ];
        $res=product::insert($data);
    return redirect('/viewproduct');
    }
    public function edpaction(request $req,$id)
    {
        $sname=$req->input('sname');
        $pname=$req->input('pname');
        $qnty=$req->input('qnty');
        $prize=$req->input('prize');
        $pdate=$req->input('pdate');
        $ptype=$req->input('ptype');
        $status=$req->input('status');
        $data=[
        'pname'=>$pname,
        'shop_name'=>$sname,
        'avail_qnty'=>$qnty,
        'Prize'=>$prize,
        'pdate'=>$pdate,
        'product_type'=>$ptype,
        'status'=>$status
    ];
        $res=product::where('id',$id)->update($data);
    return redirect('/viewproduct');
    }
}
