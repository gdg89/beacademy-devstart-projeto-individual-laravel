@extends('_partials.user')
@section('title','User Profile')
@section('body')

<main>
    <div class="container text-center mt-2 bg-light">
        <div class="row">
            <!-- User info -->
            <section class="col-sm-3 p-3">
                <div class="row">
                    <img src="https://oempregoeseucom.files.wordpress.com/2021/06/hipster.jpg" class=" rounded-circle " alt="...">
                    <p class="mt-2"> {{ Auth::user()->name}} user Profile </p>
                </div>
                <div>
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
                        <a href="{{ route('workout.create') }}" class="btn btn-outline-success me-2">Novo Treino</a>
                            <button class="btn btn-outline-success me-2" type="button">Dashboard</button>
                        </form>
                    </div>
                </div>
                <div class="row ">
                    <div class="col-sm-12">
                        <h3>Segunda</h3>
                        <table class="table table-striped table-hover">
                            <caption>Data</caption>
                            <thead>
    
                                <tr>
                                <th scope="col">#</th>
                                <th scope="col">Exercicio</th>
                                <th scope="col">Series</th>
                                <th scope="col">Reps</th>
                                <th scope="col">Peso/kg</th>
                                <th scope="col">Descansos/s</th>
                                </tr>
                            </thead>
                            <tbody class="table-group-divider">
                                <tr>
                                    <th scope="row">1</th>
                                    <td>Lateral Raise na Polia </td>
                                    <td>4</td>
                                    <td>10</td>
                                    <td>5</td>
                                    <td>30</td>
                                </tr>
                                <tr>
                                    <th scope="row">1</th>
                                    <td>Trícep Deep </td>
                                    <td>3</td>
                                    <td>15</td>
                                    <td>libre</td>
                                    <td>30</td>
                                </tr>
                                <tr>
                                    <th scope="row">1</th>
                                    <td>Bícep Curl com Halteres  </td>
                                    <td>4</td>
                                    <td>12</td>
                                    <td>20</td>
                                    <td>60</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </section>
        </div>
    </div>
</main>



@endsection