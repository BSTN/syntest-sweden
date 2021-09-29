<div id='frame' animate before class="introduct">
    <div id='intro'>
        <h1>instruktioner</h1>
        <p>I den här delen av studien får du spela en typ av ”datorspel” som är ett test som undersöker färgsekvens-synestesi. Färgsekvens-synestesi innebär att man automatiskt kopplar ihop bokstäver eller siffror med olika färger. För varje bokstav eller siffra som dyker upp på skärmen ska du välja den färg du känner passar bäst ihop med bokstaven eller siffran. Försök att välja så instinktivt som möjligt - det finns inget rätt eller fel svar. Det finns en knapp för att välja ”ingen färg” men försök ändå att välja en färg för de flesta bokstäverna/siffrorna - annars är resultatet inte pålitligt. Om en bokstav/siffra dyker upp upprepade gånger, försök att välja samma färg som du valde tidigare.</p>

        <p>Du väljer färg genom att klicka med musen över färgpaletten som kommer att visas på skärmen. Du kan också välja att göra färgen ljusare (genom dra reglaget under färgpaletten till höger) eller mörkare (genom dra reglaget under färgpaletten till vänster). Klicka på NÄSTA när du är färdig med ditt val av färg för bokstaven eller siffran.</p>
        
        <p>Testet tar 10-30 minuter (beroende på hur snabbt du väljer dina färger). När testet är klart kommer åtta frågor om dina upplevelser under testet. Därefter är du färdig och du får se ditt resultat.</p>

        <button help start>start</button>
    </div>
</div>

<div id="frame" before destroy='profile()'>
    <div ng-include src="'templates/code'"></div>
</div>

<div id='frame' animate ng-show='q'>
    <div ng-model="q" color='picker'></div>
</div>

<div id='frame' after destroy="questionsfinished()" class="sweq">

    <div id="questionintro">
        Indikera I vilken grad påståendena nedan stämmer överrens med dina synestesi-upplevelser (1=Stämmer inte alls, 5=Stämmer fullständigt). Om du upplever färger för antingen bokstäver eller siffror eller att någon av dessa två kategorier (bokstäver eller siffror) leder till starkare synestesiupplevelser, så tar du bara med den i beräkningen. Om du upplever färger för bara en del av bokstäverna eller siffrorna så svara du bara för den del som leder till synestesiupplevelser.

        <div id="checkbox" ng-class="{'active':$storage.profile.NOTHING}" ng-click="$storage.profile.NOTHING=!$storage.profile.NOTHING">jag upplever inga färger för bokstäver och siffror</div>
        <div id="checkbox" ng-class="{'active':$storage.profile.SOMETHING}" ng-click="$storage.profile.SOMETHING=!$storage.profile.SOMETHING">jag upplever färger för bara en del av bokstäverna eller siffrorna</div>
    </div>
    
    
    <div id="sweq">
        1) När jag ser en bokstav eller en siffra på datorskärmen känns det som att synestesifärgen verkligen är på eller nära den skrivna bokstaven eller siffran.
        <div one2five="1"></div>
    </div>


    <div id="sweq">
        2) Mina synestesifärger får samma form som bokstaven eller siffran på datorskärmen. Det är som att bokstaven eller siffran är skriven i synestesifärgen.
        <div one2five="2"></div>
    </div>


    <div id="sweq">
        3) Jag upplever inte synestesifärgen på eller nära den skrivna bokstaven eller siffran, men jag ser färgen någonstans i rummet (t.ex. ser en färgad kopia av bokstaven eller siffran någonstans i rummet).  
        <div one2five="3"></div>
    </div>


    <div id="sweq">
        4) Jag ser mina synestesifärger på en ”mental skärm” framför mig.
        <div one2five="4"></div>
    </div>


    <div id="sweq">
        5) Jag ser bokstavligt talat inte bokstäver eller siffror i färg, men jag vet vilken färg som hör till en viss bokstav eller siffra.
        <div one2five="5"></div>
    </div>


    <div id="sweq">
        6) När jag ser bokstäver eller siffror väcker de väldigt starka färgassociationer som jag inte upplever på en specifik plats på datorskärmen eller i rummet.
        <div one2five="6"></div>
    </div>


    <div id="sweq">
        7) Jag måste verkligen se (inte bara tänka på) en bokstav eller siffra för att uppleva synestesifärgen.
        <div one2five="7"></div>
    </div>


    <div id="sweq">
        8) Betydelsen av en bokstav eller siffra är mer viktig för min synestetiska färgupplevelse än formen som bokstaven eller siffran har.
        <div one2five="8"></div>
    </div>

    <button toresults disable="{{$storage.profile.Q8}}"><span>nästa</span></button>
</div>
