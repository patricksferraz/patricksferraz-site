@extends('layouts.master')

@section('headCss')
    @parent
@endsection

@section('header')
    @parent
@endsection

@section('content')

    <section id="about" class="container grey-text text-darken-3">

        <div class="row">

            <div class="col m12">
                <div class="row valign-wrapper">
                    <div class="col m3 offset-m3 s4">
                        <img src="{{ asset('img/patrick.jpg') }}" alt="Patrick Silva Ferraz" class="circle responsive-img">
                    </div>

                    <div class="col m6 s8">
                        <h6><b>Patrick Silva Ferraz</b></h6>
                        <p>
                            @lang('texts.grade.master')<br>
                            @lang('texts.grade.bachelor')
                        </p>

                        <div class="grey-text text-darken-3">
                            <i class="fas fa-envelope-square social-icon em1h text-middle"></i> devferraz@gmail.com<br>
                            <i class="fab fa-whatsapp-square social-icon em1h text-middle"></i> +55 (73) 9 9113-6037<br>
                            <i class="fab fa-slack social-icon em1h text-middle"></i> patrick.ferraz@outlook.com<br>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col m12">
                <blockquote>
                    <h6><b>
                        @lang('titles.about')
                    </b></h6>
                </blockquote>
                <p>
                    @lang('texts.my_description')
                </p>

                <blockquote>
                    <h6>
                        <b>@lang('titles.skills')</b>
                        <i class="fab fa-android right social-icon"></i>
                        <i class="fab fa-markdown right social-icon"></i>
                        <i class="fab fa-r-project right social-icon"></i>
                        <i class="fab fa-python right social-icon"></i>
                        <i class="fab fa-digital-ocean right social-icon"></i>
                        <i class="fab fa-wordpress right social-icon"></i>
                        <i class="fab fa-laravel right social-icon"></i>
                        <i class="fab fa-php right social-icon"></i>
                        <i class="fab fa-js-square right social-icon"></i>
                        <i class="fab fa-css3-alt right social-icon"></i>
                        <i class="fab fa-html5 right social-icon"></i>
                        <i class="fab fa-java right social-icon"></i>
                        <i class="fab fa-git right social-icon"></i>
                        <i class="fab fa-linux right social-icon"></i>
                        <i class="fab fa-microsoft right social-icon"></i>
                    </h6>
                </blockquote>

                <div class="row">
                    <div class="col s12">
                        <a target="_blank" href="{{ url('https://github.com/patricksferraz') }}" class="grey-text text-darken-1 grey-link">
                            <i class="fas fa-ellipsis-h right social-icon"> Ver mais</i>
                        </a>
                    </div>
                </div>
            </div>

        </div>

    </section>

    <section class="grey-text text-darken-3">
        <div class="container">
            <div class="row">
                <div class="col s8">
                    <h6 class="red-text text-darken-3"><b>
                        @lang('titles.more_information')
                    </b></h6>
                    <p>
                        @lang('texts.more_information_description')
                    </p>
                </div>
                <div class="col s4 margin-top-2">
                    <a href="{{ route('l.contact') }}" class="btn waves-effect waves-light red darken-3">
                        @lang('buttons.contact')
                    </a>
                </div>
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
