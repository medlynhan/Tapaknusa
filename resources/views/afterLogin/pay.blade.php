@extends('afterLogin.app')    
@section('title', 'Tapaknusa')

@section('content')

    <!-- Header -->
    @php
        $totalDue = 0;
    @endphp

    <div class="checkout-container page-padding-left-right page-padding-top">
        <!-- Summary Section -->
        
        <div class="summary animated fadeInDown">
            
            <section class="back-btn-section btn-back-payment  fadeInDown2 ">
                <button class="back-btn" onclick="window.history.back()"><i class="fi fi-br-angle-left big-text-font black"></i></button>
                <h2 class="big-text-font black">Checkout</h2>
                
            </section>
            <div id="cart-items">
        @foreach($allItems as $ticket)
            <div class="item">
                <div>
                    <div class="image-pay"><img src="{{$ticket->image1}}" alt=""></div>
                </div>
                <div>
                    <h3 class="head-title big-text-font black"><span>{{$ticket->quantity}} </span>{{ $ticket->ticket_title }}</h3>
                    <div class="image"></div>
                    <h3 class="medium-text-font black bold title">{{ $ticket->attraction_title }}</h3>
                    <div class="price medium-text-font bold red">
                        <p><span>Rp </span>{{ number_format($ticket->price * $ticket->quantity, 0, ',', '.') }}<span>,00 </span></p>
                    </div>
                    <div class="btn-quantity big-text-font" data-attribute="{{ $ticket->ticket_title }}">
                        <p><span>Rp </span>{{ number_format($ticket->price * $ticket->quantity, 0, ',', '.') }}<span>,00 </span></p>
                    </div>
                </div>
            </div>
             @php
                $totalDue += $ticket->price * $ticket->quantity; // Menambahkan harga tiket per item ke total due
            @endphp
        @endforeach
            </div>
            <div class="total-due">
                <p class="big-text-font black">Total due</p>
                <p id="total-due-amount" class="small-heading-font red bold">Rp <span>{{ number_format($totalDue, 0, ',', '.') }}</span>,00</p>
            </div>
        </div>

        <!-- Payment Section -->
        <div class="payment page-padding-left-right fadeInDown">
            <h2 class="big-text-font black">Pilih Metode Pembayaran</h2>
            <div class="payment-section">
                <h3 class="big-text-font bold-weight black">E-Wallet</h3>
                <div class="payment-options medium-text-font black">
                    <label>
                        <input type="radio" name="payment" value="gopay">
                        <img src="{{secure_asset('asset/gopay.png')}}" alt="GoPay Icon" />
                        Gopay
                    </label>
                    <label>
                        <input type="radio" name="payment" value="shopeepay">
                        <img src="{{secure_asset('asset/shopee.jpg')}}" alt="ShopeePay Icon" />
                        Shopeepay
                    </label>
                    <label>
                        <input type="radio" name="payment" value="ovo">
                        <img src="{{secure_asset('asset/ovo.webp')}}" alt="OVO Icon" />
                        OVO
                    </label>
                </div>
            </div>
    
            <!-- Virtual Account Payment Section -->
            <div class="payment-section black ">
                <h3 class="big-text-font bold-weight black">Virtual Account</h3>
                <div class="payment-options medium-text-font black">
                    <label>
                        <input type="radio" name="payment" value="bca">
                        <img src="{{secure_asset('asset/BCA.jpg')}}" alt="BCA Icon" />
                        BCA Virtual Account
                    </label>
                    <label>
                        <input type="radio" name="payment" value="mandiri">
                        <img src="{{secure_asset('asset/mandiri.webp')}}" alt="Mandiri Icon" />
                        Mandiri Virtual Account
                    </label>
                </div>
            </div>
    
            <!-- Submit Button -->
            <form action="{{ route('home') }}" method="GET" class="form-button-pay">
                <button type="submit" id="pay-btn" class="medium-text-font black">Bayar</button>
            </form>  
        </div>
    </div>

    <!-- Pop-up Modal -->
    <div class="overlay " id="overlay"></div>
    
    <div class="popup medium-text-font " id="popup">

        <span class="close big-text-font" id="closeLogin">&times;</span>
        <div>
            
            <h3 class="small-heading-font ">Pembayaran Berhasil!</h3>
            <p>Terima kasih telah melakukan pembayaran.</p>
        </div>
    </div>
@endsection

@php  
     $hideHeader = true;
     $hideFooter = true;
@endphp
