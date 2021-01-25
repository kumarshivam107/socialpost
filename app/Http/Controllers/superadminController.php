<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\User;
use App\Bonafide;
use App\College;
use App\Support;
use zipArchive;
use Storage;
use App\Promomaterial;
use Illuminate\Support\Facades\File; 
use Notification;
use App\Notifications\databaseNotification;
class superadminController extends Controller
{
    //Id Activation:-
    public function idactivation(){
        $unapprove_account = User::where(['is_approve'=>0])->orderBy('created_at','DESC')->get();
        return view('admin.idactivation')->with(compact('unapprove_account'));
    }

    //Approve Id Activation:-
    public function approve_id_activation(Request $request){
        if($request->isMethod('post')){
            $data = $request->all();
            $user_id = $data['user_id'];
            $user_status = User::where(['id'=>$user_id])->first()->is_approve;
            if($user_status == 0){
                $user_id =User::where(['id'=>$user_id])->update(['is_approve'=>1]);
                return redirect('/admin/id-activation')->with('flash_message_success','User Has Been Successfully Approved');
            }
            else{
                return redirect('/admin/id-activation')->with('flash_message_error','User Is Already Approved Or Disapproved');
            }
            
        }
    }

    //Disapprove Id Activation:-
    public function disapprove_id_activation(Request $request){
        if($request->isMethod('post')){
            $data = $request->all();
            $user_id = $data['user_id'];
            $user_status = User::where(['id'=>$user_id])->first()->is_approve;
            if($user_status == 0){
                $user_id = $data['user_id'];
                $user_id =User::where(['id'=>$user_id])->update(['is_approve'=>2]);
                return redirect('/admin/id-activation')->with('flash_message_success','User Has Been Successfully Approved');
            }
            else{
                return redirect('/admin/id-activation')->with('flash_message_error','User Is Already Approved Or Disapproved');
            }
            
        }
    }

    //Userlist:-
    public function userlist(){
        $alluser = User::where(['is_approve'=>1])->orderBy('created_at','DESC')->get();
        return view('admin.userlist')->with(compact('alluser'));
    }

    //Block User:-
    public function blockuser($id){
        $user = User::where(['id'=>$id])->update(['is_approve'=>0]);
        return redirect()->back()->with('flash_message_success','User Has Been Blocked Successfully.');
    }

    //Delete Use:-
    public function delete_user_account($id){
        User::where(['id'=>$id])->delete();
        return redirect()->back()->with('flash_message_success','User Has Been Deleted Successfully.');
    }

    //Pending Admission:-
    public function pendingadmission(Request $request){
        if(request()->ajax()){
            $agent_name = $request->agent_name;
            $college_name = $request->college_name;
            if($agent_name=='' AND $college_name==''){
                $data = Bonafide::where(['status'=>0])->get();
            }
            elseif($agent_name !='' AND $college_name == ''){
                $data = Bonafide::where(['status'=>0,'user_id'=>$agent_name])->get();
            }
            elseif($agent_name == '' AND $college_name !=''){
                $data = Bonafide::where(['status'=>0,'college'=>$college_name])->get();
            }
            else{
                $data = Bonafide::where(['status'=>0,'user_id'=>$agent_name,'college'=>$college_name])->get();
            }
            return datatables()->of($data)->addColumn('action',function($data){
                $button = '<a class="btn btn-success btn-sm" href="/demoproject/admin/pending-admission-details/'.$data->bonafide_id.'">View Details</a>
                ';
                return $button;
            })->rawColumns(['action'])
            ->make(true);
        }
        $agent_name = User::where(['id_type'=>1])->select('id','name')->get();
        $college_name = College::get();
        return view('admin.admission.pendingadmission')->with(compact('agent_name','college_name'));
    }

