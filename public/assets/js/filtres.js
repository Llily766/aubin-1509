function handleSliderChange(sliderId, outputId, unit) {
    let slider = document.getElementById(sliderId);
    let output = document.getElementById(outputId);
    output.innerText = slider.valueAsNumber + unit;

    slider.addEventListener('change', () => {
        output.innerText = slider.valueAsNumber + unit;
    });
}

handleSliderChange('myRange', 'curr', ' €');
handleSliderChange('myRange1', 'curr1', ' km');
handleSliderChange('myRange2', 'curr2', '');

$(document).ready(function() {
    // Filtre par prix
    $("#myRange").on("input", function() {
        var currentValue = parseInt($(this).val());

        $(".card").each(function() {
            var price = parseInt($(this).find(".btn").text().trim().replace('€', '').replace(' ', ''));

            if (price <= currentValue) {
                $(this).show();
            } else {
                $(this).hide();
            }
        });

        $("#curr").text(currentValue + " €");
    });

    // Filtre par kilomètres
    $("#myRange1").on("input", function() {
        var currentValue = parseInt($(this).val());

        $(".card").each(function() {
            var kilom = parseInt($(this).find(".kilom").text().trim().replace('km', '').replace(' ', ''));

            if (kilom <= currentValue) {
                $(this).show();
            } else {
                $(this).hide();
            }
        });

        $("#curr1").text(currentValue + " km");
    });

    // Filtre par année
    $("#myRange2").on("input", function() {
        var currentValue = parseInt($(this).val());

        $(".card").each(function() {
            var year = parseInt($(this).find(".annee").text().trim());

            if (year >= currentValue) {
                $(this).show();
            } else {
                $(this).hide();
            }
        });

        $("#curr2").text(currentValue);
    });
});

// Example starter JavaScript for disabling form submissions if there are invalid fields
(() => {
    'use strict'

    // Fetch all the forms we want to apply custom Bootstrap validation styles to
    const forms = document.querySelectorAll('.needs-validation')

    // Loop over them and prevent submission
    Array.from(forms).forEach(form => {
        form.addEventListener('submit', event => {
            if (!form.checkValidity()) {
                event.preventDefault()
                event.stopPropagation()
            }

            form.classList.add('was-validated')
        }, false)
    })
})()

$(document).ready(function () {
    // Lorsqu'un bouton est cliqué
    $('.btn.btn-primary[data-bs-toggle="modal"]').click(function () {
        // Récupérer le nom de la voiture à partir de l'attribut data-nom
        var nomVoiture = $(this).data('nom');

        // Mettre à jour le contenu du span avec l'ID lenom dans le modal
        $('#lenom').text(nomVoiture);
    });
});