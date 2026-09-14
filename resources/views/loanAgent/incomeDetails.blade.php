@extends('layouts.selfapply')
@push('css')
    {{-- write or link your css file and styles tag here --}}
    <link href="{{ asset('front/css/custom.css') }}" rel="stylesheet" type="text/css" />
    <style>
        .accordion-button {
            background-color: #f8f8fb !important;
        }

        .accordion-button:focus {
            box-shadow: none !important;
        }

        .contact-form .form-select {
            margin-bottom: 0px !important;
        }

        @media screen and (max-width: 767px) {
            .hero-section {
                padding-top: 10px !important;
            }
        }

        .input-group-text {
            color: #666;
            border: none;
            background-color: #f5f6f8;
            line-height: 1.3;
            border-top-left-radius: 5px;
            border-bottom-left-radius: 5px;
            border-top-right-radius: 0px;
            border-bottom-right-radius: 0px;
        }
    </style>
@endpush
@section('content')
    <section id="hero-201" class="bg--blue-300 bg--fixed hero-section">
        <div class="container">
            <div class="row">
                <div class="col-md-9 col-lg-7 col-12 m-auto">
                    <div id="hero-8-form" class="border border-primary r-26 bg--blue-100 p-0">
                        <div class="loan-steps-wrapper">
                            <div class="window-dots">
                                <span class="dot red"></span>
                                <span class="dot yellow"></span>
                                <span class="dot green"></span>
                            </div>
                            <div class="loan-steps">
                                <div class="step active">
                                    <span class="step-number">1</span>
                                    <span class="step-title">Loan Details</span>
                                </div>
                                <div class="step-line"></div>
                                <div class="step bg--black-300 color--grey">
                                    <span class="step-number">2</span>
                                </div>
                                <div class="step-line"></div>
                                <div class="step bg--black-300 color--grey">
                                    <span class="step-number">3</span>
                                </div>
                                <div class="step-line"></div>
                                <div class="step bg--black-300 color--grey">
                                    <span class="step-number">4</span>
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
                        <div class="text-start p-4">
                            <h4 class="fw-bolder mb-5 color--white">Enter Following Details</h4>
                            <p class="mb-30 color--grey mt-0">Kindly enter your details for personalized offers.</p>

                            <form method="post" action="{{ route('loan.agent.loan.details.store') }}"
                                class="request-form save-form-3 needs-validation request-main-form" novalidate>
                                <div class="row">
                                    <div class="col-md-12 range">
                                        <div class="range__value form-group-range r-10 w-100">
                                            <div class="form-group-range w-100 r-10">
                                                <span class="w-100 text-center color--green-500 py-1"></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="range mt-2 d-block">
                                        <div class="d-flex justify-content-between required-amount mt-4">
                                            <span class="text-uppercase s-12 mb-0 fw-normal color--grey">enter required
                                                amount</span>
                                            <span class="text-uppercase s-14 mb-0 fw-normal color--grey">₹50K – ₹10L</span>
                                        </div>
                                        <div class="form-group range__slider">
                                            <input type="range" step="10000">
                                            <input type="hidden" id="loanAmount" value="" name="loan_amount">
                                        </div>
                                        <div class="d-flex justify-content-between required-price">
                                            <span class="text-uppercase s-12 mb-2 mt-2 fw-normal color--grey">₹50,000</span>
                                            <span
                                                class="text-uppercase s-14 mb-2 mt-2 fw-normal color--grey">₹10,00,000</span>
                                        </div>

                                    </div>
                                    <!-- <div class="col-md-12 mt-4 mb-2 contact-form">
                                        <select class="form-select subject valid" aria-label="Default select example" aria-invalid="false" name="monthly_income">
                                            <option value="">Monthly Income (&#8377;)</option>
                                            <option value="0-15000">&#8377; 0 - 15,000</option>
                                            <option value="15000-30000">&#8377; 15,000 - 30,000</option>
                                            <option value="30000-45000">&#8377; 30,000 - 45,000</option>
                                            <option value="45000-55000">&#8377; 45,000 - 55,000</option>
                                            <option value="55000-70000">&#8377; 55,000 - 70,000</option>
                                            <option value="70000-85000">&#8377; 70,000 - 85,000</option>
                                            <option value="85000-100000">&#8377; 85,000 - 1,00,000</option>
                                            <option value="100000">&#8377; 1,00,000 +</option>
                                        </select>

                                    </div> -->
                                    <div class="col-md-12 mt-3 mb-2">
                                        <label for="form_mobile"
                                            class="position-static p-0 text-uppercase s-14 mb-2 color--grey text-start d-block">enter
                                            monthly income</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text px-4" id="basic-addon1">&#8377;</span>
                                            </div>
                                            <input type="text" name="monthly_income" id="monthly_income"
                                                class="numeric-input form-control mb-0 bg--blue-300"
                                                placeholder="Enter Monthly Income (&#8377;)" autocomplete="off"
                                                inputmode="numeric">
                                        </div>
                                        @component('components.ajax-error', ['field' => 'monthly_income'])
                                        @endcomponent
                                    </div>

                                    <div class="col-md-12 mb-2">
                                        <label for="form_mobile"
                                            class="position-static p-0 text-uppercase s-14 mb-2 color--grey text-start d-block">enter
                                            current emi (if any)</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text px-4" id="basic-addon1">&#8377;</span>
                                            </div>
                                            <input type="text" name="current_emi" id="current_emi" value=""
                                                class="numeric-input form-control mb-0 bg--blue-300"
                                                placeholder="Enter Current EMI (&#8377;) (If Any)" autocomplete="off"
                                                inputmode="numeric">
                                        </div>
                                    </div>

                                    <div class="col-md-12 form-btn mt-2">
                                        <button type="submit"
                                            class="btn btn--theme hover--theme submit processNowBtn r-12"
                                            id="processNowBtn"
                                            onclick="_tfa.push({notify: 'event', name: 'self_lead', id: 1776413})">Process
                                            Now <span class="fbox-ico ico-10"> <span
                                                    class="flaticon-right-arrow  ico-20 ms-1"></span></span></button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="py-20 gr--smoke">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-12 col-lg-12 col-xl-12">
                    <div class="form-holder">
                        <div class="contact-form-notice">
                            <p class="s-14">
                                Range of Loan tenure is up to 72 months with Annual Interest Rates ranging between 11% - 36%
                                and the processing fee up to 2%. For Example: Taking in consideration a personal loan of
                                Rs.1,00,000 availed at 11%* interest rate for a tenure of 6* years with 2%* processing fee,
                                the APR will be 11.75%*. *T&C Apply. All these numbers are tentative/indicative, the final
                                loan specifics may vary depending upon the customer profile and NBFCs’ criteria, rules &
                                regulations, and terms &amp; conditions.
                            </p>
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
            $('.save-form-3').submit(function(event) {
                var status = document.activeElement.innerHTML;
                event.preventDefault();
                if (status) {
                    $('.ajax-error').html('');
                    var data = new FormData(this);
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
                            $('#processNowBtn').html(
                                '<span class="spinner-border spinner-border-sm"></span> Process Now'
                                );
                            $('#processNowBtn').attr('disabled', true);
                        },
                        success: function(result) {
                            $(this).attr("disabled", false);
                            if (result.type === 'SUCCESS') {
                                window.location.href =
                                    `{{ route('loan.agent.personal.details') }}`;
                            } else {
                                toastr.error(result.message);
                                $('#processNowBtn').html('Process Now');
                                $('#processNowBtn').attr('disabled', false);
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
                            $('#processNowBtn').html('Process Now');
                            $('#processNowBtn').attr('disabled', false);
                        }
                    });
                }
            });
        })
    </script>
@endpush
