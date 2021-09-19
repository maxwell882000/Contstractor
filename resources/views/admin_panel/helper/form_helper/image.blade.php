<div class="form-group">
    <label>Картинка</label>
    <input type="file" name="image" id="image" class="file-upload-default">
    <div class="input-group col-xs-12">
        <input id="show_text_when_uploaded_image" type="text" value="{{$image["image"] ?? ""}}" class="form-control file-upload-info" disabled placeholder="">
        <span class="input-group-append">
                          <button id="image-upload" class="file-upload-browse btn btn-primary"
                                  type="button">Загрузить</button>
                        </span>
    </div>
</div>
