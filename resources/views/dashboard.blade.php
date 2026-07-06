@extends('layouts.site')


{{-- <x-slot name="header">
        <h2 class="font-semibold text-2xl text-white leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot> --}}
@section('conteudo')
    <div class="bg-[#ebf2fa] py-12 max-w-4xl text-sm grid grid-cols-1 px-8 sm:grid-cols-[auto_1fr] mx-auto gap-9">

        <div class="sm:max-w-60 ">
            <div class="bg-white overflow-hidden shadow-[0px_0px_6px_rgba(0,0,0,0.5)] rounded-lg sm:rounded-lg px-4 h-full ">

                <div id="blocos" class="flex py-4 px-6 ">
                    <div class="abasConfig">
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


        <div>
            <div
                class="max-w-7xl sm:px-6 lg:px-8 bg-white mb-6 overflow-hidden shadow-[0px_0px_6px_rgba(0,0,0,0.5)] rounded-lg sm:rounded-lg px-14 mx-auto ">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg text-center ">

                    <div class="p-6 text-[#05668d] font-bold">
                        {{ __('Bem vindo!') }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
