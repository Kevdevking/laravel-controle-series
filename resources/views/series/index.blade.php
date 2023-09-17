<x-layout title="Lista de Séries">
    <a href="{{ route('series.create')}}" class="btn btn-dark mb-2">Adicionar</a>

    @isset($mensagemSucesso)    
    <div class="alert alert-success">
    {{ $mensagemSucesso }}
    </div>
    @endisset
    
    <ul class="list-group">
        <?php foreach($series as $serie): ?>
            <li class="list-group-item d-flex justify-content-between align-items-center">
                {{ $serie->nome}}
                <form action="{{ route('series.destroy', ['id' => $serie->id]) }}" method="post">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger btn-sm">
                        X
                    </button>
            </form>
            </li>
        <?php endforeach;?>  
    </x-layout>