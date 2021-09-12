<?php
namespace App\Http\Controllers;

use App\Models\admin;
use Illuminate\Http\Request;
use DB;

class AdminController extends Controller
{
     public function front()
    {
        $data['banners'] = DB::table('banners')->get();
        $data['about'] = DB::table('abouts')->get('about');
        $data['feedback'] = DB::table('contacts')->get();
        //     echo "<pre>";
        // print_r( $data['about']);
        // die();

        

        return view('front/index',$data);
    }




    public function login()
    {
        return view('admin/login');
    }
    public function login_submit(Request $request)
    {
        $name = $request->post('name');
        $password = $request->post('password');

        $result = admin::where(['name' => $name, 'password' => $password])->get();
        //   echo "<pre>";
        // print_r($result);
        // die();
        

        if (isset($result['0']->id))
        {
            $request->session()
                ->put('login', true);
            $request->session()
                ->put('login', $result['0']->id);
            $request->session()
                ->put('name', $result['0']->name);
            $request->session()
                ->flash('msg', 'login successfully');

            return redirect('/admin/dashboard');
        }
        else
        {
            $request->session()
                ->flash('msg', 'please enter correct login details!!');
            return redirect('admin/login');
        }
    }
    public function index(Request $request)
    {
        $data['about'] = DB::table('abouts')->get();
        $data['contact'] = DB::table('contacts')->get();

        return view('admin/dashboard', $data);
    }
    public function banner(Request $request)
    {
        $data['banner'] = DB::table('banners')->get();

        return view('admin/home', $data);
    }
    public function banner_submit(Request $request)
    {
        $request->validate(['image' => 'required|mimes:jpg,jpeg,png', ]);
        $image = $request->file('image');
        $ext = $image->extension();
        $file = time() . '.' . $ext;
        $image->storeAs('/public/post', $file);

        $data = array(
            'title' => $request->input('title') ,
            'sub_title' => $request->input('sub_title') ,
            'image' => $file
        );
        // echo "<pre>";
        // print_r($data);
        // die();
        DB::table('banners')->update($data);
        $request->session()
            ->flash('msg', 'banner updated successfully!!');
        return redirect('admin/homepage');
    }

    public function about()
    {
        $data['about'] = DB::table('abouts')->get();
        return view('admin/about', $data);
    }
    public function about_submit(Request $request)
    {
        $request->validate(['image' => 'required|mimes:jpg,jpeg,png', ]);
        $image = $request->file('image');
        $ext = $image->extension();
        $file = time() . '.' . $ext;
        $image->storeAs('/public/post', $file);

        $data = array(
            'about' => $request->input('about') ,
            'education' => $request->input('study') ,
            'work' => $request->input('work') ,
            'image' => $file
        );

        DB::table('abouts')->update($data);
        $request->session()
            ->flash('msg', 'abouts updated successfully!!');
        return redirect('admin/about');
    }

    public function project()
    {
        $data['project'] = DB::table('portfolios')->get();

        return view('admin/project', $data);
    }
    public function project_submit(Request $request)
    {
        $request->validate(['image' => 'required|mimes:jpg,jpeg,png', ]);
        $image = $request->file('image');
        $ext = $image->extension();
        $file = time() . '.' . $ext;
        $image->storeAs('/public/post', $file);

        $data = array(
            'title' => $request->input('title') ,
            'sub_title' => $request->input('sub_title') ,
            'short_desc' => $request->input('descr') ,
            'image' => $file
        );

        DB::table('portfolios')->insert($data);
        $request->session()
            ->flash('msg', 'project updated successfully!!');
        return redirect('admin/project');
    }

    public function update(Request $request, admin $admin)
    {
        //
        
    }

    public function destroy(admin $admin)
    {
        //
        
    }
}

