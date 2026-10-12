<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\SisterConcern;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\View\View;

class SisterConcernController extends Controller
{
    public function index(Request $request): View
    {
        $query = SisterConcern::query();

        if ($request->filled('search')) {
            $search = $request->input('search');
            $query->where('name', 'like', "%{$search}%")
                ->orWhere('main_products', 'like', "%{$search}%");
        }

        $sisterConcerns = $query->orderBy('sort_order')->orderByDesc('id')->paginate(10)->withQueryString();

        return view('admin.sister-concerns.index', [
            'sisterConcerns' => $sisterConcerns,
            'search' => $request->input('search'),
            'totalConcerns' => SisterConcern::count(),
            'activeConcerns' => SisterConcern::where('status', true)->count(),
        ]);
    }

    public function create(): View
    {
        return view('admin.sister-concerns.create', [
            'sisterConcern' => new SisterConcern(),
            'nextSortOrder' => ((int) SisterConcern::max('sort_order')) + 1,
        ]);
    }

    public function store(Request $request): RedirectResponse
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'tagline' => 'nullable|string|max:255',
            'established_year' => 'nullable|integer',
            'production_started_text' => 'nullable|string|max:255',
            'main_products' => 'nullable|string',
            'monthly_capacity' => 'nullable|string|max:255',
            'annual_target_output' => 'nullable|string|max:255',
            'contact_person' => 'nullable|string|max:255',
            'contact_person_designation' => 'nullable|string|max:255',
            'contact_phone' => 'nullable|string|max:255',
            'contact_email' => 'nullable|email|max:255',
            'address' => 'nullable|string',
            'google_map_embed' => 'nullable|string',
            'sort_order' => 'nullable|integer',
            'status' => 'nullable|boolean',
        ]);

        $validated['slug'] = Str::slug($validated['name']);
        $validated['status'] = $request->has('status');

        SisterConcern::create($validated);

        return redirect()->route('admin.sister-concerns.index')
            ->with('success', 'Sister Concern created successfully.');
    }

    public function edit(SisterConcern $sisterConcern): View
    {
        return view('admin.sister-concerns.edit', [
            'sisterConcern' => $sisterConcern,
        ]);
    }

    public function update(Request $request, SisterConcern $sisterConcern): RedirectResponse
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'tagline' => 'nullable|string|max:255',
            'established_year' => 'nullable|integer',
            'production_started_text' => 'nullable|string|max:255',
            'main_products' => 'nullable|string',
            'monthly_capacity' => 'nullable|string|max:255',
            'annual_target_output' => 'nullable|string|max:255',
            'contact_person' => 'nullable|string|max:255',
            'contact_person_designation' => 'nullable|string|max:255',
            'contact_phone' => 'nullable|string|max:255',
            'contact_email' => 'nullable|email|max:255',
            'address' => 'nullable|string',
            'google_map_embed' => 'nullable|string',
            'sort_order' => 'nullable|integer',
            'status' => 'nullable|boolean',
        ]);

        $validated['status'] = $request->has('status');
        $sisterConcern->update($validated);

        return redirect()->route('admin.sister-concerns.index')
            ->with('success', 'Sister Concern updated successfully.');
    }

    public function destroy(SisterConcern $sisterConcern): RedirectResponse
    {
        $sisterConcern->delete();

        return redirect()->route('admin.sister-concerns.index')
            ->with('success', 'Sister Concern deleted successfully.');
    }
}
