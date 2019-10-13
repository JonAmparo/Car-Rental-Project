<!-- Footer / top -->
<footer id="topFooter">
    <div class="container" id="topFooterLinks">
        <div class="mx-auto" style="width: auto;">
            <br>
            <p class="text-black">
                <a class="mx-1 navy-blue" href="?controller=index&action=view">Home</a> |
                <a class="mx-1 navy-blue" href="?controller=car&action=carlisting">Cars</a> |
                <a class="mx-1 navy-blue" href="?controller=index&action=faq">FAQ</a> |
                <a class="mx-1 navy-blue" href="?controller=index&action=contact">Contact</a>
            </p>
        </div>
    </div>
</footer>
<footer id="botFooter">
    <div class="container">
        <hr>
        <p>Copyright &copy; <a target="_blank" href="https://github.com/JonAmparo">Jonathan Amparo</a></p>
        <hr style="width: 100px">
        <p>Website created by <a target="_blank" href="https://github.com/JonAmparo">Jonathan Amparo</a></p>
        <hr>
    </div>
</footer>
<div>
    <script>
    $('.myCarousel').carousel({
        interval: 2000
    })

    $(document).ready(function() {
        $('[data-toggle="popover"]').popover();
    });
    </script>
</div>
</body>

</html>