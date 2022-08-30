<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Mail\ContactMail;
use App\Models\Contact;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;

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
        $contacts = $this->contact->paginate(5);
        return view('admin.contacts.contact', compact('contacts'));
    }
    public function view($id)
    {
        $contact =  Contact::find($id);
        return view('admin.contacts.contact-detail', compact('contact'));
    }
    public function sendContact(Request $request)
    {
        if (empty($request->message)) {
            return redirect()->back();
        }
        $contact = $this->contact->find($request->id);

        $email = $contact->email;
        $message = $request->message;
        $mailable = new ContactMail($message, $request->id);
        Mail::to($email)->send($mailable);
        $contact->delete();
        return redirect()->route('contact.view');
    }
    public function delete($id)
    {
        try {
            DB::beginTransaction();
            $this->contact->delete($id);
            DB::commit();
            return response()->json([
                'code' => 200,
                'message' => 'success'
            ], 200);
        } catch (Exception $exception) {
            DB::rollBack();
            Log::error("message: " . $exception->getMessage() . "Line: " . $exception->getLine());
            return response()->json([
                'code' => 500,
                'message' => 'failed'
            ], 500);
        }
    }
}
