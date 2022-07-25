@extends('_partials.user')
@section('title','User Profile')
@section('body')

<main>
    <div class="container text-center mt-2 bg-light">
        <div class="row">
            <!-- User info -->
            <section class="col-sm-3 p-3">
                <div class=" rounded-circle" width="100px" heigth="100px">
                <img src="https://outraspalavras.net/wp-content/uploads/2021/03/borat-2-trump-fat-suit.png" class=" rounded-circle " alt="...">
                </div>
                <div>
                <p class="mt-2"> {{ Auth::user()->name}}</p>
                    <ul class="list-group">
                        <li class="list-group-item">Idade: 59</li>
                        <li class="list-group-item">Peso: 85</li>
                        <li class="list-group-item">Altura: 1.88</li>
                        <li class="list-group-item">IMC: 24,9</li>
                    </ul>
                    <button class="btn btn-warning me-3 mt-2" type="button">Editar Info</button>
                </div>
            </section>
            <!-- second nav & tables -->
            <section class="col-sm-7">
                <div class=" mb-4 p-3 border-bottom d-flex justify-content-between">
                    <div >
                        <h2>Suas Rotinas</h2>
                    </div>
                    <div>
                        <form class=" justify-content-start">
                            <a href= "{{route('workout.create') }}" class="btn btn-outline-success me-2">Novo Treino</a>
                            <button class="btn btn-outline-success me-2" type="button">Dashboard</button>
                        </form>
                    </div>
                </div>
                <div class="row ">
                    <div class="col-sm-12">
                        <div class=" d-flex justify-content-between">
                            <div><h3>Segunda</h3></div>
                            <div><a href="#" class="btn btn-warning">Editar</a></div>
                        </div>
                       
                        <table class="table table-striped table-hover">
                            
                            <caption>Data:</caption>
                            
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Exercicio</th>
                                    <th scope="col">Series</th>
                                    <th scope="col">Reps</th>
                                    <th scope="col">Peso/kg</th>
                                    <th scope="col">Descansos/s</th>
                                    <th scope="col">Observações</th>
                                    
                                </tr>
                            </thead>
                            <tbody class="table-group-divider">
                                @if(isset($workouts))
                                @foreach($workouts as $workout)
                                <tr>
                                    <th scope="row">{{$workout->id}}</th>
                                    <td>{{$workout->exercise}} </td>
                                    <td>{{$workout->sets}}</td>
                                    <td>{{$workout->reps}}</td>
                                    <td>{{$workout->weight}}</td>
                                    <td>{{$workout->rest}}</td>
                                    <td>{{$workout->obs}}</td>
                                </tr>
                                @endforeach
                                @endif
                            </tbody>
                        </table>
                    </div>
                </div>
            </section>
        </div>
    </div>
</main>



@endsection