<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\outdoor;
use Exception;
use Illuminate\Support\Facades\Redirect;

class outdoorController extends Controller
{
    function index()
    {
        return view('index',['showall'=>outdoor::all()]);
    }

    function additems()
    {
        return view('additems');
    }

    function saveitems(Request $request)
    {

        try {
        $obj= new outdoor();
                $obj->batchno=$request->bno;
        $obj->quantity=$request->qty;
        $obj->status=$request->statuscheck;
        $obj->remarks=$request->remarks;
        $obj->save();
        return redirect('/');
        }
        catch(\Illuminate\Database\QueryException $e){
            $errorCode = $e->errorInfo[1];
            if($errorCode == '1062'){
                  //  return redirect('additem')-> with('status','duplicate entry');
                  return redirect()->action([outdoorController::class, 'additems'])->with('status','duplicate entry');
            }
        }
       

    }

    function deleteitems(outdoor $outdoor,$id)
    {
            $row=$outdoor::destroy($id);
            return back();
    }
    public function edititems($id)
    {
      $data=outdoor::find($id);
      return view('edit',compact('data'));
    }
  
  
  public function updateitems(Request $request)
  {
    $obj= outdoor::find($request->id);
    $obj->batchno=$request->bno;
    $obj->quantity=$request->qty;
    $obj->status=$request->statuscheck;
    $obj->remarks=$request->remarks;
    $obj->update();
    return redirect('/');
  
  }
}
