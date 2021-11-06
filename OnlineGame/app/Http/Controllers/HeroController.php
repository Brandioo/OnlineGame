<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HeroController extends Controller
{
    public function index()
    {

        $heros = Hero::all();
        return view('/heros/index', compact('heros'));
    }

    public function create()
    {
        return view('/heros/create');
    }

      /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $storeHero = $request->validate([
            'name'=> 'required|max:255',
            'kind_id'=> 'required|max:255',
            'user_id'=> 'required|max:255',
            'current_health_points'=> 'required|max:255',
            'max_health_points'=> 'required|max:255',
            'current_strength_points'=> 'required|max:255',
            'current_money'=> 'required|max:255',
            'items_possessed'=> 'required|max:255',
            'performed_fights'=> 'required|max:255',
            'money_tranfers'=> 'required|max:255',
            'power'=> 'required|max:255',
            'attack_points' => 'required|max:255',
        ]);

        $hero = Hero::create($storeHero);
        return redirect('heros');
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $showhero = Hero::where('id', $id)->first();
        return view('/heros/show', compact('showhero'));
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $editahero = Hero::findOrFail($id);
        return view('/heros/edit', compact('editahero'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $updateData = $request->validate([
            'name'=> 'required|max:255',
            'kind_id'=> 'required|max:255',
            'user_id'=> 'required|max:255',
            'current_health_points'=> 'required|max:255',
            'max_health_points'=> 'required|max:255',
            'current_strength_points'=> 'required|max:255',
            'current_money'=> 'required|max:255',
            'items_possessed'=> 'required|max:255',
            'performed_fights'=> 'required|max:255',
            'money_tranfers'=> 'required|max:255',
            'power'=> 'required|max:255',
            'attack_points' => 'required|max:255',
        ]);

        Hero::whereId($id)->update($updateData);
        return redirect('heros');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $hero = Hero::findOrFail($id);
        $hero->users()->delete();
        //
        $hero->delete();

        return redirect('heros');
    }

    public function indexApi(){
        $heros = Hero :: all();
        return response()-> json(['succes'=>true, 'data'=>$heros]);
    }

    public function storeApi(CreateHeroRequest $request){
        try {
            $storeData = $request->validated();

            $agencycreate = Hero::create($storeData);
            return response()->json(['success' => true]);
        } catch (\Exception $e){
            dd($e->getMessage());
        }
    }
}
