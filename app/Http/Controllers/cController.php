<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\customer;
use App\models\product;
use App\models\booking;
use App\models\wishli;
use App\models\contact;
use App\models\orders;
class cController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function creg()
    {
        return view('customer.creg');
    }
    public function clog()
    {
        return view('customer.clog');
    }
public function ccontact()
{
$data['res']=contact::get();
return view('customer.ccontact',$data);
}
public function vccart()
{
    $id=session('sess');
    $data['res']= booking::join('products', 'products.id', '=', 'bookings.p_id')
    ->where('bookings.c_id',$id)
    ->select(['products.pimg','products.pname','products.Prize','bookings.qnty', 'bookings.prize', 'bookings.p-method','bookings.status','bookings.id'])
    ->get();
return view('customer.vccart',$data);
}
    public function cregaction(request $req)
    {
        $name=$req->input('name');
        $district=$req->input('district');
        $email=$req->input('email');
        $phno=$req->input('phno');
        $city=$req->input('city');
        $address=$req->input('address');
        $pincode=$req->input('pincode');
        $uname=$req->input('uname');
        $password=$req->input('password');
        $data=[
        'name'=>$name,
        'district'=>$district,
        'email'=>$email,
        'phno'=>$phno,
        'city'=>$city,
        'address'=>$address,
        'pincode'=>$pincode,
        'username'=>$uname,
        'password'=>$password,
    ];
        $res=customer::insert($data);
    return redirect('/clog');
    }
    public function login(request $req)
     {
        $uname=$req->input('uname');
        $password=$req->input('password');
        $data=customer::where('username',$uname)->where('password',$password)->first();
        if(isset($data))
        {
                $req->session()->put(array('sess'=>$data->id));
                return redirect('/chome');
        }
        else{
            return redirect('/clog')->with('error','invalid Email id or Password');
        }
    }
    public function home()
    {
        $id=session('sess');
        
        $data['res']=customer::where('id',$id)->get();
        return view('customer.chome',$data);
    }
    public function view()
    {
        $data['res']=product::where('status',"Approve")->get();
        return view("customer.viewproducts",$data);
    }
    public function cart()
    {
        $id=session('sess');
        $data['res']= booking::join('products', 'products.id', '=', 'bookings.p_id')
        ->distinct()
        ->where('bookings.c_id',$id)
        ->where('bookings.status','cart')
        ->select(['products.pimg','products.pname','products.Prize','bookings.qnty', 'bookings.prize', 'bookings.p-method','bookings.status','bookings.id'])
        ->get();
        return view("customer.ccart",$data);
    }
    public function addcart($id)
    {
        $cid=session('sess');
        // $pimage=$req->input('pimage');
        // $filename=$pimage->getClientOriginalName();
        // $pimage->move(public_path().'/pimage/',$filename);
        // $qnty=$req->input('qnty');
        $prize=product::where('id',$id)->value('Prize');
        // echo $prize;
        // exit();
        $data=[
        'c_id'=>$cid,
        'p_id'=>$id,
        'prize'=>$prize,
        'status'=>"cart"
    ];
        $res=booking::insert($data);
    return redirect('/ccart');
    }
    public function deletez($id)
    {
        $data['res']=booking::where('id',$id)->delete();
        return redirect('/ccart');
    }
    public function total(request $req,$id)
    {
        // $cid=session('sess');
       $pid=$req->input('pid');
       $qnty=$req->input('qnty');
       $total=$req->input('total');
       $data=[
        // ?'p_id'=>$pid,
        'prize'=>$total,
        'qnty'=>$qnty
    ];
        $res=booking::where('id',$id)->update($data);
        // print_r($res);
    }
    public function proceed()
    {
        $id=session('sess');
        // $pid=booking::where('c_id',$id)->value('p_id');
        // echo $prize;
        // exit();
        $data['res']=booking::join('products', 'products.id', '=', 'bookings.p_id')
        ->where('bookings.c_id',$id)
        ->where('bookings.status',"cart")
        ->select(['products.pimg','products.pname','products.Prize','bookings.qnty', 'bookings.prize', 'bookings.p-method','bookings.status','bookings.id'])
        ->get();
        $data['sum']=booking::sumdata('bookings',$id);
        return view("customer.proceed",$data);
    }
    public function bookp(request $req)
    {
        $id=session('sess');
        $total=$req->input('ttotal');
        $da=['status'=>'order'];
        $val=booking::where('c_id',$id)->update($da);
        $data=[
        'cid'=>$id,
        'total'=>$total
    ];
        $res=orders::insert($data);

    return redirect('/payments');
    }
    public function vieworders()
    {
        $id=session('sess');
        $data['res']=booking::join('products', 'products.id', '=', 'bookings.p_id')
        ->join('orders','orders.cid','=', 'bookings.c_id')
        ->where('bookings.c_id',$id)
        ->where('bookings.status',"order")
        ->select(['products.pimg','products.pname','products.Prize','bookings.qnty', 'bookings.prize', 'bookings.p-method','bookings.status','bookings.id'])
        ->get();
        $data['sum']= orders::where('cid',$id)->get();
        return view("customer.vieworders",$data);
    }
    public function payment()
    {
        $id=session('sess');
        $data['res']=order::where('id',$id)->get();
        return view("customer.payment",$data);
    }
   
    
}
