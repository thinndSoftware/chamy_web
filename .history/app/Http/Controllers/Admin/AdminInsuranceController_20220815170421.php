<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\InsuranceRequest;
use App\Models\DoneOrder;
use App\Models\Insurance;
use App\Models\OrderDetail;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class AdminInsuranceController extends Controller
{
    protected $insurance, $orderDetail, $doneOrder;
    public function __construct(Insurance $isurance, OrderDetail $orderDetail, DoneOrder $doneOrder)
    {
        $this->insurance = $isurance;
        $this->orderDetail = $orderDetail;
        $this->doneOrder = $doneOrder;
    }
    public function index()
    {
        $insurances = $this->insurance->paginate(10);
        return view('admin.insurances.insurance',compact('insurances'));
    }
    public function create()
    {
        return view('admin.insurances.create');
    }

    public function store(InsuranceRequest $request)
    {
        try {
            DB::beginTransaction();
            $check_order = $this->doneOrder->where('order_id', $request->order_id)->count();
            $check_product = $this->orderDetail->where('product_id', $request->product_id)->count();

            if ($check_order === 0 && $check_product === 0) {
                $alert = ' <div class="alert alert-danger text-white" role="alert">
            Sản phẩm không phải DN phone phân phối
        </div>';
                return view('admin.insurances.create', compact('alert'));
            }
            $this->insurance->create([
                'name' => $request->name,
                'phone' => $request->phone,
                'address' => $request->address,
                'order_id' => $request->order_id,
                'product_id' => $request->product_id,
                'status' => $request->status,
                'note' => $request->note ?? '',
            ]);
            DB::commit();
            return redirect()->route('insurance.view');

        } catch (Exception $exception) {
            DB::rollBack();
            Log::error('Message: ' . $exception->getMessage . 'Line: ' . $exception->getLine);
        }
    }
    public function edit($id)
    {
        $insurance = $this->insurance->find($id);
        return view('admin.insurances.edit',compact('insurance'));
    }
    public function update($id, InsuranceRequest $request)
    {
        try {
            DB::beginTransaction();
            $check_order = $this->doneOrder->where('order_id', $request->order_id)->count();
            $check_product = $this->orderDetail->where('product_id', $request->product_id)->count();

            if ($check_order === 0 && $check_product === 0) {
                $alert = ' <div class="alert alert-danger text-white" role="alert">
            Sản phẩm không phải DN phone phân phối
        </div>';
                return view('admin.insurances.create', compact('alert'));
            }
            $this->insurance->find($id)->update([
                'name' => $request->name,
                'phone' => $request->phone,
                'address' => $request->address,
                'order_id' => $request->order_id,
                'product_id' => $request->product_id,
                'status' => $request->status,
                'note' => $request->note ?? '',
            ]);
            DB::commit();
            return redirect()->route('insurance.view');
        } catch (Exception $exception) {
            DB::rollBack();
            Log::error('Message: ' . $exception->getMessage . 'Line: ' . $exception->getLine);
        }
    }
    public function delete($id)
    {
        try {
            DB::beginTransaction();
            $this->insurance->find($id)->delete();
            DB::commit();
            return response()->json([
                'code' => 200,
                'message' => 'success'
            ], 200);
        } catch (Exception $exception) {
            DB::rollBack();
            Log::error("message: " . $exception->getMessage() . "Line: " . $exception->getLine());
            return response()->json([
                'code' => 500,
                'message' => 'failed'
            ], 500);
        }
    }
}
