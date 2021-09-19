<input style="display: none" type="number" name="button" value="{{$length}}"/>
@foreach($buttons as $button)
    <h2>Кнопка № {{$loop->iteration}}</h2>
    <input style="display: none" name="id_button_{{$loop->iteration}}" value="{{$button['id'] ?? "0"}}"/>
    <div class="form-group">
        <label for="exampleInputName1">Название кнопки RU</label>
        <input type="text" name="name^ru_{{$loop->iteration}}" class="form-control" id="exampleInputName1"
               value="{{$button["name^ru"]??""}}"
               placeholder="">
    </div>
    <div class="form-group">
        <label for="exampleInputName1">Название кнопки UZ</label>
        <input type="text" name="name^uz_{{$loop->iteration}}" class="form-control" id="exampleInputName1"
               value="{{$button["name^uz"]??""}}"
               placeholder="">
    </div>
    <div class="form-group">
        <label for="exampleInputName1">Название кнопки EN</label>
        <input type="text" name="name^en_{{$loop->iteration}}" class="form-control" id="exampleInputName1"
               value="{{$button["name^en"]??""}}">
    </div>
    <div class="form-group">
        <label for="link">Линк для кнопки</label>
        <input  type="text" name="link_{{$loop->iteration}}" class="form-control" id="link"
               value="{{$button["link"]??""}}"
               placeholder="">
    </div>
@endforeach
