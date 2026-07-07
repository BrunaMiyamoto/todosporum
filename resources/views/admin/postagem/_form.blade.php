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

      <div class="flex justify-between">
          <p class="font-extrabold text-xl pb-3">SUA PUBLICAÇÃO</p>
          <a href="{{ route('admin.postagem.index') }}" class="text-[#333333] underline p-2 mb-1 rounded-md">Voltar</a>
      </div>

      <p class="border-t border-slate-500 "></p>


      <div class=" py-3 grid">

          <label for="categorias" class="text-[#05668d] font-bold text-sm pb-3">Categoria (Projeto, reclamação ou
              dúvida):</label>
          <input type="text" name="categorias" id="categorias"
              class="bg-[#ebf2fa] border-none rounded-2xl text-[#333333] p-2" value="{{ $postagens->categorias }}" />
      </div>

      <div class="py-3 grid">
          <label for="titulo" class="text-[#05668d] font-bold text-sm  pb-3">Titulo*:</label>
          <input class="bg-[#ebf2fa] border-none rounded-2xl text-[#333333] p-2" type="text" name="titulo"
              id="titulo" value="{{ $postagens->titulo }}" />
      </div>


      <div class="py-5 grid">
          <label for="conteudo" class="text-[#05668d] font-bold text-sm  pb-3">Conteudo:</label>
          <textarea class="bg-[#ebf2fa] border-none rounded-md text-[#333333] " name="conteudo" id="conteudo" rows="3">{{ $postagens->conteudo }}</textarea>
      </div>

      <div class="py-3 flex justify-end items-center gap-2">
          <div> <button type="submit" class="bg-[#629643] text-white p-2 rounded-md ">Salvar</a></div>
          <div><a href="{{ route('admin.postagem.index') }}"
                  class="bg-[#629643] text-white p-2 rounded-md block">Cancelar</a></div>
      </div>



  </div>
