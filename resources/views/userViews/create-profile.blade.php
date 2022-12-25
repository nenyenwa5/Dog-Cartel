@extends('layouts.user')

@section('content')

<div class="content-body">

    <div class="row page-titles mx-0">
        <div class="col p-md-0">
            <ol class="breadcrumb">
                <li class="breadcrumb-item active"><a href="/home">Home</a></li>
            </ol>
        </div>
    </div>
    <!-- row -->

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                @if(session('status'))
                <h6 class="alert alert-success">{{ session('status') }}</h6>
                @endif
                <form action="/createProfile" method="post" class="step-form-horizontal" enctype="multipart/form-data">
                    @csrf    
                <div>
                        <h4>Personal Details</h4>
                        <section>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <input type="text" name="firstName" class="form-control" placeholder="First Name">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <input type="text" name="lastName" class="form-control" placeholder="Last Name">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <input type="text" name="address" class="form-control" placeholder="Address">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <input type="phone" name="phone" class="form-control" placeholder="Phone Number">
                                    </div>
                                </div>
                            </div>
                        </section>
                        <h4>More Details</h4>
                        <section>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <textarea name="about-me" class="form-control" rows="4" placeholder="About Me"></textarea>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <input type="text" name="country" class="form-control" placeholder="Country">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <input type="text" name="state" class="form-control" placeholder="State">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                <input type="file" name="photo" class="form-control" id="inputGroupFile02">
                                    </div>
                                </div>
                            </div>

                        </section>


                    </div>
                    <div>
                        <button type="submit" class="btn btn-sm login-form__btn submit w-100">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- #/ container -->
</div>
<!--**********************************
            Content body end
        ***********************************-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<!-- <script>
    $.getJSON('{{ asset("countries.json") }}').then(jsonCountries => {
        const countries = jsonCountries.countries
        const countryNameArray = countries.map(item => item.country);

        const populateStates = (e) => {
            const countryName = e.target.getAttribute("data-value");
            console.log(countryName)
            country = countries.filter(country => country.country === countryName)[0]
            stateLists = document.getElementsByClassName('states');
            for (stateList of stateLists) {
                stateList.innerHTML = '';
                for (state of country.states) {
                    let stateItem = document.createElement('li');
                    stateItem.className = "mdc-list-item stateItem";
                    stateItem.setAttribute("data-value", state);
                    stateItem.innerText = state;
                    stateList.appendChild(stateItem);
                }
            }
        }
        countryLists = document.getElementsByClassName('countries');
        for (countryList of countryLists) {
            for (countryName of countryNameArray) {
                let countryItem = document.createElement('li');
                countryItem.className = "mdc-list-item countryItem";
                countryItem.setAttribute("data-value", countryName);
                countryItem.innerText = countryName;
                countryItem.addEventListener('click', populateStates);
                countryList.appendChild(countryItem);
               
            }
        }

    });
</script> -->



@endsection