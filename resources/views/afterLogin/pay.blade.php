@extends('afterLogin.app')    
@section('title', 'Tapaknusa')

@section('content')

    <!-- Header -->
    <section class="back-btn-section page-padding-left-right fadeInDown2 page-padding-top">
        <button class="back-btn" onclick="window.history.back()"><i class="fi fi-br-angle-left big-text-font black"></i></button>
    </section>

    <div class="checkout-container page-padding-left-right page-padding-top">
        <!-- Summary Section -->
        <div class="summary animated fadeInDown">
            <h2 class="big-text-font black">Checkout</h2>
            <h1 id="total-amount black" class="sub-heading-font red">Rp 0,00</h1>
            <div id="cart-items">
                <div class="item">
                    <h3 class="head-title superbig-text-font black">Ticket Title</h3>
                    <div class="image"></div>
                    <h3 class="big-text-font black bold title">${ticket.title}</h3>
                    <div class="price big-text-font bold red ">
                        <p><span>Rp </span>${ticket.price}<span>,00 </span></p>
                    </div>
                    <div class="btn-quantity big-text-font" data-attribute="${ticket.title}">
                        <p><span>Rp </span>${ticket.price}<span>,00 </span></p>
                    </div>
                    <div class="detail big-text-font black">
                        <p >Kategori: ${ticket.category}</p>
                        <p>Fasilitas: ${ticket.facilities.join(", ")}</p>
                    </div>
                </div>
            </div>
            <div class="total-due">
                <p class="big-text-font black">Total due</p>
                <p id="total-due-amount" class="big-text-font black">Rp 0,00</p>
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
                        <img src="{{asset('asset/gopay.png')}}" alt="GoPay Icon" />
                        Gopay
                    </label>
                    <label>
                        <input type="radio" name="payment" value="shopeepay">
                        <img src="{{asset('asset/shopee.jpg')}}" alt="ShopeePay Icon" />
                        Shopeepay
                    </label>
                    <label>
                        <input type="radio" name="payment" value="ovo">
                        <img src="{{asset('asset/ovo.webp')}}" alt="OVO Icon" />
                        OVO
                    </label>
                    <label>
                        <input type="radio" name="payment" value="dana">
                        <img src="{{asset('asset/dana.jpg')}}" alt="Dana Icon" />
                        DANA
                    </label>
                </div>
            </div>
    
            <!-- Virtual Account Payment Section -->
            <div class="payment-section black ">
                <h3 class="big-text-font bold-weight black">Virtual Account</h3>
                <div class="payment-options medium-text-font black">
                    <label>
                        <input type="radio" name="payment" value="bca">
                        <img src="{{asset('asset/BCA.jpg')}}" alt="BCA Icon" />
                        BCA Virtual Account
                    </label>
                    <label>
                        <input type="radio" name="payment" value="mandiri">
                        <img src="{{asset('asset/mandiri.webp')}}" alt="Mandiri Icon" />
                        Mandiri Virtual Account
                    </label>
                </div>
            </div>
    
            <!-- Submit Button -->
            <button type="button" id="pay-btn" class="medium-text-font black">Bayar</button>
                
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
