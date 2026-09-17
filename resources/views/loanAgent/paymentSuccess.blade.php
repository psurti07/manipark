@extends('layouts.selfapply')
@push('css')
@endpush

@section('content')
<section id="contacts" class="bg--blue-300 personal-details-form pb-80 inner-page-hero contacts-section division">
    <div class="container">
        <div class="row align-items-center justify-content-center">
            <div class="col-md-7 col-lg-7 col-12 m-auto">
                <div class="bg-white p-4 text-start r-24">
                    <div class="card-body">
                        <div class="text-center mb-20">
                            <div class="mb-20">
                                <i class="far fa-check-circle display-1 color--green-300"></i>
                            </div>
                            <h3 class="fw-bolder color--green-300 mb-0">Congratulations!,</h3>
                            <h3 class="fw-bolder color--green-300 mb-15">Payment Successful!</h3>
                            <p class="mb-0 ">Your payment has been successfully processed.</p>
                            <p class="mb-0  mt-1">You can now access your pre-approved offers.</p>
                        </div>
                        <div class="text-center mb-20">
                            <div class="row g-3">
                                <div class="col-lg-4 col-md-4 col-12">
                                    <div class="rounded-4 p-2 bg--blue-300 h-100">
                                        <p class="s-14 fw-bold mb-2 color--white">Customer Portal</p>
                                        <p class="s-14 color--white">Your service is active. Log in to the portal.</p>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-12">
                                    <div class="rounded-4 p-2 bg--blue-300 h-100">
                                        <p class="s-14 fw-bold mb-2 color--white">Invoice</p>
                                        <p class="s-14 color--white">Invoice is available for download in portal.</p>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-12">
                                    <div class="rounded-4 p-2 bg--blue-300 h-100">
                                        <p class="s-14 fw-bold mb-2 color--white">Consultant</p>
                                        <p class="s-14 color--white">Our team will contact you within 24 hrs.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="text-center">
                            <a href="{{ route('customer.authenticate2') }}"
                                class="btn btn-sm  r-12 btn--theme hover--tra-white">Access Pre-Approved Offers!</a>
                            <div class="mt-3"> <a href="{{ route('front.raise.request') }}" class="color--white">Start
                                    a new application <span class="fbox-ico ico-10"> <span
                                            class="flaticon-right-arrow  ico-20 ms-1"></span></span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</section>
@endsection
