<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\customer;
use App\models\product;
use App\models\booking;
use App\models\wishli;
use App\models\contact;
use App\models\orders;
use App\models\payment;
use Mail;
class cController extends Controller
{
    public function creg()
    {
        $data['result']=contact::get();
        return view('customer.creg',$data);
    }
    public function clog()
    {
        $data['result']=contact::get();
        return view('customer.clog',$data);
    }
    public function updatecust()
    {
        $id=session('sess');
        
        $data['res']=customer::where('id',$id)->get();
        return view('customer.updatecust',$data);
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
        $mail=['name'=>$name,
                'msg'=>'Welcome to BigMart'];
                $user['to']=$email;
                Mail::send('email',$mail,function($message) use($user){
                    $message->to($user['to']);
                    $message->subject('Email Sending');
                });
    return redirect('/clog');
    }
    public function upc(request $req)
    {
        $id=session('sess');
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
        $res=customer::where('id',$id)->update($data);
    return redirect('/chome');
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
        // d)->value('Prize');
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
        $data['cp']=customer::where('id',$id)->get();
        $data['res']=booking::join('products', 'products.id', '=', 'bookings.p_id')
        ->where('bookings.c_id',$id)
        ->where('bookings.status',"cart")
        ->select(['products.pimg','products.pname','products.Prize','bookings.qnty', 'bookings.prize', 'bookings.p-method','bookings.status','bookings.id'])
        ->get();;
        $data['sum']=booking::sumdata('bookings',$id);
        return view("customer.proceed",$data);
    }
    public function bookp($total)
    {
        $id=session('sess');
        // $total=$req->input('ttotal');
        $da=['status'=>'order'];
        $val=booking::where('c_id',$id)->update($da);
        $data=[
        'cid'=>$id,
        'total'=>$total
    ];
        $res=orders::insert($data);

    return redirect('/payment');
    }
    public function creditp($total)
    {
        $id=session('sess');
        // $total=$req->input('ttotal');
        $da=['status'=>'order'];
        $val=booking::where('c_id',$id)->update($da);
        $data=[
        'cid'=>$id,
        'total'=>$total
    ];
        $res=orders::insert($data);
       $cp=customer::where('id',$id)->decrement('creditpoints',$total);
       $da=['status'=>'payed'];
        $val=orders::where('cid',$id)->update($da);
       return redirect('/viewproducts');
    }
    public function payment()
    {
        $id=session('sess');
        $data['res']=orders::join('customers', 'customers.id', '=', 'orders.cid')
        ->where('orders.cid',$id)
        ->where('customers.id',$id)
        ->select(['customers.id','customers.creditpoints','orders.status','orders.total'])
        ->get();
        //  echo $data;
        // exit();
        return view("customer.payment",$data);
    }
    public function pay(request $req)
    {
        $id=session('sess');
        $cnumber=$req->input('cnumber');
        $cname=$req->input('name');
        $amount=$req->input('amount');
        $expdate=$req->input('expdate');
        $cvv=$req->input('cvv');
        $da=['status'=>'payed'];
        $val=orders::where('cid',$id)->update($da);
        $data=[
        'cid'=>$id,
        'cnumber'=>$cnumber,
        'cname'=>$cname,
        'amount'=>$amount,
        'expdate'=>$expdate,
        'cvv'=>$cvv
    ];
        $res=payment::insert($data);
        $credit=customer::where('id',$id)->value('creditpoints');
        if($amount>=10000)
        {
            $da=['creditpoints'=>$credit+1000];
        }
        elseif($amount >=5000)
        {
            $da=[ 'creditpoints'=>$credit+500];
        }
        elseif($amount >=4000)
        {
            $da=['creditpoints'=>$credit+400];
        }
        elseif($amount >=3000)
        {
            $da=['creditpoints'=>$credit+300];
        }
        elseif($amount >=2000)
        {
            $da=['creditpoints'=>$credit+200];
        }
        elseif($amount >=1500)
        {
            $da=['creditpoints'=>$credit+150];
        }
        elseif($amount >=1000)
        {
            $da=['creditpoints'=>$credit+100];
        }
        elseif($amount >=500)
        {
            $da=['creditpoints'=>$credit+50];
        }
        elseif($amount>100)
        {
            $da=['creditpoints'=>$credit+10];
        }
        else
        {
            $da=['creditpoints'=>$credit+0];
        }
        $cp=customer::where('id',$id)->update($da);
    return redirect('/viewproducts');
    }
}
