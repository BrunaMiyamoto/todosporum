@extends('layouts.site')

@section('conteudo')
    <div class="flex gap-5 max-w-7xl m-auto font-sans">
        <div class="relative ">
            <img src="assets/img/conceito-de-diversidade-com-as-maos.jpg" alt="Imagem de mão unidas"
                class="min-h-full min-w-[640px]" />
            <div class="absolute inset-0 bg-gradient-to-r from-sky-900 to-slate-500 mix-blend-multiply">

            </div>
        </div>
        <div class="p-5 m-4  min-w-[640px]">
            <h1 class="text-[#e9702a] font-bold text-2xl border-b-2 border-[#e9702a] ">FAÇA SEU CADASTRO</h1>

            <div id="paragrafo1" class="py-5 text-sm ">
                Preencha os dados abaixo para criar sua conta no nosso site. Campos
                marcados com (*) são obrigatórios. Suas informações são confidenciais
                e poderão ser vistas apenas por você e pela equipe Todos Por Um.
            </div>
            <form action="{{ route('cadastro') }}" method="POST">

                @csrf
                <h2 class="text-[#e9702a] font-bold text-2xl pb-5 ">DADOS PESSOAIS</h2>
                <div class="flex gap-9 ">
                    <div class="">

                        <div class="grid">
                            <label for="nome" class="text-[#e9702a] font-bold">Nome Completo*:</label>
                            <input type="text" name="nome" id="nome" placeholder="Digite aqui.."
                                class="border-solid border-[1px] border-[#ccc] rounded-xl shadow-[0px_0px_10px_rgba(0,0,0,0.4)] bg-[#ebf2fa] my-5" />
                        </div>
                        <div class="grid">
                            <label for="nomesocial" class="text-[#e9702a] font-bold">Nome Social:</label>
                            <input type="text" name="nomesocial" id="nomesocial" placeholder="Digite aqui.."
                                class="border-solid border-[1px] border-[#ccc] rounded-xl shadow-[0px_0px_10px_rgba(0,0,0,0.4)] bg-[#ebf2fa] my-5" />
                        </div>

                        <div class="grid">
                            <label for="email" class="text-[#e9702a] font-bold">Email*:</label>
                            <input type="email" name="email" id="email" placeholder="Digite aqui.."
                                class="border-solid border-[1px] border-[#ccc] rounded-xl shadow-[0px_0px_10px_rgba(0,0,0,0.4)] bg-[#ebf2fa] my-5" />
                        </div>
                    </div>
                    <div>
                        <div class="grid">
                            <label for="contato" class="text-[#e9702a] font-bold">Numero de telefone*:</label>
                            <input type="number" name="contato" id="contato" placeholder="Digite aqui.."
                                class="border-solid border-[1px] border-[#ccc] rounded-xl shadow-[0px_0px_10px_rgba(0,0,0,0.4)] bg-[#ebf2fa] my-5" />
                        </div>
                        <div class="grid">
                            <label for="dt_nasc" class="text-[#e9702a] font-bold">Data de Nascimento*:</label>
                            <input type="date" name="dt_nasc" id="dt_nasc" placeholder="Digite aqui.."
                                class="border-solid border-[1px] border-[#ccc] rounded-xl shadow-[0px_0px_10px_rgba(0,0,0,0.4)] bg-[#ebf2fa] my-5" />
                        </div>
                        <div class="grid">
                            <label for="cpf" class="text-[#e9702a] font-bold">CPF*:</label>
                            <input type="text" name="cpf" id="cpf" placeholder="Digite aqui.."
                                class="border-solid border-[1px] border-[#ccc] rounded-xl shadow-[0px_0px_10px_rgba(0,0,0,0.4)] bg-[#ebf2fa] my-5" />
                        </div>
                    </div>



                </div>
                <fieldset class="border-solid border-[1px] border-[#ccc] rounded-xl p-6">
                    <legend>DADOS DO PERFIL</legend>
                    <div class="flex">

                        <div>
                            <label for="password" class="text-[#e9702a] font-bold">Senha*:</label>
                            <input type="password" name="password" id="password" placeholder="Digite aqui.."
                                class="border-solid border-[1px] border-[#ccc] rounded-xl shadow-[0px_0px_10px_rgba(0,0,0,0.4)] bg-[#ebf2fa] my-5" />
                        </div>
                        <div>
                            <label for="password_confirm" class="text-[#e9702a] font-bold">Confirme sua senha*:</label>
                            <input type="password" name="password_confirm" id="password_confirm" placeholder="Digite aqui.."
                                class="border-solid border-[1px] border-[#ccc] rounded-xl shadow-[0px_0px_10px_rgba(0,0,0,0.4)] bg-[#ebf2fa] my-5" />
                        </div>
                    </div>
                </fieldset>
                <div class="py-5 ">
                    <div class="py-2">
                        <input type="checkbox" name="aceite[]" id="aceite" value="aceite" class="rounded-sm" />
                        <label for="aceite">
                            Eu concordo em compartilhar meus dados com a
                            equipe Todos Por Um.</label>
                    </div>
                    <div class="py-2">
                        <input type="checkbox" name="aceite2[]" id="aceite2" value="aceite2" class="rounded-sm" />
                        <label for="aceite2">
                            Eu li e concondo com os Termos de Serviço da comunidade.</label>

                    </div>

                    <div id="registro" class="py-4">
                        <div>
                            <a href="{{ route('login') }}">Já tem uma conta? <u>Faça login.</u></a>
                        </div>
                    </div>
                </div>
                <div class="flex gap-7 justify-end">
                    <button type="reset" name="limpar" id="limpar"
                        class="bg-[#629643] text-white py-1.5 px-5 rounded-lg">Limpar</button>
                    <button type="submit" name="criarconta" id="criarconta"
                        class="bg-[#629643] text-white py-1.5 px-5 rounded-lg">
                        Criar minha conta
                    </button>
                </div>
            </form>
        </div>

    </div>
@endsection
