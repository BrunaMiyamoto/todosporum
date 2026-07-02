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

            <div class="bg-white overflow-hidden shadow-2xl sm:rounded-md py-10 px-14 w-full">
                <form action="#" method="post">
                    <p class="font-extrabold text-xl pb-3">SEU PERFIL</p>
                    <p class="border-t border-slate-500 "></p>

                    <div class="items-center">

                        <div class="py-6 grid">
                            <label for="fotoperfil" class="pb-2">Sua foto de perfil:</label>
                            <input class="" type="file" name="fotoperfil" id="fotoperfil" checked />

                        </div>

                        <div>

                            <a href="#" class="bg-[#629643] text-white py-1 rounded-md px-3 ">Remover</a>
                        </div>
                    </div>

                    <div class="pt-5 grid">
                        <p class="border-t border-slate-500 pb-3"></p>
                        <p>Suas informações Públicas:</p>
                        <label for="nomeusuario" class="text-[#05668d] font-bold text-sm">Nome de usuário:</label>
                        <input class="bg-[#ebf2fa] border-none rounded-md text-[#333333] " type="text" name="nomeusuario"
                            id="nomeusuario" />
                    </div>
                    <div class="pt-5 grid">
                        <label for="descricao" class="text-[#05668d] font-bold text-sm">Descrição:</label>
                        <textarea class="bg-[#ebf2fa] border-none rounded-md text-[#333333] " name="descricao" id="descricao" rows="7"></textarea>
                    </div>
                </form>

    </x-app-layout>
@endsection
