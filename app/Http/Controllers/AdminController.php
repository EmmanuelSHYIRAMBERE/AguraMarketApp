<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Notification;

use Barryvdh\DomPDF\Facade\Pdf;

use Illuminate\Http\Request;


use App\Models\Category;

use App\Models\Services;

use App\Models\Product;

use App\Models\Order;


use App\Notifications\SendEmailNotification;


class AdminController extends Controller
{
    public function view_category()
    {
        $data=category::all();

        return view('admin.category', compact('data'));
    }
    public function add_category(Request $request)
    {
        $data = new category;

        $data->category_name=$request->category;

        $data->save();

        return redirect()->back()->with('message', 'Category created successfully');
    }
    public function delete_category($id)
    {
        $data=category::find($id);
        
        $data->delete();
        
        return redirect()->back()->with('message', 'Category deleted successfully');
    }
    public function update_category($id)
    {
        
        $category = category :: find($id);
        
        return view('admin.update_category', compact('category'));
    }
    public function update_category_confirm(Request $request,  $id)
    {
        $category = category :: find($id);
        
        $category->category_name=$request->category;
        
        $category->save();
        
        return redirect()->back()->with('message', 'Category updated successfully');
    }
    
    public function view_service()
    {
        $data=services::all();
        
        return view('admin.service', compact('data'));
    }
    public function add_service(Request $request)
    {
        $data = new services;
        
        $data->service_title=$request->title;
        $data->service_body=$request->body;
        
        $data->save();
        
        return redirect()->back()->with('message', 'Service created successfully');
    }
    public function delete_service($id)
    {
        $data=services::find($id);
        
        $data->delete();
        
        return redirect()->back()->with('message', 'Service deleted successfully');
    }
    public function update_service($id)
    {
        
        $service = services :: find($id);
        
        return view('admin.update_service', compact('service'));
    }
    public function update_service_confirm(Request $request,  $id)
    {
        $service = services :: find($id);
        
        $service->service_title=$request->title;
        $service->service_body=$request->body;
        
        $service->save();
        
        return redirect()->back()->with('message', 'Service updated successfully');
    }
    
    public function view_product()
    {
        $category=category::all();
        return view('admin.product', compact('category'));
    }
    
    public function add_product(Request $request)
    {
        $product=new product;
        
        $product->title=$request->title;
        $product->description=$request->description;
        $product->price=$request->price;
        $product->discount_price=$request->discount;
        $product->quantity=$request->quantity;
        $product->category=$request->category;
        
        $image=$request->image;
        $imagename=time().'.'.$image->getClientOriginalExtension();
        $request->image->move('product', $imagename);
        $product->image=$imagename;
        
        $product->save();
        
        return redirect()->back()->with('message', 'Product Added Successfully');
        
    }
    public function show_product()
    {
        
        $product = product :: all();
        return view('admin.show_product', compact('product'));
        
    }
    public function delete_product($id)
    {
        $product=product::find($id);
        
        $product->delete();
        
        return redirect()->back()->with('message', 'Product deleted successfully');
    }
    public function update_product($id)
    {
        $product=product::find($id);
        
        $category = category :: all();
        
        return view('admin.update_product', compact('product', 'category'));
    }
    public function update_product_confirm(Request $request,  $id)
    {
        $product=product::find($id);
        
        $product->title=$request->title;
        $product->description=$request->description;
        $product->price=$request->price;
        $product->discount_price=$request->discount;
        $product->quantity=$request->quantity;
        $product->category=$request->category;
        
        $image=$request->image;
        
        if ($image) {
            $imagename=time().'.'.$image->getClientOriginalExtension();
            $request->image->move('product', $imagename);
            
            $product->image=$imagename;
        }
        
        $product->save();
        
        return redirect()->back()->with('message', 'Product updated successfully');
    }
    
    public function orders()
    {
        $order=order::all();
        
        return view('admin.order', compact('order'));
    }
    public function delivered($id)
    {
        $order=order::find($id);
        $order->delivery_status="delivered";
        $order->payment_status="paid";
        
        $order->save();
        
        return redirect()->back()->with('message', 'Product status updated successfully');
    }
    public function print_pdf($id)
    {
        $order=order::find($id);
        $pdf=PDF::loadView('admin.pdf', compact('order'));
        
        return $pdf->download('order_details.pdf');
    }
    public function send_email($id)
    {
        $order=order::find($id);
        
        return view('admin.email_info', compact('order'));
    }
    public function send_user_email(Request $request, $id)
    {
        $order=order::find($id);
        
        $details = [
            'greeting' => $request->greeting,
            'intro' => $request->intro,
            'body' => $request->body,
            'button' => $request->button,
            'url' => $request->url,
            'remark' => $request->remark,
        ];
        
        Notification::sendNow($order,new SendEmailNotification($details));
        return redirect()->back()->with('message', 'An email sent to the user email successfully');
        
        
        
    }
    public function searchData(Request $request)
    {
        $searchText=$request->search;
        $order=order::where('name','LIKE',"%$searchText%")->orWhere('product_title','LIKE',"%$searchText%")->orWhere('phone','LIKE',"%$searchText%")->get();
        
        return view('admin.order', compact('order'));
    }
}
