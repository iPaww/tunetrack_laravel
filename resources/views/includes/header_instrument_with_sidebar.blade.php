@include('includes/header')
<link rel="stylesheet" href="{{ asset("assets/css/home.css") }}">

<div class="d-flex flex-column flex-lg-row">
    <!-- Sidebar Section -->
    <div class="side-bar">
        <div class="menu-ctgry">
            @foreach ( $sub_categories as $name )
                <a class="text-reset text-decoration-none" href="/elearning/{{ strtolower($category) }}/{{ strtolower($name) }}"><div class="instruments-ctgry text-capitalize">{{ $name }}</div></a>
            @endforeach
        </div>
    </div>