{{-- @dd($aprendaPost) --}}

@extends('layouts.site')

@section('conteudo')
    <x-app-layout>

        <div class=" bg-[#ebf2fa] py-12 flex max-w-7xl justify-center text-sm gap-9 mx-auto sm:px-6 lg:px-8">

            <div class="">
                <div class="bg-white overflow-hidden shadow-2xl sm:rounded-lg min-w-2 px-4">

                    <div id="blocos" class="flex py-4 px-6 ">
                        <div class="abasConfig">
                            <ul class="text-[#333333] font-bold ">
                                <li class="flex gap-2 py-3">
                                    <img src="{{ asset('assets/img/user.png') }}" alt="Sua conta" width="30" /><a
                                        href="sua-conta.html">Sua
                                        conta</a>
                                </li>
                                <li class="flex gap-2 py-3 ">
                                    <img src="{{ asset('assets/img/comment.png') }}" alt="Suas postagens"
                                        width="30" /><a href="suas-postagens.html">Suas postagens</a>
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

            <div class="bg-white  overflow-hidden shadow-2xl sm:rounded-md py-10 px-14 w-full">
                <p class="font-extrabold text-xl pb-3">SEGURANÇA E PRIVACIDADE</p>
                <p class="border-t border-slate-500 "></p>

                @forelse ($aprendaPost as $ap)
                    <div class="abaAberta">

                        <section class="destaque">
                            <div class="cabeca" class="">
                                <div class="tagsDestaque">
                                    <ul>
                                        <li>Cidadania</li>
                                    </ul>
                                </div>
                                <div class="usuarioDestaque">
                                    <ul class="flex gap-5">
                                        <li><img src="{{ asset('assets/img/palm-of-hand.png') }}" width="20" /> 43
                                        </li>
                                        <li><img src="{{ asset('assets/img/chat (1).png') }}" width="20" />
                                            12</li>
                                        <a href="#"><img src="{{ asset('assets/img/edit.png') }}"
                                                width="20" /></a>
                                        <a href="#"><img src="{{ asset('assets/img/trash-can.png') }}"
                                                width="20" />
                                        </a>
                                    </ul>
                                </div>
                            </div>
                            <h3>
                                {{ $ap->titulo }}
                            </h3>
                            <p class="text-gray-400 pb-2 text-sm">
                                Autor: {{ $ap->autor }}
                            </p>
                            <p class="text-gray-400 pb-2 text-sm">
                                Publicado: {{ $ap->dt_publi }}
                            </p>
                            <p>
                                <strong>Objetivo:</strong>{{ $ap->conteudo }}
                            </p>
                        </section>
                    @empty
                        <div>
                            <div class="text-center text-slate-400"colspan="6">
                                <p>Nenhuma noticia cadastrada</p>
                            </div>
                        </div>
                @endforelse


            </div>

        </div>
        </div>
    </x-app-layout>
@endsection
