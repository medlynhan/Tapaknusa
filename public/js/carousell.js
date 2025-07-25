    function addCard(attractions, containerInput) {
        console.log('addCard function is called');
        console.log(attractions);
        
        attractions.forEach((wisata) => {
            var url = wisata.image1;
            var filename = url.split('/').pop();
            var baseUrl = "https://tapaknusa-images.imgix.net/";
            var fullUrl = baseUrl + filename + "?auto=compress&fm=webp";

            let card = `
                <div class="card" data-attribute="${wisata.title}" onclick="redirectToDetail('${wisata.title}', '${wisata.status}')">
                    <img src="${fullUrl}" alt="${wisata.title}">
                    <h3 class="medium-text-font bold">${wisata.title}</h3>
                    <p class="medium-text-font">⭐⭐⭐⭐⭐ ${wisata.rating}</p>
                    <p class="price medium-text-font bold">${wisata.startPrice}</p>
                </div>
            `;
            console.log("Card: " + card);
            console.log(containerInput);
            // Append ke container jQuery yang sudah valid
            containerInput.append(card);
        });
    }


    //Card Click
    function clickCardContent(cardSelector, locationPage) {
        $(document).on("click", cardSelector, function () {
            let data = $(this).data("attribute");

            if (data) {
                window.location.href = `${locationPage}?find=${encodeURIComponent(data)}`;
            } else {
                console.warn("Data attribute tidak ditemukan pada elemen yang diklik.");
            }
        });
    }




function carousellButton(cardsContainer, prevButton, nextButton) {

    function updateButtons() {
        let maxScrollLeft = cardsContainer.get(0).scrollWidth - cardsContainer.get(0).clientWidth;
        let currentScroll = cardsContainer.prop("scrollLeft");

        if (currentScroll >= maxScrollLeft - 5) {
            nextButton.css({ opacity: 0 });
        } else {
            nextButton.css({ opacity: 1 });
        }

        if (currentScroll <= 5) {
            prevButton.css({ opacity: 0 });
        } else {
            prevButton.css({ opacity: 1 });
        }
    }

    updateButtons();

    function getScrollValue() {
        return Math.max(120, window.innerWidth * 0.71);
    }

    nextButton.on("click", function () {
        cardsContainer.animate(
            {
                scrollLeft: cardsContainer.prop("scrollLeft") + getScrollValue(),
            },
            400,
            updateButtons
        );
    });

    prevButton.on("click", function () {
        cardsContainer.animate(
            {
                scrollLeft: cardsContainer.prop("scrollLeft") - getScrollValue(),
            },
            400,
            updateButtons
        );
    });

    cardsContainer.on("scroll", updateButtons);
}

function getDetailAtractionData(){


    let urlParams = new URLSearchParams(window.location.search); 
    let searchQueryItem = urlParams.get("find") || "";

    return wisataBudaya.filter(wisata => wisata.title.toLowerCase() === searchQueryItem.toLowerCase());

}

function getDetailCultureTopAtractionData(containerInput){


    let urlParams = new URLSearchParams(window.location.search); 
    let searchQueryItem = urlParams.get("find") || "";

    return wisataBudaya.filter(wisata => wisata.destination.toLowerCase().includes(searchQueryItem.toLowerCase()) && wisata.status === "atraksi").forEach((wisata) => {
        let card = `
        <div class="card" data-attribute="${wisata.title}" onclick="redirectToDetail('${wisata.title}', '${wisata.status}')">
            <img src="${wisata.image}" alt="${wisata.title}">
            <h3 class="medium-text-font bold">${wisata.title}</h3>
            <p class="medium-text-font">⭐⭐⭐⭐⭐ ${wisata.rating}</p>
            <p class="price medium-text-font bold">${wisata.startPrice}</p>
        </div>
        `;
        containerInput.append(card);
    });

}



function getDetailCultureTopFestivalData(containerInput){


    let urlParams = new URLSearchParams(window.location.search); 
    let searchQueryItem = urlParams.get("find") || "";

    return wisataBudaya.filter(wisata => wisata.destination.toLowerCase().includes(searchQueryItem.toLowerCase()) && wisata.status === "festival").forEach((wisata) => {
        let card = `
        <div class="card" data-attribute="${wisata.title}" onclick="redirectToDetail('${wisata.title}', '${wisata.status}')">
            <img src="${wisata.image}" alt="${wisata.title}">
            <h3 class="medium-text-font bold">${wisata.title}</h3>
            <p class="medium-text-font">⭐⭐⭐⭐⭐ ${wisata.rating}</p>
            <p class="price medium-text-font bold">${wisata.startPrice}</p>
        </div>
        `;
        containerInput.append(card);
    });

}













