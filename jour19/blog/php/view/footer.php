</main>
<footer>
    <script type="text/javascript">
        var ladate = new Date()
        document.write("Nous sommes le : ");
        document.write(ladate.getDate() + "/" + (ladate.getMonth() + 1) + "/" + ladate.getFullYear() + "<br>")
        var tab_mois = new Array("Janvier", "Février", "Mars", "Avril", "Mai", "Juin", "Juillet", "Août", "Septembre", "Octobre", "Novembre", "Décembre");
        document.write("Nous sommes en " + tab_mois[ladate.getMonth()]);
    </script>
    <script type="text/javascript">
        var ladate = new Date()
        document.write("Heure brute : ");
        document.write(ladate.getHours() + ":" + ladate.getMinutes() + ":" + ladate.getSeconds())
        document.write("<BR>");
        var h = ladate.getHours();
        if (h < 10) {
            h = "0" + h
        }
        var m = ladate.getMinutes();
        if (m < 10) {
            m = "0" + m
        }
        var s = ladate.getSeconds();
        if (s < 10) {
            s = "0" + s
        }
        document.write("Heure formatée : ");
        document.write(h + ":" + m + ":" + s)
    </script>
    <p>tous droits reserve</p>
</footer>
<script src="assets/js/app.js"></script>

</body>

</html>