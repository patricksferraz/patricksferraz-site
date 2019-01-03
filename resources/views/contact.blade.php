@extends('layouts.master')

@section('headCss')
    @parent
@endsection

@section('title')
    Contato
@endsection

@section('header')
    @parent
@endsection

@section('content')

    <section id="contact" class="container grey-text text-darken-3">

        <h5 class="center">Contato</h5>
        <hr>
        <hr class="line">


        <div class="row">
            <form action="{{ route('l.postContact') }}" method="POST" class="col s12 m10 offset-m1 xl8 offset-xl2 grey-text text-darken-1">
                @csrf

                @include('partials.errors')

                <div class="row">
                    <div class="input-field col s12 m12">
                        <i class="material-icons prefix">account_circle</i>
                        <input id="nome" name="nome" type="text" value="{{ old('nome') }}">
                        <label for="nome">Nome</label>
                    </div>

                    <div class="input-field col s12 m6">
                        <i class="material-icons prefix">phone</i>
                        <input id="telefone" name="telefone" type="text" value="{{ old('telefone') }}">
                        <label for="telefone">Telefone</label>
                    </div>

                    <div class="input-field col s12 m6">
                        <i class="material-icons prefix">email</i>
                        <input id="email" name="email" type="text" value="{{ old('email') }}">
                        <label for="email">E-mail</label>
                    </div>

                    <div class="input-field col s12 m12">
                        <i class="material-icons prefix">subject</i>
                        <input id="assunto" name="assunto" type="text" data-length="100" value="{{ old('assunto') }}">
                        <label for="assunto">Assunto</label>
                    </div>

                    <div class="input-field col s12 m12">
                        <i class="material-icons prefix">mode_edit</i>
                        <textarea id="mensagem" name="mensagem" class="materialize-textarea" maxlength="1000" data-length="1000">{{ old('mensagem') }}</textarea>
                        <label for="mensagem">Mensagem</label>
                    </div>

                    <div class="col s12 center">
                        <button class="btn waves-effect waves-light" type="submit">Enviar
                            <i class="material-icons right">send</i>
                        </button>
                    </div>
                </div>

            </form>
        </div>

    </section>

@endsection

@section('footer')
    @parent
@endsection

@section('scripts')
    @parent
@endsection
