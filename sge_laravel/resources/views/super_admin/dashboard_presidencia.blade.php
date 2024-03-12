@extends('templates.template_admin')
@section('titulo')
    Inicio
@endsection
@section('contenido')
    <div class="py-2 px-6 ">
        <h1 class="text-4xl font-normal uppercase mb-2 bg-stone-100 px-3 py-3 rounded-md ">Bienvenido, Presidente Mayra.</h1>
        <h1 class="text-2xl font-normal uppercase mb- bg-stone-300 px-3 py-3 rounded-md ">Panel de presidencia desarrollo de
            software multiplataforma</h1>


        <div class="bg-stone-100 flex flex-row gap-6 py-10 pl-10">
            <div class="pt-4 bg-white border border-stone-100 rounded-xl">
                <h1 class="font-normal uppercase px-64 text-2xl">Gráfica de cedulas de anteproyecto</h1>
                <div class="flex flex-col px-24 gap-1">
                    <h5>75 +</h5>
                    <h5>70</h5>
                    <h5>65</h5>
                    <h5>60</h5>
                    <h5>55</h5>
                    <h5>50</h5>
                    <h5>45</h5>
                    <h5>40</h5>
                    <h5>35</h5>
                    <h5>30</h5>
                    <h5>25</h5>
                    <h5>20</h5>
                    <h5>15</h5>
                    <h5>10</h5>
                    <h5 class="border-b border-slate-300 ">5</h5>
                </div>
                <div class=" flex flex-row justify-center gap-5 py-4">
                    <div class="flex flex-row gap-2">
                        <h1 class="font-normal uppercase"> pendientes</h1>
                        <button class="bg-red-800 text-red-800 px-3 rounded-md">X</button>
                    </div>
                    <div class="flex flex-row gap-2">
                        <h1 class="font-normal uppercase">aprobados</h1>
                        <button class="bg-green-700 text-green-700 px-3 rounded-md">X</button>
                    </div>
                </div>

            </div>
            <div class="bg-white border border-stone-100 rounded-xl pb-96 pt-4">
                <h1 class="font-normal uppercase px-12 text-lg">Proyectos de desarrollo de software</h1>
            </div>
        </div>
        <div class="bg-stone-100 flex flex-row justify-around">
            
            <div class="bg-white border border-stone-100 rounded-xl px-4 py-4 flex flex-col gap-56">
                <h1 class="text-center font-thin text-2xl uppercase pt-2">Historial de memorias</h1>
                <button class="bg-emerald-500 text-white px-4 rounded-md py-2">Visualizar</button>
            </div>
            <div class="bg-white border border-stone-100 rounded-xl px-4 py-4 flex flex-col gap-56">
                <h1 class="text-center font-thin text-2xl uppercase pt-2">Proyectos finalizados </h1>
                <button class="bg-emerald-500 text-white px-4 rounded-md py-2">Visualizar</button>
            </div>
            <div class="bg-white border border-stone-100 rounded-xl px-4 py-4 flex flex-col gap-56">
                <h1 class="text-center font-thin text-2xl uppercase pt-2">Proyectos aprobados</h1>
                <button class="bg-emerald-500 text-white px-4 rounded-md py-2">Visualizar</button>
            </div>
            <div class="bg-white border border-stone-100 rounded-xl px-20 py-4 flex flex-col gap-56" >
                <h1 class="text-center font-thin text-2xl uppercase pt-2">Asesores</h1>
                <button class="bg-emerald-500 text-white px-4 rounded-md py-2">Visualizar</button>
            </div>

        </div>
        <div class="bg-stone-100 py-10 px-5">
            <div class="pt-4 bg-white border border-stone-100 rounded-xl">
                <h1 class="font-normal uppercase px-64 text-2xl text-center">Gráfica de alumnos por grupo</h1>
                <div class="flex flex-col px-24 gap-1">
                    <h5>75 +</h5>
                    <h5>70</h5>
                    <h5>65</h5>
                    <h5>60</h5>
                    <h5>55</h5>
                    <h5>50</h5>
                    <h5>45</h5>
                    <h5>40</h5>
                    <h5>35</h5>
                    <h5>30</h5>
                    <h5>25</h5>
                    <h5>20</h5>
                    <h5>15</h5>
                    <h5>10</h5>
                    <h5 class="border-b border-slate-300 ">5</h5>
                </div>
                <div class=" flex flex-row justify-center gap-3 py-4">
                    <div class="flex flex-row gap-2">
                        <h1 class="font-normal uppercase"> SM51</h1>
                        <button class="bg-red-800 text-red-800 px-4 rounded-md">X</button>
                    </div>
                    <div class="flex flex-row gap-2">
                        <h1 class="font-normal uppercase">SM52</h1>
                        <button class="bg-green-700 text-green-700 px-4 rounded-md">X</button>
                    </div>
                    <div class="flex flex-row gap-2">
                        <h1 class="font-normal uppercase"> SM53</h1>
                        <button class="bg-blue-800 text-blue-800 px-4 rounded-md">X</button>
                    </div>
                    <div class="flex flex-row gap-2">
                        <h1 class="font-normal uppercase"> SM54</h1>
                        <button class="bg-yellow-500 text-yellow-500 px-4 rounded-md">X</button>
                    </div>
                </div>
            </div>
        </div>
        <h1 class="bg-stone-100 pl-3 py-2 rounded-b-lg font-thin">Copyright Universidad Tecnológica de Cancún © 2024</h1>
    </div>
@endsection
