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
            <form class="col s12 m9 offset-m1 grey-text text-darken-2">
                <div class="row">
                    <div class="input-field col s12 m12">
                        <i class="material-icons prefix">account_circle</i>
                        <input id="icon_prefix" type="text" class="validate">
                        <label for="icon_prefix">Nome</label>
                    </div>

                    <div class="input-field col s12 m6">
                        <i class="material-icons prefix">phone</i>
                        <input id="icon_telephone" type="tel" class="validate">
                        <label for="icon_telephone">Telefone</label>
                    </div>

                    <div class="input-field col s12 m6">
                        <i class="material-icons prefix">email</i>
                        <input id="icon_prefix" type="text" class="validate">
                        <label for="icon_prefix">E-mail</label>
                    </div>

                    <div class="input-field col s12 m12">
                        <i class="material-icons prefix">subject</i>
                        <input id="icon_prefix" type="text" class="validate">
                        <label for="icon_prefix">Assunto</label>
                    </div>

                    <div class="input-field col s12 m12">
                        <i class="material-icons prefix">mode_edit</i>
                        <textarea id="icon_prefix" type="text" class="materialize-textarea" data-length="1000"></textarea>
                        <label for="icon_prefix">Mensagem</label>
                    </div>
                </div>
            </form>
        </div>


        </div>

    </section>

@endsection

@section('footer')
    @parent
@endsection

@section('scripts')
    @parent
@endsection
