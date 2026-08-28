@extends('layouts.site')

@section('conteudo')
    <div class="bg-white shadow-[0px_0px_6px_rgba(0,0,0,0.5)] max-w-80 rounded-md py-2 my-5 mx-auto">
        <ul class="flex justify-center gap-5 text-[#e9702a] font-semibold ">
            <li><a href="{{ route('forumProjetos') }}">Projetos</a></li>
            <li>
                <a href="{{ route('forumReclamacoes') }}">Reclamações</a>
            </li>
            <li>
                <a href="{{ route('forumDuvidas') }}">Dúvidas</a>
            </li>
        </ul>
    </div>

    <div class="max-w-7xl grid grid-cols-1 sm:grid-cols-[auto_1fr] py-10 gap-7 px-8 mx-auto ">
        <div class="bg-white rounded-lg shadow-[0px_0px_6px_rgba(0,0,0,0.5)] p-5">
            <form method="GET" action="{{ route('forumDuvidas') }}">
                <h2 class="font-bold text-[#05668d] text-xl pb-4">FILTROS</h2>
                <h3 class="text-[#e9702a] font-bold pb-1">TAGS</h3>

                @foreach ($tags as $tag)
                    <input type="checkbox" name="tags[]" id="tag{{ $tag->id }}" value="{{ $tag->id }}"
                        @if (request('tags') && in_array($tag->id, request('tags'))) checked @endif />
                    <label for="tag{{ $tag->id }}">{{ $tag->nome }}</label><br />
                @endforeach

                <br />
                <h3 class="text-[#e9702a] font-bold pb-1">POPULARIDADE</h3>

                <input type="checkbox" name="TagMaisVotos" id="TagMaisVotos" />
                <label>Mais Votos</label><br />

                <input type="checkbox" name="TagMaisComentados" id="TagMaisComentados" />
                <label>Mais Comentados</label><br />

                <button type="submit" class="bg-[#629643] text-white rounded-md px-3 py-1 mt-3">Filtrar</button>
            </form>




        </div>

        <div class="">
            <div class=" py-5 sm:flex gap-4 mx-auto ">


                <form method="GET" action="{{ route('forumDuvidas') }}" class="flex gap-4">
                    <input class="bg-[#ebf2fa] rounded-lg text-xs sm:w-[720px] w-full my-4 sm:my-0.5 " type="text"
                        name="pesquisarPublicacao" id="pesquisarPublicacao" placeholder="Pesquisar por uma publicação..."
                        value="{{ request('pesquisarPublicacao') }}" />

                    <button type="submit"
                        class="bg-[#629643] text-white rounded-lg px-2 py-1 flex justify-center items-center mb-2 sm:mb-0">
                        <img src="{{ asset('assets/img/icons8-pesquisar (1).svg') }}" />
                    </button>
                </form>
                <a href="{{ route('admin.postagem.cadastrar') }}"
                    class="bg-[#629643] text-white rounded-lg px-4 py-1 flex justify-center items-center">
                    + Criar Post</a>

            </div>

            <div>
                @forelse ($forum as $fp)
                    <section class="bg-white rounded-lg shadow-[0px_0px_6px_rgba(0,0,0,0.5)] mb-6 p-5 ">
                        <div class="flex justify-between py-1">
                            <div class="">
                                <ul class="flex flex-wrap gap-3 pb-3">
                                    @foreach ($fp->tags as $tag)
                                        <li class="bg-[#629643] text-white font-semibold rounded-lg px-2 py-1">
                                            {{ $tag->nome }}
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                            <div class="text-[#333333]">Dúvida de: {{ $fp->usuario->nome_usuario ?? 'Desconhecido' }}
                            </div>
                        </div>
                        <h3 class="text-[#e9702a] font-bold pb-1">{{ $fp->titulo }}
                        </h3>
                        <p>
                            <strong>Objetivo:</strong> {{ $fp->conteudo }}
                        </p>
                        <div class="flex gap-2 pt-3 justify-end items-center">
                            <form action="{{ route('postagem.curtir', $fp->id) }}" method="post">
                                @method('put')
                                @csrf
                                <button type="submit" class="flex gap-1 items-center">
                                    <img src="{{ asset('assets/img/palm-of-hand.png') }}" width="20"
                                        class="{{ $fp->curtidas->contains(auth()->id()) ? 'opacity-100' : 'opacity-40' }}" />
                                    {{ $fp->curtidas->count() }}
                                </button>
                            </form>
                            <img src="{{ asset('assets/img/chat (1).png') }}" width="20" /> 12
                        </div>
                    </section>
                @empty

                    <diV>
                        Nenhuma publicação encontrada.
                    </diV>
                @endforelse
                <div class="flex justify-center items-center gap-1.5 ">
                    {{ $forum->links() }}
                </div>

            </div>
        </div>
    </div>
@endsection
