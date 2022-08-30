<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use Illuminate\Http\Request;

class AdminContactController extends Controller
{
    /**
     * Class constructor.
     */
    public function __construct(Contact $contact)
    {
        $this->contact = $contact;
    }
    public function index()
    {

        return view('admin.contacts.contact');
    }
}
