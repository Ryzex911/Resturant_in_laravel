<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class MenuController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    // In your controller (for example, MenuController)

    public function index()
    {
        // Fetch and sort the menu items by category
        $items = Menu::orderByRaw("FIELD(categorie, 'Starter', 'Main Course', 'Dessert', 'Drink')")
            ->get();

        return view('menu.index', compact('items'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('menu.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Valideer de invoer
        $request->validate([
            'gericht_naam' => 'required|string|max:255',
            'beschrijving' => 'required|string|max:500',
            'prijs' => 'required|numeric|min:0',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048', // Validate afbeelding
        ]);

        // Controleer of er een afbeelding is geüpload
        $imagePath = '';
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('images', 'public');
        }

        // Maak een nieuw gerecht aan en sla het op in de database
        Menu::create([
            'key' => Str::uuid()->toString(),
            'gericht_naam' => $request->gericht_naam,
            'beschrijving' => $request->beschrijving,
            'prijs' => $request->prijs,
            'categorie' => $request->categorie ?? 'Onbekend',
            'image' => $imagePath, // Sla het pad van de afbeelding op
        ]);

        // Redirect naar de indexpagina met succesbericht
        return redirect()->route('menu.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Menu $menu)
    {
        return view('menu.menu', compact('menu'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Menu $menu)
    {
        return view('menu.edit', compact('menu'));
    }



    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Menu $menu)
    {
        $request->validate([
            'gericht_naam' => 'required|string|max:255',
            'beschrijving' => 'required|string|max:500',
            'categorie'=>'required|string|max:255',
            'prijs' => 'required|numeric|min:0',
        ]);



        $menu->update($request->all());
        return redirect()->route('menu.index');
    }




    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Menu $menu)
    {
        $menu->delete();
        return redirect()->route('menu.index');
    }
}
