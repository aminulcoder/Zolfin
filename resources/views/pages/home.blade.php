@extends('components.layout')


@section('content')
        <!-- Hero  -->
        @include('components.hero')
        <!-- Hero End -->

        <!-- Project Showcase -->
        @include('components.projects')
        <!-- Project Showcase -->

        <!-- About  -->
        @include('components.we')
        <!-- About End -->

        <!-- Service  -->
        @include('components.service')
        <!-- Service End -->

        <!-- Project  -->
        @include('components.project')
        <!-- Project End -->

        <!-- Pricing  -->
        <section class="t-pt-115 t-bg-light overflow-hidden" >
            <div class="container">
                <div class="row">
                    <div class="col-12 text-center" data-sal="slide-down" data-sal-duration="1300">
                        <span
                            class="t-link bttn-primary-transparent bttn-round bttn-xsm text-uppercase"
                        >
                            our project
                        </span>
                        <h2 class="text-capitalize t-mt-15 mb-0">
                            our creative
                            <span class="t-text-primary">projects</span>
                        </h2>
                    </div>
                </div>
                <div class="row t-mt-85 justify-content-center">
                    <div class="col-12 col-md-6 text-center">
                        <div class="list-group flex-row justify-content-center">
                            <a
                                href="#monthly"
                                class="t-mr-25 t-link bttn bttn-md bttn-round bttn-light text-capitalize active"
                                data-toggle="list"
                            >
                                monthly
                            </a>
                            <a
                                href="#yearly"
                                class="t-link bttn bttn-md bttn-round bttn-light text-capitalize"
                                data-toggle="list"
                            >
                                yearly
                            </a>
                        </div>
                    </div>
                </div>
                <div class="row t-mt-30">
                    <div class="col-12">
                        <div class="tab-content" id="nav-tabContent">
                            <div class="tab-pane fade show active" id="monthly">
                                <div class="row">
                                    <div
                                        class="col-md-6 col-lg-4 t-mb-30 mb-lg-0"
                                    >
                                        <div class="price-card border">
                                            <div
                                                class="price-card__img mx-auto"
                                            >
                                                <img
                                                    src="assets/img/price-img-1.png"
                                                    alt="zolfin"
                                                    class="img-fluid w-100"
                                                />
                                            </div>
                                            <div
                                                class="price-card__price t-bg-beta"
                                            >
                                                <span
                                                    class="price-card__price-title"
                                                >
                                                    $29
                                                    <span
                                                        class="price-card__price-title-sm"
                                                    >
                                                        per month
                                                    </span>
                                                </span>
                                            </div>
                                            <div
                                                class="price-card__body t-pt-30"
                                            >
                                                <ul
                                                    class="t-list price-list price-list--column"
                                                >
                                                    <li
                                                        class="price-list__item"
                                                    >
                                                        50+ Pro Widgets
                                                    </li>
                                                    <li
                                                        class="price-list__item"
                                                    >
                                                        300+ Pro Templates
                                                    </li>
                                                    <li
                                                        class="price-list__item"
                                                    >
                                                        Theme Builder
                                                    </li>
                                                    <li
                                                        class="price-list__item"
                                                    >
                                                        WooCommerce Builder
                                                    </li>
                                                    <li
                                                        class="price-list__item"
                                                    >
                                                        Support for 1 Year
                                                    </li>
                                                    <li
                                                        class="price-list__item"
                                                    >
                                                        Updates for 1 Year
                                                    </li>
                                                </ul>
                                            </div>
                                            <div
                                                class="price-card__footer t-pt-30 text-center"
                                            >
                                                <a
                                                    href="price.html"
                                                    class="t-link bttn bttn-md bttn-round bttn-beta-transparent text-capitalize"
                                                >
                                                    start free trial
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div
                                        class="col-md-6 col-lg-4 t-mb-30 mb-lg-0"
                                    >
                                        <div class="price-card border">
                                            <div
                                                class="price-card__img mx-auto"
                                            >
                                                <img
                                                    src="assets/img/price-img-2.png"
                                                    alt="zolfin"
                                                    class="img-fluid w-100"
                                                />
                                            </div>
                                            <div
                                                class="price-card__price t-bg-primary"
                                            >
                                                <span
                                                    class="price-card__price-title"
                                                >
                                                    $80
                                                    <span
                                                        class="price-card__price-title-sm"
                                                    >
                                                        per month
                                                    </span>
                                                </span>
                                            </div>
                                            <div
                                                class="price-card__body t-pt-30"
                                            >
                                                <ul
                                                    class="t-list price-list price-list--column"
                                                >
                                                    <li
                                                        class="price-list__item"
                                                    >
                                                        50+ Pro Widgets
                                                    </li>
                                                    <li
                                                        class="price-list__item"
                                                    >
                                                        300+ Pro Templates
                                                    </li>
                                                    <li
                                                        class="price-list__item"
                                                    >
                                                        Theme Builder
                                                    </li>
                                                    <li
                                                        class="price-list__item"
                                                    >
                                                        WooCommerce Builder
                                                    </li>
                                                    <li
                                                        class="price-list__item"
                                                    >
                                                        Support for 1 Year
                                                    </li>
                                                    <li
                                                        class="price-list__item"
                                                    >
                                                        Updates for 1 Year
                                                    </li>
                                                </ul>
                                            </div>
                                            <div
                                                class="price-card__footer t-pt-30 text-center"
                                            >
                                                <a
                                                    href="price.html"
                                                    class="t-link bttn bttn-md bttn-round bttn-primary text-capitalize"
                                                    tabindex="0"
                                                >
                                                    get started
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-lg-4">
                                        <div class="price-card border">
                                            <div
                                                class="price-card__img mx-auto"
                                            >
                                                <img
                                                    src="assets/img/price-img-3.png"
                                                    alt="zolfin"
                                                    class="img-fluid w-100"
                                                />
                                            </div>
                                            <div
                                                class="price-card__price t-bg-gamma"
                                            >
                                                <span
                                                    class="price-card__price-title"
                                                >
                                                    $99
                                                    <span
                                                        class="price-card__price-title-sm"
                                                    >
                                                        per month
                                                    </span>
                                                </span>
                                            </div>
                                            <div
                                                class="price-card__body t-pt-30"
                                            >
                                                <ul
                                                    class="t-list price-list price-list--column"
                                                >
                                                    <li
                                                        class="price-list__item"
                                                    >
                                                        50+ Pro Widgets
                                                    </li>
                                                    <li
                                                        class="price-list__item"
                                                    >
                                                        300+ Pro Templates
                                                    </li>
                                                    <li
                                                        class="price-list__item"
                                                    >
                                                        Theme Builder
                                                    </li>
                                                    <li
                                                        class="price-list__item"
                                                    >
                                                        WooCommerce Builder
                                                    </li>
                                                    <li
                                                        class="price-list__item"
                                                    >
                                                        Support for 1 Year
                                                    </li>
                                                    <li
                                                        class="price-list__item"
                                                    >
                                                        Updates for 1 Year
                                                    </li>
                                                </ul>
                                            </div>
                                            <div
                                                class="price-card__footer t-pt-30 text-center"
                                            >
                                                <a
                                                    href="price.html"
                                                    class="t-link bttn bttn-md bttn-round bttn-gamma-transparent text-capitalize"
                                                >
                                                    start free trial
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="yearly">
                                <div class="row">
                                    <div
                                        class="col-md-6 col-lg-4 t-mb-30 mb-lg-0"
                                    >
                                        <div class="price-card border">
                                            <div
                                                class="price-card__img mx-auto"
                                            >
                                                <img
                                                    src="assets/img/price-img-1.png"
                                                    alt="zolfin"
                                                    class="img-fluid w-100"
                                                />
                                            </div>
                                            <div
                                                class="price-card__price t-bg-beta"
                                            >
                                                <span
                                                    class="price-card__price-title"
                                                >
                                                    $99
                                                    <span
                                                        class="price-card__price-title-sm"
                                                    >
                                                        per month
                                                    </span>
                                                </span>
                                            </div>
                                            <div
                                                class="price-card__body t-pt-30"
                                            >
                                                <ul
                                                    class="t-list price-list price-list--column"
                                                >
                                                    <li
                                                        class="price-list__item"
                                                    >
                                                        50+ Pro Widgets
                                                    </li>
                                                    <li
                                                        class="price-list__item"
                                                    >
                                                        300+ Pro Templates
                                                    </li>
                                                    <li
                                                        class="price-list__item"
                                                    >
                                                        Theme Builder
                                                    </li>
                                                    <li
                                                        class="price-list__item"
                                                    >
                                                        WooCommerce Builder
                                                    </li>
                                                    <li
                                                        class="price-list__item"
                                                    >
                                                        Support for 1 Year
                                                    </li>
                                                    <li
                                                        class="price-list__item"
                                                    >
                                                        Updates for 1 Year
                                                    </li>
                                                </ul>
                                            </div>
                                            <div
                                                class="price-card__footer t-pt-30 text-center"
                                            >
                                                <a
                                                    href="price.html"
                                                    class="t-link bttn bttn-md bttn-round bttn-beta-transparent text-capitalize"
                                                >
                                                    start free trial
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div
                                        class="col-md-6 col-lg-4 t-mb-30 mb-lg-0"
                                    >
                                        <div class="price-card border">
                                            <div
                                                class="price-card__img mx-auto"
                                            >
                                                <img
                                                    src="assets/img/price-img-2.png"
                                                    alt="zolfin"
                                                    class="img-fluid w-100"
                                                />
                                            </div>
                                            <div
                                                class="price-card__price t-bg-primary"
                                            >
                                                <span
                                                    class="price-card__price-title"
                                                >
                                                    $120
                                                    <span
                                                        class="price-card__price-title-sm"
                                                    >
                                                        per month
                                                    </span>
                                                </span>
                                            </div>
                                            <div
                                                class="price-card__body t-pt-30"
                                            >
                                                <ul
                                                    class="t-list price-list price-list--column"
                                                >
                                                    <li
                                                        class="price-list__item"
                                                    >
                                                        50+ Pro Widgets
                                                    </li>
                                                    <li
                                                        class="price-list__item"
                                                    >
                                                        300+ Pro Templates
                                                    </li>
                                                    <li
                                                        class="price-list__item"
                                                    >
                                                        Theme Builder
                                                    </li>
                                                    <li
                                                        class="price-list__item"
                                                    >
                                                        WooCommerce Builder
                                                    </li>
                                                    <li
                                                        class="price-list__item"
                                                    >
                                                        Support for 1 Year
                                                    </li>
                                                    <li
                                                        class="price-list__item"
                                                    >
                                                        Updates for 1 Year
                                                    </li>
                                                </ul>
                                            </div>
                                            <div
                                                class="price-card__footer t-pt-30 text-center"
                                            >
                                                <a
                                                    href="price.html"
                                                    class="t-link bttn bttn-md bttn-round bttn-primary text-capitalize"
                                                    tabindex="0"
                                                >
                                                    get started
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-lg-4">
                                        <div class="price-card border">
                                            <div
                                                class="price-card__img mx-auto"
                                            >
                                                <img
                                                    src="assets/img/price-img-3.png"
                                                    alt="zolfin"
                                                    class="img-fluid w-100"
                                                />
                                            </div>
                                            <div
                                                class="price-card__price t-bg-gamma"
                                            >
                                                <span
                                                    class="price-card__price-title"
                                                >
                                                    $199
                                                    <span
                                                        class="price-card__price-title-sm"
                                                    >
                                                        per month
                                                    </span>
                                                </span>
                                            </div>
                                            <div
                                                class="price-card__body t-pt-30"
                                            >
                                                <ul
                                                    class="t-list price-list price-list--column"
                                                >
                                                    <li
                                                        class="price-list__item"
                                                    >
                                                        50+ Pro Widgets
                                                    </li>
                                                    <li
                                                        class="price-list__item"
                                                    >
                                                        300+ Pro Templates
                                                    </li>
                                                    <li
                                                        class="price-list__item"
                                                    >
                                                        Theme Builder
                                                    </li>
                                                    <li
                                                        class="price-list__item"
                                                    >
                                                        WooCommerce Builder
                                                    </li>
                                                    <li
                                                        class="price-list__item"
                                                    >
                                                        Support for 1 Year
                                                    </li>
                                                    <li
                                                        class="price-list__item"
                                                    >
                                                        Updates for 1 Year
                                                    </li>
                                                </ul>
                                            </div>
                                            <div
                                                class="price-card__footer t-pt-30 text-center"
                                            >
                                                <a
                                                    href="price.html"
                                                    class="t-link bttn bttn-md bttn-round bttn-gamma-transparent text-capitalize"
                                                >
                                                    start free trial
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Pricing End -->

        <!-- Counter UP -->
        <div class="t-pt-130 t-bg-light overflow-hidden" >
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-lg-3 t-mb-30 mb-lg-0" data-sal="slide-right" data-sal-duration="1300">
                        <div
                            class="counter-card border d-flex align-items-center"
                        >
                            <div
                                class="counter-card__icon-box t-bg-primary t-mr-16"
                            >
                                <span class="counter-card__icon t-text-light">
                                    <i class="las la-handshake"></i>
                                </span>
                            </div>
                            <div class="counter-card__text">
                                <h4 class="mt-0 t-text-primary t-mb-10">
                                    100%
                                </h4>
                                <p class="mb-0 text-capitalize">
                                    Client Satisfaction
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3 t-mb-30 mb-lg-0" data-sal="slide-down" data-sal-duration="1300">
                        <div
                            class="counter-card border d-flex align-items-center"
                        >
                            <div
                                class="counter-card__icon-box t-bg-beta t-mr-16"
                            >
                                <span class="counter-card__icon t-text-light">
                                    <i class="las la-tools"></i>
                                </span>
                            </div>
                            <div class="counter-card__text">
                                <h4 class="mt-0 t-text-beta t-mb-10">500+</h4>
                                <p class="mb-0 text-capitalize">
                                    completed project
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3 t-mb-30 mb-lg-0" data-sal="slide-up" data-sal-duration="1300">
                        <div
                            class="counter-card border d-flex align-items-center"
                        >
                            <div
                                class="counter-card__icon-box t-bg-gamma t-mr-16"
                            >
                                <span class="counter-card__icon t-text-light">
                                    <i class="las la-headset"></i>
                                </span>
                            </div>
                            <div class="counter-card__text">
                                <h4 class="mt-0 t-text-gamma t-mb-10">24H</h4>
                                <p class="mb-0 text-capitalize">support team</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3 t-mb-30 mb-lg-0" data-sal="slide-left" data-sal-duration="1300">
                        <div
                            class="counter-card border d-flex align-items-center"
                        >
                            <div
                                class="counter-card__icon-box t-bg-delta t-mr-16"
                            >
                                <span class="counter-card__icon t-text-light">
                                    <i class="las la-globe"></i>
                                </span>
                            </div>
                            <div class="counter-card__text">
                                <h4 class="mt-0 t-text-delta t-mb-10">100k</h4>
                                <p class="mb-0 text-capitalize">
                                    client worldwide
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Counter UP End -->

        <!-- Testimonial  -->
        <div class="t-pt-130 t-pb-70 t-bg-light overflow-hidden" >
            <div class="container">
                <div class="row">
                    <div class="col-12 text-center text-lg-left" data-sal="slide-down" data-sal-duration="1300">
                        <span
                            class="t-link bttn-primary-transparent bttn-round bttn-xsm text-uppercase"
                        >
                            testimonial
                        </span>
                        <h2 class="text-capitalize t-mt-15 mb-0">
                            our client
                            <span class="t-text-primary">Says</span>
                        </h2>
                    </div>
                </div>
            </div>
            <div class="container t-mt-70" data-sal="slide-up" data-sal-duration="1300">
                <div class="row">
                    <div class="col-12">
                        <div class="testimonials-slider">
                            <div class="testimonials-slider__item">
                                <div class="testimonials">
                                    <div
                                        class="testimonials__img-box mx-auto ml-md-0 mr-md-3"
                                    >
                                        <img
                                            src="assets/img/user-2.jpg"
                                            alt="zolfin"
                                            class="img-fluid w-100"
                                        />
                                    </div>
                                    <div
                                        class="testimonials__content t-mt-30 mt-md-0"
                                    >
                                        <h6
                                            class="mt-0 t-text-primary text-capitalize text-center text-md-left"
                                        >
                                            Christ Deo
                                        </h6>
                                        <p
                                            class="xsm-text text-capitalize text-center text-md-left"
                                        >
                                            Senior UI Engineer, SoftTech-IT
                                        </p>
                                        <p
                                            class="mb-0 text-center text-md-left"
                                        >
                                            Zolfin is a gread Agency move smooth
                                            and headache-free it's a relief not
                                            to worry about fronting your
                                            roommates rent or utilities sed
                                            perspiciatis unde.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="testimonials-slider__item">
                                <div class="testimonials">
                                    <div
                                        class="testimonials__img-box mx-auto ml-md-0 mr-md-3"
                                    >
                                        <img
                                            src="assets/img/user-3.jpg"
                                            alt="zolfin"
                                            class="img-fluid w-100"
                                        />
                                    </div>
                                    <div
                                        class="testimonials__content t-mt-30 mt-md-0"
                                    >
                                        <h6
                                            class="mt-0 t-text-primary text-capitalize text-center text-md-left"
                                        >
                                            Christ Deo
                                        </h6>
                                        <p
                                            class="xsm-text text-capitalize text-center text-md-left"
                                        >
                                            Senior UI Engineer, SoftTech-IT
                                        </p>
                                        <p
                                            class="mb-0 text-center text-md-left"
                                        >
                                            Zolfin is a gread Agency move smooth
                                            and headache-free it's a relief not
                                            to worry about fronting your
                                            roommates rent or utilities sed
                                            perspiciatis unde.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="testimonials-slider__item">
                                <div class="testimonials">
                                    <div
                                        class="testimonials__img-box mx-auto ml-md-0 mr-md-3"
                                    >
                                        <img
                                            src="assets/img/user.jpg"
                                            alt="zolfin"
                                            class="img-fluid w-100"
                                        />
                                    </div>
                                    <div
                                        class="testimonials__content t-mt-30 mt-md-0"
                                    >
                                        <h6
                                            class="mt-0 t-text-primary text-capitalize text-center text-md-left"
                                        >
                                            Christ Deo
                                        </h6>
                                        <p
                                            class="xsm-text text-capitalize text-center text-md-left"
                                        >
                                            Senior UI Engineer, SoftTech-IT
                                        </p>
                                        <p
                                            class="mb-0 text-center text-md-left"
                                        >
                                            Zolfin is a gread Agency move smooth
                                            and headache-free it's a relief not
                                            to worry about fronting your
                                            roommates rent or utilities sed
                                            perspiciatis unde.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Testimonial End -->

        <!-- Process  -->
        <div class="t-pt-115 overflow-hidden" >
            <div class="container">
                <div class="row">
                    <div class="col-12 text-center" data-sal="slide-down" data-sal-duration="1300">
                        <span
                            class="t-link bttn-primary-transparent bttn-round bttn-xsm text-uppercase"
                        >
                            work in progress
                        </span>
                        <h2 class="text-capitalize t-mt-15 mb-0">
                            our working
                            <span class="t-text-primary">process</span>
                        </h2>
                    </div>
                </div>
                <div class="row t-mt-85 zl-process">
                    <div class="col-md-6 col-lg-3 t-mb-30 mb-lg-0">
                        <div class="price-card border t-bg-light">
                            <div class="price-card__img text-center mx-auto">
                                <a href="#" class="t-link">
                                    <img
                                        src="assets/img/process-icon-1.png"
                                        alt="zolfin"
                                        class="img-fluid w-100"
                                    />
                                </a>
                            </div>
                            <div class="price-card__news-body">
                                <h5 class="t-mt-0 text-capitalize text-center">
                                    research Project
                                </h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3 t-mb-30 mb-lg-0 align-self-xl-end">
                        <div class="price-card border t-bg-light">
                            <div class="price-card__img text-center mx-auto">
                                <a href="#" class="t-link">
                                    <img
                                        src="assets/img/process-icon-2.png"
                                        alt="zolfin"
                                        class="img-fluid w-100"
                                    />
                                </a>
                            </div>
                            <div class="price-card__news-body">
                                <h5 class="t-mt-0 text-capitalize text-center">
                                    Find Creative Idea
                                </h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3 t-mb-30 mb-lg-0">
                        <div class="price-card border t-bg-light">
                            <div class="price-card__img text-center mx-auto">
                                <a href="#" class="t-link">
                                    <img
                                        src="assets/img/process-icon-3.png"
                                        alt="zolfin"
                                        class="img-fluid w-100"
                                    />
                                </a>
                            </div>
                            <div class="price-card__news-body">
                                <h5 class="t-mt-0 text-capitalize text-center">
                                    Start Optimize
                                </h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3 t-mb-30 mb-lg-0 align-self-xl-end">
                        <div class="price-card border t-bg-light">
                            <div class="price-card__img text-center mx-auto">
                                <a href="#" class="t-link">
                                    <img
                                        src="assets/img/process-icon-4.png"
                                        alt="zolfin"
                                        class="img-fluid w-100"
                                    />
                                </a>
                            </div>
                            <div class="price-card__news-body">
                                <h5 class="t-mt-0 text-capitalize text-center">
                                    Reach Target
                                </h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Process End -->

        <!-- News  -->
        <div class="t-pt-130 t-pb-130 overflow-hidden" >
            <div class="container">
                <div class="row">
                    <div class="col-12" data-sal="slide-down" data-sal-duration="1300">
                        <span
                            class="t-link bttn-primary-transparent bttn-round bttn-xsm text-uppercase"
                        >
                            blog
                        </span>
                        <h2 class="text-capitalize t-mt-15 mb-0">
                            from our
                            <span class="t-text-primary">news</span>
                        </h2>
                    </div>
                </div>
                <div class="row t-mt-70 ">
                    <div class="col-md-4 t-mb-30 mb-md-0">
                        <div class="price-card border t-bg-light">
                            <div class="price-card__img mx-auto">
                                <a href="blog-details.html" class="t-link">
                                    <img
                                        src="assets/img/price-img-1.png"
                                        alt="zolfin"
                                        class="img-fluid w-100"
                                    />
                                </a>
                            </div>
                            <div
                                class="price-card__news-body text-center text-lg-left"
                            >
                                <h4 class="t-mt-0">
                                    <a
                                        href="blog-details.html"
                                        class="t-link t-link--alpha"
                                    >
                                        They're getting to know you by way of
                                    </a>
                                </h4>
                                <a
                                    href="#"
                                    class="t-link t-link-alpha xsm-text"
                                >
                                    <i class="las la-calendar-alt"></i>
                                    28 June 2019
                                </a>
                            </div>

                            <div
                                class="price-card__footer t-pt-30 text-center text-lg-left"
                            >
                                <a
                                    href="blog-details.html"
                                    class="t-link bttn bttn-md bttn-round bttn-primary text-capitalize"
                                >
                                    read more
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 t-mb-30 mb-md-0">
                        <div class="price-card border t-bg-light">
                            <div class="price-card__img mx-auto">
                                <a href="blog-details.html" class="t-link">
                                    <img
                                        src="assets/img/price-img-2.png"
                                        alt="zolfin"
                                        class="img-fluid w-100"
                                    />
                                </a>
                            </div>
                            <div
                                class="price-card__news-body text-center text-lg-left"
                            >
                                <h4 class="t-mt-0">
                                    <a
                                        href="blog-details.html"
                                        class="t-link t-link--alpha"
                                    >
                                        Why Use Socail Media Marketing for
                                        business
                                    </a>
                                </h4>
                                <a
                                    href="#"
                                    class="t-link t-link-alpha xsm-text text-center text-lg-left"
                                >
                                    <i class="las la-calendar-alt"></i>
                                    28 June 2019
                                </a>
                            </div>

                            <div
                                class="price-card__footer t-pt-30 text-center text-lg-left"
                            >
                                <a
                                    href="blog-details.html"
                                    class="t-link bttn bttn-md bttn-round bttn-primary text-capitalize"
                                >
                                    read more
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 t-mb-30 mb-md-0">
                        <div class="price-card border t-bg-light">
                            <div class="price-card__img mx-auto">
                                <a href="blog-details.html" class="t-link">
                                    <img
                                        src="assets/img/price-img-3.png"
                                        alt="zolfin"
                                        class="img-fluid w-100"
                                    />
                                </a>
                            </div>
                            <div
                                class="price-card__news-body text-center text-lg-left"
                            >
                                <h4 class="t-mt-0">
                                    <a
                                        href="blog-details.html"
                                        class="t-link t-link--alpha"
                                    >
                                        They're getting to know you by way of
                                    </a>
                                </h4>
                                <a
                                    href="#"
                                    class="t-link t-link-alpha xsm-text"
                                >
                                    <i class="las la-calendar-alt"></i>
                                    28 June 2019
                                </a>
                            </div>

                            <div
                                class="price-card__footer t-pt-30 text-center text-lg-left"
                            >
                                <a
                                    href="blog-details.html"
                                    class="t-link bttn bttn-md bttn-round bttn-primary text-capitalize"
                                >
                                    read more
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- News End -->

        <!-- CTA  -->
        <div class="zl-cta">
            <div class="container-fluid">
                <div class="row justify-content-center">
                    <div class="col-xl-9">
                        <div class="zl-cta__container">
                            <div class="row">
                                <div class="col-md-7 ">
                                    <div class="zl-cta__left">
                                        <div class="zl-cta__left-img">
                                            <img src="assets/img/cta-img.png" alt="zolfin" class="img-fluid h-100 w-100">
                                        </div>
                                        <h2 class="mt-0 text-capitalize mb-0">
                                            Ready to Work Together?
                                        </h2>
                                        <a href="contact.html" class="t-link bttn bttn-md bttn-round bttn-primary text-capitalize t-mt-30">
                                            get started
                                        </a>
                                    </div>
                                </div>
                                <div class="col-md-5 col-xl-4 ml-xl-auto t-pt-15 t-pb-15">
                                    <ul class="t-list h-100 d-flex flex-column justify-content-center">
                                        <li class="t-mb-15">
                                            <div class="d-flex align-items-center">
                                                <div class="counter-card__icon-box t-bg-primary t-mr-16">
                                                    <span class="counter-card__icon t-text-light">
                                                        <i class="las la-envelope-open"></i>
                                                    </span>
                                                </div>
                                                <div class="counter-card__text">
                                                    <h6 class="mt-0 t-mb-10">
                                                        zolfin@com
                                                    </h6>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="d-flex align-items-center">
                                                <div class="counter-card__icon-box t-bg-primary t-mr-16">
                                                    <span class="counter-card__icon t-text-light">
                                                        <i class="las la-headphones"></i>
                                                    </span>
                                                </div>
                                                <div class="counter-card__text">
                                                    <h6 class="mt-0 t-mb-10">
                                                        123 2897 22
                                                    </h6>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- CTA End -->

@endsection  