<?php

namespace App\Exports;

use App\Order;
use App\District;
use App\OrderAddress;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use DB;
class OrderExport implements FromCollection,WithHeadings,ShouldAutoSize
{
    /**
    * @return \Illuminate\Support\Collection
    */

    public $from_date;
    public $to_date;

    function __construct($from_date,$to_date) {
        $this->from_date = $from_date;
        $this->to_date = $to_date;
    }

    public function collection()
    {   if($this->from_date=='' or $this->to_date==''){
            $order = DB::table('order_addresses')->select('order_addresses.OrderID','order_addresses.Name','order_addresses.Mobile','order_addresses.Email','districts.Name as City','order_addresses.Address')->join('districts', 'order_addresses.City', '=', 'districts.id')->get();
            return $order;
        }else{
            $order = DB::table('order_addresses')->select('order_addresses.OrderID','order_addresses.Name','order_addresses.Mobile','order_addresses.Email','districts.Name as City','order_addresses.Address')->join('districts', 'order_addresses.City', '=', 'districts.id')->whereBetween('order_addresses.created_at',[ $this->from_date,$this->to_date])->get();
            return $order;
        }

    }

    public function headings() :array
    {
        return ["ORDER ID","Name","Mobile","Email","City","Address"];
    }
}
