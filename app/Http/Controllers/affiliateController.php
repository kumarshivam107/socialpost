<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Bonafide;
use Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\File; 
use App\Support;
use App\User;
use App\Promomaterial;
use App\College;
use App\Withdraw;
use zipArchive;
use Storage;
use DB;
class affiliateController extends Controller
{
    //Affiliate Login Page:-
    public function home(){
        if(request()->ajax()){
            $query = "
            SELECT * FROM chart_data 
            WHERE year = '".$_POST["year"]."' 
            ORDER BY id ASC
            ";
            $statement = $connect->prepare($query);
            $statement->execute();
            $result = $statement->fetchAll();
            foreach($result as $row)
            {
             $output[] = array(
              'month'   => $row["month"],
              'profit'  => floatval($row["profit"])
             );
            }
            echo json_encode($output);
        }
        $bonafide = new Bonafide;
        $total_admission = $bonafide->total_admission();
        $approve_admission = $bonafide->admission_approve();
        $pending_admission = $bonafide->pending_admission();
        $expected_earning = $bonafide->expected_earning();
        $promotional = Promomaterial::orderBy('created_at','DESC')->take(6)->get();
        return view('affiliate.home')->with(compact('total_admission','approve_admission','pending_admission','expected_earning','promotional'));
    }

     //Error Page:-
    public function error(){
        return view('admin.error');
    }

    //New Bonafide Page:-
    public function new_bonafide_request(Request $request){
        if($request->isMethod('post')){
            $data = $request->all();
            $user_id = Auth::user()->id;
            $user_name = Auth::user()->name;
            $bonafide = new Bonafide;
            $bonafide->user_id = $user_id;
            $bonafide->user_name = $user_name;
            $bonafide->name = $data['name'];
            $bonafide->father_name = $data['father_name'];
            $bonafide->state = $data['state'];
            $bonafide->course = $data['course'];
            $bonafide->college = $data['college'];
            $bonafide->branch = $data['branch'];
            //Storing & Saving 10th Marksheet:-
            $bonafide->tenthmarksheet = $request->file('tenth_marksheet')->hashName();
            $request->file('tenth_marksheet')->store('uploads/tenthmarksheet');
            //Storing 12th Marksheet:-
            if($request->file('twelve_marksheet') != null){
                $bonafide->twelvemarksheet = $request->file('twelve_marksheet')->hashName();
                $request->file('twelve_marksheet')->store('public/uploads/twelvemarksheet');
            }
            //Graduation Marksheet:-
            if($request->file('gradution_marksheet') != null){
                $bonafide->grad_marksheet = $request->file('gradution_marksheet')->hashName();
                $request->file('gradution_marksheet')->store('public/uploads/gradution_marksheet');
            }
            //Aadhar Card:-
            if($request->file('aadhar_card') != null){
                $bonafide->addhar_card = $request->file('aadhar_card')->hashName();
                $request->file('aadhar_card')->store('uploads/aadhar_card');
            }
            $bonafide->save();
            return redirect('/affiliate/new-bonafide-request')->with('flash_message_success','Admission Request Has Been Successfully Recorded.');
        }
        $unique_state = College::select('college_state')->distinct()->get();
        $unique_state_data = '';
        foreach($unique_state as $unique_state){
            $unique_state_data .="<option vlaue=".$unique_state->college_state.">$unique_state->college_state</option>";
        }
        return view('affiliate.bonafide.newbonafide')->with(compact('unique_state_data'));
    }

    //Approve Bonafide Request:-
    public function approve_bonafide(){
        $user_id = Auth::user()->id;
        $approve_bonafide = Bonafide::where(['user_id'=>$user_id,'status'=>1])->orderBy('created_at','DESC')->get();
        return view('affiliate.bonafide.approvebonafide')->with(compact('approve_bonafide'));
    }

    //All Bonafide Request:-
    public function bonafide_request(){
        $user_id = Auth::user()->id;
        $all_bonafide = Bonafide::where(['user_id'=>$user_id])->orderBy('created_at','DESC')->get();
        return view('affiliate.bonafide.bonafiderequest')->with(compact('all_bonafide'));
    }

    //New Support Ticket:-
    public function new_support_ticket(Request $request){
        if($request->isMethod('post')){
            $data = $request->all();
            $support = new Support;
            $support->user_id = Auth::user()->id;
            $support->user_email = Auth::user()->email;
            $support->subject = $data['subject'];
            $support->reason = $data['reason'];
            $support->message = $data['message'];
            $support->save();
            return redirect('affiliate/new-support-ticket')->with('flash_message_success','New Support Message Has Been Successfully Created.');
        }   
        return view('affiliate.support.index');
    }

    //Support History:-
    public function support_history(){
        $user_id = Auth::user()->id;
        $support_history = Support::where(['user_id'=>$user_id])->orderBy('created_at','DESC')->get();
        return view('affiliate.support.history')->with(compact('support_history'));
    }
    
    //Submit Details:-
    public function submit_detail(){
        $user_id = Auth::user()->id;
        $bonafide_report = Bonafide::where(['user_id'=>$user_id,'status'=>1])->orderBy('created_at','DESC')->get();
        return view('affiliate.support.submitdetails')->with(compact('bonafide_report'));
    }

