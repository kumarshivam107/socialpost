<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Newsletter;
Use App\Contact;
use App\Applynow;
Use App\Allcollege;
use App\Blog;
use App\Comment;
use File;
class publicController extends Controller
{
    //Index Page:-
    public function index(){
        return view('pioneers.index');
    }

    //About Page:-
    public function about(){
        return view('pioneers.about');
    }

    //Course Page:-
    public function course_name(){
        return view('pioneers.coursename');
    }

    //College Page:-
    public function colleges(){
        return view('pioneers.courses');
    }

    //Bscc Page:-
    public function bscc(){
        return view('pioneers.bscc');
    }

    //Gallery Page:-
    public function gallery(){
        return view('pioneers.gallery');
    }

    //Contact Page:-
    public function contact(){
        return view('pioneers.contact');
    }

    //Apply Now Page:-
    public function apply_now(){
        return view('pioneers.apply_now');
    }

    //Marwadi University Page:-
    public function marwadi(){
        return view('pioneers.marwadi');
    }

    //Maharshi Markendeswar University:-
    public function mmu(){
        return view('pioneers.mmu');
    }

    //Sri Venketswara College:-
    public function venketswara(){
        return view('pioneers.venketswara');
    }

    //Handle Newsletter:-
    public function handle_newsletter(Request $request){
        if($request->isMethod('post')){
            $data = $request->all();
            $newsletter = new Newsletter;
            $newsletter->email = $data['email'];
            $newsletter->save();
            return redirect('/index')->with('flash_message_success','You are Successfully Suscribe For Newletter.');
        }
    }

    //Handling Contact Form:-
    public function handle_contact(Request $request){
        if($request->isMethod('post')){
            $data = $request->all();
            $contact = new Contact;
            $contact->name = $data['name'];
            $contact->email = $data['email'];
            $contact->subject = $data['subject'];
            $contact->message = $data['message'];
            $contact->save();
            return redirect('/contact')->with('flash_message_success','You Message Has Been Successfully Recorded. We Will Contact u Soon...');
        }
    }

    //Handling Apply Now:-
    public function handle_applynow(Request $request){
        if($request->isMethod('post')){
            $data = $request->all();
            $applynow = new Applynow;
            $applynow->name = $data['name'];
            $applynow->email = $data['email'];
            $applynow->mobile = $data['mobile'];
            $applynow->course = $data['course'];
            if($data['trade'] != null){
                $applynow->trade = $data['trade'];
            }
            else{
                $applynow->trade = "Not Choosen";
            }
            $applynow->parent_state = $data['state'];
            if($data['choice'] !=null){
                $applynow->college_choice = $data['choice'];
            }
            else{
                $applynow->college_choice = "Not Chooen";
            }
            
            $applynow->need_bscc = $data['need'];
            $applynow->save();
            return redirect()->back()->with('flash_message_success','You are Successfully Applied For Admission.');
        }
    }

    //Get All College LIst:-
    public function get_all_college(Request $request){
        if(request()->ajax()){
            $state = $request->state;
            if($state==''){
                $data = Allcollege::take(200)->orderBy('college_id','ASC')->get();
            }
            elseif($state !=''){
                $data = Allcollege::where(['column_2'=>$state])->get();
            }
            else{
                echo "Invalid Data";
            }
            return datatables()->of($data)->addColumn('action',function($data){
                $button = '<a class="btn btn-success btn-sm">View Details</a>
                ';
                return $button;
            })->rawColumns(['action'])
            ->make(true);
        }
        return view('pioneers.allcollege')->with(compact('college_list'));
    }

    //NAAC College List:-
    public function naac_college_list(){
        //$path ="{{asset('public/assets/image/listofcollege')}}";
        return response()->download(public_path('\assets\images\listofcollege.pdf'));
    }

    //Blog Page:-
    public function blog(){
        $blog_data = Blog::orderBy('created_at','DESC')->get();
        return view('pioneers.blog')->with(compact('blog_data'));
    }

    // //Blog-post Pagr:-
    // public function blog_post($id){
    //     $latest_blog = Blog::take(3)->orderBy('created_at','DESC')->get();
    //     $blog_data = Blog::where(['card_heading'=>$id])->first();
    //     return view('blog.index')->with(compact('blog_data','latest_blog'));
    // }

