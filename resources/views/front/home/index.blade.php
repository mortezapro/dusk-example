@extends("layouts.front.app")
@section("style")
    <title>this is home page</title>
@endsection
@section("content")
    <section>
        <div class="container">
            <div class="row justify-content-center text-center">
                <div class="col-12">
                    <h1>this is home page</h1>
                </div>
                <div class="col-6">
                    <form method="post" action="{{ route("contact.store") }}">
                        @csrf
                        <div class="mb-3">
                            <label for="full-name">Full Name</label>
                            <input type="text" class="form-control" placeholder="full name" id="full-name">
                        </div>
                        <div class="mb-3">
                            <label for="full-name">Message</label>
                            <textarea  class="form-control" placeholder="full name" id="full-name"></textarea>
                        </div>
                        <div class="mb-3">
                            <button id="btn-submit" type="submit" class="btn btn-primary">submit</button>
                        </div>
                    </form>
                    @session("success")
                        <h1>your message successfully submitted</h1>
                    @endsession
                </div>
            </div>
        </div>
    </section>
@endsection
