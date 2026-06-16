<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactMessage;

class MessageController extends Controller
{
    public function store(Request $request)
    {
        // // Validate the request with proper email validation
        // $validator = Validator::make($request->all(), [
        //     'name' => 'required|string|max:255',
        //     'email' => 'required|email|max:255',
        //     'subject' => 'required|string|max:255',
        //     'message' => 'required|string|min:10',
        // ], [
        //     'name.required' => 'Please enter your name.',
        //     'email.required' => 'Please enter your email address.',
        //     'email.email' => 'Please enter a valid email address.',
        //     'subject.required' => 'Please enter a subject.',
        //     'message.required' => 'Please enter your message.',
        //     'message.min' => 'Your message should be at least 10 characters long.',
        // ]);

        // if ($validator->fails()) {
        //     if ($request->ajax() || $request->wantsJson()) {
        //         return response()->json([
        //             'errors' => $validator->errors()
        //         ], 422);
        //     }

        //     return redirect()->back()
        //         ->withErrors($validator)
        //         ->withInput();
        // }

        try {


            $data = [
                'name' => $request->name,
                'email' => $request->email,
                'subject' => $request->subject,
                'messageContent' => $request->message,
            ];

            Mail::send('emails.contact', $data, function ($mail) use ($data) {
                $mail->to('info@piware.tech')
                    ->replyTo($data['email'], $data['name'])
                    ->subject('New Contact Form Submission: ' . $data['subject']);
            });


            if ($request->ajax() || $request->wantsJson()) {
                return response()->json([
                    'success' => true,
                    'message' => 'Your message has been sent successfully! We will get back to you soon.'
                ]);
            }

            return redirect()->back()->with('success', 'Your message has been sent successfully! We will get back to you soon.');
        } catch (\Exception $e) {
            dd($e->getMessage());
            \Log::error('Email sending failed: ' . $e->getMessage());

            if ($request->ajax() || $request->wantsJson()) {
                return response()->json([
                    'message' => 'Sorry, there was an error sending your message. Please try again later.'
                ], 500);
            }

            return redirect()->back()
                ->with('error', 'Sorry, there was an error sending your message. Please try again later.')
                ->withInput();
        }
    }
}
