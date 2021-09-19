<div class="table-responsive">
    <table class="table table-hover">
        <thead>
        <tr>
            <th colspan="2">№</th>
            <th colspan="2">Содержимое</th>
            <th colspan="2">Действие</th>
        </tr>
        </thead>
        <tbody>
        @foreach($list as $banner)
            <tr>
                <td colspan="2">{{$loop->iteration}}</td>
                <td colspan="2">{{$banner[$key . "^ru"] ?? $banner->$key}}</td>
                <td colspan="1"><a href="{{route($route_show, $banner->id)}}"
                                   class="btn btn-info btn-rounded">Посмотреть</a></td>
                @if($route_delete)
                    <td colspan="1"><a href="{{route($route_delete, $banner->id)}}"
                                       class="btn btn-danger btn-rounded delete-button">Удалить</a></td>
                @endif
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
