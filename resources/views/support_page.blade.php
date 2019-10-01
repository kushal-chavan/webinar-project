@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card mb-5">
                <div class="card-header bg-dark text-white">Support</div>

                <div class="card-body">
                    @error('department')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    @error('subject')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    @error('message')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    @if (session('sendsupport'))
                    <div class="alert alert-success" role="alert">
                        {{ session('sendsupport') }}
                    </div>
                     @endif
                <form method="POST" action="{{ url('/support') }}">
                        @csrf
                    <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Subject</label>
                                    <input type="text" name="subject" class="form-control" placeholder="subject">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Department</label>
                                    <select type="text" name="department" class="form-control">
                                            <option value="">Select Department</option>
                                            <option>Technical</option>
                                            <option>Sales</option>
                                            <option>Instructor</option>
                                            <option>Other</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Message</label>
                                    <textarea rows="9" name="message" class="form-control" placeholder="Type here....."></textarea>
                                </div>
                            </div>
                        </div>
                    <!-- /row-->
                    <p><input type="submit" name="submit" value="Send" class="btn btn-block btn-primary"></p>
                    </form>

                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <div class="card-header bg-success text-white">Request a call</div>
                <div class="card-body">
                        @include('notify')
                    <form method="POST" action="{{ url('/callrequest') }}">
                        @csrf
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Phone Number</label>
                                <input type="number" name="phone" class="form-control" placeholder="Contact number">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Prefered Language</label>
                                    <select type="text" name="language" class="form-control" placeholder="">
                                            <option value="">Choose</option>
                                            <option>English</option>
                                            <option>Hindi</option>
                                            <option>Telugu</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <p><input type="submit" name="submit" value="Request" class="btn btn-block btn-danger"></p>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection