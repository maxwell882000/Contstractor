<div class="form-group">
    <label for="color" class="helper_color">{{$show}}</label>
    <div class="row justify-content-lg-between" style="padding-left: 1.24rem">
        <input type="text" name="{{$input}}" class="value_color" style="display: none" value="{{$color->$input ?? ""}}"/>
        <input type="color"  class="form-control color" style="width:5%; padding: 0; margin: 0">
        <input type="number" step="0.01" min="0" max="1" class="form-control opacity" style="width: max-content" placeholder="Opacity"/>
    </div>
</div>
