<style>
    .form-check {
        margin-left: 10px;
    }
</style>
<h3>Выберите Категории</h3>
<div class="row h-25  flex-wrap col-6">
    <input type="checkbox" style="display: none" name="id_category[]" value="0" class="form-check-input"
            checked>
    @foreach($categories as $category)
        <div class="form-check">
            <label class="form-check-label">
                <input type="checkbox" name="id_category[]" value="{{$category->id}}" class="form-check-input"
                       @if($check($category->id)) checked @endif >
                {{$category->name}}
            </label>
        </div>
    @endforeach
</div>


<script src="{{asset("vendors/select2/select2.min.js")}}"></script>
