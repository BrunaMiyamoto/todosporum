{{-- @dd($aprendaPost) --}}

@extends('layouts.site')

@section('conteudo')
    <x-app-layout>


        <div class="py-12 flex max-w-7xl justify-center  gap-9 mx-auto sm:px-6 lg:px-8">

            <div class="">
                <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg min-w-2 px-4">

                    <div id="blocos" class="flex py-4 px-6">
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
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-2xl sm:rounded-md py-10 px-14 w-full">
                <p class="font-extrabold text-xl pb-3">ACESSIBILIDADE</p>
                <p class="border-t border-slate-500 pb-5"></p>
                <p>Estilização de elementos</p>

                <div class="py-5">
                    <label for="tamanhofonte" class="text-[#05668d] font-bold text-sm">Tamanho da Fonte:</label>
                    <select name="tamanhofonte" id="tamanhofonte"
                        class="bg-[#ebf2fa] border-none rounded-md text-[#333333]">
                        <option value="">Selecione...</option>
                        <option value="">Pequeno</option>
                        <option value="">Médio</option>
                        <option value="">Grande</option>
                    </select>
                </div>

                <label>Modo Daltônico</label>
                <input type="checkbox" name="anonimato" id="anonimato" />


                <div class="py-6 flex justify-start">
                    <a href="#" class="bg-[#629643] text-white p-1.5 rounded-md">Salvar Alterações</a>
                </div>


            </div>


        </div>
    </x-app-layout>
@endsection
