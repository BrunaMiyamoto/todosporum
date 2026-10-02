@extends('layouts.site')

@section('conteudo')
    <div class=" bg-[#ebf2fa] pb-12 max-w-4xl text-sm grid grid-cols-1 px-8 sm:grid-cols-[auto_1fr] mx-auto gap-9 mt-10">

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

                            @if (auth()->user()->perfil === 'admin')
                                <li class="flex gap-2 py-3">
                                    <img src="{{ asset('assets/img/icons8-primeiro-plano-do-grupo-selecionado-60.png') }}"
                                        alt="Usuários" width="30" />
                                    <x-nav-link :href="route('admin.usuarios.index')" :active="request()->routeIs('admin.usuarios.index')">
                                        Usuários
                                    </x-nav-link>
                                </li>
                            @endif

                            <li class="flex gap-2 py-3 ">
                                <img src="{{ asset('assets/img/comment.png') }}" alt="Suas postagens"
                                    width="30" /><x-nav-link :href="route('admin.postagem.index')" :active="request()->routeIs('admin.postagem.index')">
                                    Suas Postagens
                                </x-nav-link>
                            </li>

                            @if (auth()->user()->perfil === 'admin' || auth()->user()->perfil === 'moderador')
                                <li class="flex gap-2 py-3">
                                    <img src="{{ asset('assets/img/comment.png') }}" alt="Moderação" width="30" />
                                    <x-nav-link :href="route('admin.postagem.moderacao')" :active="request()->routeIs('admin.postagem.moderacao')">
                                        Moderação
                                    </x-nav-link>
                                </li>
                            @endif
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

            <p class="font-bold text-xl pb-3">GERENCIAR USUÁRIOS</p>
            <p class="border-t border-slate-500 mb-6"></p>

            @forelse ($usuarios as $usuario)
                <div class="flex justify-between items-center py-4 border-b border-slate-200">
                    <div>
                        <p class="font-bold text-[#333333]">{{ $usuario->nome }}</p>
                        <p class="text-gray-400 text-xs">{{ $usuario->email }}</p>
                        <span class="text-xs font-bold text-[#629643]">{{ ucfirst($usuario->perfil) }}</span>
                    </div>



                    <div class="flex gap-3 items-center">

                        @if ($usuario->perfil !== 'admin')
                            <form action="{{ route('admin.usuarios.promover', $usuario->id) }}" method="post">
                                @method('put')
                                @csrf
                                <button type="submit" class="text-xs font-bold px-3 py-1 rounded-md bg-blue-500 text-white"
                                    onclick="return confirm('{{ $usuario->perfil === 'moderador' ? 'Remover moderador deste usuário?' : 'Tornar este usuário moderador?' }}')">
                                    {{ $usuario->perfil === 'moderador' ? 'Remover moderador' : 'Tornar moderador' }}
                                </button>
                            </form>
                        @endif


                        <form action="{{ route('admin.usuarios.suspender', $usuario->id) }}" method="post">
                            @method('put')
                            @csrf
                            <button type="submit"
                                class="text-xs font-bold px-3 py-1 rounded-md {{ $usuario->suspenso ? 'bg-[#629643] text-black' : 'bg-red-500 text-black' }}"
                                onclick="return confirm('{{ $usuario->suspenso ? 'Reativar este usuário?' : 'Suspender este usuário?' }}')">
                                {{ $usuario->suspenso ? 'Reativar' : 'Suspender' }}
                            </button>
                        </form>

                        <form action="{{ route('admin.usuarios.excluir', $usuario->id) }}" method="post">
                            @method('delete')
                            @csrf
                            <button type="submit" onclick="return confirm('Deseja realmente excluir este usuário?')">
                                <img src="{{ asset('assets/img/trash-can.png') }}" width="20" />
                            </button>
                        </form>
                    </div>
                </div>
            @empty
                <div class="text-center text-slate-400">
                    <p>Nenhum usuário cadastrado</p>
                </div>
            @endforelse

            <div class="flex justify-center items-center gap-1.5 mt-6">
                {{ $usuarios->links() }}
            </div>
        </div>
    </div>
@endsection
