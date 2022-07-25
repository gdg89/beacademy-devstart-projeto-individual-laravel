@extends('_partials.user')
@section('title','Home')
@section('body')
    <main>
        
        
        <div class="container d-flex justify-content-around pt-3">
            <!--Carousel -->
            <section class ="w-50">
                <div  class="carousel slide " data-bs-ride="carousel">
                    <p><q class="fs-6 mb-3">O que não é definido não pode ser medido, o que não é medido não pode ser melhorado. </q>L.K</p>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                        <img src="https://www.cambiatufisico.com/wp-content/uploads/entrenamiento-pecho-747x420.jpg.webp" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                        <img src="https://www.cambiatufisico.com/wp-content/uploads/entrenamiento-espalda1-747x420.jpg" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                        <img src="https://www.cambiatufisico.com/wp-content/uploads/pesas-para-mujeres-1068x712.jpg" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                        <img src="https://www.cambiatufisico.com/wp-content/uploads/manguito-rotador1-747x420.jpg" class="d-block w-100" alt="...">
                        </div>
                    </div>
                </div>
                <h1 class="fs-2 mb-3 text-center mt-3">Defina seu treino, meça seu progresso, melhore seus resultados.</h1>
            </section>
            @if(!Auth::user())
            <!-- Register Form -->
            <section  class="border border-secondary p-3">
                <h2 class="fs-5">Crie sua conta</h2>
                <form action="{{ route('register') }}" method="POST">
                @csrf
                    <div class="mb-2">
                        <label for="name" class="form-label">Nome: </label>
                        <input id="name" class="form-control" type="text" name="name" placeholder="Digite su nome" required>
                    </div>
                    <div class="mb-2">
                        <label for="email" class="form-label">Email: </label>
                        <input id="email" class="form-control" type="text" name="email" placeholder ="Digite seu email" required>
                    </div>
                    <div class="mb-2">
                        <label for="password" class="form-label">Senha: </label>
                        <input id="password" class="form-control" type="password" name="password" required>
                        <p class="text-danger">Minimo 8 caracteres.</p>
                    </div>
                    <div class="mb-3">
                        <label for="password_confirmation" class="form-label">Confirmar senha: </label>
                        <input id="password_confirmation" class="form-control" type="password" name="password_confirmation" required>
                    </div>
                     <button type="submit" class="btn btn-warning">Cadastrar</button>
                
                </form>
            @endif
            </section>
        </div>
    </main>
@endsection