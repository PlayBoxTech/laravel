<?php

namespace App\Http\Controllers;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;
use App\Services\Newsletter;


class NewsletterController extends Controller
{
    public function __invoke(Newsletter $newsletter)
    {
        // ddd($newsletter);
        
        request()->validate(['email'=> 'required|email']);
        try {
            
            $newsletter->subscribe(request('email'));
        
      
        } catch (\Exception $e) {
           throw ValidationException::withMessages([
                'email' => 'This email could not be added to our Newsletter List.'
           ]);
        }
        
        
        return redirect('/')->with('success', 'You are now Subscribed!'); 
    
    }
}
