<?php

namespace App\Http\Controllers;

use App\StoreLocation;
use App\ThanaName;
use Illuminate\Http\Request;
use App\District;
class StoreLocationController extends Controller
{


    public function location(){
        return view('frontend.storelocation');
    }

    public function get_district($id){
        $data = District::where('DivisionID',$id)->get();
        return response()->json($data);
    }


  public function districtByThana(Request $request){
      $DistrictId = $request->get('DistrictId');
      $ThanaList = ThanaName::where('DistrictId',$DistrictId)->get();
      $output = '<option value="" selected disabled>--Select Thana Name--</option>';
      foreach($ThanaList as $Thana){
          $output .= '
             <option value="'.$Thana->id.'">'.$Thana->Name.'</option>
            ';
      }
      $data = array(
          'TotalThana'  => $output
      );
      echo json_encode($data);
  }




    public function thanaByStoreLocation(Request $request){
        $ThanaId = $request->get('ThanaId');
        $StoreList = StoreLocation::where('ThanaId',$ThanaId)->get();
        $output = '';
        foreach($StoreList as $Store){
            $output .= '<div class="col-sm-6">
                    <h3 style="color:#7d68ef">'.$Store->LocationName.'</h3>
                    <p style="color:#261a67">'.$Store->FullAddress.'</p>
                </div>';
        }
        $data = array(
            'StoreBox'  => $output
        );
        echo json_encode($data);
    }













    public function thanaManage(){
        return view('Admin.thananamemanage');
    }

    public function thanaNameStore(Request $request){
        $this->validate($request,[
            'DistrictId' => 'required',
            'Name' => 'required',
        ]);

        ThanaName::create([
            'DistrictId' => $request->DistrictId,
            'Name' => $request->Name,
        ]);
        return redirect()->to('admin/thana-name-manage')->with('message','Thana Name Added Successfully');
    }



    public function thanaNameEdit($id){
        $Thana = ThanaName::where('id',$id)->first();
        return view('Admin.thananameedit',compact('Thana'));
    }


    public function thanaNameUpdate(Request $request,$id){
        $this->validate($request,[
            'DistrictId' => 'required',
            'Name' => 'required',
        ]);

        $About = ThanaName::findOrFail($id);
        $About->DistrictId = request('DistrictId');
        $About->Name = request('Name');
        $About->save();
        return redirect()->to('admin/thana-name-manage')->with('message','Thana Name Update Successfully');
    }



    public function thanaNameDelete($id){
        $Products = ThanaName::find($id);
        $Products->delete();
        return redirect()->to('admin/thana-name-manage')->with('message','Thana Name Delete Successfully');
    }








    public function  storeLocationManage(){
        return view('Admin.storelocationmanage');
    }


    public function store(Request $request){
        $this->validate($request,[
            'ThanaId' => 'required',
            'LocationName' => 'required',
            'FullAddress' => 'required',
        ]);

        StoreLocation::create([
            'ThanaId' => $request->ThanaId,
            'LocationName' => $request->LocationName,
            'FullAddress' => $request->FullAddress,
        ]);
        return redirect()->to('admin/store-location-manage')->with('message','Store Location Added Successfully');
    }



    public function storeLocationEdit($id){
        $StoreLocation = StoreLocation::where('id',$id)->first();
        return view('admin.storelocationedit',compact('StoreLocation'));
    }

    public function storeLocationUpdate(Request $request,$id){

        $this->validate($request,[
            'ThanaId' => 'required',
            'LocationName' => 'required',
            'FullAddress' => 'required',
        ]);

        $About = StoreLocation::findOrFail($id);
        $About->ThanaId = request('ThanaId');
        $About->LocationName = request('LocationName');
        $About->FullAddress = request('FullAddress');
        return redirect()->to('admin/store-location-manage')->with('message','Store Location Update Successfully');
    }


    public function storeLocationDelete($id){
        $Products = StoreLocation::find($id);
        $Products->delete();
        return redirect()->to('admin/store-location-manage')->with('message','Store Location Delete Successfully');
    }

}