    //Edit Details:-
    public function edit_details(Request $request){
        return view('affiliate.support.editdetails');
    }

    //Update Details:-
    public function update_details(Request $request){
        if($request->isMethod('post')){
            $data = $request->all(); 
            //Storing Recepit:-
            if($request->file('recepit') != null){
                $filename = $request->file('recepit')->hashName();
                $request->file('recepit')->store('uploads/recepit');
                Bonafide::where(['bonafide_id'=>$data['id_detail']])->update(['recepit_no'=>$filename]);
            }
            if($data['utr'] !=null){
                Bonafide::where(['bonafide_id'=>$data['id_detail']])->update(['utr'=>$data['utr'],'utr_approved'=>0]);
            }
            return redirect()->back()->with('flash_message_success','Data Has Been Updated Successfully.');
        }
    }

    //Busniess Plan:-
    public function busniess_plan(){
        return view('affiliate.marketing.busniessplan');
    }

    //Promotional Page:-
    public function promotional(){
        $promotional = Promomaterial::orderBy('created_at','DESC')->orderBy('created_at','DESC')->get();
        return view('affiliate.marketing.promotional')->with(compact('promotional'));
    }

    //Profile  Page:-
    public function profile(){
        return view('affiliate.marketing.profile');
    }

    //Change Password:-
    public function change_password(Request $request){
        if($request->isMethod('post')){
            $data = $request->all();
            $password = Auth::user()->password;
            if(Hash::check($data['current-password'],$password)){
                if($data['new-password']==$data['confirm-password']){
                    $user_id = Auth::user()->id;
                    User::where(['id'=>$user_id])->update(['password'=>hash::make($data['new_password'])]);
                    return redirect('/affiliate/change-password')->with('flash_message_success','Your Password Has Been Successfully Changed.');
                }
                else{
                    return redirect()->back()->with('flash_message_error','New Password and Confirm Password Must Be Same.');
                }
            }
            else{
                return redirect()->back()->with('flash_message_error','Current Password is Not Matched');
            }
        }
        return view('affiliate.marketing.changepassword');
    }

    //Affiliate Commission:-
    public function approved_commission(){
        $user_id = Auth::user()->id;
        $utr_approved = Bonafide::where(['user_id'=>$user_id])->orderBy('created_at','DESC')->whereIn('utr_approved',[0,1])->get();
        return view('affiliate.marketing.commission')->with(compact('utr_approved'));
    }

    //Profile Picture Upload:-
    public function profile_pic_update(Request $request){
        if($request->isMethod('post')){
            $data = $request->all();
            //Storing Profile Picture:-
             User::where(['id'=>Auth::user()->id])->update(['profile_pic'=>$request->file('profile_pic')->hashName()]);            $request->file('profile_pic')->store('uploads/profilepic');
        }
        return view('affiliate.marketing.profilepicupdate');
    }

    //College List:-
    public function college_list(){
        $collegelist = College::orderBy('created_at','DESC')->get();
        return view('affiliate.marketing.collegelist')->with(compact('collegelist'));
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

    //Getting College Data:-
    public function get_college_data($id){
        $college_data = College::where(['college_state'=>$id])->get();
        $html ='';
        foreach($college_data as $college_data){
            $html .= "<option value='".$college_data->college_name."'>$college_data->college_name</option>";
        }
        return response()->json($html);
    }

    //Withdraw Index Page:-
    public function withdraw(Request $request){
        if($request->isMethod('post')){
            $data = $request->all();
            $user_id = Auth::id();
            //Checking if Ammount is Valid within the limit of total withdraw ammount:-
            $total_earning = Bonafide::where(['user_id'=>$user_id,'status'=>1])->sum('commission');
            $withdraw_earning = Withdraw::where(['user_id'=>$user_id])->sum('requested_ammount');
            $avaliable_earning= $total_earning - $withdraw_earning;
            $current_ammount = $data['money'];
            if($avaliable_earning>$current_ammount){
                $withdraw = new Withdraw;
                $withdraw->user_id = Auth::id();
                $withdraw->user_email = Auth::user()->email;
                $withdraw->holder_name = $data['holder_name'];
                $withdraw->account_no = $data['account_no'];
                $withdraw->ifsc_code = $data['ifsc_code'];
                $withdraw->requested_ammount =$data['money'];
                $withdraw->save();
                return redirect('/affiliate/withdraw-index')->with('flash_message_success','Withdraw Order Has Been Successfully Placed.');
            }
            else{
                return redirect('/affiliate/withdraw-index')->with('flash_message_error','Please Try With Lesser Ammount.');
            }
            
        }
        return view('affiliate.withdraw.index');
    }

    //Withdraw History:-
    public function withdraw_histroy(){
        $withdraw_data = Withdraw::where(['user_id'=>Auth::id()])->orderBy('created_at','DESC')->get();
        return view('affiliate.withdraw.history')->with(compact('withdraw_data'));
    }

    //View Reply:-
    public function view_reply($id){
        $contact_data = Support::where(['support_id'=>$id])->first();
        return view('affiliate.support.viewreply')->with(compact('contact_data'));
    }

    //Download Docs:-
    public function download_docs($id){
        // $delete_img_path =public_path().'/myzip.zip';
        // if(File::exists($delete_img_path)){
        //     File::delete($delete_img_path);
        // }
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
}