    //Approved Admission:-
    public function approvedadmission(Request $request){
        if(request()->ajax()){
            $agent_name = $request->agent_name;
            $college_name = $request->college_name;
            if($agent_name=='' AND $college_name==''){
                $data = Bonafide::where(['status'=>1])->select('bonafide_id','user_name','name','father_name','college','course','branch')->get();
            }
            elseif($agent_name !='' AND $college_name == ''){
                $data = Bonafide::where(['status'=>1,'user_id'=>$agent_name])->select('bonafide_id','user_name','name','father_name','college','course','branch')->get();
            }
            elseif($agent_name == '' AND $college_name !=''){
                $data = Bonafide::where(['status'=>1,'college'=>$college_name])->select('bonafide_id','user_name','name','father_name','college','course','branch')->get();
            }
            else{
                $data = Bonafide::where(['status'=>1,'user_id'=>$agent_name,'college'=>$college_name])->select('bonafide_id','user_name','name','father_name','college','course','branch')->get();
            }
            return datatables()->of($data)->addColumn('action',function($data){
                $button = '<a class="btn btn-success btn-sm" href="/demoproject/admin/download-docs/'.$data->bonafide_id.'">Download Docs</a>
                ';
                return $button;
            })->rawColumns(['action'])
            ->make(true);
        }
        $agent_name = User::where(['id_type'=>1])->select('id','name')->get();
        $college_name = College::get();
        return view('admin.admission.approvedadmission')->with(compact('agent_name','college_name'));
    }

    //All Admission:-
    public function reportedadmission(Request $request){
        if(request()->ajax()){
            $agent_name = $request->agent_name;
            $college_name = $request->college_name;
            if($agent_name=='' AND $college_name==''){
                $data = Bonafide::whereNotIn('recepit_no',['NULL','null'])->get();
            }
            elseif($agent_name !='' AND $college_name == ''){
                $data = Bonafide::where(['status'=>1,'user_id'=>$agent_name])->get();
            }
            elseif($agent_name == '' AND $college_name !=''){
                $data = Bonafide::where(['status'=>1,'college'=>$college_name])->get();
            }
            else{
                $data = Bonafide::where(['status'=>1,'user_id'=>$agent_name,'college'=>$college_name])->get();
            }
            return datatables()->of($data)->addColumn('action',function($data){
                $button = '<a class="btn btn-success btn-sm" href="/demoproject/admin/download-recepit/'.$data->bonafide_id.'">Download Recepit</a>
                ';
                return $button;
            })->rawColumns(['action'])
            ->make(true);
        }
        $agent_name = User::where(['id_type'=>1])->select('id','name')->get();
        $college_name = College::get();
        return view('admin.admission.reportedadmission')->with(compact('agent_name','college_name'));
    }

    //Pending Admission Details:-
    public function pending_admission_details($id,Request $request){
        $student_data = Bonafide::where(['bonafide_id'=>$id])->first();
        return view('admin.admission.pending_admission_details')->with(compact('student_data'));
    }

    //Download Docs:-
    public function download_docs($id){
        $delete_img_path =public_path().'/myzip.zip';
        if(File::exists($delete_img_path)){
            File::delete($delete_img_path);
        }
        $alldocs = Bonafide::where(['bonafide_id'=>$id])->first();
        $tenthdoc = $alldocs->tenthmarksheet;
        $twelvedoc = $alldocs->twelvemarksheet;
        $grad_marksheet = $alldocs->grad_marksheet;
        $addhar_card = $alldocs->addhar_card;
        $recepit = $alldocs->recepit_no;
        $zip = new zipArchive;
        $fileName = "myzip.zip";
        if($zip->open(public_path($fileName),zipArchive::CREATE)==TRUE){
            $files = public_path().'/storage/uploads/tenthmarksheet/'.$tenthdoc.'';
            if($twelvedoc != 'na'){
                $filetwo = public_path().'/storage/uploads/twelvemarksheet/'.$twelvedoc.'';
                $zip->addFile($filetwo,$twelvedoc);
            }
            if($grad_marksheet != 'na'){
                $filethree = public_path().'/storage/uploads/gradution_marksheet/'.$grad_marksheet.'';
                $zip->addFile($filethree,$grad_marksheet);
            }
            if($addhar_card != 'na'){
                $filefour = public_path().'/storage/uploads/aadhar_card/'.$addhar_card.'';
                $zip->addFile($filefour,$addhar_card);
            }
            // if($recepit != 'na'){
            //     $filefive = public_path().'/storage/uploads/recepit/'.$recepit.'';
            //     $zip->addFile($filefive,$recepit);
            // }
            $zip->addFile($files,$tenthdoc);
            $zip->close();
        }
    return response()->download(public_path($fileName));    
    }

