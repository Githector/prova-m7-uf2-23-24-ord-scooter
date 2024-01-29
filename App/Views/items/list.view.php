    <div class="container col-11 mx-auto">
        <h2>Ítems valoració</h2>

        <table class="table">
        <h2>Categories</h2>
            <thead>
                <tr>
                    <th scope="col">Tram edat</th>
                    <th scope="col">Femení</th>
                    <th scope="col">Maculí</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td class="font-weight-bold">Menors de 18</td>
                    <td class="font-weight-bold">1</td>
                    <td class="font-weight-bold">4</td>
                    <td></td>
                </tr>
                <tr class="bg-light">
                    <td class="font-weight-bold">Entre 18 i 64</td>
                    <td class="font-weight-bold">2</td>
                    <td class="font-weight-bold">5</td>
                    <td></td>
                </tr>
                <tr>
                    <td class="font-weight-bold">65 o més</td>
                    <td class="font-weight-bold">3</td>
                    <td class="font-weight-bold">6</td>
                    <td></td>
                </tr>
            </tbody>
        </table>

       

        <table class="table">
        <h2>Ítems valoració</h2>
            <thead>
                <tr>
                    <th scope="col">Item</th>
                    <th scope="col">Punts</th>
                    <th scope="col">Fet?</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td class="font-weight-bold text-danger">RUNNERS</td>
                    <td class="font-weight-bold text-danger"></td>
                    <td></td>
                </tr>

                <tr>
                    <td>Els links del nav funcionen correctament.</td>
                    <td>1</td>
                    <td><input type="checkbox"></td>
                </tr>
                <tr class="bg-light">
                    <td>En registrar un "runner", el sistema valida si la data introduïda és anterior a l'actual i no permet fer el registre del corredor.</td>
                    <td>2</td>
                    <td><input type="checkbox"></td>
                </tr>
                <tr>
                    <td>Si la data és incorrecta, es redirigeix a l'usuari al formulari i es mantenen els camps que amb anterioritat ja havia escrit (Name, surname i club).</td>
                    <td>2</td>
                    <td><input type="checkbox"></td>
                </tr>
                <tr class="bg-light">
                    <td>Si la data és incorrecta, es redirigeix a l'usuari al formulari i es mostra un missatge flash informatiu (en vermell).</td>
                    <td>1</td>
                    <td><input type="checkbox"></td>
                </tr>
                <tr>
                    <td>Si passa la validació de la data (entenem que la resta de camps es posen correctament) emmagatzema el "runner" a la llista de competidors.</td>
                    <td>3</td>
                    <td><input type="checkbox"></td>
                </tr>
                <tr class="bg-light">
                    <td>A la llista de competidors, els runners es mostren almenys el dorsal, el nom, el gènere i el club.</td>
                    <td>2</td>
                    <td><input type="checkbox"></td>
                </tr>
                <tr>
                    <td>A la llista de competidors es mostra també l'edat correctament.</td>
                    <td>2</td>
                    <td><input type="checkbox"></td>
                </tr>
                <tr class="bg-light">
                    <td>A la llista de competidors es mostra també la categoria assignada de forma correcta.</td>
                    <td>2</td>
                    <td><input type="checkbox"></td>
                </tr>
                <tr>
                    <td>Si s'afegeix un "runner", el sistema ens informa a través d'un missatge flash que desapareix al actualitzar la pàgina.</td>
                    <td>1</td>
                    <td><input type="checkbox"></td>
                </tr>
                <tr>
                    <td class="font-weight-bold text-danger">RACE</td>
                    <td class="font-weight-bold text-danger"></td>
                    <td></td>
                </tr>
                <tr class="bg-light">
                    <td>Si no hi ha cap cursa començada, ens mostra el formulari per poder introduir el nom de la nova cursa.</td>
                    <td>1</td>
                    <td><input type="checkbox"></td>
                </tr>
                <tr>
                    <td>En introduir el nom, (a la mateixa pàgina) desapareix el formulari y es mostra un de nou per anar introduint els dorsals que van arribant.</td>
                    <td>2</td>
                    <td><input type="checkbox"></td>
                </tr>
                <tr class="bg-light">
                    <td>Apareix per pantalla el següent: Arrivals (Nom de la cursa + "Race). A continuació es mostra un missatge informant de que encara no ha arribat ningú.</td>
                    <td>2</td>
                    <td><input type="checkbox"></td>
                </tr>
                <tr>
                    <td>En introduir un dorsal d'un corredor desapareix el missatge que deia que no havia arribat ningú y es mostra tota la informació que mostra l'exemple. En aquest punt no cal el temps.</td>
                    <td>3</td>
                    <td><input type="checkbox"></td>
                </tr>
                <tr class="bg-light">
                    <td>També es mostra el temps que el corredor ha emprat per realitzar la cursa.</td>
                    <td>3</td>
                    <td><input type="checkbox"></td>
                </tr>
                <tr>
                    <td>El sistema va mostrant qualificació a mida que van arribant els participants.</td>
                    <td>2</td>
                    <td><input type="checkbox"></td>
                </tr>
                <tr class="bg-light">
                    <td>És possible canviar de pantalla a "Runners" y tornar a "Race" El sistema té memòria y sap en tot moment que ha de mostrar: O bé la pantalla inicial o bé la pantalla del transcurs de la cursa.</td>
                    <td>3</td>
                    <td><input type="checkbox"></td>
                </tr>
                <tr>
                    <td>Al finalitzar la cursa, la informació desapareix y la pantalla "Race" tornarà a demanar el nom d'una nova cursa. Per molt que anem a Runners y tornem a "Race", la informació mostrada siempre serà l'esperada.</td>
                    <td>3</td>
                    <td><input type="checkbox"></td>
                </tr>
                <tr class="bg-light">
                    <td>El codi és net estructurat i eficient.</td>
                    <td>6</td>
                    <td><input type="checkbox"></td>
                </tr>
                <tr>
                    <td class="font-weight-bold text-danger">TOTAL</td>
                    <td class="font-weight-bold text-danger">40</td>
                    <td></td>
                </tr>
            </tbody>

        </table>
    </div>