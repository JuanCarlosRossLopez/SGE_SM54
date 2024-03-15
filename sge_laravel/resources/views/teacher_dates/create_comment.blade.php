@extends('test.test_template')

<form action="{{ route('information_project.store') }}" method="POST">
    @csrf
        <div>
        <label  for="general_comment">Comentario general</label>
        <input type="text" name="general_comment" id="general_comment">

        <label  for="teacher_id">Id maestro</label>
        <input type="text" name="teacher_id" id="teacher_id">

        <label  for="anteproject_id">Id anteproyect</label>
        <input type="text" name="anteproject_id" id="anteproject_id">
        </div>
        <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-semibold py-2 px-4 rounded">Guardar</button>
</form>