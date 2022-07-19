@extends('_partials.user')
@section('title','Login')
@section('body')
    <main>
        <div class="container p-4 d-flex justify-content-center">
            <section  class="border border-secondary p-3">
                <h1 class="fs-4 mb-2">Faça seu login</h1>
                <form action="{{ route('login') }}" method="POST">
                    @csrf
                    <div class="mb-2">
                        <label for="email" class="form-label">Email: </label>
                        <input id="email" class="form-control" type="text" name="email" placeholder ="Digite seu email" required>
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Senha: </label>
                        <input id="password" class="form-control" name="password" type="password" required>
                    </div>
                     <button type="submit" class="btn btn-warning">Login</button>
                
                </form>
            </section>
        </div>
    </main>
@endsection