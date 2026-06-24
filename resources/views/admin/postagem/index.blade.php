{{-- @dd($postagens) --}}


@extends('layouts.site')

@section('conteudo')
    <x-app-layout>

        <div class="py-12 flex max-w-7xl justify-center  gap-9 mx-auto sm:px-6 lg:px-8">

            <div class="">
                <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg min-w-2 px-4">

                    <div id="blocos" class="flex py-4 px-6">

                        <div class="abasConfig">
                            <ul class="text-[#333333] font-bold ">
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
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">

                <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg p-10">



                    @forelse ($postagens as $p)
                        <p class="font-extrabold text-xl pb-3">SUAS POSTAGENS</p>
                        <p class="border-t-2"></p>

                        <div class="abaAberta">

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
                                            <li><img src="{{ asset('assets/img/chat (1).png') }}" width="20" /> 12
                                            </li>
                                            <li><img src="{{ asset('assets/img/edit.png') }}" width="20" /></li>
                                            <li><img src="{{ asset('assets/img/trash-can.png') }}" width="20" />
                                            </li>
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

                        @empty

                            <div>
                                <div class="text-center text-slate-400"colspan="6">
                                    <p>Nenhuma postagem cadastrada</p>
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
