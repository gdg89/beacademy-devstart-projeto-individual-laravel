@extends('_partials.user')
@section('title', 'Novo Treino')
@section('body')
<main>
    <div class="container mt-5 bg-light">
        <h3>Crie seu novo Treino</h3>
    <h1>Nota:ver nombre de la rutino como hacer, y ver como implementar cada exercicio adicionado hasta crear la rutina</h1>
        <form mtehod="POSt" class="w-50">
        @csrf
            <div class="form-group">
                <label for="formGroupExampleInput">Exercicio:</label>
                <input type="text" class="form-control" id="formGroupExampleInput"  name="exercice">
            </div>
            <div class="form-group">
                <label for="formGroupExampleInput2">Series:</label>
                <input type="text" class="form-control" id="formGroupExampleInput2"  name="sets">
            </div>
            <div class="form-group">
                <label for="formGroupExampleInput2">Repetições:</label>
                <input type="text" class="form-control" id="formGroupExampleInput2"  name="reps">
            </div>
            <div class="form-group">
                <label for="formGroupExampleInput2">Peso /kg:</label>
                <input type="text" class="form-control" id="formGroupExampleInput2"  name=weight>
            </div>
            <div class="form-group">
                <label for="formGroupExampleInput2">Descanso /s:</label>
                <input type="text" class="form-control" id="formGroupExampleInput2"  name=rest>
            </div>
            <button type="submit" class="btn btn-warning">Adicionar exercicio</button> 
        </form>
        </div>
</main>


@endsection