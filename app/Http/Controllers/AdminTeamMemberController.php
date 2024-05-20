<?php

namespace App\Http\Controllers;

use App\Models\TeamMember;
use App\Http\Requests\AdminStoreTeamMemberRequest;
use App\Models\User;

class AdminTeamMemberController extends Controller
{
   
    public function index()
    {
        $teamMembers = User::where('quarter_id',$this->quarterId())->has('teamMembers')->get();
        return view('admin.team.index',compact('teamMembers'));
    }

    private function quarterId()
    {
        return auth()->user()->quarter->id;
    }

   
    public function create()
    {
        $users = User::where('quarter_id',$this->quarterId())->get();
        return view('admin.team.create',compact('users'));
    }

   
    public function store(AdminStoreTeamMemberRequest $request)
    {
        $m = new TeamMember();
        $m->user_id = $request->user_id;
        $m->save();
        return redirect()->route('admin.team.index')->with('success','Siz yangi jamao azosini qo`shdingiz');
    }



    public function show(TeamMember $teamMember)
    {
    //    
    }


    public function edit(TeamMember $teamMember)
    {
        //
    }

 
    public function update($teamMember)
    {
        $member = TeamMember::where('user_id',$teamMember)->first();
        if($member){
            $member->delete();
            return redirect()->back()->with('success','Siz Foydalanuvchuni Jamoa a`zoligidan o`chirib tashladiniz' );
        }
        return back()->with("erorr","Topilmadi !");
    }

  
    public function destroy(TeamMember $teamMember)
    {
        //
    }
}
