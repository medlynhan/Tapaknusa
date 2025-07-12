@extends('afterLogin.app')
@section('title', 'Tapaknusa')
@section('content')

<div class="container-profile fadeInDown">
    <div class="row-profile">
        <!-- Sidebar kiri -->
        <div class="col-left-profile">
            <section class=" profile-back-btn">
                <button onclick="window.history.back()" class="back"><i class="fi fi-br-angle-left big-text-font"></i></button>
                <p class="superbig-text-font">Profile</p>
            </section>
            <div class="profile-sidebar">
                <ul class="list-profile medium-text-font">
                    <li class="profile-item" id="info-profile">Informasi Pengguna</li>
                    <li class="profile-item" id="history-profile">Riwayat Pembelian</li>
                    <li class="profile-item" id="settings-profile">Pengaturan</li>
                </ul>
            </div>
        </div>

        <!-- Konten kanan -->
        <div class="col-right-profile ">
            <div class="profile-content black fadeInDown" id="content-info-profile">
                <h3 class="superbig-text-font black">Informasi Pengguna</h3>
                
                <!-- Form untuk edit informasi -->
                <form action="{{ route('updateUserProfile') }}" method="POST">
                    @csrf    
                    <div class="form-group">
                        <label for="name"><strong>Nama:</strong></label>
                        <input type="text" id="name" name="name" value="{{ $user->name }}" class="form-control medium-text-font" required>
                    </div>
                    
                    <div class="form-group">
                        <label for="email"><strong>Email:</strong></label>
                        <input type="email" id="email" name="email" value="{{ $user->email }}" class="form-control medium-text-font" required>
                    </div>
                    
                <div class="form-group">
                    <label for="password"><strong>Password:</strong></label>
                    <div class="password-container">
                        <input type="password" id="password" name="password" value="{{ $user->password }}" class="form-control medium-text-font" disabled>
                        <button type="button" id="toggle-password" class="btn-password-profile "><i class="fi fi-rs-crossed-eye medium-text-font grey " id="eye-icon"></i></button>
                    </div>
                </div>

                    <!-- Informasi yang tidak bisa diubah -->
                    <div class="form-group">
                        <label for="coin"><strong>Coin:</strong></label>
                        <input type="text" id="coin" value="{{ $user->coin }}" class="form-control medium-text-font" disabled>
                    </div>
                    
                    
                    <button type="submit" class=" btn-profile-information medium-text-font">Simpan Perubahan</button>
                </form>
            </div>

            <div class="profile-content black fadeInDown" id="content-history-profile" style="display:none;">
                <h3 class="superbig-text-font black">Riwayat Pembelian</h3>
                @if ($history != null && count($history) > 0)
                <div class="ticket-types-history">
                    @foreach($history as $history)
                        <div class="ticket-history" > 
                            <p class="history-date medium-text-font white"> Tanggal Pembelian:  {{$history->created_at}} </p>
                            <h3 class="head-title-history superbig-text-font black">{{$history->quantity}} {{$history->ticket_title}}</h3>
                            <p class="ticket-date medium-text-font white"> Masa berlaku ticket:  {{$history->ticketDate}} </p>
                            <p class="atraction-title medium-text-font black">{{$history->attraction_title}} </p>
                            <div class="image-history">
                                <img src="{{$history->image1}}" alt="Image">
                            </div>
                            <div class="price-history big-text-font bold red ">
                                <p><span>Rp </span><span class="theTicketPrice">{{ number_format($history->price * $history->quantity, 0, ',', '.') }}</span><span>,00 </span></p>
                            </div>
                        </div>
                    @endforeach
                </div>
                @else
                <div>
                    <p class="medium-font-text">Belum ada riwayat pembelian</p>
                </div>
                @endif
            </div>

            <div class="profile-content black fadeInDown" id="content-settings-profile" style="display:none;">
                <h3 class="superbig-text-font black">Pengaturan</h3>
                <p>Klik tombol di bawah ini untuk keluar dari akun Anda dan mengakhiri sesi Anda.</p>
                <!-- Button Logout -->
                <form action="{{ route('logout') }}" method="GET" class="logout-form-profile">
                    @csrf
                    <button type="submit" class="btn-logout-profile medium-text-font">Logout</button>
                </form>
            </div>
        </div>
    </div>


</div>
@endsection    

@section('scripts')
<script>
$(document).ready(function() {
    // Menampilkan konten berdasarkan item sidebar yang dipilih
    $('#info-profile').click(function() {
        $('#content-info-profile').show();
        $('#content-history-profile').hide();
        $('#content-settings-profile').hide();
    });

    $('#history-profile').click(function() {
        $('#content-info-profile').hide();
        $('#content-history-profile').show();
        $('#content-settings-profile').hide();
    });

    $('#settings-profile').click(function() {
        $('#content-info-profile').hide();
        $('#content-history-profile').hide();
        $('#content-settings-profile').show();
    });

    // Default menampilkan Informasi Pengguna saat halaman pertama kali dibuka
    $('#info-profile').click();


    $('.profile-item').click(function() {
        // Menghapus kelas 'active' dari semua elemen
        $('.profile-item').removeClass('active');

        // Menambahkan kelas 'active' pada elemen yang diklik
        $(this).addClass('active');
    });

    document.getElementById('toggle-password').addEventListener('click', function() {
        const passwordField = document.getElementById('password');
        const eyeIcon = document.getElementById('eye-icon');
        
        if (passwordField.type === 'password') {
            passwordField.type = 'text';
            eyeIcon.classList.remove('fi-rs-crossed-eye');
            eyeIcon.classList.add('fi-rs-eye');
        } else {
            passwordField.type = 'password';
            eyeIcon.classList.remove('fi-rs-eye');
            eyeIcon.classList.add('fi-rs-crossed-eye');
        }
    });


    
});
</script>
@endsection


@php  
     $hideHeader = true;
     $hideFooter = true;
@endphp