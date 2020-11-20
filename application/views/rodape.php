<div class="modal fade modalTimer" id="modalTimer" tabindex="-1" role="dialog" data-keyboard="false" data-backdrop="static" aria-labelledby="modalTimer">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <button id="closeModal" type="button" class="close" data-dismiss="modal" aria-label="Close">X</button>
            <div class="modal-body">
                <img class="img-responsive coruja-timer" src="<?= base_url(); ?>assets/images/coruja-timer.png" alt="Coruja">
                <div class="boxTimer text-center">
                    <p class="txt">A votação se encerra EM:</p>
                    <div class="timer">
                        <span class="box">
                            <span class="numero" id="dia"></span>
                            <p>DIAS</p>
                        </span>
                        <span class="box">
                            <span class="dt">:</span>
                        </span>
                        <span class="box">
                            <span class="numero" id="hora"></span>
                            <p>HORAS</p>
                        </span>
                        <span class="box">
                            <span class="dt">:</span>
                        </span>
                        <span class="box">
                            <span class="numero" id="minutos"></span>
                            <p>MINUTOS</p>
                        </span>
                        <span class="box">
                            <span class="dt">:</span>
                        </span>
                        <span class="box">
                            <span class="numero" id="segundos"></span>
                            <p>SEGUNDOS</p>
                        </span>
                    </div>
                    <p class="txt">CABORÉ 2020, VOTE NA</p>
                    <img class="img-responsive center-block margin-top-5" src="<?= base_url(); ?>assets/images/logo-turner.png" alt="Logo Caboré">
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    // Set the date we're counting down to
    var countDownDate = new Date("Nov 28, 2020 00:00:00").getTime();

    // Update the count down every 1 second
    var x = setInterval(function() {

        // Get today's date and time
        var now = new Date().getTime();

        // Find the distance between now and the count down date
        var distance = countDownDate - now;

        // Time calculations for days, hours, minutes and seconds
        var days = Math.floor(distance / (1000 * 60 * 60 * 24));
        var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
        var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
        var seconds = Math.floor((distance % (1000 * 60)) / 1000);

        // Output the result in an element with id="demo"
        document.getElementById("dia").innerHTML = days;
        document.getElementById("hora").innerHTML = hours;
        document.getElementById("minutos").innerHTML = minutes;
        document.getElementById("segundos").innerHTML = seconds;
    }, 1000);
</script>