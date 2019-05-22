<?php

namespace App\Http\Controllers;

use App\Animales;
use App\Dispositivos;
use App\Ganaderos;
use App\Sexos;
use App\Tganado;
use Illuminate\Http\Request;

class AnimalesController extends Controller
{
    /**
     * Display a listing of the resource.x
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $animales=Animales::all();
        return view("Animales.index",compact('animales'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tganados=Tganado::all();
        $sexos=Sexos::all();
        $dispositivos=Dispositivos::all();
        $ganaderos=Ganaderos::all();
        return view("Animales.create",compact('dispositivos','sexos','tganados','ganaderos'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        Animales::create($request->all());
        return redirect("animales");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Animales  $animales
     * @return \Illuminate\Http\Response
     */
        public
        function show(Animales $animales)
        {
            //
        }

        /**
         * Show the form for editing the specified resource.
         *
         * @param \App\Animales $animales
         * @return \Illuminate\Http\Response
         */
        public
        function edit(Animales $animale)
        {
            $tganados=Tganado::all();
            $sexos=Sexos::all();
            $dispositivos=Dispositivos::all();
            $ganaderos=Ganaderos::all();
            return view("Animales.edit",compact('animale','dispositivos','sexos','tganados','ganaderos'));
        }

        /**
         * Update the specified resource in storage.
         *
         * @param \Illuminate\Http\Request $request
         * @param \App\Animales $animales
         * @return \Illuminate\Http\Response
         */
        public
        function update(Request $request, Animales $animal)
        {
            //
            $animal->update($request->all());
            return redirect("animales");
        }

        /**
         * Remove the specified resource from storage.
         *
         * @param \App\Animales $animales
         * @return \Illuminate\Http\Response
         */
        public
        function destroy(Animales $animale)
        {
            $animale->delete();
            return redirect("animales");
        }

}
