<?php

namespace App\Http\Controllers;

use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class MootaPushController extends Controller
{

    /**
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function __invoke(Request $request)
    {
        try {
            Storage::append('debug-push.log', "=== START ===\n");
            Storage::append('debug-push.log', $request->getContent());
            Storage::append('debug-push.log', "==== END ====\n");

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
