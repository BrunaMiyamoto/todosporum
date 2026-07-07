{{-- @dd($aprendaPost) --}}

@extends('layouts.site')

@section('conteudo')
    <div class=" bg-[#ebf2fa] pb-12 max-w-4xl text-sm grid grid-cols-1 px-8 sm:grid-cols-[auto_1fr] mx-auto gap-9 mt-10">

        <div class="sm:max-w-60 ">
            <div class="bg-white overflow-hidden shadow-[0px_0px_6px_rgba(0,0,0,0.5)] rounded-lg sm:rounded-lg px-4 h-full">

                <div id="blocos" class="flex py-4 px-6 ">
                    <div class="abasConfig">
                        <ul class="text-[#333333] font-bold ">
                            <li class="flex gap-2 py-3">
                                <img src="{{ asset('assets/img/user.png') }}" alt="Sua conta" width="30" /><a
                                    href="sua-conta.html">Sua
                                    conta</a>
                            </li>
                            <li class="flex gap-2 py-3 ">
                                <img src="{{ asset('assets/img/comment.png') }}" alt="Suas postagens" width="30" /><a
                                    href="suas-postagens.html">Suas postagens</a>
                            </li>
                            <li class="flex gap-2 py-3">
                                <img src="{{ asset('assets/img/lock.png') }}" alt="Segurança e privacidade"
                                    width="30" /><a href="seguranca-privacidade.html">Segurança e privacidade</a>
                            </li>
                            <li class="flex gap-2 py-3">
                                <img src="{{ asset('assets/img/setting-lines.png') }}" alt="Acessibilidade"
                                    width="30" /><a href="acessibilidade.html">Acessibilidade</a>
                            </li>
                            <li class="flex gap-2 py-3">
                                <img src="{{ asset('assets/img/logout.png ') }}"alt="Sair" width="30" /><a
                                    href="login.html">Sair</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>


        <form action="{{ route('admin.perfil.atualizar', $perfil->id) }}" method="post" enctype="multipart/form-data">
            @method('put')
            @csrf
            @include('admin.perfil._form')
        </form>
    </div>
@endsection
