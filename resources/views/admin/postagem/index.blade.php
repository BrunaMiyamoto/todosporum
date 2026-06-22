{{-- @dd($postagens) --}}


@extends('layouts.site')

@section('conteudo')
    <x-app-layout>
        <x-slot name="header">

        </x-slot>

        <div class="py-12 bg-[#ebf2fa] ">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 flex gap-6 ">

                <div id="blocos"
                    class="p-6 text-gray-900 dark:text-gray-100 flex justify-between items-center bg-white sm:rounded-lg overflow-x-auto shadow-sm">
                    <div class="abasConfig" class="">
                        <ul>
                            <li class="flex gap-4 pb-5">
                                <img src="{{ asset('assets/img/user.png') }}" alt="Sua conta" width="30" /><a
                                    href="sua-conta.html">Sua conta</a>
                            </li>
                            <li class="flex gap-4 pb-5">
                                <img src="{{ asset('assets/img/comment.png') }}"alt="Suas postagens" width="30" /><a
                                    href="suas-postagens.html">Suas postagens</a>
                            </li>
                            <li class="flex gap-4 pb-5">
                                <img src="{{ asset('assets/img/lock.png') }}"alt="Segurança e privacidade"
                                    width="30" /><a href="seguranca-privacidade.html">Segurança e privacidade</a>
                            </li>
                            <li class="flex gap-4 pb-5">
                                <img src="{{ asset('assets/img/setting-lines.png') }}" alt="Acessibilidade"
                                    width="30" /><a href="acessibilidade.html">Acessibilidade</a>
                            </li>
                            <li class="flex gap-4 pb-5">
                                <img src="{{ asset('assets/img/logout.png') }}" alt="Sair" width="30" /><a
                                    href="login.html">Sair</a>
                            </li class="flex gap-4 pb-5">
                        </ul>
                    </div>
                </div>
                <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">



                    <div class="p-6 text-gray-900 dark:text-gray-100 flex justify-between items-center">

                        <h1 class="text-[20px] font-bold">Suas Postagens</h1>

                        {{-- <a href="#" class="bg-slate-950 text-white px-4 py-2 rounded">+ Adicionar Noticia</a> --}}
                    </div>


                    @forelse ($postagens as $p)
                        <div class="p-6 overflow-x-auto">

                            <section class="destaque">

                                <div class="cabeca">
                                    <div class="tagsDestaque">
                                        <ul>
                                            <li>Ensino</li>
                                        </ul>
                                    </div>
                                    <div class="usuarioDestaque">
                                        <ul class="flex gap-4">
                                            <li><img src="{{ asset('assets/img/palm-of-hand.png') }}" width="20" />
                                                {{ $p->likes }}
                                            </li>
                                            <li><img src="{{ asset('assets/img/chat (1).png') }}" width="20" /> 12</li>
                                            <li><img src="{{ asset('assets/img/edit.png') }}" width="20" /></li>
                                            <li><img src="{{ asset('assets/img/trash-can.png') }}" width="20" /></li>
                                        </ul>
                                    </div>
                                </div>
                                <h3>
                                    {{ $p->titulo }}
                                </h3>
                                <p>
                                    <strong>Objetivo:</strong> {{ $p->conteudo }}
                                </p>
                            </section>

                            {{-- <section class="destaque" class="flex">
                            <div class="cabeca">
                                <div class="tagsDestaque">
                                    <ul>
                                        <li>Infraestrutura</li>
                                        <li>Natureza</li>
                                    </ul>
                                </div>
                                <div class="usuarioDestaque">
                                    <ul class="flex gap-4">
                                        <li><img src="{{ asset('assets/img/palm-of-hand.png') }}" width="20" />
                                            {{ $p->likes }}</li>
                                        <li><img src="{{ asset('assets/img/chat (1).png') }}" width="20" /> 12</li>
                                        <li><img src="{{ asset('assets/img/edit.png') }}" width="20" /></li>
                                        <li><img src="{{ asset('assets/img/trash-can.png') }}" width="20" /></li>
                                    </ul>
                                </div>
                            </div>
                            <h3>{{ $p->titulo }}</h3>
                            <p>
                                <strong>Objetivo:</strong> {{ $p->conteudo }}

                            </p> --}}
                        @empty



                            <div>
                                <div class="text-center text-slate-400"colspan="6">
                                    <p>Nenhuma noticia cadastrada</p>
                                </div>
                            </div>
                    @endforelse


                    </section>
                </div>
            </div>

        </div>

        </div>
        </div>
        </div>
    </x-app-layout>
@endsection