    //Download Recepit:-
    public function download_recepit($id){
        $recepit = Bonafide::where(['bonafide_id'=>$id])->first()->recepit_no;
        $files = public_path().'/storage/uploads/recepit/'.$recepit.'';
        return response()->download($files);
    }

    //Adding College List:-
    public function add_college(Request $request){
        if($request->isMethod('post')){
            
            $data = $request->all();
            $college = new College;
            $college->college_name = $data['college_name'];
            $college->college_city = $data['college_city'];
            $college->college_state = $data['college_state'];
            $college->course = $data['course'];
            $college->save();
            return redirect('/admin/add-college')->with('flash_message_success','College Has Been Added Successfully');
        }
        return view('admin.colleges.addcollege');
    }

    //View College List:-
    public function view_college_list(){
        $college_list = College::get();
        return view('admin.colleges.viewcollegelist')->with(compact('college_list'));
    }

    //Delete College:-
    public function delete_college($id){
        College::where(['college_id'=>$id])->delete();
        return redirect('/admin/view-college-list')->with('flash_message_success','College Has Been Deleted Successfully.');
    }

    //Support Request:-
    public function support_request(){
        $support = Support::orderBy('created_at','DESC')->get();
        return view('admin.support.index')->with(compact('support'));
    }

    //Adding Promotional Material:-
    public function add_promotional(Request $request){
        if($request->isMethod('post')){
            $data = $request->all();
            $material = new Promomaterial;
            $material->user_id = Auth::id();
            $material->material_tittle = $data['material_tittle'];
            $material->college_name = $data['college_name'];
            $material->material_type = $data['material_type'];
            //Uploading File:-
            $extension = $request->file->getClientOriginalExtension();
                $material->name = $request->file('file')->hashName();
                $request->file('file')->store('public/uploads/promovideo');
            $material->save();
            return redirect('admin/add-promotional-material')->with('flash_message_success','Promotional Message Has Been Added Successfully.');
        }
        $college_list = College::get();
        foreach($college_list as $college_list){
            $send_data = "<option class='form-control' value='$college_list->college_name'>$college_list->college_name</option>";
        }
        return view('admin.promotional.index')->with(compact('send_data'));
    }


    //View Promotional Material:-
    public function view_promotional(){
        $promotional = Promomaterial::orderby('created_at','DESC')->get();
        return view('admin.promotional.viewpromotional')->with(compact('promotional'));
    }

    //Download Promotional:-
    public function download_promotional($id){
        $material_name = Promomaterial::where(['material_id'=>$id])->first()->name;
        //$file_path = public_path().'/storage/uploads/promovideo/'.$material_name.'';
        $file_path = '/storage/uploads/promovideo/'.$material_name.'';
        return response()->download(public_path($file_path));    
    }

    //Delete Video:-
    public function delete_promovideo($id){
        $material_name = Promomaterial::where(['material_id'=>$id])->first()->name;
        $file_path = public_path().'/storage/uploads/promovideo/'.$material_name.'';
        unlink($file_path);
        Promomaterial::where(['material_id'=>$id])->delete();
        return redirect()->back()->with('flash_message_success','Your Material Has Been Deleted Successfully');
    }

    //Send Notification:-
    public function send_notification(Request $request){
        if($request->isMethod('post')){
            $data = $request->all();
            $user = User::all();
            $letter = collect(['title'=>$data['subject'],'message'=>$data['message']]);
            Notification::send($user,new databaseNotification($letter));

        }
        return view('admin.notification.index');
    }

    //view Notification:-
    public function view_notification(){
        return view('admin.notification.viewnotification');
    }

    //Mark As Read:-
    public function mark_as_read(){
        Auth::user()->notifications->markAsRead();
        return redirect()->back();
    }

    //Support Reply:-
    public function add_support_reply($id){
        $message_data = Support::where(['support_id'=>$id])->first();
        return view('admin.support.supportreply')->with(compact('message_data'));
    }

    //Add Reply:-
    Public function add_reply(Request $request){
        if($request->isMethod('post')){
            $data = $request->all();
            Support::where(['support_id'=>$data['support_id']])->update(['reply'=>$data['reply'],'status'=>1]);
            return redirect()->back()->with('flash_message_success','Reply Has Been Added Successfully');
        }
    }
}
