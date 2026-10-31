<nav class="mb-3">
    <a href="{{ route('foods.index') }}"
       class="btn btn-primary me-2 {{ request()->is('foods') || (request()->is('foods/*') && !request()->is('foods/featured')) ? 'active' : '' }}">
        Food List
    </a>

    <a href="{{ route('foods.featured') }}"
       class="btn btn-success me-2 {{ request()->is('foods/featured') ? 'active' : '' }}">
        Featured Food
    </a>
</nav>