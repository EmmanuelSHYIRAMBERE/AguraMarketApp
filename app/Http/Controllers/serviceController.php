<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Campaigns;

use App\Models\Services;

use App\Models\Contact;

class serviceController extends Controller
{
    public function services()
    {
        $service=services::all();

        return view('welcome\cta', compact('service'));
    }

    public function view_campaign()
    {

        return view('admin.campaign');
    }
    public function add_campaign(Request $request)
    {

        $campaign=new campaigns;

        $campaign->name=$request->name;
        $campaign->objective=$request->objective;
        $campaign->target_Audience=$request->target_Audience;
        $campaign->budget=$request->budget;
        $campaign->channels=$request->channels;
        $campaign->creative_Assets=$request->creative_Assets;
        $campaign->metrics=$request->metrics;
           
        $campaign->save();

        return redirect()->back()->with('message', 'Campaign Added Successfully');
    }
    public function show_campaign()
    {

        $campaign = campaigns :: all();
        return view('admin.show_campaign', compact('campaign'));

    }
    public function delete_campaign($id)
    {
        $campaign=campaigns::find($id);

        $campaign->delete();

        return redirect()->back()->with('message', 'Campaign deleted successfully');
    }
    public function update_campaign($id)
    {
        $campaign=campaigns::find($id);
        
        return view('admin.update_campaign', compact('campaign'));
    }
    public function update_campaign_confirm(Request $request,  $id)
    {
        $campaign=campaigns::find($id);
        
        $campaign->name=$request->name;
        $campaign->objective=$request->objective;
        $campaign->target_Audience=$request->target_Audience;
        $campaign->budget=$request->budget;
        $campaign->channels=$request->channels;
        $campaign->creative_Assets=$request->creative_Assets;
        $campaign->metrics=$request->metrics;
        
        $campaign->save();
        
        return redirect()->back()->with('message', 'Campaign updated Successfully');
    }
    
    
    public function view_contact()
    {
        
        $contact = contact :: all();
        return view('admin.view_contact', compact('contact'));
    }
    public function delete_contact($id)
    {
        $contact=contact::find($id);
    
        $contact->delete();
    
        return redirect()->back()->with('message', 'Contact deleted successfully');
    }

    public function view_implementation()
    {
        
        return view('admin.implementation');
    }
    public function view_payroll()
    {
        
        return view('admin.payroll');
    }
}
