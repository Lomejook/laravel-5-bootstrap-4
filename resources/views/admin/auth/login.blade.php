@extends('admin.layouts.empty')

@section('content')
    <div class="container pt-5 h-100">
        <div class="row justify-content-center h-100 align-items-center">
            <div class="col col-sm-8 col-md-5">
                <div class="card w-100">
                    <div class="card-block p-5">
                        <form method="POST" action="{{ route('login') }}">
                            {{ csrf_field() }}
                            <div class="form-group{{ $errors->has('email') ? ' has-danger' : '' }}">
                                <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                                    <div class="input-group-addon">
                                        <i class="material-icons">email</i>
                                    </div>
                                    <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' form-control-danger' : '' }}" name="email" value="{{ old('email') }}" required placeholder="Email">
                                </div>

                                @if ($errors->has('email'))
                                    <div class="form-control-feedback">
                                        {{ $errors->first('email') }}
                                    </div>
                                @endif
                            </div>

                            <div class="form-group{{ $errors->has('password') ? ' has-danger' : '' }}">
                                <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                                    <div class="input-group-addon">
                                        <i class="material-icons">lock</i>
                                    </div>
                                    <input id="password" type="password" class="form-control{{ $errors->has('email') ? ' form-control-danger' : '' }}" name="password" required placeholder="Password">
                                </div>
                                @if ($errors->has('password'))
                                    <div class="form-control-feedback">
                                        {{ $errors->first('password') }}
                                    </div>
                                @endif
                            </div>

                            <div class="form-group">
                                <button type="submit" class="btn btn-block btn-info">
                                    Login
                                </button>
                            </div>

                            <div class="form-check text-center">
                                <label class="form-check-label">
                                    <input class="form-check-input" type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}>
                                    Remember Account
                                </label>
                            </div>
                        </form>
                    </div>
                </div>
                    
            </div>
        </div>
    </div>
@endsection
