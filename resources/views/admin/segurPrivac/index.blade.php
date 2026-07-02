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
                <p class="font-extrabold text-xl pb-3">SEGURANÇA E PRIVACIDADE</p>
                <p class="border-t border-slate-500 pb-5"></p>
                <p>Navegaçao pública</p>


                <label>Aninomato</label>
                <input type="checkbox" name="anonimato" id="anonimato" />

                <p class="pb-5 text-[#797883] text-sm">
                    Sua conta será definida como privada e seu nome será substituído por
                    um identificador genérico. Você ainda poderá gerenciar suas
                    postagens e interagir nos comentários de outros usuários.
                </p>


                <p class="border-t border-slate-500 "></p>
                <div>

                    <p class="py-4">Políticas e Termos de Uso</p>
                    <br />
                    <p class=" text-[#797883] text-sm">
                        <strong><a href="#" class="underline">Políticas</a> e
                            <a href="#" class="underline">Termos de Uso.</a></strong>
                        Nosso compromisso é garantir uma experiência segura, ética e
                        alinhada aos princípios de respeito, integridade e cooperação que
                        norteiam o Todos por Um. Recomendamos que leia atentamente todas
                        as disposições abaixo para compreender as regras que orientam o
                        uso de nossos recursos e a proteção de suas informações.
                    </p>
                    <br />
                    <p class=" text-[#797883] text-sm">
                        Ao acessar ou utilizar nossa plataforma, você declara estar ciente
                        e de acordo com estes Termos e Políticas. Caso tenha dúvidas,
                        nossa equipe está disponível para esclarecimentos por meio dos
                        canais de contato oficiais.
                    </p>
                </div>
            </div>
        </div>

        </div>
    </x-app-layout>
@endsection
