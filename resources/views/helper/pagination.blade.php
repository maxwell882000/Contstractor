<div class="styled-pagination text-center">
    <ul class="filter-btns">
        @for($i=1; $i <= $paginate->lastPage();$i++)
            <li><a href="{{$paginate->url($i)}}" class="active">{{$i}}</a></li>
        @endfor
    </ul>
</div>
