<form id="search-form" class="d-flex" role="search" method="get" action="<?php echo esc_url( home_url( '/' ) ); ?>">
    <input id="search-input" class="form-control me-1" type="search" placeholder="Buscar" aria-label="Buscar" name="s">
    <button class="btn btn-outline-danger" style="border: 2px solid;" type="submit">
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
            <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.397l3.428 3.428a1 1 0 0 0 1.415-1.415l-3.428-3.428z"/>
        </svg>
    </button>
    <input type="hidden" name="post_type" value="any">
</form>


