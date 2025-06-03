<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\BladderTransaction;
use App\Models\Bladder;
use Illuminate\Http\Request;

class BladderTransactionApiController extends Controller
{
    /**
     * Get the next valid transaction type for a bladder.
     *
     * @param  int  $bladderId
     * @return \Illuminate\Http\JsonResponse
     */
    public function getNextTransactionType($bladderId)
    {
        // Check if the bladder exists
        $bladder = Bladder::find($bladderId);
        
        if (!$bladder) {
            return response()->json([
                'error' => 'Bladder not found'
            ], 404);
        }
        
        // Get the next allowed transaction type
        $nextType = BladderTransaction::getNextAllowedTransactionType($bladderId);
        
        return response()->json([
            'bladderId' => $bladderId,
            'bladderCode' => $bladder->BladderCode,
            'nextType' => $nextType
        ]);
    }
}
