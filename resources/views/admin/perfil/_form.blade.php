  @if ($errors->any())

      <div class="mb-10 text-[#e9702a]">
          <p class="font-bold">Verifique os erros abaixo:</p>
          <ul>
              @foreach ($errors->all() as $erro)
                  <li>{{ $erro }}</li>
              @endforeach
          </ul>
      </div>

  @endif

  <div
      class="bg-white overflow-hidden shadow-[0px_0px_6px_rgba(0,0,0,0.5)] rounded-lg sm:rounded-lg py-10 px-14 mx-auto ">
      <div>
          <p class="font-extrabold text-xl pb-3">EDITE SEU PERFIL</p>
          <p class="border-t border-slate-500 "></p>

          <div class="items-center">

              <div class="py-6 grid">
                  <label for="imagem" class="pb-2">Sua foto de perfil:</label>

                  @if ($perfil?->imagem)
                      <div class="mb-3">
                          <img src="{{ asset('storage/' . $perfil->imagem) }}"
                              class="h-32 w-32 object-cover border-slate-200 rounded-full" />
                      </div>
                  @endif

                  <input class="" type="file" name="imagem" id="imagem" accept="image/*" checked />
                  <p>JPG e PNG (Máximo 2MB)</p>

              </div>

              {{-- <div>

                  <a href="#" class="bg-[#629643] text-white py-1 rounded-md px-3 ">Remover</a>
              </div> --}}
          </div>

          <div class="pt-5 grid">

              <p class="pb-4">Suas informações Públicas:</p>
              <label for="nome_usuario" class="text-[#05668d] font-bold text-sm">Nome de usuário:</label>
              <input class="bg-[#ebf2fa] border-none rounded-md text-[#333333] " type="text" name="nome_usuario"
                  id="nome_usuario" value="{{ $perfil->nome_usuario }}" />
          </div>
          <div class="py-5 grid">
              <label for="descricao" class="text-[#05668d] font-bold text-sm">Descrição:</label>
              <textarea class="bg-[#ebf2fa] border-none rounded-md text-[#333333] " name="descricao" id="descricao" rows="3">{{ $perfil->descricao }}</textarea>
          </div>
      </div>



      <p class="font-extrabold text-xl pb-3">EDITE SEUS DADOS</p>
      <p class="border-t border-slate-500 "></p>


      <div class="pt-5 grid">
          <label for="nome" class="text-[#05668d] font-bold text-sm">Nome Completo*:</label>
          <input class="bg-[#ebf2fa] border-none rounded-2xl text-[#333333] p-2.5" type="text" name="nome"
              id="nome" value="{{ $perfil->nome }}" />
      </div>
      <div class="grid grid-cols-1 gap-6 sm:grid-cols-2 ">

          <div>

              <div class="grid pb-3 ">
                  <label for="genero" class="text-[#05668d] font-bold text-sm">Gênero:</label>
                  <select name="genero" id="genero"
                      class="bg-[#ebf2fa] border-none rounded-2xl text-[#333333] p-2.5">
                      <option value="">Selecione...</option>
                      <option {{ old("genero, $perfil->genero") }} value="Masculino">Masculino</option>
                      <option {{ old("genero, $perfil->genero") }} value="Feminino">Feminino</option>
                      <option {{ old("genero, $perfil->genero") }} value="Não informado">Prefiro não me identificar
                      </option>


                  </select>
              </div>

              <div class="grid pb-3">
                  <label for="nome_social" class="text-[#05668d] font-bold text-sm">Nome Social:</label>
                  <input type="text" name="nome_social" id="nome_social" placeholder="Digite aqui.."
                      class="bg-[#ebf2fa] border-none rounded-2xl text-[#333333] p-2.5"
                      value="{{ $perfil->nome_social }}" />
              </div>
              <div class="grid pb-3">
                  <label for="dt_nasc" class="text-[#05668d] font-bold text-sm">Data de
                      Nascimento:</label>
                  <p name="dt_nasc" id="dt_nasc" class="bg-[#ebf2fa] border-none rounded-2xl p-2.5 text-slate-500 ">
                      {{ $perfil->dt_nasc }}</p>
              </div>

          </div>
          <div>
              <div class="grid pb-3">
                  <label for="email" class="text-[#05668d] font-bold text-sm">Email*:</label>
                  <p name="email" id="email" class="bg-[#ebf2fa] border-none rounded-2xl p-2.5 text-slate-500 ">
                      {{ $perfil->email }}</p>
              </div>
              <div class="grid pb-3">
                  <label for="contato" class="text-[#05668d] font-bold text-sm">Numero de
                      telefone*:</label>
                  <input type="text" name="contato" id="contato" placeholder="Digite aqui.."
                      value="{{ $perfil->contato }}"
                      class="
                        bg-[#ebf2fa] border-none rounded-2xl text-[#333333] p-2.5" />
              </div>
              <div class="grid pb-3">
                  <label for="cpf" class="text-[#05668d] font-bold text-sm">CPF:</label>
                  <p name="cpf" id="cpf" class="bg-[#ebf2fa] border-none rounded-2xl p-2.5 text-slate-500">
                      {{ $perfil->cpf }}</p>
              </div>
          </div>
      </div>
      <fieldset class="border border-slate-500 p-5 my-6">
          <legend>DADOS DE ENDEREÇO</legend>
          <div class=" grid grid-cols-1 gap-6 sm:grid-cols-2 ">
              <div>
                  <div class="grid pb-3">
                      <label for="rua" class="text-[#05668d] font-bold text-sm">Rua:</label>
                      <input type="text" name="rua" id="rua" placeholder="Digite aqui.."
                          value="{{ $perfil->rua }}"
                          class="bg-[#ebf2fa] border-none
                        rounded-2xl text-[#333333] py-2.5" />
                  </div>
                  <div class="grid pb-3">
                      <label for="bairro" class="text-[#05668d] font-bold text-sm">Bairro:</label>
                      <input type="text" name="bairro" id="bairro" placeholder="Digite aqui.."
                          value="{{ $perfil->bairro }}"
                          class="bg-[#ebf2fa] border-none rounded-2xl text-[#333333] py-2.5" />
                  </div>
              </div>
              <div>

                  <div class="grid pb-3">
                      <label for="numero" class="text-[#05668d] font-bold text-sm">Numero:</label>
                      <input type="text" name="numero" id="numero" placeholder="Digite aqui.."
                          value="{{ $perfil->numero }}"
                          class="bg-[#ebf2fa] border-none rounded-2xl text-[#333333] py-2.5" />
                  </div>

                  <div class="grid pb-3">
                      <label for="cep" class="text-[#05668d] font-bold text-sm">CEP:</label>
                      <input type="text" name="cep" id="cepo" placeholder="Digite aqui.."
                          value="{{ $perfil->cep }}"
                          class="bg-[#ebf2fa]
                                        border-none rounded-2xl text-[#333333] py-2.5" />
                  </div>
              </div>
          </div>
      </fieldset>

      <div class="py-5 flex justify-end items-center gap-2">
          <div> <button type="submit" class="bg-[#629643] text-white p-2 rounded-md ">Salvar</a></div>
          <div><a href="{{ route('admin.perfil.index') }}"
                  class="bg-[#629643] text-white p-2 rounded-md block">Cancelar</a></div>
      </div>


  </div>
