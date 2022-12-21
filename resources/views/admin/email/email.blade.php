@extends('admin.layouts')
@section('title','Dashboard')

@section('main-contant')
    <div class="row justify-content-center">
        <div class="col-lg-6">
            <section class="card">
                <header class="card-header">
                    Send Mail
                </header>
                <div class="card-body">
                    <form action="{{ route('email',$email_id->id) }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="greeting">Greeting</label>
                            <input type="text" class="form-control"  name="greeting" id="greeting" placeholder="Greeting" required="" >
                        </div>
                        <div class="form-group">
                            <label for="subject">Subject</label>
                            <input type="text" class="form-control"  name="subject" id="subject" placeholder="Subject" required="" >
                        </div>
                        <div class="form-group">
                            <label for="message">Message</label>
                            <input type="text" class="form-control"  name="message" id="message" placeholder="Message" required="" >
                        </div>
                        {{--                        <div class="form-group">--}}
                        {{--                            <label for="actiontext">Action Text</label>--}}
                        {{--                            <input type="text" class="form-control"  name="actiontext" id="actiontext" placeholder="Action Text">--}}
                        {{--                        </div>--}}
                        {{--                        <div class="form-group">--}}
                        {{--                            <label for="actionurl">Action Url</label>--}}
                        {{--                            <input type="text" class="form-control"  name="actionurl" id="actionurl" placeholder="Action Url">--}}
                        {{--                        </div>--}}
                        {{--                        <div class="form-group">--}}
                        {{--                            <label for="endpart">End Part</label>--}}
                        {{--                            <input type="text" class="form-control"  name="actionurl" id="actionurl" placeholder="Action Url">--}}
                        {{--                        </div>--}}


                        <div class="form-group">
                            <button type="submit" class="btn btn-primary btn-sm">Send Mail</button>
                        </div>

                    </form>

                </div>
            </section>
        </div>
    </div>
@endsection



{{--@extends('admin.layouts')--}}
{{--@section('title','Dashboard')--}}

{{--@section('main-contant')--}}
{{--    <div class="row justify-content-center">--}}
{{--        <div class="col-lg-6">--}}
{{--            <section class="card">--}}
{{--                <header class="card-header">--}}
{{--                    Send Mail--}}
{{--                </header>--}}
{{--                <div class="card-body">--}}
{{--                    <form action="{{ route('email',$email_id->id) }}" method="POST">--}}
{{--                        @csrf--}}
{{--                        <div class="form-group">--}}
{{--                            <label for="greeting">Greeting</label>--}}
{{--                            <input type="text" class="form-control"  name="greeting" id="greeting" placeholder="Greeting">--}}
{{--                        </div>--}}
{{--                        <div class="form-group">--}}
{{--                            <label for="subject">Subject</label>--}}
{{--                            <input type="text" class="form-control"  name="subject" id="subject" placeholder="Subject">--}}
{{--                        </div>--}}
{{--                        <div class="form-group">--}}
{{--                            <label for="message">Message</label>--}}
{{--                            <input type="text" class="form-control"  name="message" id="message" placeholder="Message">--}}
{{--                        </div>--}}
{{--                        <div class="form-group">--}}
{{--                            <label for="actiontext">Action Text</label>--}}
{{--                            <input type="text" class="form-control"  name="actiontext" id="actiontext" placeholder="Action Text">--}}
{{--                        </div>--}}
{{--                        <div class="form-group">--}}
{{--                            <label for="actionurl">Action Url</label>--}}
{{--                            <input type="text" class="form-control"  name="actionurl" id="actionurl" placeholder="Action Url">--}}
{{--                        </div>--}}
{{--                        <div class="form-group">--}}
{{--                            <label for="endpart">End Part</label>--}}
{{--                            <input type="text" class="form-control"  name="actionurl" id="actionurl" placeholder="Action Url">--}}
{{--                        </div>--}}


{{--                        <div class="form-group">--}}
{{--                            <button type="submit" class="btn btn-primary btn-sm">Send Mail</button>--}}
{{--                        </div>--}}

{{--                    </form>--}}

{{--                </div>--}}
{{--            </section>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--@endsection--}}
