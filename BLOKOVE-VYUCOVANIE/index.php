<?php
require_once "config.php";
?>

<!doctype html>
<html lang="sk">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <title>Vaša rezervácia</title>
        <link rel="stylesheet" href="style.css" />
    </head>
    <body>
        <form class="booking-form" method="POST" action="spracuj.php">
            <h1>Vaša rezervácia</h1>
            <fieldset>
                <legend>1. Termín a izba</legend>
                <div class="form-row">
                    <div class="field">
                        <label class="field-label" for="arrival">Príchod*</label>
                        <input class="form-input" id="arrival" name="arrival" type="date" required />
                    </div>
                    <div class="field">
                        <label class="field-label" for="departure">Odchod*</label>
                        <input class="form-input" id="departure" name="departure" type="date" required />
                    </div>
                </div>

                <div class="form-row">
                    <div class="field">
                        <label class="field-label" for="room">Typ izby*</label>
                        <select class="form-input" id="room" name="room" required>
                            <option value="classic">Classic</option>
                            <option value="deluxe">Deluxe</option>
                            <option value="apartment">Apartment</option>
                        </select>
                    </div>
                    <div class="field">
                        <label class="field-label" for="guest">Počet osôb*</label>
                        <input
                            class="form-input"
                            id="guest"
                            name="guest"
                            type="number"
                            min="1"
                            max="4"
                            value="2"
                            required />
                    </div>
                </div>
            </fieldset>

            <hr />

            <fieldset>
                <legend>Kontaktné údaje</legend>
                <div class="field">
                    <label class="field-label" for="fullname">Meno a Priezvisko*</label>
                    <input class="form-input" id="fullname" name="fullname" type="text" required />
                </div>
                <div class="form-row">
                    <div class="field">
                        <label class="field-label" for="email">E-mail*</label>
                        <input class="form-input" id="email" name="email" type="email" required />
                    </div>
                    <div class="field">
                        <label class="field-label" for="phone">Telefón*</label>
                        <input class="form-input" id="phone" name="phone" type="tel" required />
                    </div>
                </div>

                <div class="field">
                    <label class="field-label" for="special">Špeciálne požiadavky</label>
                    <textarea
                        class="form-input"
                        id="special"
                        name="special"
                        rows="3"
                        placeholder="Sem napíšte vaše požiadavky k ubytovaniu"></textarea>
                </div>
                <button class="button" type="submit">Odoslať žiadosť o rezerváciu</button>
            </fieldset>
        </form>
    </body>
</html>
