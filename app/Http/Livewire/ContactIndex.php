<?php

namespace App\Http\Livewire;

use App\Models\Contact;
use Livewire\Component;
use Livewire\WithPagination;

class ContactIndex extends Component
{
    use WithPagination;

    protected $paginationTheme = 'bootstrap';

    public $contact;

    public function render()
    {
        return view('livewire.contact-index', [
            'data' => Contact::orderBy('title', 'asc')->paginate(10),
        ]);
    }
}
