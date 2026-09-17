@extends('layouts.selfapply')
@push('css')
    <link rel="stylesheet" href="{{ asset('front/css/radiocards.css') }}">
    <link rel="stylesheet" href="{{ asset('front/css/custom.css') }}">
    <style>
        .accordion-button {
            background-color: transparent !important;
        }

        .accordion-button:focus {
            box-shadow: none !important;
        }

        .txt-block h2 {
            margin-bottom: 0px !important;
        }

        .cbox-1.ico-15 span {
            top: 5px !important;
        }

        a#failed-btn {
            background: #dc3545;
            border: 1px solid #dc3545;
        }

        a#failed-btn:hover {
            background: #bb2d3b !important;
            color: #fff !important;
        }

        .card:hover .radio:checked {
            border-color: transparent !important;
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
                                <div class="step bg--green-300">
                                    <span class="step-number">4</span>

                                </div>
                                <div class="step-line"></div>
                                <div class="step active">
                                    <span class="step-number">5</span>
                                    <span class="step-title">Purchase Plan</span>
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
                                <h4 class="fw-bolder mb-10">Premium Subscription Offer</h4>
                                <p class="mb-20 color--grey mt-0">Your pre-approved loan is waiting. Purchase a subscription
                                    to
                                    proceed. <span class="text-danger">- Offer Valid till 12 am only!</span></p>

                                <form method="post" class="buyNowForm" action="{{ route('loan.agent.checkout') }}">
                                    @csrf
                                    <input type="hidden" class="form-control" name="order_amount" id="order_amount"
                                        value="">
                                    <div class="row gx-3 gy-3">
                                        <div class="col-lg-6 col-md-6 col-12">
                                            <label class=" r-24 overflow-hidden  w-100 subscription-card">
                                                <input name="plan" value="1" class="radio d-none" type="radio"
                                                    checked data-plan="Self-Apply">
                                                <div class="plan-details border-0 p-0">


                                                    <!-- <div class="corner-ribbon"
                                                        data-offer="{{ calPercentage($selfApply->amount, $selfApply->offeramount) }} OFF">
                                                    </div> -->
                                                    <p
                                                        class="mb-0 text-center fs-12 fw-bold btn--yellow-500 px-2 py-0 mt-0 text-white">
                                                        77%
                                                        OFF
                                                    </p>
                                                    <div class="p-4">
                                                        <h5 class="fw-bolder s-16 mb-10 ">Self-Apply Plan</h5>
                                                        <div class="price my-2">
                                                            <!-- Monthly Price -->
                                                            <div class="price2">
                                                                <sup class="color--green-500">₹</sup>
                                                                <sup
                                                                    class="coins color--green-500"><strike>{{ intval($selfApply->amount) }}</strike></sup>
                                                                <span
                                                                    class="">{{ intval($selfApply->offeramount) }}</span>
                                                            </div>
                                                        </div>

                                                        <div class="order-summary">
                                                            <div class="order-row order-header">
                                                                <span class=" text-uppercase">Items</span>
                                                                <span class=" text-uppercase">Price</span>
                                                            </div>

                                                            <div class="order-row">
                                                                <span class="color--grey">Price</span>
                                                                <span
                                                                    class="">{{ formatePriceIndia($selfApply->amount) }}</span>
                                                            </div>

                                                            <div class="order-row order-discount">
                                                                <span class="color--grey">Discount</span>
                                                                <span class="">-
                                                                    {{ formatePriceIndia($selfApply->amount - $selfApply->offeramount) }}</span>
                                                            </div>

                                                            <div class="order-row">
                                                                <span class="color--grey">Offer Amount</span>
                                                                <span
                                                                    class="">{{ formatePriceIndia($selfApply->offeramount) }}</span>
                                                            </div>

                                                            <div class="order-row">
                                                                <span class="color--grey">GST</span>
                                                                <span class="">+
                                                                    {{ formatePriceIndia($selfApply->offeramount * 0.18) }}</span>
                                                            </div>

                                                            <div class="order-divider"></div>

                                                            <div class="order-row order-total">
                                                                <h5 class="">Total</h5>
                                                                <h5 class="">₹
                                                                    {{ formatePriceIndia($selfApply->offeramount + $selfApply->offeramount * 0.18) }}
                                                                </h5>

                                                            </div>
                                                        </div>

                                                        <button type="submit"
                                                            class="btn btn-sm btn--theme hover--theme r-12 w-100"
                                                            id="submit-btn">Buy Now <span class="fbox-ico ico-10"> <span
                                                                    class="flaticon-right-arrow  ico-20 ms-1"></span></span></button>
                                                    </div>
                                                </div>
                                            </label>
                                        </div>

                                        <div class="col-lg-6 col-md-6 col-12">
                                            <div class=" p-4 r-24 subscription-card">
                                                <div class="card-body">
                                                    <p class="fw-bold mt-0 ">Subscription Benefits: : </p>

                                                    <div class="cbox-1 ico-10 ml-0">
                                                        <div class="ico-wrap ms-0">
                                                            <div class="cbox-1-ico bg--green-300 rounded-pill">
                                                                <span class="flaticon-check end-0 text-dark"></span>
                                                            </div>
                                                        </div>

                                                        <div class="cbox-1-txt">
                                                            <p class="s-14 mt-0  ms-2"> Loan Process in
                                                                Multiple
                                                                NBFCs</p>
                                                        </div>
                                                    </div>
                                                    <div class="cbox-1 ico-10 ml-0">
                                                        <div class="ico-wrap ms-0">
                                                            <div class="cbox-1-ico bg--green-300 rounded-pill">
                                                                <span class="flaticon-check end-0 text-dark"></span>
                                                            </div>
                                                        </div>
                                                        <div class="cbox-1-txt">
                                                            <p class="s-14 mt-0  ms-2"> 100% Online Financial
                                                                Consultation</p>
                                                        </div>
                                                    </div>
                                                    <div class="cbox-1 ico-10 ml-0">
                                                        <div class="ico-wrap ms-0">
                                                            <div class="cbox-1-ico bg--green-300 rounded-pill">
                                                                <span class="flaticon-check end-0 text-dark"></span>
                                                            </div>
                                                        </div>
                                                        <div class="cbox-1-txt">
                                                            <p class="s-14 mt-0  ms-2"> Access Personalized
                                                                Tracking
                                                                Portal</p>
                                                        </div>
                                                    </div>
                                                    <div class="cbox-1 ico-10 ml-0">
                                                        <div class="ico-wrap ms-0">
                                                            <div class="cbox-1-ico bg--green-300 rounded-pill">
                                                                <span class="flaticon-check end-0 text-dark"></span>
                                                            </div>
                                                        </div>
                                                        <div class="cbox-1-txt">
                                                            <p class="s-14 mt-0  ms-2"> Dedicated Loan Expert
                                                                Assigned</p>
                                                        </div>
                                                    </div>
                                                    <div class="cbox-1 ico-10 ml-0">
                                                        <div class="ico-wrap ms-0">
                                                            <div class="cbox-1-ico bg--green-300 rounded-pill">
                                                                <span class="flaticon-check end-0 text-dark"></span>
                                                            </div>
                                                        </div>
                                                        <div class="cbox-1-txt">
                                                            <p class="s-14 mt-0  ms-2"> Loan Processing Time:
                                                                48
                                                                Hours</p>
                                                        </div>
                                                    </div>

                                                    <div class="pt-3">
                                                        <div id="rb-1-2" class="rbox-1">
                                                            <!-- Brand Logo -->
                                                            <div class="rbox-1-img">
                                                                <img class="img-fluid"
                                                                    src="{{ asset('front/images/google.webp') }}"
                                                                    alt="feature-image">
                                                            </div>

                                                            <!-- Rating Stars -->
                                                            <div class="star-rating ico-10 clearfix ">
                                                                <span class="flaticon-star"></span>
                                                                <span class="flaticon-star"></span>
                                                                <span class="flaticon-star"></span>
                                                                <span class="flaticon-star"></span>
                                                                <span class="flaticon-star mr-5"></span>
                                                                &nbsp; 4.95/5
                                                            </div>
                                                        </div>
                                                    </div>
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
            // Set initial value based on the checked radio button
            updateOrderAmount();

            // Listen for the change event on the radio buttons with the class .plan-card
            $('input[name="plan"]').change(function() {
                updateOrderAmount();
            });

            // Function to update the order amount based on the selected radio button
            function updateOrderAmount() {
                // Get the value of the selected radio button
                var selectedPlan = $('input[name="plan"]:checked').val();

                // Determine the base price of the selected plan
                var baseAmount = 0;
                if (selectedPlan == "1") {
                    baseAmount =
                        {{ $selfApply->inOffer ? $selfApply->offeramount : $selfApply->amount }}; // Set price for Super Saver
                } else if (selectedPlan == "2") {
                    baseAmount =
                        {{ $hireAgent->inOffer ? $hireAgent->offeramount : $hireAgent->amount }}; // Set price for Standard
                }

                // Calculate the total amount including 18% GST
                var gst = 0.18;
                var totalAmount = baseAmount + (baseAmount * gst);

                // Use Math.floor to round down the total amount
                var finalAmount = totalAmount;
                $('#submit-btn').text('Buy Now');
                // Update the hidden input field with the final amount
                $('#order_amount').val(finalAmount);
            }

            var owl = $('.buyNow-carousel');
            owl.owlCarousel({
                items: 5,
                loop: true,
                autoplay: false,
                //navBy: 1,
                nav: false,
                autoplayTimeout: 4000,
                autoplayHoverPause: false,
                smartSpeed: 2000,
                responsive: {
                    0: {
                        items: 4
                    },
                    550: {
                        items: 4
                    },
                    767: {
                        items: 5
                    },
                    768: {
                        items: 5
                    },
                    991: {
                        items: 5
                    },
                    1000: {
                        items: 5
                    }
                }
            });
        });
    </script>
@endpush
