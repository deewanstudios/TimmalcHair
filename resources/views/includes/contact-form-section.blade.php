<div class="cell-sm-8 offset-top-66 offset-lg-top-0">
    <h3 class="text-uppercase text-bold">Get in touch</h3>
    <hr class="divider hr-lg-left-0 bg-mantis">

    <form class="text-left" method="POST" enctype="multipart/form-data" action="/contact-us" name="contac-us"
        data-form-type="">

        @csrf
        <div class="range">
            <div class="cell-lg-6">
                <div class="form-group @error('name') has-error @enderror">
                    <label class="form-label form-label-outside" for="contact-us-name">Name:</label>
                    <input class="form-control" id="contact-us-name" type="text" name="name" value="{{old('name')}}">
                    @error('name')
                    <p class="help-block">This field is required. Please enter your name.</p>
                    @enderror
                </div>
            </div>
            <div class="cell-lg-6 offset-top-20 offset-lg-top-0">
                <div class="form-group @error('email') has-error @enderror">
                    <label class="form-label form-label-outside" for="contact-us-email">E-Mail:</label>
                    <input class="form-control" id="contact-us-email" type="email" name="email"
                        value="{{old('email')}}">
                    @error('email')
                    <p class="help-block">This field is required. Please enter your email address, so that we can get
                        back to
                        you in good time.</p>
                    @enderror
                </div>
            </div>
            <div class="cell-lg-6 offset-top-20 offset-lg-top-20">
                <div class="form-group @error('contact_number') has-error @enderror">
                    <label class="form-label form-label-outside" for="contact-us-number">Contact Number:</label>
                    <input class="form-control" id="contact-us-number" type="tel" name="contact_number"
                        value="{{old('contact_number')}}">
                    @error('contact_number')
                    <p class="help-block">This field is required. Please provide a number we can contct you on.</p>
                    @enderror
                </div>
            </div>
            <div class="cell-lg-6 offset-top-20 offset-lg-top-20">
                <div class="form-group @error('enquiry_type') has-error @enderror">
                    <label class="form-label-outside" for="contact-us-reason">What Is Your Enquiry About?
                    </label>
                    <select name="enquiry_type" id="enquiry-select" class="form-control select-filter">
                        <option value="">Please Select Enquiry Type</option>
                        @foreach ($enquiry_categories as $enquiry_category)
                        <option value="{{$enquiry_category->path()}}"
                            {{(old('enquiry_type') == $enquiry_category->path()?'selected':'')}}>
                            {{$enquiry_category->cake_category}}
                        </option>
                        @endforeach
                        <option value="general-enquiry" {{(old('enquiry_type') == 'general-enquiry'?'selected':'')}}>
                            General enquiry</option>
                    </select>
                    @error('enquiry_type')
                    <p class="help-block">Please select an option above.</p>
                    @enderror
                </div>
            </div>

            <div class="cell-lg-12 offset-top-20">
                <div class="form-group @error('message') has-error @enderror">
                    <label class="form-label form-label-outside" for="contact-us-message">Message:</label>
                    <textarea class="form-control" id="contact-us-message" name="message">{{old('message')}}</textarea>
                    @error('message')
                    <p class="help-block">This field only permits alpha numeric characters.</p>
                    @enderror
                </div>
            </div>
        </div>
        <div class="group-sm text-center text-lg-left offset-top-30">
            <button class="btn btn-primary" type="submit">Send</button>
            <button class="btn btn-default" type="reset">Reset</button>
        </div>
    </form>
</div>