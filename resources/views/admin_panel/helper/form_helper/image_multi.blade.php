<div class="form-group">
    <label>Картинка (несколько)</label>
    <input type="file" name="images[]" id="image" class="file-upload-default" multiple>
    <div class="input-group col-xs-12">
        <input id="show_text_when_uploaded" type="text" value="{{($image["image"]  ?? "") ? "Загружено" : ""}}"
               class="form-control file-upload-info" disabled placeholder="">
        <span class="input-group-append">
                          <button id="image-upload" class="file-upload-browse btn btn-primary"
                                  type="button">Загрузить</button>
                        </span>
    </div>
</div>
