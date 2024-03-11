<?php
    function getLocalDate($lang){
        $months["AR"] = ["يناير", "فبراير", "مارس", "أبريل", "ماي", "يونيو", "يوليوز", "غشت", "شتنبر", "أكتوبر", "نونبر", "دجنبر"];
        $months["FR"] = ["Janvier", "Février", "Mars", "Avril", "Mai", "Juin", "Juillet", "Aout", "Septembre", "Octobre", "Novembre", "Décembre"];
        $days["AR"] = ["الأحد", "الاثنين", "الثلاثاء", "الأربعاء", "الخميس", "الجمعة", "السبت"];
        $months["EN"] = ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"];
        $days["FR"] = ["Dimanche", "Lundi", "Mardi", "Mercredi", "Jeudi", "Vendredi", "Samedi"];
        $days["EN"] = ["Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"];
        $date = getdate();
        $day = $date["mday"];
        $month = $date["mon"];
        $year = $date["year"];
        $weekDay = $date["wday"];
        $monthName = $months[$lang][$month - 1];
        $dayName = $days[$lang][$weekDay];
        return "$dayName $day $monthName $year";
    }
?>
<header>
        <nav>
            <div class="logo-container">
                <img class="logo-image" src="/assets/logo.jpg" alt="logo">
                <div class="branch-container">
                    <h1>SMI6</h1>
                    <span class="probl">facultes des science dhar elmehraz fes</span>
                </div>
                <span></span>
                <span id="date-placeholder"><?=getLocalDate("AR")?></span>
            </div>
        </nav>
</header>

