@extends('_partials.user')
@section('title', 'Novo Treino')
@section('body')
<main>
        
        <div class="container text-center bg-light mt-5  row">
        <h3>Adicione seus exercícios para criar um novo treino  </h3>
            <section class="text-start p-5 col-sm-6">
            
            <form method="POST" action="{{ route('workout.add')}}" class="w-50">
            @csrf
                <div class="form-group">
                    <label for="exercise">Exercicio:</label>
                    <input type="text" class="form-control" id="exercise"  name="exercise">
                </div>
                <div class="form-group">
                    <label for="sets">Series:</label>
                    <input type="text" class="form-control" id="sets"  name="sets">
                </div>
                <div class="form-group">
                    <label for="reps">Repetições:</label>
                    <input type="text" class="form-control" id="reps"  name="reps">
                </div>
                <div class="form-group">
                    <label for="weight">Peso /kg:</label>
                    <input type="text" class="form-control" id="weight"  name="weight">
                </div>
                <div class="form-group">
                    <label for="rest">Descanso /s:</label>
                    <input type="text" class="form-control" id="rest"  name="rest">
                </div>
                <div class="form-group">
                    <p><label for="obs">Obs :</label></p>
                    <textarea name="obs" id="obs" cols="40" rows="5"></textarea>
                </div>
                <button type="submit" class="btn btn-warning mt-4">Adicionar exercicio</button> 
            </form>
        </section>
        
        <section class="p-5 col-sm-6">
            <table class="table table-striped table-hover">
                <thead>
                    <tr>
                        
                        <th scope="col">Exercicio</th>
                        <th scope="col">Series</th>
                        <th scope="col">Reps</th>
                        <th scope="col">Peso/kg</th>
                        <th scope="col">Descansos/s</th>
                        <th scope="col">Observações</th>
                        <th scope="col" colspan="2">Ações</th>
                    </tr>
                </thead>
                <tbody class="table-group-divider">
                @if(session()->has('workout') || !empty(session()->get('workout')))
                @foreach(session()->get('workout') as $key => $exercise)
                    <tr>
                        <td>{{$exercise['exercise']}} </td>
                        <td>{{$exercise['sets']}}</td>
                        <td>{{$exercise['reps']}}</td>
                        <td>{{$exercise['weight']}}</td>
                        <td>{{$exercise['rest']}}</td>
                        <td>{{$exercise['obs']}}</td>
                        <td class="text-center">
                            <a href="#" class="btn btn-warning">Editar</a>
                                        <!-- <a href=" route('users.edit', $user->id) }}" class="btn btn-warning">Editar</a> -->
                        </td>
                        <td>
                            <!-- <form action=" route('users.destroy', $user->id) }}" method="POST" > -->
                                            <!-- @method('DELETE') -->
                                            <!-- @csrf -->
                                <button type="submit" class="btn btn-danger">Deletar</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
                </tbody>
                <tfoot class=" d-flex justify-content-end">
                <form action="{{ route('workout.store')}}" method="POST">
                    @csrf
                 <button type="submit" class="btn btn-success">Finalizar</button>
                </form>
                </tfoot>
            </table>
        @endif     
        </section> 
    </div>
</main>


@endsection