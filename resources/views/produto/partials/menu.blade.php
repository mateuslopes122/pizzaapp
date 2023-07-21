<ul class="nav bg-warning">
    <li class="nav-item">
        <a class="nav-link" href="lv:{{route('produtos.index') }}">
            <i class="bi bi-eye-fill btn btn-primary"></i>
        </a>
    </li>
    <li>
        <a class="nav-link" href="{{ route('produtos.edit', ['id'=>$produto->id_produto]) }}">
            <i class="bi bi-pencil-square btn btn-primary"></i>
        </a>
    </li>
</ul>
