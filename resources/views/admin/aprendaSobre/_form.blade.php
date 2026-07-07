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
      class="bg-white overflow-hidden shadow-[0px_0px_6px_rgba(0,0,0,0.5)] rounded-lg sm:rounded-lg py-10 px-14 mx-auto">

      <div class="flex justify-between">
          <p class="font-extrabold text-xl pb-3">PUBLICAÇÃO</p>
          <a href="{{ route('admin.aprendaSobre.index') }}"
              class="text-[#333333] underline p-2 mb-1 rounded-md">Voltar</a>
      </div>

      <p class="border-t border-slate-500 "></p>

      <div class="py-6 grid">


          <div class="grid">
              <label for="imagem" class="pb-2 text-[#05668d] font-bold text-sm">Capa:</label>
              <div class="grid">


                  <input type="file" name="imagem" id="imagem" accept="image/*" checked
                      class="file:mr-4 file:rounded-md file:border-0 file:bg-[#629643] file:px-4 file:py-2 file:text-sm file:font-semibold file:text-white" />
                  <p class="pt-2">Imagens - JPG e PNG (Máximo 2MB)</p>


                  @if ($aprendaPost?->imagem)
                      <div class="mb-3">
                          <img src="{{ asset('storage/' . $aprendaPost->imagem) }}"
                              class="h-60 w-60 object-cover border-slate-200" />
                      </div>
                  @endif

              </div>
              <div class="grid">
                  <label for="imagem" class="pb-2 text-[#05668d] font-bold text-sm">Video:</label>
                  <input
                      class="file:mr-4 file:rounded-md file:border-0 file:bg-[#629643] file:px-4 file:py-2 file:text-sm file:font-semibold file:text-white"
                      type="file" name="videos" id="videos" accept="video/*" checked />
                  <p class="pt-2">Videos - MP4 e MOV (Máximo 20MB)</p>

                  @if ($aprendaPost?->videos)
                      <div class="mb-3">
                          <video controls height="128" width="128">
                              <source src="{{ asset('storage/' . $aprendaPost->videos) }}" type="video/mp4">

                          </video>
                      </div>
                  @endif
              </div>
          </div>
      </div>

      <div class=" py-3 grid">

          <label for="tipo" class="text-[#05668d] font-bold text-sm pb-3">Tipo (Artigo ou Video):</label>
          <input type="text" name="tipo" id="tipo"
              class="bg-[#ebf2fa] border-none rounded-2xl text-[#333333] p-2" value="{{ $aprendaPost->tipo }}" />
      </div>

      <div class="py-3 grid">
          <label for="titulo" class="text-[#05668d] font-bold text-sm  pb-3">Titulo*:</label>
          <input class="bg-[#ebf2fa] border-none rounded-2xl text-[#333333] p-2" type="text" name="titulo"
              id="titulo" value="{{ $aprendaPost->titulo }}" />
      </div>

      <div class="grid py-3">
          <label for="autor" class="text-[#05668d] font-bold text-sm  pb-3">Autor:</label>
          <input type="text" name="autor" id="autor"
              class="bg-[#ebf2fa] border-none rounded-2xl text-[#333333] p-2" value="{{ $aprendaPost->autor }}" />
      </div>

      <div class="py-5 grid">
          <label for="reusumo" class="text-[#05668d] font-bold text-sm  pb-3">Resumo:</label>
          <textarea class="bg-[#ebf2fa] border-none rounded-md text-[#333333] " name="resumo" id="resumo" rows="3">{{ $aprendaPost->resumo }}</textarea>
      </div>

      <div class="py-5 grid">
          <label for="conteudo" class="text-[#05668d] font-bold text-sm  pb-3">Conteudo:</label>
          <textarea class="bg-[#ebf2fa] border-none rounded-md text-[#333333] " name="conteudo" id="conteudo" rows="3">{{ $aprendaPost->conteudo }}</textarea>
      </div>

      <div class="py-3 flex justify-end items-center gap-2">
          <div> <button type="submit" class="bg-[#629643] text-white p-2 rounded-md ">Salvar</a></div>
          <div><a href="{{ route('admin.aprendaSobre.index') }}"
                  class="bg-[#629643] text-white p-2 rounded-md block">Cancelar</a></div>
      </div>



  </div>
