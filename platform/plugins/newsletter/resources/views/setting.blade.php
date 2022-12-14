<div class="flexbox-annotated-section">
    <div class="flexbox-annotated-section-annotation">
        <div class="annotated-section-title pd-all-20">
            <h2>{{ trans('plugins/newsletter::newsletter.settings.title') }}</h2>
        </div>
        <div class="annotated-section-description pd-all-20 p-none-t">
            <p class="color-note">{{ trans('plugins/newsletter::newsletter.settings.description') }}</p>
        </div>
    </div>

    <div class="flexbox-annotated-section-content">
        <div class="wrapper-content pd-all-20">
            <div class="form-group">
                <label class="text-title-field"
                       for="newsletter_mailchimp_api_key">{{ trans('plugins/newsletter::newsletter.settings.mailchimp_api_key') }}</label>
                <input data-counter="120" type="text" class="next-input" name="newsletter_mailchimp_api_key"
                       id="newsletter_mailchimp_api_key"
                       value="{{ setting('newsletter_mailchimp_api_key', config('plugins.newsletter.general.mailchimp.api_key')) }}"
                       placeholder="{{ trans('plugins/newsletter::newsletter.settings.mailchimp_api_key') }}">
            </div>
            <div class="form-group">
                <label class="text-title-field"
                       for="newsletter_mailchimp_list_id">{{ trans('plugins/newsletter::newsletter.settings.mailchimp_list_id') }}</label>
                <input data-counter="120" type="text" class="next-input" name="newsletter_mailchimp_list_id"
                       id="newsletter_mailchimp_list_id"
                       value="{{ setting('newsletter_mailchimp_list_id', config('plugins.newsletter.general.mailchimp.list_id')) }}"
                       placeholder="{{ trans('plugins/newsletter::newsletter.settings.mailchimp_list_id') }}">
            </div>

            <div class="form-group">
                <label class="text-title-field"
                       for="newsletter_sendgrid_api_key">{{ trans('plugins/newsletter::newsletter.settings.sendgrid_api_key') }}</label>
                <input data-counter="120" type="text" class="next-input" name="newsletter_sendgrid_api_key"
                       id="newsletter_sendgrid_api_key"
                       value="{{ setting('newsletter_sendgrid_api_key', config('plugins.newsletter.general.sendgrid.api_key')) }}"
                       placeholder="{{ trans('plugins/newsletter::newsletter.settings.sendgrid_api_key') }}">
            </div>
            <div class="form-group">
                <label class="text-title-field"
                       for="newsletter_sendgrid_list_id">{{ trans('plugins/newsletter::newsletter.settings.sendgrid_list_id') }}</label>
                <input data-counter="120" type="text" class="next-input" name="newsletter_sendgrid_list_id"
                       id="newsletter_sendgrid_list_id"
                       value="{{ setting('newsletter_sendgrid_list_id', config('plugins.newsletter.general.sendgrid.list_id')) }}"
                       placeholder="{{ trans('plugins/newsletter::newsletter.settings.sendgrid_list_id') }}">
            </div>
        </div>
    </div>
</div>
