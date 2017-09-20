<li class="{{ Request::is('bancos*') ? 'active' : '' }}">
    <a href="{!! route('admin.bancos.index') !!}"><i class="fa fa-edit"></i><span>Bancos</span></a>
</li>

<li class="{{ Request::is('servicos*') ? 'active' : '' }}">
    <a href="{!! route('admin.servicos.index') !!}"><i class="fa fa-edit"></i><span>Servicos</span></a>
</li>

<li class="{{ Request::is('categorias*') ? 'active' : '' }}">
    <a href="{!! route('admin.categorias.index') !!}"><i class="fa fa-edit"></i><span>Categorias</span></a>
</li>
<li class="{{ Request::is('canals*') ? 'active' : '' }}">
    <a href="{!! route('admin.canals.index') !!}"><i class="fa fa-edit"></i><span>Canais</span></a>
</li>

<li class="{{ Request::is('canalServicos*') ? 'active' : '' }}">
    <a href="{!! route('admin.canalServicos.index') !!}"><i class="fa fa-edit"></i><span>Canais por Servico</span></a>
</li>