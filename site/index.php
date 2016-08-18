<!DOCTYPE html>
<html>
    <head>
        <?php require("inc/meta.php"); ?>
        <link href="css/index.css" rel="stylesheet" media="screen" />
    </head>
    <body>
        <div id="lineHeader">
            <h1 id="countdown"></h1>
            <header id="mainHeader">History Hunters </header>
        </div>
        <div id="wrap" class="wrap">
            <section id="news">
                <div id="newsContent">
                    <section>
                        <header class="sectionHeader">Titolo news</header>
                        <article>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                        </article>
                        <footer class="sectionFooter">
                            <small>Pubblicato da <strong>Giuseppe Naponiello</strong> il <strong>2016-08-18</strong></small>
                        </footer>
                        <div id="social">Condividi </div>
                    </section>
                    <section>
                        <header class="sectionHeader">Titolo news</header>
                        <article>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                        </article>
                        <footer class="sectionFooter">
                            <small>Pubblicato da <strong>Giuseppe Naponiello</strong> il <strong>2016-08-18</strong></small>
                        </footer>
                        <div id="social">Condividi </div>
                    </section>
                    <section>
                        <header class="sectionHeader">Titolo news</header>
                        <article>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                        </article>
                        <footer class="sectionFooter">
                            <small>Pubblicato da <strong>Giuseppe Naponiello</strong> il <strong>2016-08-18</strong></small>
                        </footer>
                        <div id="social">Condividi </div>
                    </section>
                    <section>
                        <header class="sectionHeader">Titolo news</header>
                        <article>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                        </article>
                        <footer class="sectionFooter">
                            <small>Pubblicato da <strong>Giuseppe Naponiello</strong> il <strong>2016-08-18</strong></small>
                        </footer>
                        <div id="social">Condividi </div>
                    </section>
                </div>
                <footer id="mainFooter"><a href="#">Scopri di più!</a></footer>
            </section>
        </div>
        <div id="wrap2">
            <div id="main" class="wrap">

            </div>
        </div>
        <script src="lib/jquery-1.12.0.min.js"></script>
        <script src="js/funzioni.js"></script>
        <script>
            $(document).ready(function(){
                $("#mainFooter a").on("click", function(){
                    var id = "#wrap2";
                    scrollTo(id);
                });
                $(window).scroll(function(){
                    $("#news").css("opacity", 1 - $(window).scrollTop() / ($( window ).height()-200));
                });
            });
            var fine = '2017-09-01';
            function getTimeRemaining(fine){
                var t = Date.parse(fine) - Date.parse(new Date());
                var seconds = Math.floor( (t/1000) % 60 );
                var minutes = Math.floor( (t/1000/60) % 60 );
                var hours = Math.floor( (t/(1000*60*60)) % 24 );
                var days = Math.floor( t/(1000*60*60*24) );
                return {
                    'total': t,
                    'days': days,
                    'hours': hours,
                    'minutes': minutes,
                    'seconds': seconds
                };
            }

            function initializeClock(id, fine){
                var clock = document.getElementById(id);
                function updateClock(){
                    var t = getTimeRemaining(fine);
                    clock.innerHTML = t.days + ' giorni, ' + t.hours + ' ore, ' + t.minutes + ' minuti, ' + t.seconds +' secondi';
                    if(t.total<=0){ clearInterval(timeinterval);}
                }
                updateClock(); // run function once at first to avoid delay
                var timeinterval = setInterval(updateClock,1000);
                var t = getTimeRemaining(fine);
                clock.innerHTML = t.days + ' giorni, ' + t.hours + ' ore, ' + t.minutes + ' minuti, ' + t.seconds +' secondi';
                if(t.total<=0){clearInterval(timeinterval); }
            }

            initializeClock('countdown', fine);
        </script>
    </body>
</html>
