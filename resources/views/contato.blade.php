@extends('layouts.site')

@section('conteudo')
    <div class=" bg-gradient-to-r from-sky-800 to-slate-950 min-h-44 " src="assets/img/pexels-zen-chung-5745183.jpg">
        <h1 id="tituloBanner">ENTRE EM <strong>CONTATO</strong> CONOSCO</h1>
        <p class="text-white m-0 text-center">Dúvidas, reclamações, sugestões etc.</p>
    </div>
    <div class="flex justify-center items-center">



        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm rounded-l-lg">

                    <div class="p-6 overflow-x-auto">

                        <form action="#" method="POST">
                            <div class="mb-5">
                                <h1>ENTRE EM CONTATO</h1>
                                <p>Preencha o formulário e a equipe do Todos Por Um entrara em contato brevemente com você.
                                </p>
                            </div>
                            <div class="mb-5">
                                <label for="nome" class="form-label">Nome Completo</label>
                                <input type="text" name="nome" id="nome" class="form-control">
                            </div>

                            <div class="mb-5">
                                <label for="email" class="form-label">E-mail</label>
                                <input type="email" name="email" id="emial" class="form-control">
                            </div>

                            <div class="mb-5">
                                <label for="selecionar" class="form-label">Motivo do Contato</label>
                                <select name="selecionar" id="selecionar" class="form-control">
                                    <option value="1">Selecione...</option>
                                    <option value="2">Reclamações</option>
                                    <option value="3">Dúvidas</option>
                                    <option value="4">Problema no Login</option>
                                    <option value="5">Reportar erro no site</option>
                                    <option value="6">Atualização/Correção de dados pessoais</option>
                                    <option value="7">Sugestão de melhoria</option>
                                </select>
                            </div>

                            <div mb-5>
                                <label for="descricao" class="form-label">Descrição</label>
                                <textarea name="descricao" id="descricao" rows="7" cols="30" class="form-control"></textarea>
                            </div>

                            <div>
                                <button type="reset"
                                    class="bg-[#629643] text-white border rounded-lg py-1 px-2">Limpar</button>
                                <button type="submit"
                                    class="bg-[#629643] text-white border rounded-lg py-1 px-2">Enviar</button>
                            </div>
                        </form>
                    </div>


                </div>
            </div>
        </div>







        {{-- <div class="bg-white  min-h-44  p-8   rounded-l-2xl ">
            <form>
                <h2>ENTRE EM CONTATO</h2>
                <p>
                    Preencha o formulário e a equipe do Todos Por Um entrara em
                    contato brevemente com você.
                </p>

                <label for="nome" class="campo">Nome completo</label><br />
                <input type="text" name="nome" id="nome" class="bg-[#ebf2fa] border-none rounded p-2"
                    placeholder="Digite aqui..." />
                <br />
                <br />

                <label for="email" class="campo">E-mail</label><br />
                <input type="email" name="email" id="email" class="bg-[#ebf2fa] border-none rounded p-2"
                    placeholder="Digite aqui..." />
                <br />
                <br />
                <label for="contatar" class="campo">Motivo do contato</label><br />
                <select name="motivo" id="motivo" class="bg-[#ebf2fa] border-none rounded p-2">
                    <option id="selecione">Selecione...</option>
                    <option>Reclamações</option>
                    <option>Dúvidas</option>
                    <option>Problema no Login</option>
                    <option>Reportar erro no site</option>
                    <option>Atualização/Correção de dados pessoais</option>
                    <option>Sugestão de melhoria</option>
                </select>
                <br />
                <br />

                <label for="descricao" class="campo">Descrição</label><br />
                <textarea name="descricao" id="descricao" class="bg-[#ebf2fa] border-none rounded-md p-2" rows="10" cols="40"
                    placeholder="Digite aqui..."></textarea>

                <br /><br />
                <button class="bg-[#629643] text-white border-none rounded pt-1 pb-2 cursor-pointer"
                    type="reset">Limpar</button>
                <button class="bg-[#629643] text-white border-none rounded pt-1 pb-2 cursor-pointer"
                    type="submit">Enviar</button>
            </form>
        </div>

        <div class="bg-[#05668d] max-w-96 min-h-96 p-7 text-center text-white rounded-r-2xl">
            <p id="mb-7">
                Você também pode entrar em contato <br />com a equipe Todos Por Um
                por meio <br />de uma de nossas redes de <br />comunicação:
            </p>

            <section class="bg-[#427aa1] flex text-start gap-7 pt-2 pb-5 mb-7 items-center rounded-xl">
                <div>
                    <img src="assets/img/telephone-call.png" alt="Telefone" width="30" />
                </div>
                <p>Telefone: <br />(14) 00000-0000</p>
            </section>

            <section class="bg-[#427aa1] flex text-start gap-7 pt-2 pb-5 mb-7 items-center rounded-xl">
                <img src="assets/img/email.png" alt="E-mail" width="30" />
                <p>
                    E-mail: <br />
                    todosporum@gmail.com
                </p>
            </section>

            <hr class="mt-16 mb-5" />
            <p>Nossas redes sociais:</p>
            <div class="flex justify-center items-center mt-5 gap-5 ">
                <img src="assets/img/youtube-circle.png" alt="Ícone Youtube" width="30" />
                <img src="assets/img/twitter-alt-circle.png" alt="Ícone Twitter" width="30" />
                <img src="assets/img/whatsapp-circle.png" alt="Ícone Whatsapp" width="30" />
                <img src="assets/img/facebook (1).png" alt="Ícone Facebook" width="30" />
                <img src="assets/img/instagram-circle.png" alt="Ícone Instagram" width="30" />
            </div>
        </div>
    </div> --}}
    @endsection
