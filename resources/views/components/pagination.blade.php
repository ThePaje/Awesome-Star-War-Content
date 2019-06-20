<nav>
    <ul class="pagination">
		@if($previous_page)
        	<li class="page-item"><a class="page-link" href="{{ url()->current() }}?search={{$search}}&page={{$previous_page}}&format={{$format}}">Previous</a></li>
		@endif

		@if($next_page)
        	<li class="page-item"><a class="page-link"  href="{{ url()->current() }}?search={{$search}}&page={{$next_page}}&format={{$format}}">Next</a></li>
        @endif
    </ul>
</nav>