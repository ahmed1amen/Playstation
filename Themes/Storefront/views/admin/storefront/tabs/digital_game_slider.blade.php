<div class="accordion-box-content">
    <div class="row">
        <div class="col-md-8">
            {{ Form::checkbox('storefront_slider_games_enabled', trans('storefront::attributes.section_status'), trans('storefront::storefront.form.enable_three_column_full_width_banners_section'), $errors, $settings) }}
        </div>
    </div>
    <div class="row">
        <div class="col-md-8">

            {{ Form::text('game_slider_title', trans('user::attributes.users.game_slider_title'), $errors, '', ['required' => true]) }}

        </div>
    </div>
    <div class="tab-content clearfix">
        <div class="panel-wrap">
            {{ Form::select('storefront_slider_games', trans('storefront::attributes.storefront_slider'), $errors, $sliders, $settings) }}
        </div>
    </div>
</div>
