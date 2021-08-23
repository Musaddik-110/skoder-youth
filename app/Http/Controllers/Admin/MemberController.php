<?php

namespace App\Http\Controllers\Admin;

use App\DataTables\MemberDataTable;
use App\DataTables\MemberRequestsDataTable;
use App\Helpers\FileHelper;
use App\Http\Requests;
use App\Http\Requests\MemberCreateRequest;
use App\Http\Requests\MemberUpdateRequest;
use App\Models\Member;
use App\Http\Controllers\AppBaseController;
use Mail;
class MemberController extends AppBaseController
{

    public function index(MemberDataTable $memberDataTable)
    {
        return $memberDataTable->render('admin.members.index');
    }


    public function create()
    {
        return view('admin.members.create');
    }


    public function store(MemberCreateRequest $request)
    {
        $imageName = FileHelper::uploadImage($request, NULL, [], 270, 340);
        Member::create(array_merge($request->all(), ['image' => $imageName]));
        notify()->success("Member Created Successful.", "Success");
        return redirect(route('admin.members.index'));
    }


    public function show(Member $member)
    {
        return view('admin.members.show', compact('member'));
    }


    public function edit(Member $member)
    {
        return view('admin.members.edit', compact('member'));
    }


    public function update(Member $member, MemberUpdateRequest $request)
    {
        $imageName = FileHelper::uploadImage($request, $member, [], 270, 340);
        $member->fill(array_merge($request->all(), ['image' => $imageName]))->save();
        notify()->success("Member Updated Successful.", "Success");
        return redirect(route('admin.members.index'));
    }


    public function destroy(Member $member)
    {
        FileHelper::deleteImage($member);
        $member->delete();
    }


    public function requests(MemberRequestsDataTable $memberRequestsDataTable)
    {
        return $memberRequestsDataTable->render('admin.members.requests');
    }


    public function accept(Member $member)
    {
        $member->status = 1;
        $member->save();

        $data = array(

            'email' => $member->email,
            'name' => $member->name,


        );

        Mail::send('emails.confirmation', compact('data'), function ($message) use ($data) {
            $message->from('youth@skoder.co');
            $message->to($data['email']);
            $message->subject('Membership Confirmation.');

        });



        notify()->success("Member Accept Successful.", "Success");
        return redirect(route('admin.members.requests'));
    }
}
