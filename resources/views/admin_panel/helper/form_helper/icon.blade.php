<div class="form-group">
    <label>Иконка</label>
    <input type="file" name="icon" id="icon" class="file-upload-default">
    <div class="input-group col-xs-12">
        <input id="show_text_when_uploaded_icon" type="text" value="{{$icon->icon ?? ""}}"
               class="form-control file-upload-info" disabled placeholder="">
        <span class="input-group-append">
                          <button id="icon-upload" class="file-upload-browse btn btn-primary"
                                  type="button">Загрузить</button>
                        </span>
    </div>
</div>
