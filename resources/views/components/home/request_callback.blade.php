<div class="wow zoomIn call-back moto-widget moto-widget-block moto-bg-color2_3 moto-spacing-top-large moto-spacing-right-auto moto-spacing-bottom-large moto-spacing-left-auto"
    data-widget="block" data-visible-on="" data-spacing="lala"
    style="background-image:url(mt-demo/93200/93283/mt-content/uploads/2020/01/mt-1952-contrent-bg03.jpg);background-position:left top;background-repeat:no-repeat; "
    data-bg-position="left top" data-bg-image="2020/01/mt-1952-contrent-bg03.jpg/index.html"><a class="moto-anchor"
        name="request-a-callback"></a>
    <div class="container-fluid">
        <div class="row">
            <div class="moto-cell col-sm-12" data-container="container">
                <div class="moto-widget moto-widget-row row-fixed moto-spacing-top-auto moto-spacing-right-auto moto-spacing-bottom-auto moto-spacing-left-auto"
                    data-grid-type="sm" data-widget="row" data-visible-on="-" data-spacing="aaaa" style=""
                    data-bg-position="left top">
                    <div class="container-fluid">
                        <div class="row" data-container="container">
                            <div class="moto-widget moto-widget-row__column moto-cell col-sm-4 moto-spacing-top-auto moto-spacing-right-auto moto-spacing-bottom-auto moto-spacing-left-auto"
                                style="" data-widget="row.column" data-container="container" data-spacing="aaaa"
                                data-bg-position="left top">
                                <div class="moto-widget moto-widget-text moto-preset-default moto-spacing-top-auto moto-spacing-right-auto moto-spacing-bottom-small moto-spacing-left-auto"
                                    data-widget="text" data-preset="default" data-spacing="aasa" data-visible-on="-"
                                    data-animation="">
                                    <div class="moto-widget-text-content moto-widget-text-editable">
                                        <p class="moto-text_system_6"><span class="moto-color5_5">Request a
                                                callback</span></p>
                                    </div>
                                </div>
                                <div id="wid_1578852527_jtjh07fw3"
                                    class="moto-widget moto-widget-contact_form moto-preset-default moto-spacing-top-small moto-spacing-right-auto moto-spacing-bottom-auto moto-spacing-left-auto  "
                                    data-preset="default" data-widget="contact_form" data-spacing="saaa">
                                    <div class="form-container">
                                        <form
                                            class="moto-widget-contact_form-form ng-pristine ng-invalid ng-invalid-required"
                                            action="{{ route('callback.form.submit') }}" accept-charset='UTF-8'
                                            method="POST">
                                            @csrf
                                            <div class="moto-widget-contact_form-group">
                                                <label for="form1-name"
                                                    class="moto-widget-contact_form-label">Name</label>
                                                <input type="text" id="form1-name"
                                                    class="moto-widget-contact_form-field moto-widget-contact_form-input"
                                                    placeholder="Name *" required="true" name="name"
                                                    @if ($errors->any()) autofocus @endif value="{{ old('name') }}">
                                                @error('name')
                                                    <span
                                                        class="moto-widget-contact_form-field-error">{{ $message }}</span>
                                                @enderror
                                            </div>
                                            <div class="moto-widget-contact_form-group">
                                                <label for="field_phone_wid_1578852527_jtjh07fw3"
                                                    class="moto-widget-contact_form-label">Phone</label>
                                                <input type="text"
                                                    class="moto-widget-contact_form-field moto-widget-contact_form-input"
                                                    placeholder="Phone *" required="" name="phone"
                                                    value="{{ old('phone') }}" id="form1-phone">
                                                @error('phone')
                                                    <span
                                                        class="moto-widget-contact_form-field-error">{{ $message }}</span>
                                                @enderror
                                            </div>
                                            <div class="moto-widget-contact_form-group">
                                                <label for="form1-email"
                                                    class="moto-widget-contact_form-label">Email</label>
                                                <input type="text"
                                                    class="moto-widget-contact_form-field moto-widget-contact_form-input"
                                                    placeholder="Email " name="email" value="{{ old('email') }}"
                                                    id="form1-email">
                                                @error('email')
                                                    <span
                                                        class="moto-widget-contact_form-field-error">{{ $message }}</span>
                                                @enderror
                                            </div>
                                            @if (session()->has('message'))
                                                <div class="moto-widget-contact_form-danger">
                                                    {{ session('message') }}
                                                </div>
                                            @endif
                                            <div class="moto-widget-contact_form-buttons">
                                                <div class="g-recaptcha"
                                                    data-sitekey="{{ env('CAPTCHA_SITE_KEY') }}">
                                                </div>
                                            </div>
                                            @error('g-recaptcha-response')
                                                <span class="alert alert-danger"
                                                    style="margin-top: 15px; display:block;">{{ $message }}</span>
                                            @enderror
                                            <div class="moto-widget-contact_form-buttons">
                                                <div class="moto-widget moto-widget-button moto-preset-2 moto-preset-provider-default moto-align-left"
                                                    data-preset="2" data-align="left">
                                                    <button type="submit"
                                                        class="g-recaptcha moto-widget-button-link moto-size-medium">
                                                        <span class="fa moto-widget-theme-icon"></span><span
                                                            class="moto-widget-button-label">
                                                            Request a Callback
                                                        </span>
                                                    </button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <div data-widget-id="wid_1578853658_pp27i0x8c"
                                    class="moto-widget moto-widget-spacer moto-preset-default moto-spacing-top-auto moto-spacing-right-auto moto-spacing-bottom-auto moto-spacing-left-auto moto-visible-on_desktop_hidden moto-visible-on_tablet_hidden"
                                    data-widget="spacer" data-preset="default" data-spacing="aaaa"
                                    data-visible-on="+mobile-h,mobile-v">
                                    <div class="moto-widget-spacer-block" style="height:30px"></div>
                                </div>
                            </div>
                            <div class="moto-widget moto-widget-row__column moto-cell col-sm-8 moto-spacing-top-auto moto-spacing-right-auto moto-spacing-bottom-auto moto-spacing-left-auto"
                                style="" data-widget="row.column" data-container="container" data-spacing="aaaa"
                                data-bg-position="left top">
                                <div class="moto-widget moto-widget-text moto-preset-default moto-spacing-top-auto moto-spacing-right-auto moto-spacing-bottom-auto moto-spacing-left-auto"
                                    data-widget="text" data-preset="default" data-spacing="aaaa" data-visible-on="-"
                                    data-animation="">
                                    <div class="moto-widget-text-content moto-widget-text-editable">
                                        <p class="moto-text_system_5">Would you like to speak to one of our
                                            <em>consultant over phone?</em>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
