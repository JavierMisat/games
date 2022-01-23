<div class="general-box _y9 _0e4">
	<div class="_5e4 _b-b">
		<img id="editgame_image" width="50" height="40" class="img-circle" src="{{EDIT_GAME_IMAGE}}">
		<span style="margin-left:10px;" id="editgame_name">{{EDIT_GAME_NAME}}</span>

		<a style="float:right;" href="/{{EDIT_GAME_NAME_URL}}" target="_blank" class="btn-p btn-premium"><i class="fa fa-gamepad nav-icon icon-middle" style="margin-right:7px!important;"></i>View Game</a>

	</div>
	<form id="editgame-form" enctype="multipart/form-data" method="POST">
		<div class="g-d5 games-dashboard">
			<div class="r05-t _b-r _5e4">
				<div class="_input-box">
					<img src="{{CONFIG_THEME_PATH}}/image/icon-color/admin/name.png">
					<input type="text" name="eg_name" class="_text-input _tr5" value="{{EDIT_GAME_NAME}}">
				</div>
				<div>
					<textarea rows="15" style="min-height: 339px;" name="eg_description" class="editor-js _text-input _tr5">{{EDIT_GAME_DESCRIPTION}}</textarea>
				</div>
				<div style="display:none;">
					<textarea rows="10" name="eg_instructions" class="editor-js _text-input _tr5">{{EDIT_GAME_INSTRUCTIONS}}</textarea>
				</div>
				<div>
					<img src="{{CONFIG_THEME_PATH}}/image/icon-color/admin/category.png" width="20">
					<span class="_tr5">@game_category@</span>
					<select name="eg_category" class="_p4s8">
						{{EDIT_GAME_CATEGORIES}}
					</select>
				</div>
			</div>
			<div class="r05-t _5e4">
				<div>
					<div class="_cE3-xf">
						<button type="button" class="game_type-import i-t-0 fa fa-pencil icon-22"></button>
						<button type="button" class="game_type-import i-t-1 fa fa-cloud-upload icon-22"></button>
					</div>
		
					<div id="game_import0">
						<div class="_input-box">
							<img src="{{CONFIG_THEME_PATH}}/image/icon-color/admin/image.png">
							<input type="text" name="eg_image" class="_text-input _tr5" value="{{EDIT_GAME_IMAGE}}">
						</div>
						<div class="_input-box">
							<img src="{{CONFIG_THEME_PATH}}/image/icon-color/admin/file.png">
							<input type="text" name="eg_file" class="_text-input _tr5" value="{{EDIT_GAME_FILE}}">
						</div>
					</div>

					<div id="game_import1"  class="game_import-filepanel r-r3 _10e4 _a0">
						<div>
							<label>
								<img src="{{CONFIG_THEME_PATH}}/image/icon-color/admin/image.png" width="20">
								<span class="_tr5">@game_image@</span>
								<input id="_-2m-f" type="file" name="__eg_image">
							</label>
						</div>
						<div style="display:none;">
							<label>
								<img src="{{CONFIG_THEME_PATH}}/image/icon-color/admin/file.png" width="20">
								<span class="_tr5">@game_file@</span>
								<input id="_-3f-f" type="file" name="__eg_file">
							</label>
						</div>
						<div class="editgame_progress progress _a0">
        					<div class="editgame_bar progress-bar progress-bar-success"></div>
    					</div>
    				</div>
					<div class="_tr5 _bold">@game_size@</div>
    				<div class="_cE3-xf">
    					<div class="_cE3-x7">
    						<div class="_input-box">
    							<img src="{{CONFIG_THEME_PATH}}/image/icon-color/admin/width.png">
    							<input type="number" class="_text-input _tr5" name="eg_width" value="{{EDIT_GAME_WIDTH}}">
    						</div>
						</div>
						<div class="_cE3-x7">
							<div class="_input-box">
								<img src="{{CONFIG_THEME_PATH}}/image/icon-color/admin/height.png">
								<input type="number" class="_text-input _tr5" name="eg_height" value="{{EDIT_GAME_HEIGHT}}">
							</div>
						</div>
					</div>
					<div class="_tr5 _bold" style="padding-top:5px;">Featured Games - Sorting on Homepage</div>
    				<div class="_cE3-xf">
    					<div class="_cE3-x7" style="flex:1">
    						<div class="_input-box">
    							<img src="{{CONFIG_THEME_PATH}}/image/icon-color/admin/crown.png" width="20">
    							<input type="number" class="_text-input _tr5" name="eg_sorting" value="{{EDIT_GAME_SORTING}}">
    						</div>
						</div>
					</div>
					<div style="display:none;">
    					<img src="{{CONFIG_THEME_PATH}}/image/icon-color/admin/file_type.png" width="20">
    					<select name="eg_file_type" class="_p4s8">
							<option value="other" {{EDIT_GAME_TYPE_OTHER_STATUS}}>@game_type_html@</option>
						</select>
					</div>
				</div>
				<input type="hidden" class="game_type-import--val" name="eg_import" value="0">
				<input type="hidden" name="eg_id" value="{{EDIT_GAME_ID}}">
			</div>
		</div>
		<div class="_a-r _5e4 _b-t">
			<button type="submit" id="addgame-btn" class="btn-p btn-p1">
				<i class="fa fa-check icon-middle"></i>
				@save_game@
			</button>
		</div>
	</form>
</div>