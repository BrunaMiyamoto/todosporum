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

            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg py-10 px-20">

                <p class="font-extrabold text-xl pb-3">SUA CONTA</p>
                <p class="border-t-2"></p>

                <div class="pt-6 grid">
                    <label for="fotoperfil">Sua foto de perfil:</label>
                    <input class="" type="file" name="fotoperfil" id="fotoperfil" placeholder="Digite aqui.." />
                </div>
                <a href="#" class="bg-[#629643] text-white p-1 rounded-md">Remover foto</a>

                @foreach ($perfil as $per)
                    <div class="pt-5 grid">
                        <label for="nome" class="text-[#05668d] font-bold text-sm">Nome Completo*:</label>
                        <input class="bg-[#ebf2fa] border-none rounded-2xl text-[#333333] " type="text" name="nome"
                            id="nome" placeholder="{{ $per->nome }}" />
                    </div>
                    <div class="flex grid-cols-2 gap-4 py-6">

                        <div>

                            <div class="grid">
                                <label for="genero" class="text-[#05668d] font-bold text-sm">Gênero:</label>
                                <select name="genero" id="genero"
                                    class="bg-[#ebf2fa] border-none rounded-2xl text-[#333333] ">
                                    <option value="">Selecione...</option>
                                    <option value="">Masculino</option>
                                    <option value="">Feminino</option>
                                    <option value="">Prefiro não me identificar</option>
                                </select>
                            </div>

                            <div class="grid">
                                <label for="nomesocial" class="text-[#05668d] font-bold text-sm">Nome Social:</label>
                                <input type="text" name="nomesocial" id="nomesocial" placeholder="Digite aqui.."
                                    class="bg-[#ebf2fa] border-none rounded-2xl text-[#333333] " />
                            </div>
                            <div class="grid">
                                <label for="nascimento" class="text-[#05668d] font-bold text-sm">Data de Nascimento:</label>
                                <input type="text" name="nascimento" id="nascimento" placeholder="{{ $per->dt_nasc }}"
                                    class="bg-[#ebf2fa] border-none rounded-2xl text-[#333333] " />
                            </div>

                        </div>
                        <div>
                            <div class="grid">
                                <label for="email" class="text-[#05668d] font-bold text-sm">Email*:</label>
                                <input type="email" name="email" id="email" placeholder="{{ $per->email }}"
                                    class="bg-[#ebf2fa] border-none rounded-2xl text-[#333333] " />
                            </div>
                            <div class="grid">
                                <label for="contato" class="text-[#05668d] font-bold text-sm">Numero de telefone*:</label>
                                <input type="number" name="contato" id="contato" placeholder="Digite aqui.."
                                    onchange="
                        if (parseFloat (contato.value) <= 10) {
                            alert('contato inválido'); 
                            contato.value= ' '; 
                            }
                        "class="bg-[#ebf2fa] border-none rounded-2xl text-[#333333] " />
                            </div>
                            <div class="grid">
                                <label for="cpf" class="text-[#05668d] font-bold text-sm">CPF:</label>
                                <input type="text" name="cpf" id="cpf" placeholder="{{ $per->cpf }}"
                                    class="bg-[#ebf2fa] border-none rounded-2xl text-[#333333] " />
                            </div>
                        </div>
                    </div>
                    <fieldset class="border-2 p-5">
                        <legend>DADOS DE ENDEREÇO</legend>
                        <div class=" flex grid-cols-2 gap-4">
                            <div>
                                <div class="grid">
                                    <label for="rua" class="text-[#05668d] font-bold text-sm">Rua:</label>
                                    <input type="text" name="rua" id="rua"
                                        placeholder="{{ $per->rua }}"
                                        class="bg-[#ebf2fa] border-none rounded-2xl
                                        text-[#333333] " />
                                </div>
                                <div class="grid">
                                    <label for="bairro" class="text-[#05668d] font-bold text-sm">Bairro:</label>
                                    <input type="text" name="bairro" id="bairro"
                                        placeholder="{{ $per->bairro }}"
                                        class="bg-[#ebf2fa] border-none rounded-2xl text-[#333333] " />
                                </div>
                            </div>
                            <div>

                                <div class="grid">
                                    <label for="numero" class="text-[#05668d] font-bold text-sm">Numero:</label>
                                    <input type="text" name="numero" id="numero"placeholder="{{ $per->numero }}"
                                        class="bg-[#ebf2fa] border-none rounded-2xl text-[#333333] " />
                                </div>

                                <div class="grid">
                                    <label for="cep" class="text-[#05668d] font-bold text-sm">CEP:</label>
                                    <input type="text" name="cep" id="cepo"
                                        placeholder="{{ $per->cep }}"
                                        class="bg-[#ebf2fa]
                                        border-none rounded-2xl text-[#333333] " />
                                </div>
                            </div>
                        </div>
                    </fieldset>

                    <fieldset class="border-2 p-5">
                        <legend>DADOS DO PERFIL</legend>
                        <div class="formulario flex gap-4">

                            <div>
                                <label for="senha" class="text-[#05668d] font-bold text-sm">Senha*:</label>
                                <input type="password" name="senha" id="senha" placeholder="Digite aqui.."
                                    class="bg-[#ebf2fa] border-none rounded-2xl text-[#333333] " />
                            </div>
                            <div>
                                <label for="confirmarsenha" class="text-[#05668d] font-bold text-sm">Confirme sua
                                    senha*:</label>
                                <input type="password" name="confirmarsenha" id="confirmarsenha"
                                    placeholder="Digite aqui.."
                                    class="bg-[#ebf2fa] border-none rounded-2xl text-[#333333] " />
                            </div>
                        </div>
                    </fieldset>

                    <div class="p-5">
                        <a href="#" class="bg-[#629643] text-white p-2 rounded-md">Salvar Alterações</a>
                    </div>


            </div>
            @endforeach
        </div>
        </div>
    </x-app-layout>
@endsection
