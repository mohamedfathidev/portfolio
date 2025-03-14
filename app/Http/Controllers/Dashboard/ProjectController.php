<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\Project;
use Illuminate\View\View;
use Illuminate\Http\Request;
use App\Services\UploderService;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\RedirectResponse;
use App\Notifications\NewProjectNotification;

class ProjectController extends Controller
{
    use UploderService;
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        $records = Project::all();

        return view('dashboard.projects.index', compact('records'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        return view('dashboard.projects.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {

        $request->validate([
            "name" => "required|string",
            "image" => "image|nullable",
            "github" => "nullable|string",
            "live" => "nullable|string",
            "description" => "required"
        ]);

        $imagePath = $this->uploadImage($request->file('image'));

        $createdFields = [
            "name" => $request->name,
            "github" => $request->github,
            "live" => $request->live,
            "description" => $request->description,
            "image" => $imagePath ?? null,
        ];

        $project = Project::create($createdFields);

        Auth::user()->notify(new NewProjectNotification($project));

        // Mail::send(
        //     'dashboard.projects.notification_project_creation',['user' => Auth::user(), "url" => route('projects.index')], function ($message) {
        //         $message->to(Auth::user()->email)
        //         ->subject('A New Project Created');
        //     }  
        // );

        return redirect()->route('projects.index')
            ->with('success', 'Project has been created successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Project $project)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(int $id)
    {
        
        $details = Project::find($id);
        
        return view('dashboard.projects.edit', compact('details'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Project $project)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Project $project)
    {
        //
    }
}
