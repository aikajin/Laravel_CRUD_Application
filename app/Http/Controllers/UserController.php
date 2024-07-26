<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;
use App\Models\Person;
use Illuminate\Validation\Rule;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        $person = Person::all();
        return view('person.index')->with('person', $person);
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        return view('person.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required|email|unique:peps',
            'phone_number' => 'required|unique:peps',
            'password' => 'required',
            // Add other validation rules as needed
        ]);
    
        $input = $request->all();
    
        if ($request->hasFile('profile_image')) {
            $image = $request->file('profile_image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('profile_image'), $imageName);
            $input['profile_image'] = $imageName; // Save the file name to the database
        }
    
        Person::create($input);
    
        return redirect('/person')->with('success', 'Person created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id): View
    {
        $person = Person::find($id);
        return view('person.show')->with('person', $person);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id): View
    {
        $person = Person::find($id);
        return view('person.edit')->with('person', $person);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id): RedirectResponse
    {
        $person = Person::find($id);

        $request->validate([
            'email' => [
                'required',
                Rule::unique('peps')->ignore($person->id),
            ],
            'phone_number' => [
                'required',
                Rule::unique('peps')->ignore($person->id),
            ],
        ]);

        $input = $request->all();

        if ($request->hasFile('profile_image')) {
            $image = $request->file('profile_image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('profile_image'), $imageName);
            $input['profile_image'] = $imageName; // Save the file name to the database
        }

        $person->update($input);
        return redirect('person')->with('flash_message', 'Data Updated!'); 
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id): RedirectResponse
    {
        Person::destroy($id);
        return redirect('person')->with('flash_message', 'Data deleted!'); 
    }
}
