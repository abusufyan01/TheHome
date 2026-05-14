<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;
class Order extends Model
{
    public function agent()
    {
        return $this->belongsTo(Agent::class);
    }
    public function package()
    {
        return $this->belongsTo(Package::class);
    }

   public static function getCurrentValidOrder($agentId)
{
    // Get the currently active order
    $currentOrder = self::where('agent_id', $agentId)
                         ->where('currently_active', 1)
                         ->first();

    // If the active order exists and is expired
    if ($currentOrder && Carbon::parse($currentOrder->expire_date)->isPast()) {
        // Deactivate current expired order
        $currentOrder->currently_active = 0;
        $currentOrder->save();
    }

    // Return active and unexpired order (after deactivation if expired)
    $validOrder = self::where('agent_id', $agentId)
                      ->where('expire_date', '>=', Carbon::today())
                      ->orderBy('purchase_date', 'desc')  // Prefer most recent
                      ->first();

    // Make it active if not already
    if ($validOrder && $validOrder->currently_active != 1) {
        $validOrder->currently_active = 1;
        $validOrder->save();
    }

    return $validOrder;
}

}
