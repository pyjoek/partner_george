<?php

namespace App\Http\Controllers;

use App\Models\Partner;
use App\Exports\UserExport;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;

class PartnerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $partners = Partner::all();
        return view('list-partners', ['partners' => $partners]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $validator = Validator::make($request->all(),[
            'fullname' => 'required|string|min:5',
            'email' => 'required|string|email',
            'phone' => 'required',
            'duration' => 'required|numeric'
        ]);
        
        if($validator->fails()){
            return back()->withErrors($validator)->withInput();
        }
        $datas = new Partner();
        $datas->fname = $request->fullname;
        $datas->email = $request->email;
        $datas->phone = $request->phone;
        $datas->country = $request->country;
        $datas->region = $request->region;
        $datas->material = $request->material;
        $datas->amount = $request->amount;
        $datas->duration = $request->duration;
        $datas->save();

        return redirect('/people');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Partner  $partner
     * @return \Illuminate\Http\Response
     */
    public function show(Partner $partner)
    {
        //
    }

    public function export()
    {
        return Excel::download(new UserExport, 'users.xlsx');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Partner  $partner
     * @return \Illuminate\Http\Response
     */
    public function edit(Partner $partner, $id)
    {
        $datas = Partner::find($id);
        return view('list-partners-edit', compact('datas'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Partner  $partner
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $datas = Partner::find($id);
        $datas->fname = $request->fullname;
        $datas->email = $request->email;
        $datas->phone = $request->phone;
        $datas->location = $request->location;
        $datas->country = $request->country;
        $datas->region = $request->region;
        $datas->material = $request->material;
        $datas->amount = $request->amount;
        $datas->duration = $request->duration;
        $datas->save();

        return redirect('/people');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Partner  $partner
     * @return \Illuminate\Http\Response
     */
    public function destroy(Partner $partner, $id)
    {
        $datas = Partner::find($id);
        $datas->delete();

        return redirect('/people');
    }
}
