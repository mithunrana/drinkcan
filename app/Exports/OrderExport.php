<?php

namespace App\Exports;

use App\Order;
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
            $order = DB::table('orders')->select('products.Model','orders.Name','orders.Mobile','orders.Address')
                ->join('products', 'orders.ProductId', '=', 'products.id')->get();
            return $order;
        }else{
            $order = DB::table('orders')->select('products.Model','orders.Name','orders.Mobile','orders.Address')
                ->join('products', 'orders.ProductId', '=', 'products.id')->whereBetween('orders.created_at',[ $this->from_date,$this->to_date])->get();
            return $order;
        }

    }

    public function headings() :array
    {
        return ["Product Model","Contact Person Name","Mobile","Address"];
    }
}
