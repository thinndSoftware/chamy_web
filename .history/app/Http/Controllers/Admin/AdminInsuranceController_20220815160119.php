<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\InsuranceRequest;
use App\Models\DoneOrder;
use App\Models\Insurance;
use App\Models\OrderDetail;
use Illuminate\Http\Request;

class AdminInsuranceController extends Controller
{
    protected $insurance , $orderDetail, $doneOrder;
    /**
     * Class constructor.
     */
    public function __construct(Insurance $isurance, OrderDetail $orderDetail, DoneOrder $doneOrder)
    {
        $this->insurance = $isurance;
        $this->orderDetail = $orderDetail;
        $this->doneOrder = $doneOrder;
    }
    public function index()
    {
        return view('admin.insurances.insurance');
    }
    public function create()
    {
        return view('admin.insurances.create');
    }

    public function store(InsuranceRequest $request)
    {
        $check_order = $this->doneOrder->where('order_id',$request->order_id)->count;
        $check_product = $this->orderDetail->where('product_id',$request->product_id);
        dd($check_order);

    }
}