    //Add Blog:-
    public function add_blog(Request $request){
        if($request->isMethod('post')){
            $data = $request->all();
            $blog = new Blog;
            $blog->full_heading = $data['blog_tittle'];
            $blog->card_heading = $data['card_heading'];
            $blog->card_text = $data['card_text'];
            $blog->subheading = $data['sub_heading'];
            $blog->paraone_text = "<pre>".$data['blog-content']."</pre>";
            //Storing 12th Marksheet:-
            if($request->file('blog_image') != null){
                $blog->blog_image = $request->file('blog_image')->hashName();
                $request->file('blog_image')->store('public/uploads/blog');
            }
            $blog->save();
        }
        return view('blog.addblog');
    }

    //View Blog:-
    public function view_blog(){
        $blog_data = Blog::orderBy('created_at','DESC')->get();
        return view('blog.viewblog')->with(compact('blog_data'));
    }

    //Edit Blog:-
    public function editblog($id){
        $blog_data = Blog::where(['blog_id'=>$id])->first();
        return view('blog.editblog')->with(compact('blog_data'));
    }

    //Delete Blog:-
    public function deleteblog($id){
        $imgdata = Blog::where(['blog_id'=>$id])->first()->blog_image;
        $image_path = 'public/storage/uploads/blog/'.$imgdata.'';
        File::delete($image_path);
        Blog::where(['blog_id'=>$id])->delete();
        return redirect()->back()->with('flash_message_success','You Are Successfully Deleted a Blog');
    }

    //update Blog:-
    public function updateblog(Request $request){
        if($request->isMethod('post')){
            $data = $request->all();
            //Storing 12th Marksheet:-
            if($request->file('blog_image') != null){
                $filename = $request->file('blog_image')->hashName();
                $request->file('blog_image')->store('public/uploads/blog');
                $image_path = 'public/storage/uploads/blog/'.$data["exist-image"].'';
                File::delete($image_path);
            }
            else{
                $filename = $data['exist-image'];
            }
            Blog::where(['blog_id'=>$data['blog_id']])->update(['full_heading'=>$data['blog_tittle'],'card_heading'=>$data['card_heading'],'card_text'=>$data['card_text'],'subheading'=>$data['subheading'],'paraone_text'=>$data['blog-content'],'blog_image'=>$filename]);
            return redirect()->back()->with('flash_message_error','You are Successfully Edited the Post.');
        }
    }

    //College Listing Starts Here:-
    public function nit_polytechnic(){
        return view('pioneers.nitpolytechnic');
    }

    public function sanjivani(){
        return view('pioneers.sanjivani');
    }

    public function dhanalakshmi(){
        return view('pioneers.dhanalakshmi');
    }

    public function siddarthaa(){
        return view('pioneers.siddartha');
    }

    public function sandip(){
        return view('pioneers.sandip');
    }

    //Add Comment:-
    public function add_comment(Request $request){
        if($request->isMethod('post')){
            $data = $request->all();
            $comment = new Comment;
            $comment->blog_id = $data['blog_id'];
            $comment->comment = $data['comment'];
            $comment->name = $data['name'];
            $comment->email = $data['email'];
            $comment->save();
            return redirect()->back()->with('flash_message_comment','You Comment is Successfully Added and Waiting For Approval');
        }
    }

    //Suscribe:-
    public function suscribe(Request $request){
        if($request->isMethod('post')){
            $data = $request->all();
            $newsletter = new Newsletter;
            $newsletter->email = $data['email'];
            $newsletter->save();
            return redirect()->back()->with('flash_message_suscribe','You Are Successfully Suscribe.');
        }
    }

    //First Blog:-
    public function bscc_firstblog(){
        $latest_blog = Blog::take(3)->orderBy('created_at','DESC')->get();
        return view('blog.firstblog')->with(compact('latest_blog'));
    }
    //Second Blog:-
    public function bscc_secondblog(){
        $latest_blog = Blog::take(3)->orderBy('created_at','DESC')->get();
        return view('blog.secondblog')->with(compact('latest_blog'));
    }

    //Third Blog:-
    public function bscc_thirdblog(){
        $latest_blog = Blog::take(3)->orderBy('created_at','DESC')->get();
        return view('blog.thirdblog')->with(compact('latest_blog'));
    }
}
