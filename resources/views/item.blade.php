@php 
$isActive = $active ? "active":null;
$hasItemClass = $item->getItemClass() ? $item->getItemClass() : null;
$hasItems = $item->hasItems() ? 'has-treeview' : null;
$hasItemsAndActive = $item->hasItems() && $active ? 'menu-open':null;
@endphp
<li class="
    nav-item
    {{ $hasItemClass }}
    {{ $hasItems }}
    {{ $hasItemsAndActive }}
    {{ $isActive }}
">
    
    <a href="{{ $item->getUrl() }}" class="nav-link {{ $isActive }}">
        <i class="nav-icon {{ $item->getIcon() }}"></i>
        <p>{{ $item->getName() }} @if($item->hasItems())<i class="right fas fa-angle-left"></i>@endif</p>
    </a>

    @if(count($items) > 0)
        <ul class="nav nav-treeview">
            @foreach($items as $item)
                {!! $item !!}
            @endforeach
        </ul>
    @endif
</li>
