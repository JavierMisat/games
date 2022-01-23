<div class="general-box _0e4">
	<div class="header-box">
		<i class="fa fa-plus color-w icon-middle"></i>
	</div>
	<div class="_5e4">
		<form id="addcategory-form" enctype="multipart/form-data">
			<div class="vByg5">
				<input type="text" name="ac_name" placeholder="@category_name@">
			</div>
			<div style="display:block;" id="game_import1" class="game_import-filepanel r-r3 _10e4 _a0">
						<div>
							<label>
								<img src="{{CONFIG_THEME_PATH}}/image/icon-color/admin/image.png" width="20">
								<span class="_tr5">Category image (optional)</span>
								<input type="file" name="__game_image">
							</label>
						</div>
						<div class="addcategory_progress progress _a0">
        					<div class="addcategory_bar progress-bar progress-bar-success"></div>
    					</div>
    				</div>

			<button type="submit"  id="addcategory-btn" class="btn-p btn-p1">
				<i class="fa fa-plus icon-middle"></i>
				@add@
			</button>
		</form>
	</div>
</div>