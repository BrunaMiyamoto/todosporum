{{-- @dd($aprendaPost) --}}

@extends('layouts.site')

@section('conteudo')
    <x-app-layout>
        <div class=" bg-[#ebf2fa] pb-12 max-w-4xl text-sm grid grid-cols-1 px-8 sm:grid-cols-[auto_1fr] mx-auto gap-9">

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

            <form action="#" method="post" enctype="multipart/form-data">
                <div
                    class="bg-white overflow-hidden shadow-[0px_0px_6px_rgba(0,0,0,0.5)] rounded-lg sm:rounded-lg py-10 px-14 mx-auto">

                    @foreach ($perfil as $per)
                        <div>
                            <p class="font-extrabold text-xl pb-3">SEU PERFIL</p>
                            <p class="border-t border-slate-500 "></p>

                            <div class="items-center">

                                <div class="py-6 grid">
                                    <label for="imagem" class="pb-2">Sua foto de perfil:</label>
                                    <img src="{{ asset('storage/' . $per->imagem) }}"
                                        class="h-32 w-32 object-cover border-slate-200 rounded-full" />

                                </div>

                                {{-- <div>

                                    <a href="#" class="bg-[#629643] text-white py-1 rounded-md px-3 ">Remover</a>
                                </div> --}}
                            </div>

                            <div class="pt-5 grid">

                                <p class="pb-4">Suas informações Públicas:</p>
                                <label for="nome_usuario" class="text-[#05668d] font-bold text-sm">Nome de usuário:</label>
                                <p class=" text-[#333333] pt-2.5 " name="nome_usuario" id="nome_usuario">
                                    {{ $per->nome_usuario }}</p>
                            </div>
                            <div class="pt-5 pb-6 grid">
                                <label for="descricao" class="text-[#05668d] font-bold text-sm">Descrição:</label>
                                <p class=" text-[#333333] pt-2.5 " name="descricao" id="descricao">
                                    {{ $per->descricao }}</p>
                            </div>

                            <p class="font-extrabold text-xl pb-3">SEUS DADOS</p>
                            <p class="border-t border-slate-500 "></p>


                            <div class="py-5 grid">
                                <label for="nome" class="text-[#05668d] font-bold text-sm">Nome Completo:</label>
                                <p class=" text-[#333333] pt-2.5 " name="nome" id="nome">
                                    {{ $per->nome }}</p>
                            </div>
                            <div class="grid grid-cols-1  max-w-60 sm:grid-cols-2">

                                <div>

                                    <div class="grid ">
                                        <label for="genero" class="text-[#05668d] font-bold text-sm">Gênero:</label>
                                        <p class="text-[#333333] py-2.5 " name="genero" id="genero">
                                            {{ $per->genero }}</p>
                                    </div>

                                    <div class="grid">
                                        <label for="nomesocial" class="text-[#05668d] font-bold text-sm">Nome
                                            Social:</label>

                                        <p class="text-[#333333] py-2.5 " name="nomesocial" id="nomesocial">
                                            {{ $per->nome_social }}</p>
                                    </div>
                                    <div class="grid">
                                        <label for="nascimento" class="text-[#05668d] font-bold text-sm">Data de
                                            Nascimento:</label>
                                        <p class="text-[#333333] py-2.5 " name="nascimento" id="nascimento">
                                            {{ $per->dt_nasc }}</p>
                                    </div>
                                </div>
                                <div>
                                    <div class="grid">
                                        <label for="email" class="text-[#05668d] font-bold text-sm">Email*:</label>

                                        <p class="text-[#333333] py-2.5 " name="email" id="email">
                                            {{ $per->email }}</p>
                                    </div>
                                    <div class="grid">
                                        <label for="contato" class="text-[#05668d] font-bold text-sm">Numero de
                                            telefone*:</label>

                                        <p class="text-[#333333] py-2.5 " name="contato" id="contato">
                                            {{ $per->contato }}</p>
                                    </div>
                                    <div class="grid">
                                        <label for="cpf" class="text-[#05668d] font-bold text-sm">CPF:</label>
                                        <p class="text-[#333333] py-2.5 " name="cpf" id="cpf">
                                            {{ $per->cpf }}</p>
                                    </div>
                                </div>
                            </div>
                            <fieldset class="border border-slate-500 p-5 my-6">
                                <legend>DADOS DE ENDEREÇO</legend>
                                <div class="grid grid-cols-1 sm:grid-cols-2 ">
                                    <div>
                                        <div class="grid">
                                            <label for="rua" class="text-[#05668d] font-bold text-sm">Rua:</label>
                                            <p class="text-[#333333] py-2.5 " name="rua" id="rua">
                                                {{ $per->rua }}</p>
                                        </div>
                                        <div class="grid">
                                            <label for="bairro" class="text-[#05668d] font-bold text-sm">Bairro:</label>
                                            <p class="text-[#333333] py-2.5 " name="bairro" id="bairro">
                                                {{ $per->bairro }}</p>
                                        </div>
                                    </div>
                                    <div>

                                        <div class="grid">
                                            <label for="numero" class="text-[#05668d] font-bold text-sm">Numero:</label>
                                            <p class="text-[#333333] py-2.5 " name="numero" id="numero">
                                                {{ $per->numero }}</p>
                                        </div>

                                        <div class="grid">
                                            <label for="cep" class="text-[#05668d] font-bold text-sm">CEP:</label>
                                            <p class="text-[#333333] py-2.5 " name="cep" id="cep">
                                                {{ $per->cep }}</p>
                                        </div>
                                    </div>
                                </div>
                            </fieldset>

                            <div class="py-5 flex justify-end">
                                <a href="{{ route('admin.perfil.editar', $per->id) }}"
                                    class="bg-[#629643] text-white p-2 rounded-md">Editar</a>
                            </div>
                    @endforeach
                </div>

            </form>
        </div>
        </div>
    </x-app-layout>
@endsection
