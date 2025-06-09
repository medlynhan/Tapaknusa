@extends('afterLogin.app')    
@section('title', 'Tapaknusa')

@section('content')

    <section class="header page-padding-left-right">
         <button class="back-btn" onclick="window.history.back()"><i class="fi fi-br-angle-left big-text-font black"></i></button>
    </section>

    <!--Search Result Section-->
    <section class="result-section page-padding-left-right">
        <div class="result-header">
            <h2 class="item-searched superbig-text-font black">
            </h2>
            <p class="result-message big-text-font black"></p>
        </div>
    
        <h2 class="text-grid-attraction superbig-text-font bold black"></h2>
        <div class="result-grid-attraction"></div>
        <h2 class="text-grid-festival superbig-text-font bold black"></h2>
        <div class="result-grid-festival "></div>
        <div class="carousel"></div>
    </section>    



    <!--Rekomendasi item serupa-->
    <section class="page-padding-left-right " id="fyp-atraction" >
        <div class="explore-content">
            <p class="superbig-text-font black">
                <i class="fi fi-br-face-smile-hearts supersmall-heading-font black"></i> Aktivitas Serupa Lainnya
            </p>            
            <p class="medium-text-font black">Mungkin ada aktivitas yang sesuai dengan minat kamu ? </p>
            <!--Carousell-->
            <div class="carousel">
                <button class="prev-btn"><i class="fas fa-chevron-left white big-text-font"></i></button>
                <div class="content">
                    <div class="cards-atraksi medium-text-font"></div>
                </div>
                <button class="next-btn"><i class="fas fa-chevron-right  white big-text-font"></i></button>
            </div>
        </div>
        <div class="recomendation-addition">
            <div class="lihat-lanjut">
                <a href="javascript:window.history.back()" class="medium-text-font red"><p>Kembali ke Beranda</p></a>
            </div>
        </div>
    </section>

    @endsection

@php  
     $hideHeader = true;
@endphp
@section('scripts')
 <script>
    $(document).ready(function () {
        
        let allAttractions = @json($allAttractions);
        let allFestivals = @json($allFestivals);
        
        console.log("atractions :" + allAttractions); // Debug data
        console.log("festivals :" + allFestivals);  // Debug data

        addCard(allAttractions, $("#fyp-atraction .cards-atraksi"));
        carousellButton($("#fyp-atraction .cards-atraksi"), $("#fyp-atraction .prev-btn"), $("#fyp-atraction .next-btn"));
        clickCardContent(".card", "/TappaknusadetailAtraction");

        function responsiveLihatLanjutBtn() {
            function applyResponsiveLihatLanjutBtn() {
                if ($(window).width() > $(window).height()) { // laptop
                    $(".lihat-lanjut").css({ "width": "28%" });
                } else {
                    if ($(window).width() * 1.5 > ($(window).height())) { // ipad
                        $(".lihat-lanjut").css({ "width": "45%" });
                    } else if ($(window).width() * 1.5 < ($(window).height())) { // phone
                        $(".lihat-lanjut").css({ "width": "50%" });
                    }
                }
            }
            applyResponsiveLihatLanjutBtn();
            $(window).on("resize", applyResponsiveLihatLanjutBtn);
        }

        responsiveLihatLanjutBtn();



        function displayMessageResult(filteredDataLength,filteredDataAttraction,filteredDataFestival) {

            let searchQueryItem = @json($searchQuery);
            let searchQueryTanggal = @json($date);

            
            if(searchQueryTanggal !== "" && searchQueryItem !== null) {
                $(".item-searched").text(`Pencarian untuk "${searchQueryItem}" tanggal "${searchQueryTanggal}"`);

            }else{
                $(".item-searched").text(`Pencarian untuk "${searchQueryItem}"`);
                                
            }

            if (filteredDataLength === 0) {
                $(".result-message").text("Yah, kami tidak menemukan apa yang kamu cari");
                $(".result-addition").css({ "display": "none" });
            } else {
                $(".result-message").text(`Berhasil Menemukan ${filteredDataAttraction.length} Atraksi dan  ${filteredDataFestival.length} Festival wisata`);

                if (filteredDataAttraction.length > 0) {
                    $(".text-grid-attraction").css("display", "grid");
                    $(".result-grid-attraction").css("display", "grid");
                    $(".text-grid-attraction").text(`Atraksi`);
                    addCard(filteredDataAttraction, $(".result-grid-attraction"));
                }else{
                    $(".result-grid-attraction").css("display", "none");
                    $(".text-grid-attraction").css("display", "none");
                }
                if (filteredDataFestival.length > 0) {
                    $(".text-grid-festival").css("display", "grid");
                    $(".result-grid-festival").css("display", "grid");
                    $(".text-grid-festival").text(`Festival`);
                    addCard(filteredDataFestival, $(".result-grid-festival"));
                }else{
                    $(".result-grid-festival").css("display", "none");
                    $(".text-grid-festival").css("display", "none");
                }

            }
        }

        function addDataGrid() {
            let filteredDataAttraction = @json($allAttractionResults);
            let filteredDataFestival = @json($allFestivalResults);
            let filteredDataLength = filteredDataAttraction.length + filteredDataFestival.length; // Correct total length

            displayMessageResult(filteredDataLength,filteredDataAttraction,filteredDataFestival);

        }

        addDataGrid();
       
    });
</script>
@endsection