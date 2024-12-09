<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class HomeController extends Controller
{
    public function healthSubsidyStore(Request $request)
    {
        try {
            // Log the qaList as a JSON string
            Log::info('Question and Answer List for Health Subsidy: ' . json_encode($request->qaList));
        
            return response()->json(['message' => 'Logged successfully']);
        } catch (\Exception $e) {
            Log::error('Error while logging: ' . $e->getMessage());
            return response()->json(['error' => 'Error logging data'], 500);
        }
        
    }

    public function forgivenessStore(Request $request)
    {
        try {
            // Log the qaList as a JSON string
            Log::info('Question and Answer List for Forgiveness: ' . json_encode($request->qaList));
        
            return response()->json(['message' => 'Logged successfully']);
        } catch (\Exception $e) {
            Log::error('Error while logging: ' . $e->getMessage());
            return response()->json(['error' => 'Error logging data'], 500);
        }
        
    }


    public function showContactForm()
    {
        return view('contact');
    }
    
    public function termspage()
    {
        return view('terms');
    }

    public function privacyPage()
    {
        return view('privacy');
    }

    public function showForgivenessPage()
    {
        return view('forgiveness');
    }
}
