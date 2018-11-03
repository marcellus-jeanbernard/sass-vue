<?php

namespace App\Http\Controllers;
use Session;
use Illuminate\Http\Request;
use Auth;
class PaymentsController extends Controller
{
    
    public function pay(Request $request, $plan){
    	
    	  // Auth::user()->newSubscription('primary', $plan)->create($request->stripeToken);
    	//$user = Auth::user();
               try {
                Auth::user()->newSubscription('primary', $plan)->create($request->stripeToken);
               	
    	
               } catch (\Exception $e) {
               	Session::flash('error_message', 'There has been an error processing your payment.');
        // return redirect('/');
               }
    	return 'Subscribed!';
    }
}
