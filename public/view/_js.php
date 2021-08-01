<script src="../js/jquery-3.1.1.js"></script>
<script src="../js/bootstrap.js"></script>
<script src="../js/bootstrap.offcanvas.js"></script>
<script src="../js/download/jquery.mCustomScrollbar.js"></script>
<script src="../js/material.js"></script>
<script src="../js/ripples.js"></script>
<script>
    $(document).ready(function () {

        $(".navbar-edit-1 a").on("click", function () {
            $(".navbar-edit-1").find(".active").removeClass("active");
            $(this).parent().addClass("active");
        });

        $(".navbar-edit2 a").on("click", function () {
            $(".navbar-edit2").find(".active").removeClass("active");
            $(this).parent().addClass("active");
        });

        $('.a-login').on("click", function () {
            $('.login-popup').fadeToggle(300);
        });

        $(".body-offcanvas").mouseup(function (e)
        {
            var subject = $(".login-popup");

            if (e.target.id != subject.attr('class') && !subject.has(e.target).length)
            {
                subject.fadeOut();
            }
        });

        $('input,textarea').focus(function () {
            $(this).data('placeholder', $(this).attr('placeholder'))
                    .attr('placeholder', '');
        }).blur(function () {
            $(this).attr('placeholder', $(this).data('placeholder'));
        });

    });
</script>