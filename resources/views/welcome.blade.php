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
                <img src="{{ mix('img/patrick.jpg') }}" alt="Patrick Silva Ferraz" class="circle responsive-img">
                <h6><b>Patrick Silva Ferraz</b></h6>
                <p>
                    Mestrando em Ciência de Dados - UFBA<br>
                    Bacharel em Ciência da Computação - UESC
                </p>

                <div class="grey-text text-darken-3">
                    <i class="fas fa-envelope-square social-icon em1h text-middle"></i> patrick.ferraz@outlook.com<br>
                    <i class="fab fa-whatsapp-square social-icon em1h text-middle"></i> +55 (73) 9 9113-6037<br>
                </div>
            </div>

            <div class="col m8">
                <blockquote>
                    <h6><b>Sobre</b></h6>
                </blockquote>
                <p>
                    Entusiasta por tecnologia, apaixonado pelo desenvolvimento de softwares e
                    sistemas autônomos, sempre buscando técnicas modernas para padronização
                    e melhoria de desempenho. A procura de novos desafios que possibilitem
                    a inovação e o rompimento de barreiras. A criatividade não tolera limites.
                </p>

                <blockquote>
                    <h6><b>Desenvolvimento de sistemas</b></h6>
                </blockquote>
                <div class="row center">
                    <div class="col s3">
                        <a href="" class="grey-text text-darken-1 grey-link">
                            <i class="material-icons circle icon-border">devices</i><br>
                            Web
                        </a>
                    </div>
                    <div class="col s3">
                        <a href="" class="grey-text text-darken-1 grey-link">
                            <i class="material-icons circle icon-border">devices_other</i><br>
                            Móveis
                        </a>
                    </div>
                    <div class="col s3">
                        <a href="" class="grey-text text-darken-1 grey-link">
                            <i class="material-icons circle icon-border">developer_board</i><br>
                            Embarcados
                        </a>
                    </div>
                    <div class="col s3">
                        <a href="" class="grey-text text-darken-1 grey-link">
                            <i class="material-icons circle icon-border">lightbulb_outline</i><br>
                            Use sua imaginação
                        </a>
                    </div>
                </div>

                <div class="row">
                    <div class="col s12">
                        <a href="" class="right grey-text text-darken-1 grey-link">Ver portfólio...</a>
                    </div>
                </div>
            </div>

        </div>

    </section>

    <section class="grey-text text-darken-3">
        <div class="container">
            <div class="row">
                <div class="col s8">
                    <h6 class="red-text text-darken-3"><b>Precisa de mais informações?</b></h6>
                    <p>
                        Estou a disposição para atendê-lo. Entre em contato e realize um orçamento.
                    </p>
                </div>
                <div class="col s4 margin-top-2">
                    <a href="{{ route('l.contact') }}" class="btn waves-effect waves-light red darken-3">Contato</a>
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
