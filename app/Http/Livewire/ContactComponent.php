<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Contact;

class ContactComponent extends Component
{
    public $name, $phone, $address, $selected_id; //..in the wire:model declarations
    public $updateForm = false;

    public function render()
    {
        $data = Contact::all();
        return view('livewire.contacts.component')->with('data', $data); //pass all data from contacts table and foreach to views
    }

    public function store()
    {
        //dd($this);
        $this->validate([
            'name'      => 'required|min:5',
            'phone'     => 'required',
            'address'   => 'required'
        ]);

        Contact::create([
            'name'      => $this->name,
            'phone'     => $this->phone,
            'address'   => $this->address,
        ]);

        $this->emptyInput();
    }

    public function edit($id)
    {
        $data = Contact::findOrFail($id);


        //assigned to public variables
        $this->selected_id  = $id;
        $this->name         = $data->name;
        $this->phone        = $data->phone;
        $this->address      = $data->address;

        $this->updateForm = true;
    }

    public function update()
    {
        //dd($this);
        $this->validate([
            'selected_id'   => 'required|numeric',
            'name'          => 'required|min:5',
            'phone'         => 'required',
            'address'       => 'required'
        ]);

        if ($this->selected_id) { //making sure selected id in the row is true
            $data = Contact::find($this->selected_id);
            $data->update([
                'name'      => $this->name,
                'phone'     => $this->phone,
                'address'   => $this->address
            ]);

            $this->emptyInput();
            $this->updateForm = false; //set to false again, enable create form
        }

    }

    private function emptyInput()
    {
        $this->name     = null;
        $this->phone    = null;
        $this->address  = null;
        //dd($this);
    }
    
    public function destroy($id)
    {
        if ($id) { // again.. making sure $id is true 
            $data = Contact::where('id', $id);
            $data->delete();
        }
    }
}