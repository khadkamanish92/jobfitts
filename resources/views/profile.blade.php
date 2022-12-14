@extends('layouts.app')
@section('content')
    @push('styles')
        <style>
            .tags-input-wrapper {
                background: #f9f9f9;
                padding: 10px;
                border-radius: 4px;
                max-width: 400px;
                border: 1px solid #ccc
            }

            .tags-input-wrapper input {
                border: none;
                background: transparent;
                outline: none;
                width: 150px;
            }

            .tags-input-wrapper .tag {
                display: inline-block;
                background-color: #009432;
                color: white;
                border-radius: 40px;
                padding: 0px 3px 0px 7px;
                margin-right: 5px;
                margin-bottom: 5px;
            }

            .tags-input-wrapper .tag a {
                margin: 0 7px 3px;
                display: inline-block;
                cursor: pointer;
            }
        </style>
    @endpush
    <div class="ftco-section bg-light">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-lg-8 mb-5">
                    <h1>Edit Your Profile</h1>
                    @candidate
                    <form action="{{ route('profile.update') }}" method="POST" enctype="multipart/form-data"
                        class="p-5 bg-white">
                        @csrf
                        <input type="hidden" name="user_type" value="candidate">
                        <div class="row form-group">
                            <div class="col-md-12 mb-3 mb-md-0">
                                <label class="font-weight-bold" for="name">Name</label>
                                <input type="text" id="name" name="name" value="{{ $profile['name'] }}"
                                    class="form-control">
                                @error('name')
                                    <span style="color: red;">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                        <div class="row form-group">
                            <div class="col-md-12 mb-3 mb-md-0">
                                <img src="{{ $user->getFirstMediaUrl('avatar', 'thumb') }}">
                            </div>
                        </div>

                        <div class="row form-group">
                            <div class="col-md-12 mb-3 mb-md-0">
                                <label class="font-weight-bold" for="name">Profile Avatar</label>
                                <input type="file" id="avatar" name="avatar" class="form-control">
                                @error('avatar')
                                    <span style="color: red;">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                        <div class="row form-group">
                            <div class="col-md-12 mb-3 mb-md-0">
                                <label class="font-weight-bold" for="name">Email</label>
                                <input type="text" id="email" name="email" value="{{ $profile['email'] }}"
                                    class="form-control">
                                @error('email')
                                    <span style="color: red;">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                        <div class="row form-group">
                            <div class="col-md-12 mb-3 mb-md-0">
                                <label class="font-weight-bold" for="address">Address</label>
                                <input type="text" id="address" name="address" value="{{ $profile['address'] }}"
                                    class="form-control">
                                @error('address')
                                    <span style="color: red;">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                        <div class="row form-group">
                            <div class="col-md-12">
                                <h3>Write your skills separated by comma here <span style="color: red;">*</span></h3>
                            </div>
                            <div class="col-md-12 mb-3 mb-md-0">
                                <input type="text" name="skills" id="skills"
                                    placeholder="php,laravel,node-js,c#,javascript,css,html" class="form-control"
                                    cols="30" rows="5">
                                @error('skills')
                                    <span style="color: red;">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col-md-12">
                                <h3>Write your degrees and certifications separated by comma here i.e Academic
                                    Qualifications <span style="color: red;">*</span></h3>
                            </div>
                            <div class="col-md-12 mb-3 mb-md-0">
                                <input type="text" name="educational_qualifications"
                                    placeholder="BBA,B-TECH,MCA,CSIT,HACKING,NETWORKING" class="form-control"
                                    id="educational_qualifications" cols="30" rows="5">
                                @error('educational_qualifications')
                                    <span style="color: red;">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                        <div class="row form-group">
                            <div class="col-md-12">
                                <input type="submit" value="Update" class="btn btn-primary  py-2 px-5">
                            </div>
                        </div>
                    </form>
                    @endcandidate

                    @customer
                        <form action="{{ route('profile.update') }}" method="POST" class="p-5 bg-white">
                            @csrf
                            <input type="hidden" name="user_type" value="customer">
                            <div class="row form-group">
                                <div class="col-md-12 mb-3 mb-md-0">
                                    <label class="font-weight-bold" for="name">Name</label>
                                    <input type="text" id="name" name="name" value="{{ $profile['name'] }}"
                                        class="form-control">
                                    @error('name')
                                        <span style="color: red;">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row form-group">
                                <div class="col-md-12 mb-3 mb-md-0">
                                    <label class="font-weight-bold" for="name">User Email</label>
                                    <input type="text" id="email" name="email" value="{{ $profile['email'] }}"
                                        class="form-control">
                                    @error('email')
                                        <span style="color: red;">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row form-group mb-5">
                                <div class="col-md-12 mb-3 mb-md-0">
                                    <label class="font-weight-bold" for="company_email">Company Email</label>
                                    <input type="email" class="form-control" id="company_email" name="company_email"
                                        value="{{ $profile['company_email'] }}" placeholder="johndoe@anon.com">
                                    @error('company_email')
                                        <span style="color: red;">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row form-group mb-5">
                                <div class="col-md-12 mb-3 mb-md-0">
                                    <label class="font-weight-bold" for="company_phone">Company Phone</label>
                                    <input type="text" id="company_phone" name="company_phone" class="form-control"
                                        value="{{ $profile['company_phone'] }}" placeholder="+601 .. ">
                                    @error('company_phone')
                                        <span style="color: red;">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row form-group mb-5">
                                <div class="col-md-12 mb-3 mb-md-0">
                                    <label class="font-weight-bold" for="company_address">Company Address</label>
                                    <input type="text" class="form-control" id="company_address" name="company_address"
                                        value="{{ $profile['company_address'] }}" placeholder="404-street,Not found">
                                    @error('company_address')
                                        <span style="color: red;">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row form-group mb-5">
                                <div class="col-md-12 mb-3 mb-md-0">
                                    <label class="font-weight-bold" for="designation">Your position in the company</label>
                                    <input type="text" id="designation" name="designation"
                                        value="{{ $profile['designation'] }}" class="form-control"
                                        placeholder="Human Resource Manager">
                                    @error('designation')
                                        <span style="color: red;">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row form-group">
                                <div class="col-md-12">
                                    <h3>Describe your company</h3>
                                </div>
                                <div class="col-md-12 mb-3 mb-md-0">
                                    <textarea name="company_description"
                                        placeholder="Our company develops creative products and services that provides bundle of services like web design and development, custom applications as per business requirements, ERPs, CRMs, E-commerce solutions, business-to-business applications"
                                        class="form-control" id="" cols="30" rows="5">{{ $profile['company_description'] }}</textarea>
                                    @error('company_description')
                                        <span style="color: red;">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row form-group">
                                <div class="col-md-12">
                                    <input type="submit" value="Update" class="btn btn-primary  py-2 px-5">
                                </div>
                            </div>
                        </form>
                    @endcustomer
                </div>
                <div class="col-lg-4">
                    <div class="p-4 mb-3 bg-white">
                        <h3 class="h5 text-black mb-3">Reset Password</h3>
                        <form action="{{ route('profile.resetpassword') }}" method="POST" class="p-5 bg-white">
                            @csrf
                            <div class="row form-group">
                                <div class="col-md-12 mb-3 mb-md-0">
                                    <label class="font-weight-bold" for="password">Old Password</label>
                                    <input type="password" id="password" name="password" required value=""
                                        class="form-control" placeholder="Old Password">
                                    @error('password')
                                        <span style="color: red;">{{ $message }}</span>
                                    @enderror
                                    @if (session('error'))
                                        <span style="color: red;">{{ session('error') }}</span>
                                    @endif
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col-md-12 mb-3 mb-md-0">
                                    <label class="font-weight-bold" for="name">New Password</label>
                                    <input type="password" id="new_password" name="new_password" required value=""
                                        class="form-control" placeholder="New password">
                                    @error('new_password')
                                        <span style="color: red;">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col-md-12">
                                    <input type="submit" value="Reset Password" class="btn btn-primary  py-2 px-5">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @candidate
    @php
    function addQuotes($string)
    {
        return '"' . implode('","', explode(',', $string)) . '"';
    }
    @endphp
    @push('scripts')
        <script src="{{ asset('tagplug-master/index.js') }}"></script>
        <script>
            var tagInput1 = new TagsInput({
                selector: 'skills',
                max: 10
            });
            tagInput1.addData([@php echo addQuotes($profile['skills']); @endphp])

            var tagInput2 = new TagsInput({
                selector: 'educational_qualifications',
                max: 10
            });
            tagInput2.addData([@php echo addQuotes($profile['educational_qualifications']); @endphp])
        </script>
    @endpush
    @endcandidate
@endsection
