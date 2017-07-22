@extends('layouts.admin.auth')

@section('auth-content')
    <div class="login-content">
        <h3 class="text-white text-center">Login to your account</h3>
        
        @if (session('status'))
            <div class="alert alert-success">
                {{ __(session('status')) }}
            </div>
        @endif
        
        <form class="login-form js-login-frm" role="form" method="POST" action="{{ route('login', ['domain' => app('request')->route()->parameter('company')]) }}">
            {{ csrf_field() }}

            <div class="alert alert-danger display-hide">
                <button class="close" data-close="alert"></button>
                <span>{{ __("Enter any username and password.") }} </span>
            </div>
            <div class="row">
                <div class="col-xs-12">
                    <div class="form-group">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-envelope-o"></i></span>
                            <input class="form-control" type="text" id="email_address" placeholder="{{ __("Enter Email Address") }}" name="login"/>
                        </div>
                    </div>

                </div>

                <div class="col-xs-12">
                    <div class="form-group">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                            <input class="form-control" id="password" type="password" placeholder="{{ __(" Enter Password") }}" name="password"/>
                        </div>
                    </div>

                </div>
                <div class="col-xs-6">
                    @if ($errors->has('login'))
                        <span class="help-block">
                            <strong>{{ __($errors->first('login')) }}</strong>
                        </span>
                    @endif
                </div>
            </div>
            <div class="form-actions row">
                <div class="col-xs-12">
                    <label class="rememberme mt-checkbox mt-checkbox-outline">
                        <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}/> {{ __("Remember me") }}
                        <span></span>
                    </label>
                    <a id="forget-password" class="forget-password" href="{{ route('password.request', ['domain' => app('request')->route()->parameter('company')]) }}">Forgot Password?</a>
                </div>
                <p class="js-login-error-message text-center" style="color:red"></p>
                <div class="col-xs-12">
                    <button class="btn btn-del btn-5 btn-5a fa fa-lock login-btn" type="submit" id="login_btn">
                        <span>{{ __("Login") }}</span>
                    </button>
                </div>
            </div>
        </form>
        <div class="modal" id="select-company-modal" role="dialog">
           <div class="modal-dialog">
              <div class="modal-content popup-action dashboard-modal js-companies-modal-content">
                    {{-- modal body render from modal/select_company.blade.php --}}
              </div>
           </div>
        </div>
        <div class="overlay fade in"></div>
    </div>
@endsection

@section('page-script')
    <script src="{{ asset('js/admin/auth.js') }}" type="text/javascript"></script>
@endsection

    