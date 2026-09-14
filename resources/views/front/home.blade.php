@extends('layouts.front')
@push('css')
    <link rel="stylesheet" href="{{ asset('front/calc/commoncalculator.css') }}">
    <link rel="stylesheet" href="{{ asset('front/calc/emicalculator.css') }}">
    <link rel="stylesheet" href="{{ asset('front/calc/calcstyle.css') }}">
    <link rel="stylesheet" href="{{ asset('front/css/custom.css') }}">
@endpush
@push('style-css')
@endpush
@section('content')
    <!-- main section starts -->
    <section id="hero-7" class="hero-section bg--blue-500 pb-0">
        <div class="hero-overlay">
            <div class="container">
                <div class="row d-flex align-items-center">
                    <div class="col-md-6 col-lg-6 col-12">
                        <div class="home-img text-center">
                            <img src="{{ asset('front/images/hero-image.png') }}" alt="manipark" class="w-100">
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-12 align-item-center justyfy-contant-center m-auto">
                        <div class="hero-7-txt mb-0">
                            <span class="color--blue-500 text-uppercase mb-2 d-block">Financial Consultation,
                                Simplified</span>
                            <h1 class="w-700 color--white mb-3">Helping You Move <br> Closer to<span
                                    class="color--blue-500"> Success</span></h1>
                            <p class=" color--white mb-4">Let experienced professionals help you reach your financial goals.
                            </p>
                            <div>
                                <a href="{{ route('self.apply.main') }}"
                                    class="btn r-04 btn--theme hover--tra-white last-link rounded-pill">Self Apply <span
                                        class="fbox-ico ico-10"> <span
                                            class="flaticon-right-arrow  ico-20 ms-1"></span></span></a>
                                <a href="{{ route('loan.agent.main') }}"
                                    class="btn r-04 btn--theme hover--tra-white last-link rounded-pill">Hire an Agent<span
                                        class="fbox-ico ico-10"> <span
                                            class="flaticon-right-arrow  ico-20 ms-1"></span></span></a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!-- main section ends -->

    <section class="py-80 ct-02 content-section division" id="company">
        <div class="container">
            <div class="row d-flex align-items-center mb-0">
                <div class="col-md-6">
                    <div class="txt-block right-column">
                        <p><span class="section-id s-16">About <span class="color--green-500">Us!</span></span></p>
                        <h2 class="s-28 w-700">Boost Your Finances Confidently With Money Small Finance</h2>
                        <p>Backed by enriching partnerships with industry-leading NBFCs, Money Small Finance is a one-stop
                            destination for all your financial needs. We provide top-notch financial consultation and
                            comprehensive services designed to help you make informed decisions and achieve your financial
                            goals with confidence.</p>

                    </div>
                </div>
                <div class="col-md-6">
                    <div class="img-block left-column mb-0">
                        <img class="img-fluid" src="{{ asset('front/images/Compny-page-1.png') }}" alt="content-image">
                    </div>
                </div>
            </div>
            <div class="cbox-6-wrapper bg--green-100 r-20 p-md-5 p-4 mt-3">
                <div class="row align-items-center row-cols-1 row-cols-md-2">
                    <div class="col">
                        <div id="cb-6-1" class="cbox-6">
                            <h6 class="s-20 w-700 mb-0">Transparent Process
                            </h6>
                            <p>A simplified online process with complete transparency at every step.
                            </p>
                        </div>
                    </div>
                    <div class="col">
                        <div id="cb-6-2" class="cbox-6">
                            <h6 class="s-20 w-700 mb-0">Customer-First Approach</h6>
                            <p>Every step is designed with our customers' needs in mind, ensuring their success.
                            </p>
                        </div>
                    </div>
                    <div class="col">
                        <div id="cb-6-3" class="cbox-6">
                            <h6 class="s-20 w-700 mb-0">Tailored Solutions</h6>
                            <p>Personalized financial solutions that are tailored to each individual's needs and goals.
                            </p>
                        </div>
                    </div>
                    <div class="col">
                        <div id="cb-6-4" class="cbox-6">
                            <h6 class="s-20 w-700 mb-0">On-Call Expert Consultation</h6>
                            <p>To quickly resolve all queries with expert-led effective solutions.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <!-- why Manipark section starts -->
    <section id="features-6" class="py-80 features-section feature-main-wrap division bg--blue-500">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-10 col-lg-9">
                    <div class="section-title mb-50">
                        <h2 class="s-28 mb-2 text-white">Why <span class="color--blue-500">Manipark</span></h2>
                        <p class="mt-0 color--white">The Difference We Bring</p>
                    </div>
                </div>
            </div>
            <div class="fbox-wrapper text-center">
                <div class="row gx-3 gy-2 row-cols-1 row-cols-md-1 row-cols-lg-1">
                    <hr class="divider">
                    <div class="col">
                        <div
                            class="fbox--hover fb-1 r-12 h-100 d-flex justify-content-between py-md-4 py-3 flex-md-nowrap flex-wrap">
                            <div class="d-flex align-items-center">
                                <div class="shape-ico color--theme">
                                    <h3>01</h3>
                                </div>
                                <h4 class="s-18 w-700 color--white ms-md-5 ms-3 d-flex align-items-center">
                                    <span class="icon-wrap r-12 me-3  overflow-auto"><i
                                            class="fas fa-handshake icon"></i></span>

                                    Enriching
                                    Collaboration
                                </h4>
                            </div>
                            <div class="fbox-txt text-start">
                                <p class="color--grey mt-0">Explore multiple financial services backed by our leading NBFC
                                    network.</p>
                            </div>
                        </div>
                    </div>

                    <hr class="divider">
                    <div class="col">
                        <div
                            class="fbox--hover fb-1 r-12 h-100 d-flex justify-content-between py-md-4 py-3 flex-md-nowrap flex-wrap">
                            <div class="d-flex align-items-center">
                                <div class="shape-ico color--theme">
                                    <h3>02</h3>
                                </div>
                                <h4 class="s-18 w-700 color--white ms-md-5 ms-3 d-flex align-items-center"><span
                                        class="icon-wrap r-12 me-3 overflow-auto"><span
                                            class="flaticon-computer icon"></span></span>100%
                                    Online Process</h4>
                            </div>
                            <div class="fbox-txt text-start">
                                <p class="color--grey">Enjoy a smooth and hassle-free loan experience without stepping out
                                    of your home.</p>
                            </div>
                        </div>
                    </div>
                    <hr class="divider">
                    <div class="col">
                        <div
                            class="fbox--hover fb-1 r-12 h-100 d-flex justify-content-between py-md-4 py-3 flex-md-nowrap flex-wrap">
                            <div class="d-flex align-items-center">
                                <div class="shape-ico color--theme">
                                    <h3>03</h3>
                                </div>
                                <h4 class="s-18 w-700 color--white ms-md-5 ms-3 d-flex align-items-center"> <span
                                        class="icon-wrap r-12 me-3 overflow-auto"><i
                                            class="fas fa-hand-point-up icon"></i></span>Self-Apply
                                    Feature</h4>
                            </div>
                            <div class="fbox-txt text-start">
                                <p class="color--grey">Enjoy the freedom to make smarter financial decisions with expert
                                    support.</p>
                            </div>
                        </div>
                        <hr class="divider">
                    </div>
                </div>
            </div>
    </section>

    <section id="products" class="py-80 features-section division bg--blue-100">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-10 col-lg-10">
                    <div class="section-title mb-40">
                        <h2 class="s-28 mb-2">Grow Your Finances <span class="color--blue-500">the Smart Way</span></h2>
                        <p class="mt-0 color--grey">Choose a plan that matches your requirements.</p>
                    </div>
                </div>
            </div>
            <div class="fbox-wrapper text-center">
                <div class="row d-flex gx-4 gy-4 align-items-center justify-content-center m-auto r-24 ">
                    <div class="col-md-10 col-lg-9 m-auto py-3">
                        <div class="row card-main bg-white">
                            <div class="col-lg-5 p-0">
                                <div class="fbox--hover fb-2 border bg-white mb-0">
                                    <div class="fbox-5-img mb-0">
                                        <img class="light-theme-img w-100"
                                            src="{{ asset('front/images/plan-visual.png') }}" alt="feature-image">
                                    </div>

                                </div>
                            </div>
                            <div class="col-lg-7 p-0">
                                <div
                                    class="fbox-txt text-start bg-white d-flex flex-column h-100 align-items-start justify-content-center p-4">
                                    <h3 class="s-22 w-700">Quick Self-Apply</h3>
                                    <p class="mb-20 color--grey">Relax and let our experienced loan specialist manage the
                                        entire
                                        process for
                                        you, helping improve your chances of approval.</p>
                                    <a href="{{ route('self.apply.main') }}"
                                        class="btn r-04  btn-sm btn--tra-black hover--theme rounded-pill">Apply
                                        Now</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-10 col-lg-9 m-auto py-3">
                        <div class="row card-main bg-white">
                            <div class="col-lg-7 p-0">
                                <div
                                    class="fbox-txt text-start bg-white d-flex flex-column h-100 align-items-start justify-content-center p-4">
                                    <h3 class="s-22 w-700">Quick Self-Apply</h3>
                                    <p class="mb-20 color--grey">Relax and let our experienced loan specialist manage the
                                        entire
                                        process for
                                        you, helping improve your chances of approval.</p>
                                    <a href="{{ route('self.apply.main') }}"
                                        class="btn r-04  btn-sm btn--tra-black hover--theme rounded-pill">Apply
                                        Now</a>
                                </div>
                            </div>
                            <div class="col-lg-5 p-0">
                                <div class="fbox--hover fb-2 border bg-white mb-0">
                                    <div class="fbox-5-img mb-0">
                                        <img class="light-theme-img w-100"
                                            src="{{ asset('front/images/plan-visual.png') }}" alt="feature-image">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Products Intro section ends -->

    <!-- Quick and swift steps section starts -->

    <section class="timeline-section py-80">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-10 col-lg-9 m-auto">
                    <div class="section-title mb-40">
                        <h2 class="s-28 mb-2">How it <span class="color--blue-500">works!</span></h2>
                        <p class="mt-0 color--grey">Apply Now In 6 Easy Steps</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-10 col-lg-9 m-auto">
                    <div class="timeline position-relative">
                        <div class="timeline-item">
                            <div class="timeline-content bg--blue-100 p-4 r-18">
                                Start by entering your mobile number and bank-registered name.
                            </div>
                            <div class="timeline-number">01</div>
                        </div>
                        <div class="timeline-item">
                            <div class="timeline-content bg--blue-100 p-4 r-18">
                                Fill in the required information to let our automated system assess
                                your eligibility and show your pre-approved loan offer(s). This is
                                not the final offer.
                            </div>
                            <div class="timeline-number">02</div>
                        </div>
                        <div class="timeline-item">
                            <div class="timeline-content bg--blue-100 p-4 r-18">
                                Subscribe to unlock access to your displayed pre-approved loan offer(s).
                            </div>
                            <div class="timeline-number">03</div>
                        </div>
                        <div class="timeline-item">
                            <div class="timeline-content bg--blue-100 p-4 r-18">
                                Within 24-48 hours, our login team will reach out for verification
                                and guide you through the document submission process.
                            </div>
                            <div class="timeline-number">04</div>
                        </div>
                        <div class="timeline-item">
                            <div class="timeline-content bg--blue-100 p-4 r-18">
                                Your documents and profile will be verified by the NBFC in accordance
                                with its terms and conditions.
                            </div>
                            <div class="timeline-number">05</div>
                        </div>
                        <div class="timeline-item">
                            <div class="timeline-content bg--blue-100 p-4 r-18">
                                The NBFC will determine loan sanction, approval, and disbursement
                                in accordance with its rules and regulations.
                            </div>
                            <div class="timeline-number">06</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Quick and swift steps section end -->

    <!-- Our Partners section start  -->
    <section id="integrations-2" class="py-80 integrations-section">
        <div class="container">
            <div class="r-12 text-center">
                <div class="row justify-content-center">
                    <div class="col-md-10 col-lg-10">
                        <div class="section-title mb-50">
                            <h2 class="s-28 mb-2">Trusted<span class="color--blue-500"> NBFC Partners</span></h2>
                            <p class="mt-0 color--grey">Partnering with leading NBFCs to bring you reliable loan options.
                            </p>
                        </div>
                    </div>
                </div>
                @php
                    $lists = nbfcsList();
                @endphp

                <div class="bank-crousel">
                    <div class="row">
                        <div class="col text-center">
                            <div class="owl-carousel brands-carousel-6 emi-carousel">
                                {!! $lists['carousel'] !!}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Our Partners section end  -->
    
    <!-- Contact Start -->
    <section id="contact" class="py-80 bg--blue-500">
        <div class="container">
            <div class="row align-items-start justify-content-center">
                <div class="col-lg-6 py-md-0 py-4">
                    <div class="h-100">
                        <div class="bg-white r-24 shadow border-primary h-100 p-4">
                            <div class="card-body">
                                <p class="w-400 mb-20">
                                    Fill out the form below and you'll hear from us soon.
                                </p>
                                <form method="post" action="{{ route('front.contact.us.store') }}"
                                    class="contact-form career-form career-form-1" enctype="multipart/form-data">
                                    <div class="row gx-2 gy-2">
                                        <div class="col-md-6 col-sm-12">
                                            <div class="form-group form-floating">
                                                <label for="firstname"
                                                    class="position-static p-0 w-500 text-uppercase">Full
                                                    Name *</label>
                                                <input id="form_name" name="fullname" type="text"
                                                    class="form-control name mb-0 py-0" placeholder="">
                                            </div>
                                            @component('components.ajax-error', ['field' => 'fullname'])
                                            @endcomponent
                                        </div>
                                        <div class="col-md-6 col-sm-12">
                                            <div class="form-group form-floating">
                                                <label for="form_mobile"
                                                    class="position-static p-0 w-500 text-uppercase">Mobile *</label>
                                                <input id="form_mobile" type="text" name="mobile"
                                                    class="numeric-input mb-0 form-control mobile py-0" placeholder=""
                                                    minlength="10" maxlength="10" inputmode="numeric">

                                            </div>
                                            @component('components.ajax-error', ['field' => 'mobile'])
                                            @endcomponent
                                        </div>
                                        <div class="col-md-6 col-sm-12">
                                            <div class="form-group form-floating">
                                                <label for="form_email"
                                                    class="position-static p-0 w-500 text-uppercase">Email *</label>
                                                <input id="form_email" type="email" name="email"
                                                    class="mb-0 form-control email py-0" placeholder="">

                                            </div>
                                            @component('components.ajax-error', ['field' => 'email'])
                                            @endcomponent
                                        </div>
                                        <div class="col-md-6 col-sm-12">
                                            <div class="form-group form-floating">
                                                <label for="form_subject"
                                                    class="position-static p-0 w-500 text-uppercase">Subject *</label>
                                                <input id="form_subject" type="text" name="subject"
                                                    class="mb-0 form-control subject py-0" placeholder="">

                                            </div>
                                            @component('components.ajax-error', ['field' => 'subject'])
                                            @endcomponent
                                        </div>
                                        <div class="col-12">
                                            <div class="form-group form-floating">
                                                <label for="form_message"
                                                    class="position-static p-0 w-500 text-uppercase">Message *</label>
                                                <textarea id="form_message" name="desc" class="mb-0 form-control message pt-3" placeholder=""
                                                    style="height: 150px"></textarea>

                                            </div>
                                            @component('components.ajax-error', ['field' => 'desc'])
                                            @endcomponent
                                        </div>
                                        <div class="col-12 text-center">
                                            <button type="submit"
                                                class="s-14 btn btn--green-400 hover--tra-black submit rounded-pill w-100"
                                                id="submit-btn">Submit Request <span class="fbox-ico ico-10"> <span
                                                        class="flaticon-right-arrow  ico-20 ms-1"></span></span></button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                  <div class="col-lg-6 md-mb-50 mb-20">
                    <div class="sec-title2 mb-40">
                        <h2 class="s-28 mb-2 color--white">Get in <span class="color--blue-500">Touch</span></h2>
                        <p class="description color--grey">Fill in your basic information, and our experts will contact you
                            as soon as
                            possible.</p>
                    </div>
                    <div class="row gy-3 gx-3">
                        <div class="col-lg-12 col-md-12 col-12">
                            <div class="address-item">
                                <div class="address-text">
                                    <h6 class="color--blue-500"> Customer Support </h6>
                                    <p class="address-txt"><a
                                            href="tel:{{ str_ireplace(' ', '', config('constant.COMPANY_MOBILE')) }}"
                                            class="text-white">{{ config('constant.COMPANY_MOBILE') }}</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <hr class="divider">
                        <div class="col-lg-12 col-md-12 col-12">
                            <div class="address-item">
                                <div class="address-text">
                                    <h6 class="color--blue-500"> Mail Us </h6>
                                    <p class="address-txt"><a
                                            href="mailto:{{ str_ireplace(' ', '', config('constant.COMPANY_SUPPORT_MAIL')) }}"
                                            class="text-white">{{ config('constant.COMPANY_SUPPORT_MAIL') }}</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <hr class="divider">
                        <div class="col-lg-12 col-md-12 col-12">
                            <div class="address-item">
                                <div class="address-text">
                                    <h6 class="color--blue-500"> Address </h6>
                                    <p class="address-txt text-white">{{ config('constant.COMPANY_ADDRESS') }}</p>
                                </div>
                            </div>
                        </div>
                        <hr class="divider">
                        <div class="col-lg-12 col-md-12 col-12">
                            <div class="address-item">
                                <div class="address-text">
                                    <h6 class="color--blue-500"> Working Hours </h6>
                                    <p class="address-txt text-white">
                                        Monday to Saturday: 10:00 AM - 5:00 PM<br>
                                        Sunday: Closed</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Contact End -->

    {{-- Wlecome message modal show here --}}
    @if ($msg->status == 1)
        <div class="modal fade myModal" id="exampleModalCenter" tabindex="-1" role="dialog"
            aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-body">
                        <div class="row p-3">
                            <p>{!! $msg->content ?? 'N/A' !!}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endif
