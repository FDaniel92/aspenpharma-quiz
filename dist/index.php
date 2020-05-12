<?php include "html_head.php" ?>

    <div class="main-container">
        <div class="main-container__warning">
            <p>
                A kijelző mérete túl kicsi az esettanulmány optimális megjelenítéshez. Kérjük, hogy legalább 768px szélességű kijelzőt használjon!
            </p>
        </div>
        
        <div class="aspen-logo">
            <img src="images/aspen-logo.png" alt="aspen logo" />
        </div>

        <div class="top-animated-circle">
            <img src="images/background-circle-1.png" alt="felső animált kör" />
        </div>

        <div class="bottom-animated-circle">
            <img src="images/background-circle-2.png" alt="alsó animált kör" />
        </div>

        <!--KÖSZÖNTŐ LAYER-->
        <section class="welcome-layer">
            <h1>
                Bevezetés
            </h1>
            <p>
                Interaktív edukációs anyagunkban lépésről lépésre vezetjük végig olvasóinkat egy beteg történetén.
            </p>
            <p>
                Az esetleírás egyes pontjaiban lehetősége lesz a terápiás döntésekkel kapcsolatban ismereteit, tudását tesztelni a feltett kérdések alapján. A válaszai után minden esetben meg fog jelenni a legfrissebb szakmai ajánlásoknak, klinikai kutatásoknak és a termékek alkalmazási előírásainak megfelelő helyes válasz.
            </p>
            <p>
                Célunk az Önök ismeretének frissítése, illetve Önök megerősítése abban, hogy az MVT kezelésében naprakész tudással rendelkeznek.
            </p>
			<p>
				(A válaszokat nem mérjük, statisztikát nem készítünk belőle, a válaszadással többször lehet próbálkozni!)
			</p>
			<p>
				Amennyiben készen áll, kezdhetünk is!
			</p>
            <button class="main-button first-button">
                Kezdés
            </button>
        </section>
        <!--KÖSZÖNTŐ LAYER VÉGE-->

        <!--ELSŐ ESETTANULMÁNY LAYER-->
        <section class="case-history" data-id="first-chase-history">
            <div div class="scrolling-box">
                <div class="case-history__up-arrow all-up-arrow">
                    <img src="images/down-arrow.png" alt="lefelé mutató nyíl" />
                </div>
                <div class="scrolling-box__hide-scroll">
                    <h1>Esetleírás</h1>
                    <p>
                        A 61 éves férfit a tüdőgondozó utalta kórházba amoxicillin kezelés ellenére sem gyógyuló jobb oldali pneumónia miatt.
                    </p>
                    <p>Főbb panaszai:</p>
                    <ul>
                        <li>3 hete kezdődött és többször visszatérő láz</li>
                        <li>száraz ingerköhögés</li>
                        <li>változó intenzitású, szúró mellkasi fájdalom</li>
                    </ul>
                    <p>Anamnézis:</p>
                    <ul>
                        <li>gyógyszeresen karbantartott esszenciális hipertónia</li>
                        <li>35 éven keresztül napi 15-20 szál cigarettát szívott, de 5 éve abbahagyta</li>
                        <li>ezt követően meghízott, jelenleg 89 kg</li>
                        <li>nehézlégzést, vérköpést nem tapasztalt.</li>
                    </ul>
                    <p>Fizikális vizsgálat: -&nbsp;alsó végtagi kp. fokú varikozitás mindkét oldalon</p>
                    <p>Mellkasröntgen felvétel:</p>
                    <ul>
                        <li>
                            a jobb tüdőben centrálisan 5 x 3 cm-es elmosódott szélű, inhomogén karéjozott árnyéktöbblet, emellett a jobb tüdőben a középső tüdőmezőben egy 2,5 x 3 cm-es lobulált inhomogén árnyék volt látható.
                        </li>
                    </ul>
                    <img src="images/case-history-1-img.png" alt="kép egy tüdőről" />
                    <p>
                        A CT felvétel a centrális terime mellett a bifurkációs carina alatt kórosan megnagyobbodott nyirokcsomót mutatott, a jobb tüdőben többgócból álló infiltrátum volt igazolható.
                        A bronchoszkópos mintavétel patológiai eredménye adenocarcinoma volt. 
                    </p>
                    <p>
                        A laboratóriumi vizsgálatok jó vesefunkciót (kreatinin-clearance 135 ml/perc) normál tartományban lévő trombocitaszámot (240 G/l) mutattak.
                    </p>
                    <p>
                        Az elvégzett immunhisztokémiai vizsgálatok EGFR, ALK, KRAS negativitás mellett PD-L1 90% pozitivitást mutattak.
                    </p>
                    <img src="images/case-history-1-img-2.png" alt="kép" />
                    <p>
                        Az onkoteam a beteg jó általános állapotát figyelembe véve a IV. Stádiumú tüdődaganat kezelésére: Pembrolizumab – Pemetrexed – Carboplatin terápiát javasolt. A kezelést kórházi osztályon kezdték meg.
                    </p>
                    <p>
                        Trombózisprofilaxis nem kapott.
                    </p>
                    <button class="main-button scrollbox-btn second-button">
                        Tovább a kérdéshez
                    </button>
                </div>
                <div class="case-history__down-arrow all-down-arrow">
                    <img src="images/down-arrow.png" alt="lefelé mutató nyíl" />
                </div>
            </div>
            <div class="gif-image" data-id="first-chase-img">
                <img src="images/case-history-1-min.gif" alt="esettanulmány kép" />
            </div>
        </section>
        <!--ELSŐ ESETTANULMÁNY LAYER VÉGE-->

        <!--ELSŐ KVÍZ-->
        <section class="quiz">
            <div class="quiz__question">
                <h1>
                    Indokolt lett volna a betegnél <br /> tromboprofilaxis adása?
                </h1>
            </div>
            <div class="quiz__answers">
                <button class="quiz__button" data-id="y">
                    Kockázat felmérést követően igen
                </button>

                <button class="quiz__button" data-id="n">
                    Nem
                </button>

                <div class="quiz__icons">
                    <img src="images/pipe.png" class="good" alt="helyes válasz" />
                    <img src="images/x.png" class="wrong" alt="rossz válasz" />
                </div>
            </div>
            <div class="quiz__gif-image"></div>
            <div class="evaluation">
                <div class="evaluation__scrolling-box">
                    <h2>Kiértékelés</h2>
                    <p>
                        „Az onkológiai betegekben végzendő tromboprofilaxis alapja, hogy a daganatok prokoaguláns tényezők sorát (szöveti faktor, tumor prokoaguláns) képezhetik, a radio-&nbsp;és/vagy kemoterápia, endokrin kezelés egyes formái önmagukban is trombogének, továbbá az egyéb komorbid tényezők (fekvés, infekció, sebészi beavatkozás, életkor stb.) fokozott jelentőségre tesznek szert.<br />
                        Különböző daganatok esetében változik a trombózis kockázat, amely különösen magas emlő rák + antiösztrogének, prosztata rák kezelésekor, de jelentős a trombogenitás az ovárium, az agy, a hasnyálmirigy, a vastagbél, a <strong><u>tüdő</u></strong>, a gyomor daganatai, egyes limfómák és leukémiák esetén is.<br />
                        A tromboembólia ismétlődésének veszélye és súlyossága is nagyobb daganatos 
                        betegekben.„<sup>1</sup>
                    </p>
                    <p class="references">
                        Referencia:
                        <br />
                        <br />
                        <a href="https://docplayer.hu/107893689-Az-egeszsegugyi-miniszterium-szakmai-iranyelve-a-thromboemboliak-megelozese-es-kezelese.html" target="_blank">1. https://docplayer.hu/107893689-Az-egeszsegugyi-miniszterium-szakmai-iranyelve-a-thromboemboliak-megelozese-es-kezelese.html(16.oldal. 3.5.12.)</a>				
                    </p>
                    <button class="evaluation__button">
                        Tovább
                    </button>
                </div>
                <div class="evaluation__down-arrow all-down-arrow">
                    <img src="images/evaluation-down-arrow.png" alt="lefelé nyíl" />
                </div>
            </div>
        </section>
        <!--ELSŐ KVÍZ VÉGE-->

        <!--MÁSODIK KVÍZ-->
        <section class="quiz">
            <div class="quiz__question">
                <h1>
                    Hogyan állapítható meg a <br /> tromboprofilaxis <br /> szükségessége?
                </h1>
            </div>
            <div class="quiz__answers">
                <button class="quiz__button" data-id="n">
                    Az orvos tapasztalata alapján
                </button>

                <button class="quiz__button" data-id="y">
                    Individuális kockázatfelméréssel a Szakmai Irányelvek alapján
                </button>

                <div class="quiz__icons">
                    <img src="images/pipe.png" class="good" alt="helyes válasz" />
                    <img src="images/x.png" class="wrong" alt="rossz válasz" />
                </div>
            </div>
            <div class="quiz__gif-image"></div>
            <div class="evaluation">
                <div class="evaluation__scrolling-box">
                    <h2>Kiértékelés</h2>
                    <p>
                        A hazai Szakmai Irányelv és a nemzetközi guideline-ok is a kockázatfelmérésre rizikó besoroló kérdőíveket ajánlanak.
                    </p>
                    <p>Számos kockázatfelmérési modell létezik:</p>
                    <ul>
                        <li>Losonczy és munkatársai modellje<sup>2</sup></li>
                        <li>Khorana módosított rizikófelmérő modellje<sup>3</sup></li>
                        <li>R. Autar rizikókérdőíve<sup>4</sup></li>
                        <li>Prof. dr. István Lajos rizikókérdőíve<sup>5</sup></li>
                    </ul>
                    <br />
                    <p><u>Német Konszenzus (2015.) állásfoglalása:</u> <sup>6</sup></p>
                    <p>3.2.2. Tromboprofilaxis a nem operabilis daganatos betegeknél</p>
                    <ul>
                        <li>a daganatos betegség miatt kórházban kezelt betegeknél tromboprofilaxist kell alkalmazni</li>
                        <li>a tromboprofilaxist kiváltképpen kismolekulasúlyú heparinnal kell végezni</li>
                        <li>a tromboprofilaxist a teljes kórházi tartózkodás ideje alatt folytatni kell</li>
                        <li>a tromboprofilaxist a teljes kórházi tartózkodás ideje alatt folytatni kell</li>
                    </ul>
                    <p class="references">
                        Referencia:
                        <br />
                        <br />
						2. Losonczy, Nagy, Tar: A kórházi és az ambuláns kemoterápiában részesülő onkológiai betegek vénás thromboemboliaprofilaxisának aktuális kérdései. Orvosi Hetilap 2016/157. évf. 6.sz. <a href="http://real.mtak.hu/35892/1/650.2016.30357.pdf" target="_blank" style="word-break: break-all;">http://real.mtak.hu/35892/1/650.2016.30357.pdf</a>
                        <br />
                        <br />
                        <a href="https://www.researchgate.net/publication/5636019_Development_and_validation_of_a_predictive_model_for_chemotherapy-associated_thrombosis" target="_blank" style="word-break: break-all;">3. https://www.researchgate.net/publication/5636019_Development_and_validation_of_a_predictive_model_for_chemotherapy-associated_thrombosis</a>
                        <br />
                        <br />
                        <a href="https://geriatrictoolkit.missouri.edu/cv/DVT/Autar-DVT-scale-article.pdf" target="_blank" style="word-break: break-all;">4. https://geriatrictoolkit.missouri.edu/cv/DVT/Autar-DVT-scale-article.pdf</a>
                        <br />
                        <br />
                        5. Prof. Dr. Lajos István: Tromboembolia: a megelőzhető sorscsapás „(2002 Melánia Kiadó) című könyvében.
                        <br />
                        <br />
						6. S3 Leitlinie Prophylaxe der venöse Thromboemboli (VTE) <a style="word-break: break-all;" href="https://www.awmf.org/uploads/tx_szleitlinien/003-001l_S3_VTE-Prophylaxe_2015-12.pdf" target="_blank">https://www.awmf.org/uploads/tx_szleitlinien/003-001l_S3_VTE-Prophylaxe_2015-12.pdf</a>
                    </p>
                    <button class="evaluation__button">
                        Tovább
                    </button>
                </div>
                <div class="evaluation__down-arrow all-down-arrow">
                    <img src="images/evaluation-down-arrow.png" alt="lefelé nyíl" />
                </div>
            </div>
        </section>
        <!--MÁSODIK KVÍZ VÉGE-->

        <!--HARMADIK KVÍZ-->
        <section class="quiz">
            <div class="quiz__question">
                <h1>
                    Milyen profilaxist <br /> alkalmazott volna?
                </h1>
            </div>
            <div class="quiz__answers">
                <button class="quiz__button" data-id="a">
                    V -K antagonisták
                </button>

                <button class="quiz__button" data-id="b">
                    LMWH
                </button>

                <button class="quiz__button" data-id="c">
                    DOAC
                </button>

                <div class="quiz__icons">
                    <img src="images/pipe.png" class="good" alt="helyes válasz" />
                    <img src="images/x.png" class="wrong" alt="rossz válasz" />
                </div>
            </div>
            <div class="quiz__gif-image"></div>
            <div class="evaluation-first">
                <div class="evaluation__scrolling-box">
                    <h2>Kiértékelés</h2>
                    <p>
                        Korábbi ajánlások még nem zárták ki a használatukat daganatos betegeknél, azonban a tapasztalat szerint ebben a betegcsoportban igen nehéz a megfelelő INR érték beállítása<sup>7</sup>, tehát a betegek fokozottan ki vannak téve a vérzés és/vagy a trombózis veszélyének<sup>8</sup>, a rendszeres vérvételi nehézségekről nem beszélve, ezért ebben a betegcsoportban már hosszabb ideje az LMWH-k a javasolt profilaktikus szerek.<sup>9</sup>
                    </p>
                    <p class="references">
                        Referencia:
                        <br />
                        7. Hutten BA, et al. J Clin Oncol 2000;18:3078-83
						<br />
						8. Roderick P et al. Towards evidence-based guidelines for the prevention of venous thromboembolism: systematic reviews of mechanical methods, oral anticoagulation, dextran and regional anaesthesia as thromboprophylaxis. Health Technology Assessment Volume: 9, Issue: 49.
						<br />
						9. A thromboemboliák kockázatának csökkentése és kezelése Az Egészségügyi Minisztérium Szakmai Irányelve (2009. 47.o.)<a style="word-break: break-all;" href="https://old-kollegium.aeek.hu/conf/upload/oldiranyelvek/TRANSZF_thromboemboliak%20kockazatanak%20csokkenteserol%20es%20kezeleserol_mod0_v0.pdf" target="_blank">https://old-kollegium.aeek.hu/conf/upload/oldiranyelvek/TRANSZF_thromboemboliak%20kockazatanak%20csokkenteserol%20es%20kezeleserol_mod0_v0.pdf</a>
                    </p>
                    <button class="evaluation__button">
                        Tovább
                    </button>
                </div>
                <div class="evaluation__down-arrow all-down-arrow">
                    <img src="images/evaluation-down-arrow.png" alt="lefelé nyíl" />
                </div>
            </div>

            <div class="evaluation">
                <div class="evaluation__scrolling-box">
                    <h2>Kiértékelés</h2>
                    <p>
                        „Elsődleges megelőzés: A megelőzésre (és kezelésre) a nagy VTE kockázatnak megfelelő LMWH dózis ajánlott.”<sup>9</sup> 
                    </p>
                    <p class="references">
                        Referencia:
                        <br />
                        <br />
						9. A thromboemboliák kockázatának csökkentése és kezelése Az Egészségügyi Minisztérium Szakmai Irányelve (2009. 47.o.)<a style="word-break: break-all;" href="https://old-kollegium.aeek.hu/conf/upload/oldiranyelvek/TRANSZF_thromboemboliak%20kockazatanak%20csokkenteserol%20es%20kezeleserol_mod0_v0.pdf" target="_blank">https://old-kollegium.aeek.hu/conf/upload/oldiranyelvek/TRANSZF_thromboemboliak%20kockazatanak%20csokkenteserol%20es%20kezeleserol_mod0_v0.pdf</a>
                    </p>
                    <button class="evaluation__button">
                        Tovább
                    </button>
                </div>
                <div class="evaluation__down-arrow all-down-arrow">
                    <img src="images/evaluation-down-arrow.png" alt="lefelé nyíl" />
                </div>
            </div>

            <div class="evaluation-third">
                <div class="evaluation__scrolling-box">
                    <h2>Kiértékelés</h2>
                    <p>
                        A direkt orális antikoagulánsoknak jelenleg nincs a törzskönyvezett indikációjuk között a daganatos betegek tromboprofilaxisa.<sup>10,11,12,13</sup>
                    </p>
                    <p class="references">
                        Referencia:
                        <br />
                        <br />
                        10. Eliquis alkalmazási előírás
                        <br />
                        11. Lixiana alkalmazási előírás
                        <br />
                        12.	Pradaxa alkalmazási előírás
                        <br />
                        13.	Xarelto alkalmazási előírás
                    </p>
                    <button class="evaluation__button">
                        Tovább
                    </button>
                </div>
                <div class="evaluation__down-arrow all-down-arrow">
                    <img src="images/evaluation-down-arrow.png" alt="lefelé nyíl" />
                </div>
            </div>
            <p class="quiz__correct-evaluation-paragraph">Helyes kiértékelés megtekintése</p>
            <div class="quiz__wrapper">
                <div class="quiz__correct-evaluation-popup">
                    <img src="images/close.png" alt="popup bezárás" class="popup-close" />
                    <h2>Kiértékelés</h2>
                    <p>
                        „Elsődleges megelőzés: A megelőzésre (és kezelésre) a nagy VTE kockázatnak megfelelő LMWH dózis ajánlott.”<sup>9</sup> 
                    </p>
                    <p class="popup-references">
                        Referencia:
                        <br />
                        <br />
                        9. A thromboemboliák kockázatának csökkentése és kezelése Az Egészségügyi Minisztérium Szakmai Irányelve (2009. 47.o.)<a style="word-break: break-all;" href="https://old-kollegium.aeek.hu/conf/upload/oldiranyelvek/TRANSZF_thromboemboliak%20kockazatanak%20csokkenteserol%20es%20kezeleserol_mod0_v0.pdf" target="_blank">https://old-kollegium.aeek.hu/conf/upload/oldiranyelvek/TRANSZF_thromboemboliak%20kockazatanak%20csokkenteserol%20es%20kezeleserol_mod0_v0.pdf</a>
                    </p>
                </div>
            </div>
        </section>
        <!--HARMADIK KVÍZ VÉGE-->

        <!--MÁSODIK ESETTANULMÁNY LAYER-->
        <section class="case-history">
            <div div class="scrolling-box">
                <div class="case-history__up-arrow all-up-arrow">
                    <img src="images/down-arrow.png" alt="lefelé mutató nyíl" />
                </div>
                <div class="scrolling-box__hide-scroll">
                    <h1>Esetismertetés <br /> folytatása</h1>
                    <p>
                        A kombinációs kemo-&nbsp;és immunterápia megkezdése után a beteg hányásra és hasmenésre panaszkodott kezelőorvosának. A mellékhatások csökkentése érdekében az orvosa a pemetrexed adagját csökkentette, melynek következtében a beteg tünetei mérséklődtek. 
                    </p>
                    <p>
                        6 héttel a kezelés megkezdése után jobb alsó végtagi fájdalmat érzett, a fizikális vizsgálatkor enyhe fokú körfogatdifferenciát lehetett tapasztalni, a Homans-tünet pozitív volt. A color Doppel UH. vizsgálat a jobb v.femoralis supeficialis teljes, a poplitea részleges elzáródását mutatta. A rosszabbodó általános állapota, fokozódó nehézlégzése miatt intenzív osztályra helyezték át.
                    </p>
                    <br />
                    <br />
                    <img src="images/case-history-2-img.png" alt="kép egy tüdőről" />
                    <button class="main-button scrollbox-btn third-button">
                        Tovább a kérdéshez
                    </button>
                </div>
                <div class="case-history__down-arrow all-down-arrow">
                    <img src="images/down-arrow.png" alt="lefelé mutató nyíl" />
                </div>
            </div>
            <div class="gif-image">
                <img src="images/case-history-2-min.gif" alt="esettanulmány kép" />
            </div>
        </section>
        <!--MÁSODIK ESETTANULMÁNY LAYER VÉGE-->

        <!--NEGYEDIK KVÍZ-->
        <section class="quiz">
            <div class="quiz__question">
                <h1>
                    Milyen kezelést alkalmazna?
                </h1>
            </div>
            <div class="quiz__answers">
                <button class="quiz__button" data-id="y">
                    LMWH
                </button>

                <button class="quiz__button" data-id="n">
                    DOAC
                </button>

                <div class="quiz__icons">
                    <img src="images/pipe.png" class="good" alt="helyes válasz" />
                    <img src="images/x.png" class="wrong" alt="rossz válasz" />
                </div>
            </div>
            <div class="quiz__gif-image"></div>
            <div class="evaluation">
                <div class="evaluation__scrolling-box">
                    <h2>Kiértékelés</h2>
                    <p><strong>Kialakult VTE kezdeti kezelése<sup>14</sup></strong></p>
                    <p>
                        a) LMWH ajánlott kezdeti kezelésként olyan daganatos VTE-s betegeknél, akiknek a CC-e ≥30 ml/perc. Előnyök: az LMWH-k könyebben használhatók, mint az UFH-k. Napi egyszeri alkalmazású LMWH ajánlott, hacsak a beteg a karakterisztikájából kifolyólag (pl. törékeny betegek, akiknél fennáll a haemorraghia veszélye) nem igényli a napi 2x-i alkalmazásút. (1B szint)
                    </p>
                    <p>
                        b) Azoknál a daganatos VTE-s betegeknél, akiknél nem áll fenn a gasztrointesztinális-&nbsp;vagy hugyúti vérzés veszélye rivaroxaban (az első 10 napban) vagy edoxaban (legalább 5 napos parenterális antikoagulációt követően) alkalmazása javasolt kezdő terápiaként, amennyiben a CC ≥30 ml/perc. (1B szint)
                    </p>
                    <p>
                        c) UFH szintén alkalmazható kezdeti terápiaként, amennyiben az LMWH-k vagy a DOAC-ok kontraindikáltak, illetve nem elérhetőek. (2C szint)
                    </p>
                    <p>
                        d) A fondaparinux szintén alkalmazható kezdeti kezelésként daganatos VTE-s betegeknél. (2D szint) Előnyök: a fondaparinux használata egyszerűbb, mint az UFH-é.
                    </p>
                    <p><strong>Korai (6 hónapig) és hosszú távú (6 hónapon túli) fenntartó kezelés<sup>14</sup></strong></p>
                    <p>
                        a) Az LMWH-k a preferáltak a K-vitamin antagonistákkal szemben olyan daganatos VTE-s betegeknél, akiknek a CC-e ≥30 ml/perc. (1A szint) 
                    </p>
                    <p>
                        b) A DOAC-ok javasoltak olyan daganatos VTE-s betegeknél, akiknek a CC-e ≥30 ml/perc, amennyiben nincsen gyógyszer-gyógyszer kölcsönhatás vagy gasztrointesztinális felszívódási zavar. Alkalmazásuk elővigyázatosságot kíván olyan betegeknél, akiknek emésztőrendszeri rosszindulatú daganatuk van, különösen a felső gyomor-bél traktust érintő rosszindulatú daganatos megbetegedéseknél, minthogy a rendelkezésre álló adatok megnövekedett gasztrointesztinális vérzés kockázatát mutatják az edoxaban és rivaroxaban esetében.
                    </p>
                    <p>
                        c) Az LMWH-kat és a DOAC-okat min. 6 hónapig kell használni. (1A szint)
                    </p>
                    <p>
                        d) 6 hónap elteltével a kezelés (LMWH, DOAC vagy K-vitamin antagonista) abbahagyásáról vagy folytatásáról egyénileg kell dönteni, az előny-kockázat arány, a tolerálhatóság, a gyógyszer elérhetőség, a betegek preferenciája és a rák aktivitását alapul véve.
                    </p>
                    <br />
                    <p><strong>A DOAC-okkal szembeni további érvek:</strong></p>
                    <ul>
                        <li>
                            Polimedikált betegeknek sok gyógyszert kell bevenni. Minél több gyógyszert szed rendszeresen egy beteg, annál nagyobb az új orális gyógyszerekkel szembeni non-compliance.<sup>15</sup> 
                        </li>
                        <br />
                        <li>
                            Egy magyar betegek körében végzett vizsgálatban a betegek 65&nbsp;%-a szedett 3-nál több gyógyszert naponta (3-8), 41&nbsp;%-uk nem akart újabb tablettát.<sup>16</sup>
                        </li>
                    </ul>
                    <p class="references">
                        Referencia:
                        <br />
                        <br />
                        14. D Farge et. Al and the ITAC advisory panel: 2019 international clinical practice guidelines for the treatment and prophylaxis of venous thromboembolism in patients with cancer. Lancet Oncol 2019
                        <br />
                        <br />
                        15.	Benner J et al. Am J Health Syst Pharm 2009;66:1471-7
                        <br />
                        <br />
                        16. dr. Lantos Zoltán. LMWH otthon. Kórház 2009 1-2.
                    </p>
                    <button class="evaluation__button">
                        Tovább
                    </button>
                </div>
                <div class="evaluation__down-arrow all-down-arrow">
                    <img src="images/evaluation-down-arrow.png" alt="lefelé nyíl" />
                </div>
            </div>
        </section>
        <!--NEGYEDIK KVÍZ VÉGE-->

        <!--ÖTÖDIK KVÍZ-->
        <section class="quiz">
            <div class="quiz__question">
                <h1>
                    Napi 1x-i vagy 2x-i adagolású <br /> LMWH-t alkalmazna, ha <br /> amellett döntött?
                </h1>
            </div>
            <div class="quiz__answers">
                <button class="quiz__button" data-id="n">
                    Naponta 2x-it
                </button>

                <button class="quiz__button" data-id="y">
                    Napi 1x-i
                </button>

                <div class="quiz__icons">
                    <img src="images/pipe.png" class="good" alt="helyes válasz" />
                    <img src="images/x.png" class="wrong" alt="rossz válasz" />
                </div>
            </div>
            <div class="quiz__gif-image"></div>
            <div class="evaluation">
                <div class="evaluation__scrolling-box">
                    <h2>Kiértékelés</h2>
                    <p>
                        A legújabb ITAC ajánlás szerint:<br /> Napi egyszeri alkalmazású LMWH ajánlott, hacsak a beteg a karakterisztikájából kifolyólag (pl. törékeny betegek, akiknél fennáll a haemorraghia veszélye) nem igényli a napi 2x-i alkalmazásút. (1B szint)<sup>14</sup>
                    </p>
                    <p>
                        Magyarországon elérhető napi 1x-i adagolású LMWH-k:
                    </p>
					<p><strong>Fraxodi (nadroparin)</strong><sup>17</sup></p>
                    <ul>
                        <li>
                            SC naponta egyszer, 171 anti-Xa NE/ttkg (testtömeghez illesztett adagolás) 
                        </li>
                        <br />
                        <li>
                            A Fraxodi <strong>2x annyi</strong> NE-t tartalmaz, mint a napi 1x-i adagolású Fraxiparine
                        </li>
                        <br />
                        <li>
                            A Fraxodi biztonsági hengerrel ellátott fecskendővel rendelkezik a véletlenszerű tűszúrások megelőzése céljából.<sup>18</sup>
                        </li>
                    </ul>
                    <br />
                    <br />
                    <p><strong>Clexane 8000 és 10000 NE és Clexane Forte<sup>19</sup></strong></p>
                    <ul>
                        <li>SC naponta egyszer, 150 NE/ttkg (1.5 mg/kg) a <strong>VTE kiújulásának szempontjából alacsony rizikójú</strong> betegnél kell alkalmazni.</li>
                        <br />
                        <li>A Clexane Forte <strong>1,5x annyi</strong> NE-t tartalmaz, mint a napi 1x-i adagolású Clexane.</li>
                    </ul>
                    <br />
                    <br />
                    <p>Fragmin 7500 NE/0,3 ml, 10000 NE/0,4 ml, 12500 NE/0,5 ml, 15000 NE/0,6 ml, 18000 NE/0,72 ml<sup>20</sup></p>
                    <ul>
                        <li>Napi 1-szeri szubkután injekció formájában – vérzésveszély nélküli betegeknek: 200 NE/ttkg. A napi dózis maximálisan 18 000 NE lehet.</li>
                    </ul>
                    <p class="references">
                        Referencia:
                        <br />
                        <br />
                        14.	D Farge et. Al and the ITAC advisory panel: 2019 international clinical practice guidelines for the treatment and prophylaxis of venous thromboembolism in patients with cancer. Lancet Oncol 2019
                        <br />
                        <br />
                        17.	Fraxodi alkalmazási előírás (2018. július 2.)
                        <br />
                        <br />
                        18.	Fraxodi betegtájékoztató (2018. július)
                        <br />
                        <br />
                        19. Clexane és Clexane Forte alkalmazási előírás (2018. május 23.)
                        <br />
                        <br />
                        20. Fragmin alkalmazási előírás (2013. március 31.)
                    </p>
                    <button class="evaluation__button">
                        Tovább
                    </button>
                </div>
                <div class="evaluation__down-arrow all-down-arrow">
                    <img src="images/evaluation-down-arrow.png" alt="lefelé nyíl" />
                </div>
            </div>
        </section>
        <!--ÖTÖDIK KVÍZ VÉGE-->

        <!--HARMADIK ESETTANULMÁNY LAYER-->
        <section class="case-history">
            <div class="scrolling-box">
                <div class="scrolling-box__hide-scroll">
                    <h1>Esetismertetés <br /> folytatása</h1>
                    <p>
                        A beteg Fraxodi kezelést kapott napi 1x-i 0,8 ml-es (15200 NE) dózisban. 
                    </p>
                    <p>
                        A beteg állapota a kezelés megkezdését követően javult. Az 1 hetes kontroll vizsgálat a D&#8209;dimer szint csökkenését mutatta, az UH felvételen rekanalizáció volt látható a korábban elzárt vénában. A beteg panaszai csökkentek, felmerült otthonába való hazabocsátása.
                    </p>
                    <button class="main-button scrollbox-btn fourth-button">
                        Tovább a kérdéshez
                    </button>
                </div>
            </div>
            <div class="gif-image">
                <img src="images/case-history-3-min.gif" alt="esettanulmány kép" />
            </div>
        </section>
        <!--HARMADIK ESETTANULMÁNY LAYER VÉGE-->

        <!--HATODIK KVÍZ-->
        <section class="quiz">
            <div class="quiz__question">
                <h1>
                    Meddig folytatná a <br /> hazabocsátott betegnél a <br /> Fraxodi kezelést?
                </h1>
            </div>
            <div class="quiz__answers">
                <button class="quiz__button" data-id="n">
                    10 napig
                </button>

                <button class="quiz__button" data-id="n">
                    3 hónapig
                </button>

                <button class="quiz__button" data-id="y">
                    6 hónapig
                </button>

                <div class="quiz__icons">
                    <img src="images/pipe.png" class="good" alt="helyes válasz" />
                    <img src="images/x.png" class="wrong" alt="rossz válasz" />
                </div>
            </div>
            <div class="quiz__gif-image"></div>
            <div class="evaluation">
                <div class="evaluation__scrolling-box">
                    <h2>Kiértékelés</h2>
                    <p>
                        A legújabb ITAC ajánlás szerint:<sup>14</sup>
                        <br />
                        c) Az LMWH-kat és a DOAC-okat min. 6 hónapig kell használni. (1A szint) 
                    </p>
                    <p>
                        d) 6 hónap elteltével a kezelés (LMWH, DOAC vagy K-vitamin antagonista) abbahagyásáról vagy folytatásáról egyénileg kell dönteni, az előny-kockázat arány, a tolerálhatóság, a gyógyszer elérhetőség, a betegek preferenciája és a rák aktivitását alapul véve.
                    </p>
                    <p class="references">
                        Referencia:
                        <br />
                        <br />
                        14. D Farge et. Al and the ITAC advisory panel: 2019 international clinical practice guidelines for the treatment and prophylaxis of venous thromboembolism in patients with cancer. Lancet Oncol 2019
                    </p>
                    <br />
                    <br />
                    <button class="evaluation__button">
                        Tovább
                    </button>
                </div>
                <div class="evaluation__down-arrow all-down-arrow">
                    <img src="images/evaluation-down-arrow.png" alt="lefelé nyíl" />
                </div>
            </div>
        </section>
        <!--HATODIK KVÍZ VÉGE-->

        <!--ELŐNYÖK OLDAL-->
        <section class="advantages">
            <div class="advantages__up-arrow all-up-arrow">
                <img src="images/evaluation-down-arrow.png" alt="felfelé nyíl" />
            </div>
            <div class="advantages__scrolling-box">
                <h2>
                    Miért ideális megoldás a Fraxodi a daganatos betegek trombózis profilaxisában?
                </h2>
                <ul>
                    <li>A teljes terápiás dózist tartalmazza 1 injekcióban.<sup>17</sup></li>
                    <li>Használata összhangban van a nemzetközi irányelvekkel.<sup>21</sup></li>
                    <li>A hatásossága mellett – szignifikánsan kevesebb hemorrágiás szövődményt okoz.<sup>22</sup></li>
                    <li>Használata növeli a beteg kezeléssel kapcsolatos adherenciáját.<sup>23</sup></li>
                    <li>Egyedülálló biztonsági hengerrel rendelkezik, mely elzárja a tűt az injekció beadása után, így megelőzhetőek a tűszúrásos baleseteket.<sup>18</sup></li>
                    <li>Naponta egyszer alkalmazva ugyanolyan hatásos és biztonságos, mint a naponta kétszer adott Fraxiparine.<sup>24</sup></li>
                    <li>Az egyetlen LMWH, amely farmakokinetikai vizsgálatban kimutatta, hogy a napi egyszeri és kétszeri adagolási séma hasonló biohasznosulással rendelkezik.<sup>25</sup></li>
                    <li>Kalcium-sót tartalmaz.<sup>17</sup></li>
                    <li>Az injekció helyén tapasztalt jobb tolerálhatóságában szerepet játszhat a kationos só kompozíciója.<sup>26</sup></li>
                    <li>Kedvezőbb betegtérítési díj a napi 2x-i adagolású LMWH-khoz képest.<sup>27</sup></li>
                </ul>
				<br />
				<br />
				<p class="references">
                        Referencia:
                        <br />
                        <br />
                        17. Fraxodi alkalmazási előírás (2018. július 2.)
						<br />
                        <br />
						18. Fraxodi betegtájékoztató (2018. július)
						<br />
                        <br />
						21. Kearon C, Akl EA, Comerota AJ, Prandoni P, Bounameaux H, Goldhaber SZ et al. Antithrombotic therapy for VTE disease: Antithrombotic Therapy and Prevention of Thrombosis, 9th ed: American College of Chest Physicians Evidence-Based Clinical Practice Guidelines. Chest 2012 Feb;141(2 Suppl):e419S-e496S. doi: 10.1378/chest.11-2301.
						<br />
                        <br />
						22. Dolovich LR, Ginsberg JS, Douketis JD, Holbrook AM, Cheah GA Meta-analysis Comparing Low-Molecular-Weight Heparins With Unfractionated Heparin in the Treatment of Venous Thromboembolism. Arch Intern Med. 2000;160:181-188
						<br />
                        <br />
						23.	Van der Wall, A.Kolock.Higher Adherence to treatment with LMWH nadroparin than enoxaparin becouse of side effects of cancer associated venous thromboembolism. HemaSphere 2018 2:1
						<br />
                        <br />
						24.	Charbonnier BA et al: Comparison of a once daily with a twice daily subcutaneous low molecular weight heparin regimen in the treatment of deep vein thrombosis. Thromb Haemost 1998; 79: 897-901.
						<br />
                        <br />
						25.	Lagerstedt CI, Olsson CG, Fagher BO, Oqvist BW, Albrechtsson U: Need for long-term anticoagulant treatment in symptomatic calf-vein thrombosis. Lancet 1985;2:515-8
						<br />
                        <br />
						26.	Billon N, et al. Br J Clin Pharmacol 1994; 37:395–397.
						<br />
						<br />
						27.	OEP Pupha törzs (2020. március 1.)
                </p>
                <button class="main-button advantages__button">
                    Tovább
                </button>
            </div>
            <div class="advantages__down-arrow all-down-arrow">
                <img src="images/evaluation-down-arrow.png" alt="lefelé nyíl" />
            </div>
        </section>
        <!--ELŐNYÖK OLDAL VÉGE-->

        <!--ÖSSZEFOGLALÓ OLDAL-->
        <section class="summary">
            <div class="summary__up-arrow all-up-arrow">
                <img src="images/evaluation-down-arrow.png" alt="lefelé nyíl" />
            </div>
            <div class="summary__scrolling-box">
                <h2>
                    Összefoglaló
                </h2>
                <p>
                    A vázolt esettörténetben a 61 éves tüdődaganatos beteg a fennálló kumulált rizikófaktorai ellenére sem kapott tromboprofilaxist, habár ennek szükségessége bármely kockázatfelmérő kérdőívvel vagy score táblázattal kimutatható lett volna.
                </p>
                <p>
                    A kezelése közben a szükséges profilaxis elmaradásának következményeként kialakult mélyvénás trombózis hatékony kezelésére egyedül az LMWH volt a megfelelő megoldás, hiszen a kemoterápia okozta hányás, hasmenés bármely orális készítmény használatát kontraindikálta.
                </p>
                <p>
                    A betegnél alkalmazott napi 1x-i Fraxodi terápia eredményesnek bizonyult, megadta a lehetőséget, hogy a beteg otthonába távozzon és folytassa a kezelést a szükséges ideig.
                </p>
				<p>
                    A szakmai irányelvek is egyetértenek abban, hogy a daganatos betegek - számos ok miatt - kiemelten magas kockázatúnak számítanak a tromboembóliás szövődmények szempontjából.
                </p>
				<p>
					A szerző meggyőződése, hogy az egyéni kockázatfelmérés alapján alkalmazott tromboprofilaxis – amelynek az elsődlegesen ajánlott készítménye az LMWH – hatékony védelmet biztosít az MVT kialakulásával szemben.
				</p>
				<p>
					Az esettanulmányt készítette:<br />
					Dr. Farkas György sebész, baleseti sebész szakorvos, egészségügyi szakközgazdász<br />
					Pharmakadémia Oktatási és Tanácsadó KFT.<br />
					Ügyvezető Igazgató
				</p>
                <button class="main-button summary__button">
                    Tovább
                </button>
            </div>
            <div class="summary__down-arrow all-down-arrow">
                <img src="images/evaluation-down-arrow.png" alt="lefelé nyíl" />
            </div>
        </section>
        <!--ÖSSZEFOGLALÓ OLDAL VÉGE-->

        <!--ÖSSZEFOGLALÓ OLDAL-->
        <section class="certificate"></section>
        <!--ÖSSZEFOGLALÓ OLDAL VÉGE-->
    </div>
<?php include "html_footer.php" ?>