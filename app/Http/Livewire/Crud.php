<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Employee;

class Crud extends Component
{
    public $employees, $name, $email, $mobile, $employee_id;
    public $isModalOpen = 0;
    public function render()
    {
        $this->employees = employee::all();
        return view('livewire.Crud',['employees'=>$this->employees]);
    }
    public function create()
    {
        $this->resetCreateForm();
        $this->openModalPopover();
    }
    public function openModalPopover()
    {
        $this->isModalOpen = true;
    }
    public function closeModalPopover()
    {
        $this->isModalOpen = false;
    }
    private function resetCreateForm(){
        $this->name = '';
        $this->email = '';
        $this->mobile = '';
    }
    
    public function store()
    {
        $this->validate([
            'name' => 'required',
            'email' => 'required',
            'mobile' => 'required',
        ]);
    
        employee::updateOrCreate(['id' => $this->employee_id], [
            'name' => $this->name,
            'email' => $this->email,
            'mobile' => $this->mobile,
        ]);
        session()->flash('message', $this->employee_id ? 'employee updated.' : 'employee created.');
        $this->closeModalPopover();
        $this->resetCreateForm();
    }
    public function edit($id)
    {
        $employee = employee::findOrFail($id);
        $this->employee_id = $id;
        $this->name = $employee->name;
        $this->email = $employee->email;
        $this->mobile = $employee->mobile;
    
        $this->openModalPopover();
    }
    
    public function delete($id)
    {
        employee::find($id)->delete();
        session()->flash('message', 'Studen deleted.');
    }
}