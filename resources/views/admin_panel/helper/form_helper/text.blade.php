<div class="form-group">
    <label for="exampleInputName1">{{$show_name}} RU</label>
    <input type="text" name="{{$input_name}}^ru" class="form-control" value="{{$text[$input_name .  "^ru"] ?? ""}}"
           id="exampleInputName1" placeholder="">
</div>
<div class="form-group">
    <label for="exampleInputName1">{{$show_name}} UZ</label>
    <input type="text" name="{{$input_name}}^uz" class="form-control" value="{{$text[$input_name ."^uz"] ?? ""}}"
           id="exampleInputName1" placeholder="">
</div>
<div class="form-group">
    <label for="exampleInputName1">{{$show_name}} EN</label>
    <input type="text" name="{{$input_name}}^en" class="form-control" value="{{$text[$input_name . "^en"] ?? ""}}"
           id="exampleInputName1" placeholder="">
</div>
