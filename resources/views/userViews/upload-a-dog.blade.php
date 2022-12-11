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
                                <h4>Upload a Dog</h4>
                            </a>

                            <form class="mt-5 mb-5 login-input">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Name" required>
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Gender" required>
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Age" required>
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
                                <div class="row">
                                    <label class="col-form-label col-sm-2 pt-0"><strong>Special Skill</strong></label>
                                    <div class="col-sm-10">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="gridRadios" value="option1" checked="checked">
                                            <label class="form-check-label">Understands English</label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="gridRadios" value="option2">
                                            <label class="form-check-label">Very Aggressive</label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="gridRadios" value="option3">
                                            <label class="form-check-label">Playful</label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="gridRadios" value="option4">
                                            <label class="form-check-label">Silent Killer</label>
                                        </div>
                                    </div>
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