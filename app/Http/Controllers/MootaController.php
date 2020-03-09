<?php

namespace App\Http\Controllers;

use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class
MootaController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function __invoke(Request $request)
    {
        try {
            Storage::append('debug-webhook.log', "=== START ===\n");
            Storage::append('debug-webhook.log', $request->getContent());
            Storage::append('debug-webhook.log', "==== END ====\n");

            return response()->json([
                'status'    =>  'OK'
            ]);
        } catch (Exception $e) {
            return response()->json([
                'status'    =>  'ERROR',
                'message'   =>  $e->getMessage()
            ]);
        }
    }
}
