@extends('layouts.user')

@section('content')

<div class="login-form-bg h-100">
    <div class="container h-100">
        <div class="row justify-content-center h-100">
            <div class="col-xl-6">
                <div class="form-input-content">
                    <div class="card login-form mb-0">
                        <div class="card-body pt-5">

                            <a class="text-center" href="index.html">
                                <h4>Find a Cross</h4>
                            </a>

                            <form class="mt-5 mb-5 login-input">
                                <div class="form-group">
                                    <input type="text" name="name" class="form-control" placeholder="Name" required>
                                </div>
                                <div class="form-group">
                                    <label><strong>Gender</strong></label>
                                    <select class="form-control" id="sel1">
                                        <option>Female</option>
                                        <option>Male</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label><strong>Select Specie</strong></label>
                                    <select class="form-control" id="sel1">
                                        <option>Security Dog</option>
                                        <option>Pet</option>
                                        <option>Detector</option>
                                        <option>Sports</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <div class="form-group">
                                        <input type="text" name="phone" class="form-control" placeholder="Phone Number">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <input type="text" name="country" class="form-control" placeholder="Country" required>
                                </div>
                                <div class="form-group">
                                    <input type="text" name="state" class="form-control" placeholder="State" required>
                                </div>
                                <div class="form-group">
                                    <input type="text" name="address" class="form-control" placeholder="Address" required>
                                </div>
                        </div>
                        <button class="btn login-form__btn submit w-100">Submit</button>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</div>




@endsection