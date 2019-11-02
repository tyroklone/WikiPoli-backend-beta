<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use App\Models\Post;
use Spatie\Permission\Models\Role;
use App\Politician;
use App\Http\Controllers\Traits\HasError;

class AdminController extends Controller {

    use HasError;

    public function index() {
        $data['recents'] = Post::where('created_at', '>=', \Carbon\Carbon::now()->subDay())->count();
        $data['posts'] = Post::count();
        $data['users'] = User::count();
        return view('admin.home', $data);
    }

    public function politicianGet() {
        $data['politicians'] = Politician::paginate(15);
        return view('admin.politicians', $data);
    }

    public function postGet() {
        $filter = Request()->filter;
        if ($filter == 'approved') {
            $data['posts'] = Post::whereStatus(1)->orderBy('created_at', 'desc')->paginate(15);
        } elseif ($filter == 'unapproved') {
            $data['posts'] = Post::whereStatus(0)->orderBy('created_at', 'desc')->paginate(15);
        } elseif ($filter == 'soft') {
            $data['posts'] = Post::onlyTrashed()->orderBy('created_at', 'desc')->paginate(15);
        } else {
            $data['posts'] = Post::orderBy('created_at', 'desc')->paginate(15);
        }

        return view('admin.post.index', $data);
    }

    public function approve($id) {
        $post = Post::find($id);
        $post->update([
            'status' => 1
        ]);

        session()->flash('message.alert', 'success');
        session()->flash('message.content', "Post Successfully Approved");
        return back();
    }

    public function unapprove($id) {
        $post = Post::find($id);
        $post->update([
            'status' => 0
        ]);

        session()->flash('message.alert', 'success');
        session()->flash('message.content', "Post Unpproved");
        return back();
    }

    public function deleteTemporary($id) {
        $post = Post::find($id);
        $post->delete();

        session()->flash('message.alert', 'success');
        session()->flash('message.content', "Post Soft Deleted");
        return back();
    }

    public function deletePermanently($id) {
        $post = Post::find($id);
        $post->forceDelete();

        session()->flash('message.alert', 'success');
        session()->flash('message.content', "Post Hard Deleted");
        return back();
    }

    public function restore($id) {
        Post::where('id', $id)->restore();

        session()->flash('message.alert', 'success');
        session()->flash('message.content', "Post Restore");
        return back();
    }

    //users
    public function userGet() {
        $filter = Request()->filter;
        if ($filter == 'blocked') {
            $data['users'] = User::with(["user_statuses" => function($q) {
                            $q->where('user_statuses.status', '=', 'blocked');
                        }])->orderBy('created_at', 'DESC')->with('user_statuses')->paginate(15);
        } elseif ($filter == 'soft') {
            $data['users'] = User::onlyTrashed()->with('user_statuses')->orderBy('created_at', 'desc')->paginate(15);
        } else {
            $data['users'] = User::with('user_statuses')->orderBy('created_at', 'desc')->paginate(15);
        }

        return view('admin.user.index', $data);
    }

//admin
    public function adminGet() {
        $filter = Request()->filter;
        if ($filter == 'soft') {
            $data['users'] = User::onlyTrashed()->whereHas("roles", function($q) {
                        $q->where('name', 'SuperAdmin')->orWhere('name', 'Admin');
                    })->with('user_statuses')->orderBy('created_at', 'desc')->paginate(15);
        } else {
            $data['users'] = User::whereHas("roles", function($q) {
                        $q->where('name', 'SuperAdmin')->orWhere('name', 'Admin');
                    })->with('user_statuses')->orderBy('created_at', 'desc')->paginate(15);
        }

        return view('admin.all-admins', $data);
    }

    public function unblock($id) {
        $user = User::find($id);
        $user->update([
            'status_id' => 1
        ]);

        session()->flash('message.alert', 'success');
        session()->flash('message.content', "User Unblocked");
        return back();
    }

    public function block($id) {
        $user = User::find($id);
        $user->update([
            'status_id' => 2
        ]);

        session()->flash('message.alert', 'success');
        session()->flash('message.content', "User Blocked");
        return back();
    }

    public function deleteTemporaryUser($id) {
        $user = User::find($id);
        $user->delete();

        session()->flash('message.alert', 'success');
        session()->flash('message.content', "User Soft Deleted");
        return back();
    }

    public function deletePermanentlyUser($id) {
        $user = User::find($id);
        $user->forceDelete();

        session()->flash('message.alert', 'success');
        session()->flash('message.content', "User Hard Deleted");
        return back();
    }

    public function restoreUser($id) {
        User::where('id', $id)->restore();

        session()->flash('message.alert', 'success');
        session()->flash('message.content', "User Restored");
        return back();
    }

    public function removeAdmin($id) {
        $user = User::find($id);
        $role = Role::whereName('Admin')->first();
        $user->removeRole($role);
        session()->flash('message.alert', 'success');
        session()->flash('message.content', "Admin Removed from User");
        return back();
    }

    public function removeSuperAdmin($id) {
        $user = User::find($id);
        $role = Role::whereName('SuperAdmin')->first();
        $user->removeRole($role);
        session()->flash('message.alert', 'success');
        session()->flash('message.content', "SuperAdmin Removed from User");
        return back();
    }

    public function makeAdmin($id) {
        $user = User::find($id);
        $role = Role::whereName('Admin')->first();
        $user->assignRole($role);
        session()->flash('message.alert', 'success');
        session()->flash('message.content', "User is Now an Admin");
        return back();
    }

    public function makeSuperAdmin($id) {
        $user = User::find($id);
        $role = Role::whereName('SuperAdmin')->first();
        $user->assignRole($role);
        session()->flash('message.alert', 'success');
        session()->flash('message.content', "User is Now an SuperAdmin");
        return back();
    }

    public function activity(Request $request) {
        $control = $this->getControl($request);
        $data['recents'] = $control->where('created_at', '>=', \Carbon\Carbon::now()->subDay())->with('user')->paginate(15);
        return view('admin.activities', $data);
    }

    private function getControl(Request $request) {
        if ($request->q) {
            $input = $request->q;

            $control = Post::where('title', 'LIKE', '%' . $input . '%');
        } else {
            $control = Post::latest();
        }
        return $control;
    }

    public function addPolitician(Request $request) {
        $input = $request->all();
        $rules = [
            'first_name' => ['required', 'string'],
            'last_name' => ['required', 'string'],
            'dob' => ['required', 'string'],
            'occupation' => ['required', 'string'],
            'biography' => ['required', 'string'],
            'children' => ['required', 'numeric'],
            'spouse' => ['required', 'string'],
            'education_history' => ['required', 'string'],
            'education' => ['required', 'string'],
            'career' => ['required', 'string'],
            'website' => ['required', 'url'],
            'political_history' => ['required', 'string'],
            'file' => 'required|max:1024|mimes:png,jpg,jpeg'
        ];


        $error = static::getErrorMessage($input, $rules);
        if ($error) {
            return $error;
        }
        $name = $request->first_name . $request->last_name;
        if ($request->hasFile('file')) {
            $file = $request->file('file');

            $extension = $file->getClientOriginalExtension();
            $nameslug = $this->slug($name, $extension);
            $file->move(public_path('/politician/photos'), $nameslug);
            $input['file'] = 'politician/photos/' . $nameslug;
        }

        $check = Politician::whereFirst_name($request->first_name)->whereLast_name($request->last_name)->first();
        if (is_object($check)) {
            session()->flash('message.alert', 'danger');
            session()->flash('message.content', "Politician already Added");
            return back();
        }

        Politician::create($input);
        session()->flash('message.alert', 'success');
        session()->flash('message.content', "Politician Added Successfully");
        return back();
    }

}
