<?php

namespace App\Http\Controllers;

use App\Models\bill;
use App\Models\bill_detail;
use App\Models\Citys;
use App\Models\Customer;
use App\Models\Province;
use App\Models\wards;
use Illuminate\Http\Request;

class CustomerController extends Controller
{

    protected $customer;
    protected $bill;
    protected $citys;
    protected $province;
    protected $bill_detail;
    protected $wards;
    public function __construct(Customer $customer ,bill $bill,bill_detail $bill_detail, Citys $citys, Province $province, wards $wards)
    {
        $this->customer = $customer;
        $this->bill = $bill;
        $this->wards = $wards;
        $this->province = $province;
        $this->citys = $citys;
        $this->bill_detail = $bill_detail;

    }
    public function index()
    {
        // $posts = $this->customer->orderBy("id","DESC")->paginate(5);
        $posts = $this->bill->orderBy("id","DESC")->paginate(5);
        return view("backend.admin.customer.index",compact("posts"));
    }
    public function check(Request $request, $id)
    {   
        $post = $this->bill->find($id);
        $post2 = $this->customer->find($post->id_customer);
        
        return view('backend.admin.customer.checkCart',compact('post','post2'));
    }
}
