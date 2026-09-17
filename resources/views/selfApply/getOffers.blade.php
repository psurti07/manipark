@extends('layouts.selfapply')
@push('css')
<link href="{{ asset('front/css/custom.css') }}" rel="stylesheet" type="text/css" />
<style>
.accordion-button {
    background-color: transparent !important;
}

.accordion-button:focus {
    box-shadow: none !important;
}

body {
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
}
</style>
@endpush

@section('content')
<section id="contacts" class="bg--blue-300 personal-details-form pb-100 inner-page-hero contacts-section division">
    <div class="container">
        <div class="row">
            <div class="col-md-9 col-lg-9 col-12 m-auto">
                <div class="r-26 overflow-auto">
                    <div class="loan-steps-wrapper">
                        <div class="window-dots">
                            <span class="dot red"></span>
                            <span class="dot yellow"></span>
                            <span class="dot green"></span>
                        </div>
                        <div class="loan-steps">
                            <div class="step bg--green-300">
                                <span class="step-number">1</span>
                            </div>
                            <div class="step-line"></div>
                            <div class="step bg--green-300">
                                <span class="step-number">2</span>
                            </div>
                            <div class="step-line"></div>
                            <div class="step bg--green-300">
                                <span class="step-number">3</span>

                            </div>
                            <div class="step-line"></div>
                            <div class="step bg--black-300 active">
                                <span class="step-number">4</span>
                                <span class="step-title">Unlock Offers</span>
                            </div>
                            <div class="step-line"></div>
                            <div class="step bg--black-300 color--grey">
                                <span class="step-number">5</span>
                            </div>
                            <div class="step-line"></div>
                            <div class="step bg--black-300 color--grey">
                                <span class="step-number">6</span>
                            </div>
                        </div>
                        <div class="secure-text">
                            <span class="secure-dot"></span>
                            256-bit secure
                        </div>
                    </div>
                    <div class="bg-white p-4 text-start">
                        <div class="card-body">

                            <div class="row mb-3 contact-form-1">
                                <div class="col-lg-12">
                                    <div class="row gy-3">
                                        <div class="col-lg-4 col-12">
                                            <div
                                                class="d-flex justify-content-between px-2 py-2 bg--blue-300 rounded-pill">

                                                <div class="d-flex align-items-center justify-content-between w-100">
                                                    <div>
                                                        <div class="fbox-ico ico-12 mb-0">
                                                            <div class="fbox-image r-100 bg--blue-400">

                                                                <i class="far fa-user color--white"></i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div
                                                        class="d-flex align-items-center justify-content-between w-100">
                                                        <p class="s-12 color--white ms-2 m-0">Fullname :</p>
                                                        <p class="s-14 color--white m-0">{{ Cookie::get('fullname') }}
                                                        </p>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-12">

                                            <div
                                                class="d-flex justify-content-between px-2 py-2 bg--blue-300 rounded-pill">
                                                <div>
                                                    <div class="fbox-ico ico-12 mb-0">
                                                        <div class="fbox-image r-100 bg--blue-400">

                                                            <i class="fas fa-file color--white"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="d-flex align-items-center justify-content-between w-100">
                                                    <p class="s-12 color--white  ms-2 m-0">Mobile :</p>
                                                    <p class="s-14 color--white m-0">{{ Cookie::get('user_mobile') }}
                                                    </p>

                                                </div>
                                            </div>

                                        </div>
                                        <div class="col-lg-4 col-12">

                                            <div
                                                class="d-flex justify-content-between px-2 py-2 bg--blue-300 rounded-pill">
                                                <div>
                                                    <div class="fbox-ico ico-12 mb-0">
                                                        <div class="fbox-image r-100 bg--blue-400">

                                                            <i class="fas fa-file color--white"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="d-flex align-items-center justify-content-between w-100">
                                                    <p class="s-12 color--white ms-2 m-0">Loan Amount :</p>
                                                    <p class="s-14 color--white m-0">
                                                        &#8377;{{ formatePriceIndia(Cookie::get('loan_amount')) }}</p>

                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <h4 class="fw-bolder mb-10">You’re Eligible For Loan Offers.</h4>
                            <p class="mb-20 color--grey mt-0">Unlock Offers with Our Expert Consultation!</p>

                            <form action="{{ route('self.apply.buyNow') }}" id="unlockOffersForm"
                                class="contact-form save-form-5" novalidate="novalidate" method="post"
                                accept-charset="utf-8">
                                @csrf
                                <div class="integrations-1-wrapper">
                                    <div class="row">
                                        <div class="col-lg-4 col-md-4 col-12">
                                            <span class="badge badge-success w-100 text-start"
                                                style="border-radius: 12px 12px 0 0;">Most Recommended Offer*</span>
                                            <div id="fb-12-3" class="fbox-12  block-shadow r-12 mb-20">
                                                <div class="fbox-ico">
                                                    <div class="shape-ico">
                                                        <img class="p-0"
                                                            src="https://manage.Manipark.com/public/upload/banks/{{ $offersData[0]['bank_image'] }}"
                                                            alt="bank" width="160">
                                                    </div>
                                                </div>
                                                <div class="fbox-txt">
                                                    <h6 class="s-12 color--grey">Loan Amount</h6>
                                                    <p class="s-14">&#8377;
                                                        {{ formatePriceIndia($offersData[0]['loanAmount']) }}</p>
                                                    <hr class="custm-HR" />

                                                    <h6 class="s-12 color--grey">Max Tenure</h6>
                                                    <p class="s-14 ">{{ $offersData[0]['tenures'] }} Months
                                                    </p>
                                                    <hr class="custm-HR" />

                                                    <h6 class="s-12 color--grey">Best Rate</h6>
                                                    <p class="s-14 ">{{ $offersData[0]['roi'] }}% P.A</p>
                                                </div>
                                            </div>
                                        </div>

                                        @foreach($offersData as $index => $item)
                                        @if($index == 1)
                                        @continue
                                        @endif

                                        <div class="col-lg-4 col-md-4 col-12">

                                            <!-- <div class="lock-icon">
                                                <svg width="30px" height="30px" viewBox="0 0 24 24" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                                        d="M5.25 10.0546V8C5.25 4.27208 8.27208 1.25 12 1.25C15.7279 1.25 18.75 4.27208 18.75 8V10.0546C19.8648 10.1379 20.5907 10.348 21.1213 10.8787C22 11.7574 22 13.1716 22 16C22 18.8284 22 20.2426 21.1213 21.1213C20.2426 22 18.8284 22 16 22H8C5.17157 22 3.75736 22 2.87868 21.1213C2 20.2426 2 18.8284 2 16C2 13.1716 2 11.7574 2.87868 10.8787C3.40931 10.348 4.13525 10.1379 5.25 10.0546ZM6.75 8C6.75 5.10051 9.10051 2.75 12 2.75C14.8995 2.75 17.25 5.10051 17.25 8V10.0036C16.867 10 16.4515 10 16 10H8C7.54849 10 7.13301 10 6.75 10.0036V8ZM8 17C8.55228 17 9 16.5523 9 16C9 15.4477 8.55228 15 8 15C7.44772 15 7 15.4477 7 16C7 16.5523 7.44772 17 8 17ZM12 17C12.5523 17 13 16.5523 13 16C13 15.4477 12.5523 15 12 15C11.4477 15 11 15.4477 11 16C11 16.5523 11.4477 17 12 17ZM17 16C17 16.5523 16.5523 17 16 17C15.4477 17 15 16.5523 15 16C15 15.4477 15.4477 15 16 15C16.5523 15 17 15.4477 17 16Z"
                                                        fill="#1C274C" />
                                                </svg>
                                            </div> -->
                                            <span class="badge badge-success w-100 text-start"
                                                style="border-radius: 12px 12px 0 0;">Most Recommended Offer*</span>
                                            <div id="fb-12-3"
                                                class="fbox-12 block-shadow r-12 mb-20 lockoffers">
                                                <!-- Icon -->
                                                <div class="fbox-ico">
                                                    <div class="shape-ico">
                                                        <img class="p-0"
                                                            src="https://manage.Manipark.com/public/upload/banks/{{ $item['bank_image'] }}"
                                                            alt="bank" width="160">
                                                    </div>
                                                </div> <!-- End Icon -->

                                                <!-- Text -->
                                                <div class="fbox-txt">
                                                    <h6 class="s-12 color--grey">Loan Amount</h6>
                                                    <p class="s-14 ">&#8377;
                                                        {{ formatePriceIndia($item['loanAmount']) }}</p>
                                                    <hr class="custm-HR" />

                                                    <h6 class="s-12 color--grey">Max Tenure</h6>
                                                    <p class="s-14 ">-- Months</p>
                                                    <hr class="custm-HR" />

                                                    <h6 class="s-12 color--grey">Best Rate</h6>
                                                    <p class="s-14 ">-.--% P.M</p>
                                                </div>
                                            </div>
                                        </div>
                                        @endforeach
                                    </div>
                                </div>
                                <div class="otp-velidation-text shadow-none bg--blue-300 border-0 mt-15 r-16 px-3 py-3">
                                    <div class="card-body">
                                        <div class="row align-items-center justify-content-between">
                                            <div class="col-xl-7 col-lg-7 col-md-12 col-sm-12 col-12">
                                                <div class="d-flex align-content-center"><span
                                                        class="flaticon-target mr-10 color--yellow-500"></span>
                                                    <p class="s-12 mb-lg-0 mb-3 text-start color--white mt-0"> Soft
                                                        check only — won't impact
                                                        your credit
                                                        score. </p>
                                                </div>
                                            </div>
                                            <div class="col-md-5 form-btn text-end">
                                                <button type="submit"
                                                    class="btn btn--theme hover--theme submit unlockBtn r-12">Unlock
                                                    Your
                                                    Offers!<span class="fbox-ico ico-10"> <span
                                                            class="flaticon-right-arrow  ico-20 ms-1"></span></span></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>



    </div>
</section>
@endsection

@push('scripts')
<script>
$(document).ready(function() {
    $('.unlockBtn').click(function() {
        var btn = $(this);
        btn.html(
            '<span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span> Unlock Your Offers!'
        ).prop('disabled', true);
        setTimeout(function() {
            window.location.href = `{{ route('self.apply.buyNow') }}`;
        }, 2000); // Delay of 3 seconds (3000 milliseconds)
    });

    function toggleAccordion() {
        if ($(window).width() <= 767) {
            $("#flush-collapseOne").removeClass("show"); // Collapse for small screens
        } else {
            $("#flush-collapseOne").addClass("show"); // Open for larger screens
        }
    }

    toggleAccordion(); // Call on page load
    $(window).resize(toggleAccordion); // Call on window resize
})
</script>
@endpush