{{-- @dd($postagens) --}}


@extends('layouts.site')

@section('conteudo')
    <x-app-layout>

        <div class=" bg-[#ebf2fa] pt-1 pb-12 max-w-4xl text-sm grid grid-cols-1 px-8 sm:grid-cols-[auto_1fr] mx-auto gap-9">

            <div class="sm:max-w-60 ">
                <div
                    class="bg-white overflow-hidden shadow-[0px_0px_6px_rgba(0,0,0,0.5)] rounded-lg sm:rounded-lg px-4 h-full ">

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

            <div
                class="bg-white overflow-hidden shadow-[0px_0px_6px_rgba(0,0,0,0.5)] rounded-lg sm:rounded-lg py-10 px-14 mx-auto">

                <div class="flex justify-between">
                    <p class="font-extrabold text-xl pb-3">SUA PUBLICAÇÂO</p>
                    <a href="{{ route('admin.postagem.cadastrar') }}"
                        class="bg-[#629643] text-white p-2 mb-1 rounded-md">+</a>

                </div>

                <p class="border-t border-slate-500 "></p>

                @forelse ($postagens as $p)
                    <div>

                        <section
                            class="bg-wite max-w-[900px] mx-auto rounded-lg shadow-[0px_2px_6px_rgba(0,0,0,0.3)] p-5 my-7">

                            <div class="flex gap-5">

                                <div class="bg-[#629643] text-white font-bold rounded-lg px-2 py-1 max-h-7">
                                    <ul>
                                        <li>Ensino</li>
                                    </ul>
                                </div>
                                <div class="">
                                    <ul class="flex gap-4">
                                        <li><img src="{{ asset('assets/img/palm-of-hand.png') }}" width="20" />
                                            {{ $p->likes }}
                                        </li>
                                        <li><img src="{{ asset('assets/img/chat (1).png') }}" width="20" /> 12
                                        </li>
                                        <li><a href="{{ route('admin.postagem.editar', $p->id) }}"><img
                                                    src="{{ asset('assets/img/edit.png') }}" width="20" /></a>
                                        </li>
                                        <li>
                                            <form action="{{ route('admin.postagem.excluir', $p->id) }}" method="post">

                                                @method('delete')
                                                @csrf

                                                <button type="submit"
                                                    onclick="return confirm('Deseja realmente excluir a publicação?')"
                                                    width="20">
                                                    <img src="{{ asset('assets/img/trash-can.png') }}" width="20" />
                                                </button>

                                            </form>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <h3 class="text-[#e9702a] ''font-extrabold py-2">{{ $p->titulo }}</h3>
                            <p class="text-gray-400 pb-2 text-sm">
                                Publicado: {{ $p->created_at->format('d/m/Y H:i') }}
                            </p>
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

            </div>
        </div>

        </div>
    </x-app-layout>
@endsection
