<div class="form-group">
    <label>Общая иконка</label>
    <input type="file" name="common_icon" id="common_icon" class="file-upload-default">
    <div class="input-group col-xs-12">
        <input id="show_text_when_uploaded_common_icon" type="text" value="{{$common_icon->common_icon ?? ""}}"
               class="form-control file-upload-info" disabled placeholder="">
        <span class="input-group-append">
                          <button id="common_icon-upload" class="file-upload-browse btn btn-primary"
                                  type="button">Загрузить</button>
                        </span>
    </div>
</div>
