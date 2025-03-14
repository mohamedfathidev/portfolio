<?php

namespace App\Http\Controllers\Dashboard;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Contracts\View\View;
use App\Http\Controllers\Controller;
use Symfony\Component\HttpFoundation\RedirectResponse;

class NotificationController extends Controller
{
    public function index(): View
    {
        $notifications = DB::select("SELECT id, data, read_at from notifications ORDER BY created_at desc");

        return view('dashboard.notifications', compact('notifications'));
    }

    
    public function read($notificationID): RedirectResponse
    {
        DB::update("update notifications SET read_at = ? where id = ?", [Carbon::now(), $notificationID]);

        return redirect()->back()->with('success', 'Notification marked as read.');
    }
}
