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

            <div class="col m4">
                <div class="row">
                    <div class="col s8 offset-s2">
                        <img src="{{ asset('img/patrick.jpg') }}" alt="Patrick Silva Ferraz" class="circle responsive-img">
                    </div>
                </div>
                <h6><b>Patrick Silva Ferraz</b></h6>
                <p>
                    @lang('texts.grade.master')<br>
                    @lang('texts.grade.bachelor')
                </p>

                <div class="grey-text text-darken-3">
                    <i class="fas fa-envelope-square social-icon em1h text-middle"></i> devferraz@gmail.com<br>
                    <i class="fab fa-whatsapp-square social-icon em1h text-middle"></i> +55 (73) 9 9113-6037<br>
                </div>
            </div>

            <div class="col m8">
                <blockquote>
                    <h6><b>
                        @lang('titles.about')
                    </b></h6>
                </blockquote>
                <p>
                    @lang('texts.my_description')
                </p>

                <blockquote>
                    <h6><b>
                        @lang('titles.system_development')
                    </b></h6>
                </blockquote>
                <div class="row center">
                    <div class="col s3">
                        <a href="" class="grey-text text-darken-1 grey-link">
                            <i class="material-icons circle icon-border">devices</i><br>
                            @lang('buttons.web')
                        </a>
                    </div>
                    <div class="col s3">
                        <a href="" class="grey-text text-darken-1 grey-link">
                            <i class="material-icons circle icon-border">devices_other</i><br>
                            @lang('buttons.mobile')
                        </a>
                    </div>
                    <div class="col s3">
                        <a href="" class="grey-text text-darken-1 grey-link">
                            <i class="material-icons circle icon-border">developer_board</i><br>
                            @lang('buttons.embedded')
                        </a>
                    </div>
                    <div class="col s3">
                        <a href="" class="grey-text text-darken-1 grey-link">
                            <i class="material-icons circle icon-border">lightbulb_outline</i><br>
                            @lang('buttons.use_imagination')
                        </a>
                    </div>
                </div>

                <div class="row">
                    <div class="col s12">
                        <a href="" class="right grey-text text-darken-1 grey-link">
                            @lang('buttons.see_portfolio')
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
