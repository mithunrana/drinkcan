<?php

namespace App\Exports;

use App\Order;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\WithHeadings;
use DB;
class OrderExport implements FromCollection,WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */

    /*protected $from_date;
    protected $to_date;

    function __construct($from_date,$to_date) {
        $this->from_date = $from_date;
        $this->to_date = $to_date;
    }*/

    public function collection()
    {
        $order = DB::table('orders')->select('products.Model','orders.Name','orders.Mobile','orders.Address')
            ->join('products', 'orders.ProductId', '=', 'products.id')->get();
        return $order;
    }

    public function headings() :array
    {
        return ["Product Model","Contact Person Name","Mobile","Address"];
    }
}
