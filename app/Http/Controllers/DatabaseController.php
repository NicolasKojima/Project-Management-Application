<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Form;

class DatabaseController extends Controller
{

public function edit($id) {
    $form = Form::findOrFail($id);
    return view('edit', compact('form'));
}

public function update(Request $request, $id) {
    $form = Form::findOrFail($id);
    $form->update($request->all());

    return redirect('projects')->with('success', 'Form updated successfully.');
}

}