@endsection

@push('script-src')
    <script type="text/javascript" src="{{ asset('front/calc/calccore.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('front/calc/mouse.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('front/calc/slider.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('front/calc/commoncalculator.js') }}"></script>
    <script type="text/javascript" src="{{ asset('front/calc/emicalculator.js') }}"></script>
@endpush

@push('scripts')
    <script src="{{ asset('front/js/home.js') }}" type="text/javascript"></script>
    @if ($msg->status == 1)
        <script>
            $(document).ready(function() {
                setTimeout(function() {
                    $(".myModal:not(.auto-off)").modal("show");
                }, 3600);
            })
        </script>
    @endif

    <script>
        const routes = {
            'selfapply': "{{ route('self.apply.send.otp') }}",
            'loanagent': "{{ route('loan.agent.send.otp') }}",
        };

        document.addEventListener('DOMContentLoaded', () => {
            const faqs = document.querySelectorAll('#faq-container li');
            const loadMoreButton = document.getElementById('load-more-faq');
            const viewLessButton = document.getElementById('view-less-faq');
            let visibleCount = 5; // Number of FAQs initially shown
            const batchSize = 5; // Number of FAQs to show on each click

            // Initial setup: Show the first 7 FAQs
            faqs.forEach((faq, index) => {
                if (index >= visibleCount) {
                    faq.style.display = 'none';
                }
            });

            // Event listener for Load More button
            loadMoreButton.addEventListener('click', () => {
                const hiddenFaqs = Array.from(faqs).filter(faq => faq.style.display === 'none');
                for (let i = 0; i < batchSize && i < hiddenFaqs.length; i++) {
                    hiddenFaqs[i].style.display = 'list-item';
                }

                // Show the "View Less" button once more items are displayed
                if (hiddenFaqs.length > 0) {
                    viewLessButton.style.display = 'inline-block';
                }

                // Hide the "Load More" button if no more FAQs to show
                if (hiddenFaqs.length <= batchSize) {
                    loadMoreButton.style.display = 'none';
                }
            });

            // Event listener for View Less button
            viewLessButton.addEventListener('click', () => {
                faqs.forEach((faq, index) => {
                    if (index >= visibleCount) {
                        faq.style.display = 'none';
                    }
                });

                // Reset button visibility
                loadMoreButton.style.display = 'inline-block';
                viewLessButton.style.display = 'none';
            });
        });

        $(document).ready(function() {
            $(".contact-form").submit(function(e) {
                let status = document.activeElement.innerHTML;
                e.preventDefault();
                if (status) {
                    $('.ajax-error').html('');
                    let data = new FormData(this);
                    $.ajax({
                        url: $(this).attr("action"),
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        },
                        type: 'POST',
                        data: data,
                        processData: false,
                        contentType: false,
                        beforeSend: function() {
                            $("#submit-btn").html(
                                '<span class="spinner-border spinner-border-sm"></span> Submit Request '
                            )
                            $("#submit-btn").attr('disabled', true);
                        },
                        success: function(result) {
                            $(this).attr("disabled", false);
                            if (result.type === 'SUCCESS') {
                                toastr.success(result.message);
                                setTimeout(function() {
                                    location.reload();
                                }, 3000);
                            } else {
                                toastr.error(result.message);
                                $('#submit-btn').html('Submit Request');
                                $('#submit-btn').attr('disabled', false);
                            }
                        },
                        error: function(error) {
                            $(this).attr("disabled", false);
                            let errors = error.responseJSON.errors,
                                errorsHtml = '';
                            $.each(errors, function(key, value) {
                                errorsHtml = '<strong>' + value[0] + '</strong>';
                                $('.' + key).html(errorsHtml);
                            });
                            $('#submit-btn').html('Submit Request');
                            $('#submit-btn').attr('disabled', false);
                        }
                    });
                }
            });
        });
    </script>
@endpush
