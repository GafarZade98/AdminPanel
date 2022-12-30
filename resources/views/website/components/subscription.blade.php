<div class="ttm-newsletter">
    <div class="container">
        <div class="newsletter-inner">
            <div class="newsletter-details">
                <div class="newsletter-title">@lang('website.general.subscription_title')</div>
                <div class="desc">@lang('website.general.subscription_body')
                </div>
            </div>
            <div class="newsletter-wrapper">
                <form method="post">
                    <div class="form-group required">
                        <label class="col-sm-2 control-label" for="txtemail">@lang('website.general.subscription_mail')</label>
                        <div class="news-content">
                            <input type="email" name="email" id="txtemail" placeholder="@lang('website.general.subscription_mail')" class="form-control input-lg"/>
                        </div>
                        <div class="subscribe_button">
                            <button type="submit" class="btn btn-default btn-lg">@lang('website.general.subscribe')
                            </button>
                        </div>
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>
