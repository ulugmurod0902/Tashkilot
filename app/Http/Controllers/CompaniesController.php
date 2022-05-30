<?php

namespace App\Http\Controllers;

use App\Http\Requests\SaveCompanyRequest;
use App\Models\Company;
use App\Rules\PhoneNumber;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class CompaniesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index()
    {
        // ulugmurod7777
        $companies  = Company::orderByDesc('created_at')->paginate(20);

        return view('companies.index',[
            'companies' => $companies
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function create()
    {
        $company = new Company();
        return view('companies.create',[
            'company' => $company
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(SaveCompanyRequest $request)
    {
//        dd($request->all());
       /* $data = $request->validate([
            'name' => 'required |min:5',
            'address' => 'required',
            'phone' => ['required','numeric', new PhoneNumber]
        ]);*/
//        dd($data);
//        malumotlar qo'shishning birinchi usuli
       /* $company = new Company;
        $company->name = $data['name'];
        $company->address = $data['address'];
        $company->phone = $data['phone'];
        $company->save();*/

//        2-usul
//        $company = Company::create($data);
//        dd($this->validatedDate());
        Company::create($request->validated());
        return redirect()->route('companies.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function show(Company $company): \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
    {
//        $company = Company::findOrFail($company);
        return view('companies.show',[
            'company'=> $company
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Company $company)
    {
        return view('companies.edit',[
            'company' => $company
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(SaveCompanyRequest $request, Company $company)
    {
       /* $data = $request->validate([
            'name' => 'required |min:5',
            'address' => 'required',
            'phone' => ['required','numeric', new PhoneNumber]
        ]);*/
        $company->update($request->validated());
        return redirect()->route('companies.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(Company $company)
    {
//        dda($company);
        $company->delete();
        return redirect()->route('companies.index');
    }

    public function validatedDate()
    {
       /* return request()->validate([
            'name' => 'required |min:5',
            'address' => 'required',
            'phone' => ['required','numeric', new PhoneNumber]
        ]);*/
    }
}
