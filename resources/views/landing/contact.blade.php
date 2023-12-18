@extends('landing.template')

@section('title', 'Home')

@section('head')
    <link rel="stylesheet" href="{{ asset('/public/css.landing/contact.css') }}">
@endsection

@section('content')
    <section class="form">
        <div class="container">
            <h3>Contact Us</h3>
            <p>You can contact us by filling the form below. We will get back to you as soon as possible.</p>
            <div class="cols">
                <div class="col">
                    <form action="#" onsubmit="return false">
                        <div class="head"><i class="fas fa-envelope"></i></div>
                        <div class="input">
                            <label for="name">Name <b>*</b></label>
                            <input type="text" name="name" id="name" placeholder="Enter your name">
                        </div>
                        <div class="row">
                            <div class="input">
                                <label for="email">Email <b>*</b></label>
                                <input type="email" name="email" id="email" placeholder="Enter your email">
                            </div>
                            <div class="input">
                                <label for="phone">Phone <b>*</b></label>
                                <input type="text" name="phone" id="phone" placeholder="Enter your phone">
                            </div>
                        </div>
                        <div class="input">
                            <label for="message">Message <b>*</b></label>
                            <textarea name="message" id="message" cols="30" rows="10" placeholder="Enter your message"></textarea>
                        </div>
                        <div class="input">
                            <p class="msg" id="el-msg"></p>
                        </div>
                        <div class="input">
                            <button type="submit">
                                <span>Send</span>
                                <i class="fas fa-paper-plane"></i>
                            </button>
                        </div>
                    </form>
                </div>
                <div class="col">
                    <div class="contacts">
                        <div class="head"><i class="fas fa-map-marker-alt"></i></div>
                        <ul>
                            @foreach ($contacts as $contact)
                                <li>
                                    <a href={{ $contact->contact_link }} style="color: {{ $contact->contact_color }}"
                                        target="_blank">
                                        <i class="fas fa-{{ $contact->contact_icon }}"></i>
                                        <span><b>{{ $contact->contact_name }}: </b>{{ $contact->contact_value }}</span>
                                    </a>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>


@endsection
