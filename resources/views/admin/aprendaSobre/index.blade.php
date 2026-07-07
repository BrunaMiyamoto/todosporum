{{-- @dd($aprendaPost) --}}

@extends('layouts.site')

@section('conteudo')
    <x-app-layout>

        <div class=" bg-[#ebf2fa] pt-1 pb-12 max-w-4xl text-sm grid grid-cols-1 px-8 sm:grid-cols-[auto_1fr] mx-auto gap-9">

            <div class="sm:max-w-60 ">
                <div
                    class="bg-white overflow-hidden shadow-[0px_0px_6px_rgba(0,0,0,0.5)] rounded-lg sm:rounded-lg px-4 h-full ">

                    <div id="blocos" class="flex py-4 px-6 ">
                        <div>
                            <ul class="text-[#333333] font-bold ">
                                <li class="flex gap-2 py-3 ">
                                    <img src="{{ asset('assets/img/user.png') }}" alt="Sua conta" width="30" /><x-nav-link
                                        :href="route('admin.perfil.index')" :active="request()->routeIs('admin.perfil.index')">
                                        Seu Perfil
                                    </x-nav-link>
                                </li>
                                <li class="flex gap-2 py-3 ">
                                    <img src="{{ asset('assets/img/comment.png') }}" alt="Suas postagens"
                                        width="30" /><x-nav-link :href="route('admin.postagem.index')" :active="request()->routeIs('admin.postagem.index')">
                                        Suas Postagens
                                    </x-nav-link>
                                </li>
                                <li class="flex gap-2 py-3 ">
                                    <img src="{{ asset('assets/img/icons8-conteúdo-96.png') }}" alt="Suas postagens"
                                        width="30" /><x-nav-link :href="route('admin.aprendaSobre.index')" :active="request()->routeIs('admin.aprendaSobre.index')">
                                        Aprenda Sobre
                                    </x-nav-link>
                                </li>
                                <li class="flex gap-2 py-3">
                                    <img src="{{ asset('assets/img/lock.png') }}" alt="Segurança e privacidade"
                                        width="30" />

                                    <x-responsive-nav-link :href="route('profile.edit')">
                                        {{ __('Segurança') }}
                                    </x-responsive-nav-link>
                                </li>
                                <li class="flex gap-2 py-3">
                                    <img src="{{ asset('assets/img/setting-lines.png') }}" alt="Acessibilidade"
                                        width="30" /> <x-nav-link :href="route('admin.acessibilidade.index')" :active="request()->routeIs('admin.acessibilidade.index')">
                                        Acessibilidade
                                    </x-nav-link>
                                </li>
                                <li class="flex gap-2 py-3">
                                    <img src="{{ asset('assets/img/logout.png ') }}"alt="Sair" width="30" />

                                    <form method="POST" action="{{ route('logout') }}">
                                        @csrf

                                        <x-responsive-nav-link :href="route('logout')"
                                            onclick="event.preventDefault();
                                        this.closest('form').submit();">
                                            {{ __('Log Out') }}
                                        </x-responsive-nav-link>
                                    </form>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>


            <div
                class="bg-white overflow-hidden shadow-[0px_0px_6px_rgba(0,0,0,0.5)] rounded-lg sm:rounded-lg py-10 px-14 mx-auto">

                <div class="flex justify-between">
                    <p class="font-extrabold text-xl pb-3">APRENDA SOBRE</p>
                    <a href="{{ route('admin.aprendaSobre.cadastrar') }}"
                        class="bg-[#629643] text-white p-2 mb-1 rounded-md">+</a>
                </div>

                <p class="border-t border-slate-500 "></p>

                @forelse ($aprendaPost as $ap)
                    <div>

                        <section
                            class="bg-wite max-w-[900px] mx-auto rounded-lg shadow-[0px_2px_6px_rgba(0,0,0,0.3)] p-5 my-7">
                            <div class="flex justify-between">
                                <div>
                                    <h3 class="text-[#e9702a] font-bold">
                                        {{ $ap->titulo }}
                                    </h3>
                                </div>

                                <div class="">
                                    <div class=" flex gap-5">

                                        <a href="{{ route('admin.aprendaSobre.editar', $ap->id) }}"><img
                                                src="{{ asset('assets/img/edit.png') }}" width="20" /></a>


                                        <form action="{{ route('admin.aprendaSobre.excluir', $ap->id) }}" method="post">

                                            @method('delete')
                                            @csrf

                                            <button type="submit"
                                                onclick="return confirm('Deseja realmente excluir a publicação?')"
                                                width="20">
                                                <img src="{{ asset('assets/img/trash-can.png') }}" width="20" />
                                            </button>
                                            </a>
                                        </form>

                                    </div>
                                </div>
                            </div>
                            <div>
                                <p class="text-gray-400 pb-2 text-sm">
                                    Autor: {{ $ap->autor }}
                                </p>
                                <p class="text-gray-400 pb-2 text-sm">
                                    Publicado: {{ $ap->created_at->format('d/m/Y H:i') }}
                                </p>
                                <p>
                                    {{ $ap->conteudo }}
                                </p>
                            </div>

                        </section>
                    </div>


                @empty
                    <div>
                        <div class="text-center text-slate-400"colspan="6">
                            <p>Nenhuma publicação cadastrada</p>
                        </div>
                    </div>
                @endforelse


            </div>


        </div>

    </x-app-layout>
@endsection
