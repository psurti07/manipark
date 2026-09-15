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
            color: #1E93E0 !important;
            border: none;
            background-color: #1A2333 !important;
            line-height: 1.3;
            border-top-left-radius: 5px;
            border-bottom-left-radius: 5px;
            border-top-right-radius: 0px;
            border-bottom-right-radius: 0px;
            border-right: 1.21px solid #232C3D;
            height: 100%;
        }

        /*@media screen and (max-width:991px){
                .input-group-text{ padding:1.06rem 1.06rem; }
            }
            @media screen and (min-width:992px) and (max-width:1199px){
                .input-group-text{ padding:1rem 1rem;margin-top:1px; }
            }*/
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
                                            <span class="text-uppercase s-12 mb-0 fw-normal color--white">enter required
                                                amount</span>
                                            <span class="text-uppercase s-14 mb-0 fw-normal color--white">₹50K – ₹10L</span>
                                        </div>
                                        <div class="form-group range__slider">
                                            <input type="range" step="10000">
                                            <input type="hidden" id="loanAmount" value="" name="loan_amount">
                                        </div>
                                        <div class="d-flex justify-content-between required-price">
                                            <span
                                                class="text-uppercase s-12 mb-2 mt-2 fw-normal color--white">₹50,000</span>
                                            <span
                                                class="text-uppercase s-14 mb-2 mt-2 fw-normal color--white">₹10,00,000</span>
                                        </div>

                                    </div>

                                    <div class="col-md-6 mb-2">
                                        <label for="form_mobile"
                                            class="position-static p-0 text-uppercase s-14 mb-2 color--white text-start d-block">enter
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

                                    <div class="col-md-6 mb-2">
                                        <label for="form_mobile"
                                            class="position-static p-0 text-uppercase s-14 mb-2 color--white text-start d-block">enter
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
