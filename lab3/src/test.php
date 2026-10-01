<form action="submit_test.php" method="POST">

    <!-- RADIO 1 -->
    <fieldset>
        <legend>Întrebarea 1</legend>
        <p>tg(330&deg;)</p>

        <label>
            <input type="radio" name="q1" value="sqrt3/3">
            &radic;3/3
        </label>

        <label>
            <input type="radio" name="q1" value="-sqrt3">
            -&radic;3
        </label>

        <label>
            <input type="radio" name="q1" value="sqrt3">
            &radic;3
        </label>

        <label>
            <input type="radio" name="q1" value="-sqrt3/3">
            -&radic;3/3
        </label>
    </fieldset>


    <!-- TEXT 2 -->
    <fieldset>
        <legend>Întrebarea 2</legend>
        <p>
            Dacă într-un triunghi dreptunghic catetele sunt 3 și 4,
            cât este ipotenuza?
        </p>

        <input type="text" name="q2">
    </fieldset>


    <!-- CHECKBOX 3 -->
    <fieldset>
        <legend>Întrebarea 3</legend>
        <p>Selectați expresiile egale cu &radic;675.</p>

        <label>
            <input type="checkbox" name="q3[]" value="a">
            15&radic;3
        </label>

        <label>
            <input type="checkbox" name="q3[]" value="b">
            &radic;(225 &middot; 3)
        </label>

        <label>
            <input type="checkbox" name="q3[]" value="c">
            5&radic;27
        </label>

        <label>
            <input type="checkbox" name="q3[]" value="d">
            25&radic;3
        </label>
    </fieldset>


    <!-- TEXT 4 -->
    <fieldset>
        <legend>Întrebarea 4</legend>
        <p>
            log<sub>2</sub>32 + log<sub>2</sub>4
        </p>

        <input type="text" name="q4">
    </fieldset>


    <!-- RADIO 5 -->
    <fieldset>
        <legend>Întrebarea 5</legend>
        <p>
            Calculați:
            &int;<sub>0</sub><sup>1</sup>
            2 / &radic;(4 - x<sup>2</sup>) dx
        </p>

        <label>
            <input type="radio" name="q5" value="pi/6">
            &pi;/6
        </label>

        <label>
            <input type="radio" name="q5" value="pi/4">
            &pi;/4
        </label>

        <label>
            <input type="radio" name="q5" value="pi/3">
            &pi;/3
        </label>

        <label>
            <input type="radio" name="q5" value="pi/2">
            &pi;/2
        </label>
    </fieldset>


    <!-- CHECKBOX 6 -->
    <fieldset>
        <legend>Întrebarea 6</legend>
        <p>
            Pentru f(x) = e<sup>x</sup> sin(x<sup>2</sup>),
            selectați termenii care apar în derivată.
        </p>

        <label>
            <input type="checkbox" name="q6[]" value="a">
            e<sup>x</sup> sin(x<sup>2</sup>)
        </label>

        <label>
            <input type="checkbox" name="q6[]" value="b">
            2x e<sup>x</sup> cos(x<sup>2</sup>)
        </label>

        <label>
            <input type="checkbox" name="q6[]" value="c">
            e<sup>x</sup> cos(x<sup>2</sup>)
        </label>

        <label>
            <input type="checkbox" name="q6[]" value="d">
            2x e<sup>x</sup> sin(x<sup>2</sup>)
        </label>
    </fieldset>


    <!-- TEXT 7 -->
    <fieldset>
        <legend>Întrebarea 7</legend>
        <p>
            Dacă raza unui cerc este 10 cm,
            care este aria lui?
            Scrieți răspunsul numeric aproximativ.
        </p>

        <input type="text" name="q7">
    </fieldset>


    <!-- CHECKBOX 8 -->
    <fieldset>
        <legend>Întrebarea 8</legend>
        <p>
            Se aruncă două zaruri.
            Selectați perechile pentru care suma este 8.
        </p>

        <label>
            <input type="checkbox" name="q8[]" value="2-6">
            (2, 6)
        </label>

        <label>
            <input type="checkbox" name="q8[]" value="3-5">
            (3, 5)
        </label>

        <label>
            <input type="checkbox" name="q8[]" value="4-4">
            (4, 4)
        </label>

        <label>
            <input type="checkbox" name="q8[]" value="5-4">
            (5, 4)
        </label>
    </fieldset>


    <!-- RADIO 9 -->
    <fieldset>
        <legend>Întrebarea 9</legend>
        <p>
            &int;(4x<sup>3</sup> + 3x) dx
        </p>

        <label>
            <input type="radio" name="q9" value="a">
            x<sup>4</sup> + 3x<sup>2</sup> + C
        </label>

        <label>
            <input type="radio" name="q9" value="b">
            x<sup>4</sup> + 1.5x<sup>2</sup> + C
        </label>

        <label>
            <input type="radio" name="q9" value="c">
            4x<sup>4</sup> + 3x<sup>2</sup> + C
        </label>

        <label>
            <input type="radio" name="q9" value="d">
            12x<sup>2</sup> + 3 + C
        </label>
    </fieldset>

    <button type="submit">Trimite</button>

</form>