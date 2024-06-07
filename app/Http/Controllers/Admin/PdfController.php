<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;
use App\Models\Product;
use App\Models\Supplier;
use App\Mail\MailExample;

use Mail;

class PdfController extends Controller
{
    public function generate_pdf(){
    
    $products=Product::get();
    $data= [
        'email' => "shrutmac5@gmail.com",
        'title' => 'Pdf',
        'date' => date('Y-m-d'),
        'products' => $products
        

    ];


    $pdf = Pdf::loadView('admin.product.generate-product-pdf', $data);
    return $pdf->download('invoice.pdf');

    Mail::to($data['email'])->send(new MailExample($data));

    dd('Mail sent successfully');
    }
    public function generate_incoming(){
    
        $products=supplier::get();
        $data= [
            
            'title' => 'Incoming Supply',
            'date' => date('Y-m-d'),
            'products' => $products
                        
        ];
    
    
        $pdf = Pdf::loadView('admin.product.generate-incoming-pdf', $data);
        return $pdf->download('invoice.pdf');
        }
}
