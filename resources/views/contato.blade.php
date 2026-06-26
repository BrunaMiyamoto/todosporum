@extends('layouts.site')

@section('conteudo')
    <div class=" bg-gradient-to-r from-sky-800 to-slate-900 min-h-72 font-bold " img
        src="assets/img/pexels-zen-chung-5745183.jpg">
        <h1 class="text-white m-0 text-center pt-28 text-[25px]">ENTRE EM <strong class="text-[#e9702a]">CONTATO</strong>
            CONOSCO</h1>
        <p class="text-white m-0 text-center text-[15px]">Dúvidas, reclamações, sugestões etc.</p>
    </div>
    <div class="flex justify-center items-center">



        <div class="py-12 ">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 flex  justify-center items-center  m-16">
                <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm rounded-l-lg flex  ">

                    <div class="p-6  ">

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
                                <input type="email" name="email" id="email" class="form-control">
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
                                <textarea name="descricao" id="descricao" rows="11" cols="30" class="form-control"></textarea>
                            </div>

                            <div>
                                <button type="reset"
                                    class="bg-[#629643] text-white border rounded-lg py-1 px-2">Limpar</button>
                                <button type="submit"
                                    class="bg-[#629643] text-white border rounded-lg py-1 px-2">Enviar</button>
                            </div>
                        </form>

                    </div>

                    <div class="bg-[#05668d] dark:bg-gray-800 overflow-hidden shadow-sm rounded-r-lg text-white max-w-96 ">
                        <div class="p-6  ">

                            <div class="text-center mb-7">
                                <p>Você também pode entrar em contato com a equipe Todos Por Um por meio de uma de nossas
                                    redes
                                    de comunicação:</p>
                            </div>
                            <div class="bg-[#427aa1] flex text-start gap-7 py-3 px-5 mb-7  items-center rounded-md">
                                <img src="assets/img/telephone-call.png" alt="Telefone" width="30">
                                <div>
                                    <label for="telefone">Telefone</label>
                                    <p>(14) 0000-0000</p>
                                </div>


                            </div>

                            <div class="bg-[#427aa1] flex text-start gap-7 py-3 px-5 mb-7  items-center rounded-md ">
                                <img src="assets/img/email.png" alt="email" width="30">
                                <div>
                                    <label for="email" class="">E-mail</label>
                                    <p>todosporum@gmail.com</p>
                                </div>

                            </div>
                            <hr class="mt-16 mb-5 " />
                            <div>
                                <p class="text-center">Nossas redes sociais:</p>
                                <div class="flex items-center justify-center mt-5 gap-5">
                                    <img src="assets/img/youtube-circle.png" alt="YouTube" width="30">
                                    <img src="assets/img/twitter-alt-circle.png" alt="Twitter" width="30">
                                    <img src="assets/img/whatsapp-circle.png" alt="Whatsapp" width="30">
                                    <img src="assets/img/facebook (1).png" alt="Facebook" width="30">
                                    <img src="assets/img/instagram-circle.png" alt="Instagram" width="30">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>




            </div>
        </div>
    @endsection
